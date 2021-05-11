<?php 

    try {
        $db=new PDO("mysql:host=localhost;dbname=projekt_friseur",'root','');

        //$db=new PDO("mysql:host=sql210.epizy.com;dbname=epiz_28337133_projekt_friseur",'epiz_28337133','XLR87iKr0KI3S');

        $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8' ");

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo 'erfolgreich';
       
    } catch(Exeption $e) {

        echo $e->getMessage();

    }

?>