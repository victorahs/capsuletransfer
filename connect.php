<?php
require '.init.php'; //nécésite la présence d'un fichier avec vos identifiant de BDD avec des variables constantes//
function connect()
{

    try {
        $dbh = new PDO('mysql:host='.HOSTNAME.';dbname='.DBNAME,USERNAME,PASSWORD);
        foreach($dbh->query('SELECT * from FOO') as $row)
        {
            print_r($row);
        }
        $dbh = null;
        }
    catch (PDOException $e)
        {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
}
?>
