<?php
    ob_start();
    session_start();
    include 'verbindung.php';
    include 'kontakt.php';
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--Custom Css-->
  <link rel="stylesheet" href="css/style.css">

  <!--Lightbox Css-->
  <link rel="stylesheet" href="dist/css/lightbox.css">


  <!-- Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

  <!--Font Awesome-->
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">


  <title>Salon Vision | Projekt 2</title>
</head>

<body>
  <header id="header">
    <!-- Menu start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">

      <a class="navbar-brand" href="#carouselExampleIndicators">Salon Vision | Haar Architektur</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#carouselExampleIndicators">Start Seite <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#uberuns">Überuns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#lieferant">Lieferanten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#fallStudie">Vision/Mision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="preisliste.php">Preisliste</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="termin.php">Termin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="einkaufen.php">Einkaufen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontakt">Kontakt</a>
          </li>  
        </ul>
      </div>
    </nav>
  </header> 
  <!--Menu ende-->

  <!-- Slider start-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">

      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> 
    <div class="carousel-inner">    
        <div class="carousel-item active">
          <img src="img/s1.jpg" class="d-block w-100 bildSlider" alt="...">
         
        </div>
        <div class="carousel-item">
      <img src="img/produkt1.jpg" class="d-block w-100 bildSlider" alt="...">
     
    </div>
    <div class="carousel-item">
      <img src="img/stil1.jpg" class="d-block w-100 bildSlider" alt="...">
      
    </div>
    </div>   
                
        
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
</div>   
   
  <!-- Slider ende-->




  <!-- Über Uns Start-->
  <section  class="p-5 text-center uberuns" id="uberuns">
    <div class="container">
      <?php
              $stmt=$db->prepare("SELECT * FROM pr_fr_einstellung where pr_fr_Id=:id");
              $stmt->execute(array(
              'id'=> 0
              ));
             $data=$stmt->fetch(PDO::FETCH_ASSOC);

      ?>
      <h2 class="mb-5 font-weight-bold mt-5"><?php echo $data['pr_fr_ueberuns']?></h2>

      <hr class="klammer"><i class="fas fa-leaf igrau"></i>
      <p><?=$data["pr_fr_ueberuns_inhalt"]?></p>
      <p><?=$data["pr_fr_ueberuns_inhalt"]?></p>
      <p><?=$data["pr_fr_ueberuns_inhalt"]?></p>

      
    </div>
  </section>
  <!-- Über uns Ende-->

  <!--Team Start-->
  <section class="p-5 text-center team" id="team">
    <div class="container">
      <h2 class="mb-5 font-weight-bold mt-5">Team</h2>

      <hr class="klammer"><i class="fas fa-leaf iweiss"></i>

      <div class="card-deck">
        <div class="row">

         <?php 
            $res = $db->query("SELECT Mi_VorName, Mi_NachName,Mi_Abteilung, Mi_Bild FROM mitarbeiter");
                                        
            while ($row=$res->fetch(PDO::FETCH_ASSOC))
            {?>
              <div class="col-md-3">
                <div class="card shadow teamCard">
                    <img src=<?=$row["Mi_Bild"]?> class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row["Mi_VorName"]."  ".$row["Mi_NachName"]?></h5>
                        <p class="card-text"><?=$row["Mi_Abteilung"]?></p>
                    </div>
                </div>
              </div>
            <?php }              
            ?>
       </div>
    </div>
  </section>
  <!--Team Ende-->


  <!--Lieferanten Start-->
  <section class="p-5 text-center lieferant" id="lieferant">
    <div class="container">
      <h2 class="mb-5 font-weight-bold mt-5">Lieferanten</h2>

      <hr class="klammer"><i class="fas fa-leaf igrau"></i>
      <div class="row">
        <?php 
            $res = $db->query("SELECT lieferant_logo FROM lieferant");
                                        
            while ($row=$res->fetch(PDO::FETCH_ASSOC))
            {?>
                <div class="col-md-2">
                  <figure class="figure">                  
                    <a href="einkaufen.php">
                    <img src="<?=$row["lieferant_logo"]?>" class="figure-img img-fluid rounded shadow" alt="..."> </a>
                  </figure>
                </div>
            <?php } ?>
      </div>
    </div>
  </section>

  <!--Lieferanten Ende-->

  <!--Vision/Mision start-->
  <section class="py-5 mt-5 " id="fallStudie">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-5">
          <div class="fallPlatz text-center py-4 ">
          <?php

              $stmt=$db->prepare("SELECT * FROM pr_fr_einstellung where pr_fr_Id=:id");
              $stmt->execute(array(
              'id'=> 0
              ));
             $data=$stmt->fetch(PDO::FETCH_ASSOC);

          ?>


            <i class=" fa fa-podcast ikon mb-4"></i>
            <h3 class="h3p"><?php echo $data['pr_fr_vision_title'] ?></h3>
            <p><?=$data["pr_fr_vision_inhalt"]?>
            </p>
            <h3 class="h3p"><?php echo $data['pr_fr_mision_title'] ?></h3>
            <p><?=$data["pr_fr_mision_inhalt"]?></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="fallImage mb-3 mt-5">
            <img src="<?=$data["pr_fr_vision_mision_Bild"]?>" class="img-fluid">
          </div>
        </div>
       
      </div>
    </div>
  </section>

  <!-- Vision/Mision ende-->

  <!--Galerie - Portfolio Start-->
  <section id="portfolio">
    <div class="container-fluid">
      <div class="row">
        
          <?php 
            $res = $db->query("SELECT galerie_Bild FROM galerie");
                                        
            while ($row=$res->fetch(PDO::FETCH_ASSOC))
            {?>
              <div class="col-md-3">
              <a href="<?=$row["galerie_Bild"]?>" data-lightbox="image-1" data-title="Salon Vision">
              <div class="bildContainer">
              <img src="<?=$row["galerie_Bild"]?>" alt="" class="img-fluid">
              <div class="bildOverlay">
                <div class="bildText">
                  <i class="fa fa-search-plus"></i>
                  <h4><em>Galerie</em></h4>
                </div>
              </div>
            </div>
          </a> 
          </div>
            <?php } ?>
        </div>
     
    </div>
  </section>
       
  <!--Galerie - Portfolio Ende-->

  <!--Kontakt Start-->

  <section class="p-5 text-center kontakt" id="kontakt">
    <div class="container">
      <h2 class="mb-5 font-weight-bold mt-5">Kontakt</h2>

      <hr class="klammer"><i class="fas fa-leaf igrau"></i>

      <form id="kontaktform" action="kontakt.php" method="POST">
          <div class="col-md-10 text-left m-auto">

            <div class="form-group row">
              <label for="" class="col-md-4 align-self-center "> *Name:</label>
              <input type="text" name="VorName" class="form-control col-md-8"  required>
            </div>

            <div class="form-group row">
              <label for="" class="col-md-4 align-self-center "> *Nachname:</label>
              <input type="text" name="NachName" class="form-control col-md-8" required>
            </div>

            <div class="form-group row">
              <label for="" class="col-md-4 align-self-center" > Email:</label>
              
              <input type="email" name="Email" class="form-control col-md-8" placeholder="(nützlich für die Rückmeldung)">
            
            </div>

            <div class="form-group row">
              <label for="" class="col-md-4 align-self-center "> Nachricht:</label>
              <textarea name="Nachricht" id="" class="form-control col-md-8" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group row justify-content-end">
              <input id="gonder" type="submit" name="schicken" class="col-md-3 btn btn-primary">
            </div>
          </div>
      </form>
    </div>
  </section>

  <!--Kontakt Ende-->

  <!--Footer Start-->
  <footer>
   <div class="bg-dark text-light text-center p-5 mb-0">
    <div class="row">
      <div class=" col-md-4 align-self-center">
        <!--d-flex align-items-stretch-->
        <?php
        $stmt=$db->prepare("SELECT * FROM oeffnungszeiten where oeffnung_Id=:id");
        $stmt->execute(array(
        'id'=> 1
        ));
        $data=$stmt->fetch(PDO::FETCH_ASSOC);

        ?>
         
        <div class="row">
  
          <table class="table text-white  ">
          <p> &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp </p>
                <p>Öffnungszeiten</p>
                
                <tr>
                  <td>Montag<?=$data["oeffnung_Montag"]?></td>
                </tr>
                <tr>
                  <td>Dienstag<?=$data["oeffnung_Dienstag"]?></td>
                </tr>
                <tr>
                  <td>Mittwoch<?=$data["oeffnung_Mittwoch"]?></td>
                </tr>
                <tr>
                  <td>Donnerstag<?=$data["oeffnung_Donnerstag"]?></td>
                </tr>
                <tr>
                  <td>Freitag<?=$data["oeffnung_Freitag"]?></td>
                </tr>
          </table>
        </div>       
      </div> 

       <div class=" col-md-4 align-self-center">
        <!--d-flex align-items-stretch-->

        <?php

          $stmt=$db->prepare("SELECT * FROM pr_fr_einstellung where pr_fr_Id=:id");
          $stmt->execute(array(
          'id'=> 0
          ));
          $data=$stmt->fetch(PDO::FETCH_ASSOC);

        ?>
        <p class="align-middle p-5">
          <span>nebiye@oztas.de | 2021 </span></p>
          
          <a href="www.instagram.com" style="text-decoration: none; color:white"><i class="fab fa-instagram" style="font-size: 40px;"></i></a>&nbsp &nbsp
          <a href="www.facebook.com" style="text-decoration: none; color:white"><i class="fab fa-facebook-square" style="font-size: 40px;"></i></a>
              
       
      </div>



      <div class=" col-md-4 align-self-center"> 
        <!--d-flex align-items-stretch-->

        <ul><li style="list-style-type:none">Salon Vision - Anschrift</li></ul>
       <ul>
        <li style="list-style-type:none"><?=$data["pr_fr_strasse"]?></li>
        </ul>
        <ul>
        <li style="list-style-type:none"><?=$data["pr_fr_postanzahl"]?></li>
        </ul>
        <ul>
        <li style="list-style-type:none"><?=$data["pr_fr_ort"]?></li>
        </ul>
        
      </div>
    </div>
  </div>
</footer>


  <!--Footer Ende-->


 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
   /* swal("Hello world!");*/
  </script>
  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="dist/js/lightbox-plus-jquery.js"></script>
  <script type="text/javascript">
    
    $("#kontaktform").submit(function() {
      event.preventDefault();
     $.ajax({

        type:"POST",
        url:"kontakt.php",
        data:$("#kontaktform").serialize(),
        success:function(data) {


            var msg=JSON.parse(data);

            swal("Ihre Nachricht wurde gesendet.",msg.message, msg.status);
          
        }

     });

     return false;
    });

  </script>
</body>

</html>