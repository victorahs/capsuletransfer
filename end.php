<?php
require '.init.php'; //nécésite la présence d'un fichier avec vos identifiant de BDD avec des variables constantes//
include 'functions.php';
$sql = connect();

$test = Get_info($_REQUEST['folder_id'], $sql);
download($test[0]['Name']);

?>

<html>
<body>
    
    <a href="./<?php echo $test['Id_Folder'].'/'.$test['Name']; ?>">télécharger</a>
    </body>

</html>
