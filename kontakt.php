<?php
/* Kontakt*/

require_once("verbindung.php");



if($_POST)
{
   $VorName=$_POST['VorName'];
   $NachName=$_POST['NachName'];
   $Email=$_POST['Email'];
   $Nachricht=$_POST['Nachricht'];
  


    $stmt=$db->prepare("INSERT INTO kontakt set Kontakt_VorName=?,Kontakt_NachName=?,Kontakt_Email=?, Kontakt_Nachricht=?");
    $stmt->execute(array($VorName, $NachName,$Email,$Nachricht));  
        
    
 
    if($stmt)
 
   {
    $data["status"]="success";
    $data["message"]="Super";
    echo json_encode($data);
     /*  echo "eklendi";*/
   }

   else
   {
    echo "nicht erfogreich";

  }

}
?>