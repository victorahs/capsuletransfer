
<?php
/**
* fonction qui upload le fichier dans un dossier unique.
* @see createFolder()
*
*/
//

function uploadFile() {

    $Id_Folder = createFolder();//name folder
    $file = basename($_FILES['fichierUp']['name']); //name file
    $Size_Max = 1000000;//pb a regler plutard !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $size= filesize($_FILES['fichierUp']['tmp_name']);//size file
    $extensions = array('.php');
    $extend = strrchr($_FILES['fichierUp']['name'], '.'); //extension
    // $mailDestinataire = ($_REQUEST['mailDestinataire']);
    // $mailExpe = ($_REQUEST['mailExpe']);
    //Début des vérifications de sécurité...

    //Si l'extension n'est pas dans le tableau
    if(in_array($extend, $extensions)) {
        $error = 'Vous devez uploader un fichier valide';
    }

    if($size>$Size_Max)
    {
        $error = 'Le fichier est trop gros...';
    }


    if(!isset($error)) //S'il n'y a pas d'erreur, on upload
    {
     //On formate le nom du fichier ici...
     $file = strtr($file,
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $file = preg_replace('/([^.a-z0-9]+)/i', '-', $file);

        if(move_uploaded_file($_FILES['fichierUp']['tmp_name'], $Id_Folder . $file)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
          echo 'Upload effectué avec succès !';

        }else{  //Sinon (la fonction renvoie FALSE).

          echo 'upload failed !';
        }

    } else{
        return array('erreur' => $error);
    }


    return array(
        'Id_Folder' => $Id_Folder,
        'Name' => $file,
        'Size' => $size,
        'Format'=> $extend,
    );

}

function createFolder(){ // function qui crée le dossier unique.
    $name = uniqid()."/";
    mkdir($name);
    return $name;
}

function getUrlPageFile($infoFile) {
    // chemin vers la page qui permet de télécharger ce fichier
    //return 'http://'.$_SERVER['SERVER_NAME'].'/'.PATH_APP.'/'.$infoFile['Id_Folder'].$infoFile['nameFile']; //url a modifier
    return 'http://'.$_SERVER['SERVER_NAME'].'/'.PATH_APP.'/download.php?Id_Folder='.$infoFile['Id_Folder']; //url a modifier

}

// function qui envoie le mail en prenam en compte le mail de l'emetteur et celui du récepteur.
function sendEmail($emailP,$emailD,$urlPageFile){

    // Adresse email du destinataire
    $destinataire = $emailD;
    $sujet = 'Upload file';// sujet du mail

    //$message = "<h1>Bonjour $emailD</h1> <p>$emailPVous a envoyé des fichiers en utilisant Capsule Transfert</p> <p>Rendez-vous sur la page suivante pour télécharger votre fichier : <a href=$urlPageFile>$urlPageFile</a> </p>"; // message contenue dans le mail

    $message = file_get_contents('message.html');
    $message = str_replace('{{emailP}}', $emailP, $message);
    $message = str_replace('{{emailD}}', $emailD, $message);
    $message = str_replace('{{urlPageFile}}', $urlPageFile, $message);



    $headers = "From: $emailP " . "\r\n" .
     "Reply-To: $emailP " . "\r\n" .
     "MIME-Version: 1.0" . "\r\n".
     "Content-type: text/html; charset=UTF-8" . "\r\n".
     'X-Mailer: PHP/' . phpversion();

    // Fonction principale qui envoi l'email
    mail($destinataire, $sujet, $message, $headers);

}

// enregistre les informations sur le fichier dans la base de données
function Save_Info($infoFile, $sql){

      $request_1 = 'INSERT INTO `capsule_file`(`Id_Folder`,`Name`,`Format`,`Validity`,`Nb_Download`,`Size`,`Id_user`,`emailExpe`,`emailDesti`) VALUES ( :Id_Folder, :Name, :Format, NULL, NULL, :Size, NULL, :emailExpe, :emailDesti)';
      $sth = $sql->prepare($request_1);

           $sth->bindParam(':Id_Folder',$infoFile['Id_Folder'],PDO::PARAM_STR);
           $sth->bindParam(':Name',$infoFile['Name'],PDO::PARAM_STR);
           $sth->bindParam(':Format',$infoFile['Format'],PDO::PARAM_STR);
           $sth->bindParam(':Size',$infoFile['Size'],PDO::PARAM_INT);
           $sth->bindParam(':emailExpe',$infoFile['mailExpediteur'],PDO::PARAM_STR);
           $sth->bindParam(':emailDesti',$infoFile['mailDestinataire'],PDO::PARAM_STR);
          //  $sth->bindParam(':emailExpe',"jules.t@codeur.online",PDO::PARAM_STR);
          //  $sth->bindParam(':emailDesti',"lea.l@codeur.online",PDO::PARAM_STR);
           $sth->execute(); // ajout de deux valeurs a la BDD//
    }


// renvoi les informations sur le fichier uploader
function Get_info($Id_Folder, $sql){

        $request_2 = 'SELECT * FROM `capsule_file` WHERE Id_Folder=:var';
        $sth = $sql->prepare($request_2);
        $sth->bindParam(':var',$Id_Folder,PDO::PARAM_STR);
        $sth->execute();
        $table= $sth->fetchAll(PDO::FETCH_ASSOC); // fetch renvoi un tableau associatif contenant les différentes valeurs capter par la requête SQL//
        return $table[0];
    }

function connect()
{

    try {
      return new PDO('mysql:host='.HOSTNAME.';dbname='.DBNAME,USERNAME,PASSWORD);


        }catch (PDOException $e){

        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
}

function download($fileDown,$fileFolder){


$file = $fileFolder.$fileDown;
print_r($file);

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

}
