<?php
require '.init.php'; //nécésite la présence d'un fichier avec vos identifiant de BDD avec des variables constantes//
include 'functions.php';
$sql = connect();
$fileT = Get_info($_REQUEST['folder_id'], $sql);

//$file_url = 'http://victora.student.codeur.online/Capsule_Transfer/5873a557e294b/4244.jpg';
//
//header('Content-Description: File Transfer');
//header('Content-Type: application/octet-stream');
//header("Content-Transfer-Encoding: Binary"); 
//header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
//header('Expires: 0');
//header('Cache-Control: must-revalidate');
//header('Pragma: public');
//header('Content-Length: ' . filesize($file_url));
//
//readfile($file_url); // do the double-download-dance (dirty but worky)

$file ="4244.jpg";
if (file_exists($file)) {
    header("Content-type: image/jpeg");
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: private');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}







?>