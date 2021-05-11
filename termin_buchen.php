<?php
 


require_once("verbindung.php");

if($_POST)
{
   $K_VorName=$_POST['K_VorName'];
   $K_NachName=$_POST['K_NachName'];
   $K_Email=$_POST['K_Email'];
   $T_Datum=$_POST['T_Datum'];
   $Z_Uhr=$_POST['Z_Uhr'];
   $D_Name=$_POST['D_Name'];
   $Mi_Name=$_POST['Mi_Name'];


      $stmt=$db->prepare("SELECT * FROM termin where T_Datum=:datum and Z_Uhr=:zeit and Mi_Name=:mitarbeiter");
      $stmt->execute(array(
         'datum' =>  $T_Datum,
         'zeit' => $Z_Uhr,
         'mitarbeiter' =>  $Mi_Name
      ));

     $anzahl=$stmt->rowCount();

     if($anzahl==1){

         header("Location:termin.php?status=nein");
        
      
     }else {

         $data=$db->prepare("INSERT INTO termin set K_VorName=?,K_NachName=?,K_Email=?, T_Datum=?,Z_Uhr=?,D_Name=?,Mi_Name=?");
            $data->execute(array($K_VorName, $K_NachName,$K_Email,$T_Datum,$Z_Uhr,$D_Name,$Mi_Name));   
            
         

            // echo "Ihr Termin wurde bestätigt. ";
     
            header("Location:termin.php?status=ja");

     }


}

// if(isset($_POST['insert'])) {

//    $data['status']="success";
//    $data['message']="Bu tarihte {$_POST['T_Datum']} su saatte {$_POST['Z_Uhr']} alinmistir";
//    echo json_encode($data);
//}




?>