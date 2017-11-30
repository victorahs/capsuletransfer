
<?php
require '.init.php'; //nécésite la présence d'un fichier avec vos identifiant de BDD avec des variables constantes//
include 'functions.php';

$sql = connect();

$emailExpediteur=$_REQUEST["mailExpe"];
$emailDestinataire=$_REQUEST["mailDestinataire"];


$infoFile = uploadFile();// appel de la fonction uploadFile.


// $infoFile['mailExpediteur']=$emailExpediteur;
// $infoFile['mailDestinataire']=$emailDestinataire;

// Test  sur le resultat de l'appel de la fonction
if(isset($infoFile['error'])) {
    echo $infoFile['error'];
}
else {
    // on continue

    if(filter_var($emailExpediteur, FILTER_VALIDATE_EMAIL)&&filter_var($emailDestinataire, FILTER_VALIDATE_EMAIL)){

    	Save_Info($infoFile,$sql);


	    // une fonction qui envoi le mail
	    sendEmail($emailExpediteur, $emailDestinataire, getUrlPageFile($infoFile));//appel de la fonction envoi mail
    }
    else{
    	//si erreur mail
    }

    //header('Location: end.php?folder_id='.$infoFile['Id_Folder']);
    // header('Location: send.php?Id_Folder='.$infoFile['Id_Folder']);

}






?>
