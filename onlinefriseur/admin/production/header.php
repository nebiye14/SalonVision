<?php
ob_start();
session_start();

include '../netling/verbindung.php';

$stmt=$db->prepare("SELECT * FROM pr_fr_einstellung where pr_fr_Id=:id");
$stmt->execute(array(
      'id'=> 0
      ));
$data=$stmt->fetch(PDO::FETCH_ASSOC);

$admin=$db->prepare("SELECT * FROM admin where admin_mail=:mail");
$admin->execute(array(
      'mail'=> $_SESSION['admin_mail']
      ));
$zahl=$admin->rowCount();
$admindata=$admin->fetch(PDO::FETCH_ASSOC);



if ($zahl==0){

    header("Location:adminPanel_login.php?status=nichterlaubt");
    exit;

}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Öztas Software </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!--CK Editor -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-desktop"></i> <span> Öztas Software </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/Bewerbung 1.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Wilkommen,</span>
                <h2><?php echo $admindata['admin_vorName'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Allgemeines</h3>
                <ul class="nav side-menu">
				
				 <li><a href="index.php"><i class="fa fa-home"></i> Startseite </a></li>  
       
         <li><a href="admin.php"><i class="fa fa-user"></i> Admin Einstellungen</a></li>
        
         <li><a><i class="fa fa-cogs"></i> Webseite Einstellungen </a>   
                    <ul class="nav child_menu">
                      <li><a href="allgemein-einstellung.php"><i class="fa fa-bug"></i>Allgemein</a></li>
                      <li><a href="UeberUns.php"><i class="fa fa-edit"></i> Über Uns</a></li>
                      <li><a href="visionmision-einstellungen.php"><i class="fa fa-sitemap"></i> Vision / Mision </a></li>
                      <li><a href="galerie-einstellung.php"><i class="fa fa-clone"></i> Galerie</a></li>
                      <li><a href="footer-einstellungen.php"><i class="fa fa-windows"></i>Footer </a></li> 
                    </ul>
        </li>
          <li><a href="mitarbeiter.php"> <i class="fa fa-edit"></i> Mitarbeiter Einstellungen</a></li>
          <li><a href="lieferant.php"> <i class="fa fa-sitemap"></i> Lieferanten Einstellungen</a></li>  
          <li><a href="kontakt.php"> <i class="fa fa-sitemap"></i> Kontakt Einstellungen</a></li>
          

          <li><a><i class="fa fa-sitemap"></i> Preisliste Einstellungen</a>   
                    <ul class="nav child_menu">
                      <li><a href="preisliste_damen.php"><i class="fa fa-bug"></i>Damen</a></li>
                      <li><a href="preisliste_hrrn.php"><i class="fa fa-edit"></i> Herren</a></li>
                      <li><a href="preisliste_jugendlich.php"><i class="fa fa-sitemap"></i> Jugendliche </a></li>
                      <li><a href="preisliste_kinder.php"><i class="fa fa-clone"></i> Kinder</a></li>
                     
                    </ul>
        </li>
          <li><a href="termin.php"> <i class="fa fa-table"></i> Termin Einstellungen</a></li>
          <li><a href="produkt.php"> <i class="fa fa-sitemap"></i> Produkte Einstellungen</a></li>
                 
                </ul>
              </div>
             
            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $admindata['admin_vorName'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  
                    <li><a href="ausloggen.php"><i class="fa fa-sign-out pull-right"></i> Ausloggen</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
