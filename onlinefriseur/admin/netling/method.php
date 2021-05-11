<?php 
ob_start();
session_start();


include 'verbindung.php';

if (isset($_POST['adminEinloggen'])) {

	$admin_mail = $_POST['admin_mail'];
	$admin_passwort =md5($_POST['admin_passwort']);
  
	$stmt=$db->prepare("SELECT * FROM admin where admin_mail=:mail and admin_passwort=:passwort");
	$stmt->execute(array(
	      'mail'=> $admin_mail,
	      'passwort' => $admin_passwort
	      ));


	echo $zahl=$stmt->rowCount();

	if ($zahl==1){

		$_SESSION['admin_mail']= $admin_mail;
		header("Location:../production/index.php?status=no");
		exit;

	} else {

		header("Location:../production/adminPanel_login.php?status=no");
		exit;
	}

}

if (isset($_POST['allgemeinspeichern'])) {



	$speichern=$db->prepare("UPDATE pr_fr_einstellung SET 

				pr_fr_title=:pr_fr_title,
				pr_fr_beschreibung=:pr_fr_beschreibung,
				pr_fr_schluesselwoerter=:pr_fr_schluesselwoerter,
				pr_fr_autor=:pr_fr_autor
				WHERE pr_fr_Id=0");

	$update=$speichern->execute(array(
				'pr_fr_title' => $_POST['pr_fr_title'],
				'pr_fr_beschreibung' => $_POST['pr_fr_beschreibung'],
				'pr_fr_schluesselwoerter' => $_POST['pr_fr_schluesselwoerter'],
				'pr_fr_autor' => $_POST['pr_fr_autor']
				));

			if($update) {

				header("Location:../production/allgemein-einstellung.php?status=ok");

			}else {

				header("Location:../production/allgemein-einstellung.php?status=no");
				
			}

}


if (isset($_POST['footerspeichern'])) {



	$speichern=$db->prepare("UPDATE pr_fr_einstellung SET 

				pr_fr_tel=:pr_fr_tel,
				pr_fr_gsm=:pr_fr_gsm,
				pr_fr_mail=:pr_fr_mail,
				pr_fr_strasse=:pr_fr_strasse,
				pr_fr_postanzahl=:pr_fr_postanzahl,
				pr_fr_ort=:pr_fr_ort,
				pr_fr_facebook=:pr_fr_facebook,
				pr_fr_instagram=:pr_fr_instagram
				WHERE pr_fr_Id=0");

	$update=$speichern->execute(array(
				'pr_fr_tel' => $_POST['pr_fr_tel'],
				'pr_fr_gsm' => $_POST['pr_fr_gsm'],
				'pr_fr_mail' => $_POST['pr_fr_mail'],
				'pr_fr_strasse' => $_POST['pr_fr_strasse'],
				'pr_fr_postanzahl' => $_POST['pr_fr_postanzahl'],
				'pr_fr_ort' => $_POST['pr_fr_ort'],
				'pr_fr_facebook' => $_POST['pr_fr_facebook'],
				'pr_fr_instagram' => $_POST['pr_fr_instagram']
				));

			if($update) {

				header("Location:../production/footer-einstellungen.php?status=ok");

			}else {

				header("Location:../production/footer-einstellungen.php?status=no");
				
			}

}

if (isset($_POST['uberunsspeichern'])) {



	$speichern=$db->prepare("UPDATE pr_fr_einstellung SET 

				pr_fr_vision=:pr_fr_vision,
				pr_fr_mision=:pr_fr_mision,
				pr_fr_vision_mision_Bild=:pr_fr_vision_mision_Bild
				
				WHERE pr_fr_Id=0");

	$update=$speichern->execute(array(
				'pr_fr_vision' => $_POST['pr_fr_vision'],
				'pr_fr_mision' => $_POST['pr_fr_mision'],
				'pr_fr_vision_mision_Bild' => $_POST['pr_fr_vision_mision_Bild']
				
				));

			if($update) {

				header("Location:../production/UeberUns.php?status=ok");

			}else {

				header("Location:../production/UeberUns.php?status=no");
				
			}

}

if (isset($_POST['visionmisionspeichern'])) {



	$speichern=$db->prepare("UPDATE pr_fr_einstellung SET 
				pr_fr_vision_title=:pr_fr_vision_title,
				pr_fr_vision_inhalt=:pr_fr_vision_inhalt,
				pr_fr_mision_title=:pr_fr_mision_title,
				pr_fr_mision_inhalt=:pr_fr_mision_inhalt,
				pr_fr_vision_mision_Bild=:pr_fr_vision_mision_Bild
				
				WHERE pr_fr_Id=0");

	$update=$speichern->execute(array(
				'pr_fr_vision_title' => $_POST['pr_fr_vision_title'],
				'pr_fr_vision_inhalt' => $_POST['pr_fr_vision_inhalt'],
				'pr_fr_mision_title' => $_POST['pr_fr_mision_title'],
				'pr_fr_mision_inhalt' => $_POST['pr_fr_mision_inhalt'],
				'pr_fr_vision_mision_Bild' => $_POST['pr_fr_vision_mision_Bild']
				
				));

			if($update) {

				header("Location:../production/visionmision-einstellungen.php?status=ok");

			}else {

				header("Location:../production/visionmision-einstellungen.php?status=no");
				
			}

}


if (isset($_POST['ueberunsspeichern'])) {



	$speichern=$db->prepare("UPDATE pr_fr_einstellung SET 
				pr_fr_ueberuns=:pr_fr_ueberuns,
				pr_fr_ueberuns_inhalt=:pr_fr_ueberuns_inhalt
								
				WHERE pr_fr_Id=0");

	$update=$speichern->execute(array(
				'pr_fr_ueberuns' => $_POST['pr_fr_ueberuns'],
				'pr_fr_ueberuns_inhalt' => $_POST['pr_fr_ueberuns_inhalt']
				
				
				));

			if($update) {

				header("Location:../production/UeberUns.php?status=ok");

			}else {

				header("Location:../production/UeberUns.php?status=no");
				
			}

}

if (isset($_POST['oeffnungspeichern'])) {



	$speichern=$db->prepare("UPDATE oeffnungszeiten SET 
				oeffnung_Montag=:oeffnung_Montag,
				oeffnung_Dienstag=:oeffnung_Dienstag,
				oeffnung_Mittwoch=:oeffnung_Mittwoch,
				oeffnung_Donnerstag=:oeffnung_Donnerstag,
				oeffnung_Freitag=:oeffnung_Freitag,
				oeffnung_Samstag=:oeffnung_Samstag
								
				WHERE pr_fr_Id=0");

	$update=$speichern->execute(array(
				'oeffnung_Montag' => $_POST['oeffnung_Montag'],
				'oeffnung_Dienstag' => $_POST['oeffnung_Dienstag'],
				'oeffnung_Mittwoch' => $_POST['oeffnung_Mittwoch'],
				'oeffnung_Donnerstag' => $_POST['oeffnung_Donnerstag'],
				'oeffnung_Freitag' => $_POST['oeffnung_Freitag'],
				'oeffnung_Samstag' => $_POST['oeffnung_Samstag']
				
				
				));

			if($update) {

				header("Location:../production/footer-einstellung.php?status=ok");

			}else {

				header("Location:../production/footer-einstellung.php?status=no");
				
			}

}


if (isset($_POST['adminbearbeiten'])) {

    $admin_id=$_POST['admin_id'];

	$speichern=$db->prepare("UPDATE admin SET 

				admin_vorName=:admin_vorName,
				admin_nachName=:admin_nachName,
				admin_bild=:admin_bild,
				admin_gsm=:admin_gsm,
				admin_anschrift=:admin_anschrift,
				admin_status=:admin_status
				WHERE admin_id={$_POST['admin_id']}");

	$update=$speichern->execute(array(
				'admin_vorName' => $_POST['admin_vorName'],
				'admin_nachName' => $_POST['admin_nachName'],
				'admin_bild' => $_POST['admin_bild'],
				'admin_gsm' => $_POST['admin_gsm'],
				'admin_anschrift' => $_POST['admin_anschrift'],
				'admin_status' => $_POST['admin_status']
				));

			if($update) {

				header("Location:../production/admin-bearbeiten.php?admin_id=$admin_id&status=ok");

			}else {

				header("Location:../production/admin-bearbeiten.php?admin_id=$admin_id&status=no");
				
			}

}


if ($_GET['adminloeschen']=="ok") {

	$loeschen=$db->prepare("DELETE from admin where admin_id=:id");

	$data=$loeschen->execute(array(
		'id'=> $_GET['admin_id']
	));
	
	if($data){
		header("location:../production/admin.php?loeschen=ok");
	} else {
		header("location:../production/admin.php?loeschen=no");
	}

}



if (isset($_POST['admineinfuegen'])) {

	
		$admin_vorName=$_POST['admin_vorName'];
		$admin_nachName=$_POST['admin_nachName'];
		$admin_no=$_POST['admin_no'];
		$admin_mail=$_POST['admin_mail2'];
		$admin_passwort=md5($_POST['admin_passwort2']);
		$admin_bild=$_POST['admin_bild'];
		$admin_gsm=$_POST['admin_gsm'];
	    $admin_anschrift=$_POST['admin_anschrift'];
	 
		   $stmt=$db->prepare("SELECT * FROM admin where admin_mail=:mail");
		   $stmt->execute(array(
			  'mail' =>  $admin_mail
			 
		   ));
	 
		  $anzahl=$stmt->rowCount();
	 
		  if($anzahl==1){
	 
			  header("Location:../production/admin-einfuegen.php?status=nein");
			 
		   
		  }else {
	 
			  $data=$db->prepare("INSERT INTO admin set admin_vorName=?, admin_nachName=?, admin_no=?, admin_mail=?, admin_passwort=?, admin_bild=?,admin_gsm=?, admin_anschrift=?");
				 $data->execute(array($admin_vorName, $admin_nachName, $admin_no, $admin_mail, $admin_passwort, $admin_bild, $admin_gsm, $admin_anschrift));   
				 

				 header("Location:../production/admin-einfuegen.php?status=ja");
	 
		  }
	 

}

if (isset($_POST['mitbearbeiten'])) {

    $mit_id=$_POST['Mi_Id'];

	$speichern=$db->prepare("UPDATE mitarbeiter SET 

				Mi_VorName=:Mi_VorName,
				Mi_NachName=:Mi_NachName,
				Mi_PerNo=:Mi_PerNo,
				Mi_Ort=:Mi_Ort,
				Mi_GebDat=:Mi_GebDat,
				Mi_Email=:Mi_Email,
				Mi_Gehalt=:Mi_Gehalt,
				Mi_Abteilung=:Mi_Abteilung,
				Mi_Bild=:Mi_Bild
				WHERE Mi_Id={$_POST['Mi_Id']}");

	$update=$speichern->execute(array(
				'Mi_VorName' => $_POST['Mi_VorName'],
				'Mi_NachName' => $_POST['Mi_NachName'],
				'Mi_PerNo' => $_POST['Mi_PerNo'],
				'Mi_Ort' => $_POST['Mi_Ort'],
				'Mi_GebDat' => $_POST['Mi_GebDat'],
				'Mi_Email' => $_POST['Mi_Email'],
				'Mi_Gehalt' => $_POST['Mi_Gehalt'],
				'Mi_Abteilung' => $_POST['Mi_Abteilung'],
				'Mi_Bild' => $_POST['Mi_Bild']
				));

			if($update) {

				header("Location:../production/mitarbeiter-bearbeiten.php?Mi_Id=$mit_id&status=ok");

			}else {

				header("Location:../production/mitarbeiter-bearbeiten.php?Mi_Id=$mit_id&status=no");
				
			}

}

if ($_GET['mitloeschen']=="ok") {

	$loeschen=$db->prepare("DELETE from mitarbeiter where Mi_Id=:id");

	$data=$loeschen->execute(array(
		'id'=> $_GET['Mi_Id']
	));
	
	if($data){
		header("location:../production/mitarbeiter.php?loeschen=ok");
	} else {
		header("location:../production/mitarbeiter.php?loeschen=no");
	}

}


if (isset($_POST['miteinfuegen'])) {

	
	$Mi_NachName=$_POST['Mi_NachName'];
	$Mi_VorName=$_POST['Mi_VorName'];
	$Mi_PerNo=$_POST['Mi_PerNo'];
	$Mi_Ort=$_POST['Mi_Ort'];
	$Mi_GebDat=$_POST['Mi_GebDat'];
	$Mi_Email=$_POST['Mi_Email2'];
	$Mi_Gehalt=$_POST['Mi_Gehalt'];
	$Mi_Abteilung=$_POST['Mi_Abteilung'];
	$Mi_Bild=$_POST['Mi_Bild'];
 
	   $stmt=$db->prepare("SELECT * FROM mitarbeiter where Mi_Email=:mail");
	   $stmt->execute(array(
		  'mail' =>  $Mi_Email
		 
	   ));
 
	  $anzahl=$stmt->rowCount();
 
	  if($anzahl==1){
 
		  header("Location:../production/mitarbeiter-einfuegen.php?status=nein");
		 
	   
	  }else {
 
		  $data=$db->prepare("INSERT INTO mitarbeiter set  Mi_VorName=?, Mi_NachName=?, Mi_PerNo=?, Mi_Ort=?, Mi_GebDat=?, Mi_Email=?, Mi_Gehalt=?, Mi_Abteilung=?,  Mi_Bild=? ");
			 $data->execute(array($Mi_VorName, $Mi_NachName, $Mi_PerNo, $Mi_Ort, $Mi_GebDat, $Mi_Email, $Mi_Gehalt, $Mi_Abteilung, $Mi_Bild));   
			 
			
			 header("Location:../production/mitarbeiter-einfuegen.php?status=ja");
 
	  }
 

}

if (isset($_POST['lifbearbeiten'])) {

    $lif_id=$_POST['lieferant_Id'];

	$speichern=$db->prepare("UPDATE lieferant SET 

				lieferant_Name=:lieferant_Name,
				lieferant_logo=:lieferant_logo,
				lieferant_adresse=:lieferant_adresse,
				lieferant_telefon=:lieferant_telefon
				
				WHERE lieferant_Id={$_POST['lieferant_Id']}");

	$update=$speichern->execute(array(
				'lieferant_Name' => $_POST['lieferant_Name'],
				'lieferant_logo' => $_POST['lieferant_logo'],
				'lieferant_adresse' => $_POST['lieferant_adresse'],
				'lieferant_telefon' => $_POST['lieferant_telefon']
				
				));

			if($update) {

				header("Location:../production/lieferant-bearbeiten.php?lieferant_Id=$lif_id&status=ok");

			}else {

				header("Location:../production/lieferant-bearbeiten.php?lieferant_Id=$lif_id&status=no");
				
			}

}

if ($_GET['liefloeschen']=="ok") {

	$loeschen=$db->prepare("DELETE from lieferant where lieferant_Id=:id");

	$data=$loeschen->execute(array(
		'id'=> $_GET['lieferant_Id']
	));
	
	if($data){
		header("location:../production/lieferant.php?loeschen=ok");
	} else {
		header("location:../production/lieferant.php?loeschen=no");
	}

}


if (isset($_POST['liefeinfuegen'])) {

	
	$lieferant_Name=$_POST['lieferant_Name'];
	$lieferant_logo=$_POST['lieferant_logo'];
	$lieferant_No=$_POST['lieferant_No'];
	$lieferant_adresse=$_POST['lieferant_adresse'];
	$lieferant_telefon=$_POST['lieferant_telefon'];
	
 
	   $stmt=$db->prepare("SELECT * FROM lieferant where lieferant_No=:no");
	   $stmt->execute(array(
		  'no' =>  $lieferant_No
		 
	   ));
 
	  $anzahl=$stmt->rowCount();
 
	  if($anzahl==1){
 
		  header("Location:../production/lieferant-einfuegen.php?status=nein");
		 
	   
	  }else {
 
		  $data=$db->prepare("INSERT INTO lieferant set  lieferant_Name=?, lieferant_logo=?, lieferant_No=?, lieferant_adresse=?, lieferant_telefon=? ");
			 $data->execute(array($lieferant_Name, $lieferant_logo, $lieferant_No, $lieferant_adresse, $lieferant_telefon));   
			 
			
			 header("Location:../production/mitarbeiter-einfuegen.php?status=ja");
 
	  }
 

}



if ($_GET['kontaktloeschen']=="ok") {

	$loeschen=$db->prepare("DELETE from kontakt where Kontakt_Id=:id");

	$data=$loeschen->execute(array(
		'id'=> $_GET['Kontakt_Id']
	));
	
	if($data){
		header("location:../production/kontakt.php?loeschen=ok");
	} else {
		header("location:../production/kontakt.php?loeschen=no");
	}

}

if ($_GET['terminloeschen']=="ok") {

	$loeschen=$db->prepare("DELETE from termin where T_Id=:id");

	$data=$loeschen->execute(array(
		'id'=> $_GET['T_Id']
	));
	
	if($data){
		header("location:../production/termin.php?loeschen=ok");
	} else {
		header("location:../production/termin.php?loeschen=no");
	}

}

if (isset($_POST['p_d_c_bearbeiten'])) {

    $lif_id=$_POST['dmn_color_id'];

	$speichern=$db->prepare("UPDATE dienst_dmn_color SET 

				dmn_color_anw=:dmn_color_anw,
				dmn_color_dauer=:dmn_color_dauer,
				dmn_color_preis=:dmn_color_preis
				
				
				WHERE dmn_color_id={$_POST['dmn_color_id']}");

	$update=$speichern->execute(array(
				'dmn_color_anw' => $_POST['dmn_color_anw'],
				'dmn_color_dauer' => $_POST['dmn_color_dauer'],
				'dmn_color_preis' => $_POST['dmn_color_preis']
				
				
				));

			if($update) {

				header("Location:../production/pl_dmn_col_bearbeiten.php?dmn_color_id=$lif_id&status=ok");

			}else {

				header("Location:../production/pl_dmn_col_bearbeiten.php?dmn_color_id=$lif_id&status=no");
				
			}

}


if ($_GET['colorloeschen']=="ok") {

	$loeschen=$db->prepare("DELETE from dienst_dmn_color where dmn_color_id=:id");

	$data=$loeschen->execute(array(
		'id'=> $_GET['dmn_color_id']
	));
	
	if($data){
		header("Location:../production/preisliste_damen.php?loeschen=ok");
	} else {
		header("Location:../production/preisliste_damen.php?loeschen=no");
	}

}


if (isset($_POST['dmncoloreinfuegen'])) {

	
	$dmn_color_anw=$_POST['dmn_color_anw'];
	$dmn_color_dauer=$_POST['dmn_color_dauer'];
	$dmn_color_preis=$_POST['dmn_color_preis'];
	
	
 
	   $stmt=$db->prepare("SELECT * FROM dienst_dmn_color where dmn_color_id=:no");
	   $stmt->execute(array(
		  'no' =>  $dmn_color_id
		 
	   ));
 
	  $anzahl=$stmt->rowCount();
 
	  if($anzahl==1){
 
		  header("Location:../production/dmn_coloration_einfuegen.php?status=nein");
		 
	   
	  }else {
 
		  $data=$db->prepare("INSERT INTO dienst_dmn_color set  dmn_color_anw=?, dmn_color_dauer=?, dmn_color_preis=? ");
			 $data->execute(array($dmn_color_anw, $dmn_color_dauer, $dmn_color_preis));   
			 
			
			 header("Location:../production/dmn_coloration_einfuegen.php?status=ja");
 
	  }
 

}


if (isset($_POST['p_d_k_bearbeiten'])) {

    $lif_id=$_POST['dmn_kosmetik_id'];

	$speichern=$db->prepare("UPDATE dienst_dmn_kosmetik SET 

				dmn_kosmetik_anw=:dmn_kosmetik_anw,
				dmn_kosmetik_dauer=:dmn_kosmetik_dauer,
				dmn_kosmetik_preis=:dmn_kosmetik_preis
				
				
				WHERE dmn_kosmetik_id={$_POST['dmn_kosmetik_id']}");

	$update=$speichern->execute(array(
				'dmn_kosmetik_anw' => $_POST['dmn_kosmetik_anw'],
				'dmn_kosmetik_dauer' => $_POST['dmn_kosmetik_dauer'],
				'dmn_kosmetik_preis' => $_POST['dmn_kosmetik_preis']
				
				
				));

			if($update) {

				header("Location:../production/pl_dmn_kos_bearbeiten.php?dmn_kosmetik_id=$lif_id&status=ok");

			}else {

				header("Location:../production/pl_dmn_kos_bearbeiten.php?dmn_kosmetik_id=$lif_id&status=no");
				
			}

}

if ($_GET['kosmetikloeschen']=="ok") {

	$loeschen=$db->prepare("DELETE from dienst_dmn_kosmetik where dmn_kosmetik_id=:id");

	$data=$loeschen->execute(array(
		'id'=> $_GET['dmn_kosmetik_id']
	));
	
	if($data){
		header("location:../production/preisliste_damen.php?loeschen=ok");
	} else {
		header("location:../production/preisliste_damen.php?loeschen=no");
	}

}


if (isset($_POST['p_d_h_bearbeiten'])) {

    $lif_id=$_POST['dmn_haar_id'];

	$speichern=$db->prepare("UPDATE dienst_dmn_haar SET 

				dmn_haar_anw=:dmn_haar_anw,
				dmn_haar_dauer=:dmn_haar_dauer,
				dmn_haar_preis=:dmn_haar_preis
				
				
				WHERE dmn_haar_id={$_POST['dmn_haar_id']}");

	$update=$speichern->execute(array(
				'dmn_haar_anw' => $_POST['dmn_haar_anw'],
				'dmn_haar_dauer' => $_POST['dmn_haar_dauer'],
				'dmn_haar_preis' => $_POST['dmn_haar_preis']
				
				
				));

			if($update) {

				header("Location:../production/pl_dmn_har_bearbeiten.php?dmn_haar_id=$lif_id&status=ok");

			}else {

				header("Location:../production/pl_dmn_har_bearbeiten.php?dmn_haar_id=$lif_id&status=no");
				
			}

}

if ($_GET['haarloeschen']=="ok") {

	$loeschen=$db->prepare("DELETE from dienst_dmn_haar where dmn_haar_id=:id");

	$data=$loeschen->execute(array(
		'id'=> $_GET['dmn_haar_id']
	));
	
	if($data){
		header("location:../production/preisliste_damen.php?loeschen=ok");
	} else {
		header("location:../production/preisliste_damen.php?loeschen=no");
	}

}
?>