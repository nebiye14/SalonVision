<?php
   
    include ("verbindung.php");

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
  <link rel="stylesheet" href="css/termin.css">



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
            <a class="nav-link" href="index.php#header">Start Seite <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#uberuns">Überuns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#lieferant">Lieferanten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#fallStudie">Vision/Mision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#portfolio">Galerie</a>
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
            <a class="nav-link" href="index.php#kontakt">Kontakt</a>
          </li>  
        </ul>
      </div>
    </nav>
    <!--Menu ende-->
  </header>


  <!--Termin Section-->
 
<section id="termin" class="p-5 text-center generic dark-bg">
    <div class="container-fluid">
      
    
        <div class="row">
        <div class="col-md-4">


<img src="img/calendar.png" style="width:90% ; height:90%" class="mt-200" alt="">



</div>
            <div class="col-md-4">
                      <h1 class="display-5 text-danger py-3 text-center "> <b>ONLINE TERMIN </b> </h1>

                        <?php

                         if (isset($_GET['status']) and $_GET['status'] =='ja') {?>

                          <div class="alert alert-success" role="alert">
                            Ihr Termin wurde an diesem Datum und zu dieser Stunde bestätigt.
                          </div>

                        <?php } elseif (isset($_GET['status']) and $_GET['status']=='nein'){?>

                          <div class="alert alert-secondary" role="alert">
                            Ihr Termin wurde nicht bestätigt. Dieser Mitarbeiter ist an diesem Datum und zu dieser Stunde leider beschäftigt.
                            </div>
                        <?php } ?>

           
                      <form action="termin_buchen.php" method="POST" id="terminform">
                        
                          <div class="col-12">
                          <div class="input-group">
                              <div class="input-group-text rounded-0 bg-danger border-danger text-white ">
                              <i class="fas fa-user"></i>
                              </div>
                              <input type="text" class="form-control rounded-0 border-danger text-dark bg-transparent"
                              name="K_VorName" placeholder="NAME *" required>
                          </div>
                          </div>

                          <div class="col-12">
                          <div class="input-group mb-5 mt-5">
                              <div class="input-group-text rounded-0 bg-danger border-danger text-white">
                              <i class="fas fa-user"></i>
                              </div>
                              <input type="text" class="form-control rounded-0 border-danger text-dark bg-transparent"
                              name="K_NachName"placeholder="NACHNAME *" required>
                          </div>
                          </div>
                      
                          <div class="col-12">
                          <div class="input-group mb-5 mt-5">
                              <div class="input-group-text rounded-0 bg-danger border-danger text-white">
                              <i class="far fa-envelope"></i>
                              </div>
                              <input type="email" class="form-control rounded-0 border-danger text-dark bg-transparent"
                              name="K_Email" placeholder="EMAIL *" required>
                          </div>
                          </div>
                          
                          <div class="col-12">
                          <div class="input-group mb-5 mt-5">
                              <div class="input-group-text rounded-0 bg-danger border-danger text-white">
                              <i class="far fa-calendar-alt"></i>
                              </div>
                              <input type="date" class="form-control rounded-0 border-danger text-dark bg-transparent"
                              name="T_Datum" placeholder="DATUM *" required>
                          </div>
                          </div>

                          <div class="col-12">
                            <div class="input-group mb-5 mt-5">
                              <div class="input-group-text rounded-0 bg-danger border-danger text-white">
                              <i class="far fa-clock"></i>
                              </div>
                              
                              <select name="Z_Uhr" id="zeit">
                                  <?php             
                                        $res = $db->query("SELECT Z_Uhr FROM zeit");
                                    
                                        while ($row=$res->fetch(PDO::FETCH_ASSOC))
                                  {?>
                                    
                                      <option class="form-control rounded-0 border-danger text-dark bg-transparent" name="Z_Uhr"><?=$row["Z_Uhr"]?></option>
                                      
                                  <?php } ?>
                              </select>                                                  
                            </div>  
                          </div>

                          <div class="col-12">
                            <div class="input-group mb-5 mt-5">
                                  <div class="input-group-text rounded-0  bg-danger border-danger text-white">       
                                      <i class="fas fa-cut"></i>
                                  </div>
                                

                                  <select name="D_Name" id="dienst">
                                  <?php             
                                        $res = $db->query("SELECT D_Name FROM dienstleistung");
                                    
                                        while ($row=$res->fetch(PDO::FETCH_ASSOC))
                                  {?>
                                    
                                      <option name="D_Name"><?=$row["D_Name"]?></option>
                                      
                                  <?php } ?>
                                  </select>
                            </div>
                        </div>

                          


                          <div class="col-12">
                              <div class="input-group mb-5">
                                  <div class="input-group-text rounded-0  bg-danger border-danger text-white">       
                                      <i class="fas fa-users"></i>
                                  </div> 
                                  <select name="Mi_Name" id="marbeiter">
                                  <?php             
                                        $res = $db->query("SELECT Mi_VorName, Mi_NachName FROM mitarbeiter");
                                    
                                        while ($row=$res->fetch(PDO::FETCH_ASSOC))
                                  {?>
                                    
                                      <option name="Mi_Name"><?=$row["Mi_VorName"]." ".$row["Mi_NachName"]?></option>
                                      
                                  <?php } ?>
                                  </select>
                              </div>
                          </div> 
                          <div class="col-12" id="button">          
                              <input type="submit" id="schicken" name="insert" value="Senden"></input>
                          </div>      
                    </form>

            </div>
            <div class="col-md-4">


            <img src="img/301.jpg " style="width:80%; height:90%" class="mt-200 r-bild" alt="">



            </div>
          </div>
   
    </div> 
</section>




  
  <!--Footer Start-->
  <footer id="terminfooter">
   <div class="bg-dark text-light text-center p-5 mb-0">
    <div class="row">
      <div class=" col-md-4 align-self-center">
        <!--d-flex align-items-stretch-->

         <p>
          Öffnungszeiten <br>
          Mo 09:00 - 20:00 <br>
          Di-Do 09:00 - 18:00 <br>
          Fr 08:00 - 17:00<br>
          Sa 09:00 - 13:00<br>
        </p>
      </div> 

       <div class=" col-md-4 align-self-center">
        <!--d-flex align-items-stretch-->
        <p class="align-middle p-5">
          <span>nebiye@oztas.de | 2021 </span>
      </div>
      <div class=" col-md-4 align-self-center"> 
        <!--d-flex align-items-stretch-->
        <p>
          Anschrifft <br>
          Dorfstraße <br>
          12345 Irgendwo<br>
          Tel. 1234/567898<br>
        </p>
      </div>
    </div>
  </div>
</footer>
  <!--Footer Ende-->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/lightbox.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

  <script>
          //  $("#terminform").submit(function(){
          //      event.preventDefault();
            
          //    $.ajax({

          //        type:"POST",
          //        url:"termin_buchen.php",
          //        nebiye:$("#terminform").serialize(),
          //        success:function(nebiye){

          //            var stmt=JSON.parse(nebiye);

          //            console.log(nebiye);

          //            swal("Dönen deger :", stmt.message,stmt.status);
          //        }


          //    });
          //    return false;
          //  });
  
  </script>
</body>

</html>