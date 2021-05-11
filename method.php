


<?php 

/*Warenkorb */

if (isset($_GET['korbFügen'])) {
   

   setcookie('warenkorb['.$_GET['id'].']',$_GET['stück'],strtotime('+1 day'));

   header('location:warenkorb.php');
   exit;
}

if (isset($_GET['warenkorbLoschen'])) {
    
   setcookie('warenkorb['.$_GET['id'].']',$_GET['stück'],strtotime('-1 day'));

   header('location:warenkorb.php');
   exit;
}


// if (isset($_GET['warenkorbAktualisieren'])) {
    
//      echo "<pre>";
// print_r ($_GET);
   

//   foreach ($_GET['produkt'] as $key => $value){

//   echo $key."-".$value[0]."<br>";*/

//   setcookie('warenkorb['.$key.']',$value[0],strtotime('+1 day'));

//      }

//      header('location:warenkorb.php');
//      exit;
//  }

?>

