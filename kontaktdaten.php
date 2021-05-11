<?php require_once("verbindung.php");

if($_POST)
{
   $K_VorName=$_POST['K_VorName'];
   $K_NachName=$_POST['K_NachName'];
   $strasse=$_POST['strasse'];
   $hausnummer=$_POST['hausnummer'];
   $plz=$_POST['plz'];
   $ort=$_POST['ort'];
   $B_land=$_POST['B_land'];
   $telefon=$_POST['telefon'];
   $email=$_POST['email'];
   $email2=$_POST['email2'];
   $passwort=$_POST['passwort'];
   $passwort2=$_POST['passwort2'];


    $stmt=$db->prepare("INSERT INTO kontaktdaten set kd_VorName=?,kd_NachName=?,kd_strasse=?,kd_hausnummer=?, kd_plz=?, kd_ort=?, kd_B_land=?, kd_telefon=?,
    kd_email=?,kd_email2=?, kd_passwort=?,kd_passwort2=? ");
    $stmt->execute(array($K_VorName, $K_NachName,$strasse,$hausnummer, $plz, $ort, $B_land, $telefon, $email, $email2, $passwort, $passwort2));  
        
    
 
    if($stmt)
 
   {
    $data["status"]="success";
    $data["message"]="Super";
    echo json_encode($data);
       /*echo "eklendi";*/
   }

   else
   {
      echo "eklenmedi";
   }

}
?>