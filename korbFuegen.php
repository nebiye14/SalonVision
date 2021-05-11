<?php


require_once("verbindung.php");

if(isset($_GET['korbFuegen'])) {

   setcookie('warenkorb['.$_GET['id'].']',$_GET['stueck'],strtotime('+1 day'));

   header('location:warenkorb.php');

   exit;
}

if (isset($_GET['warenkorbLoschen'])) {
    
    setcookie('warenkorb['.$_GET['id'].']',$_GET['stueck'],strtotime('-1 day'));
 
    header('location:warenkorb.php');
    exit;
}



if (isset($_GET['warenkorbAktualisieren'])) {
    
 foreach($_GET['produkt'] as $key => $value)

      setcookie('warenkorb['.$key.']',$value[0],strtotime('+1 day'));
      header('location:warenkorb.php');
         exit;
}

?>