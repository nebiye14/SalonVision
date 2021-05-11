<?php 

try {

$db=new PDO("mysql:host=localhost;dbname=projekt_friseur;charset=utf8",'root','');
// mysql verbindung mit PDO
//echo "erfolgreich";

}
catch (PDOException $e){

echo $e->getMessage();

}


?>