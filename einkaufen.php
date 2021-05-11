
<?php
    ob_start();
    session_start();
    include 'verbindung.php';
    
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
  <link rel="stylesheet" href="css/einkaufenStyle.css">

  <!-- Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

  <!--Font Awesome-->
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">


  <title>Salon Vision | Projekt 2</title>
</head>


<body>

 <!-- Menu Section -->
  <header id="header">
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
  </header>
 

 

  <!-- <div class="sidenav">
  
   <h3>KATEGORIEN </h3>

        <button class="dropdown-btn ">MARKEN
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">

            <?php                                         
            // $res = $db->query("SELECT lieferant_Id, lieferant_Name FROM lieferant");
            // while ($row=$res->fetch(PDO::FETCH_ASSOC))      {
            // echo '<a class="dropdown-item" href="'.$row["lieferant_Id"].'">'.$row["lieferant_Name"].'</a>';    }
            ?> 

        </div>  

        <button class="dropdown-btn ">HAARE         
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">

            <?php                                        
            // $res = $db->query("SELECT material_kategorie_Id, material_kategorie_Name FROM material_kategorie");
            // while ($row=$res->fetch(PDO::FETCH_ASSOC))      {
            // echo '<a class="dropdown-item" href="'.$row["material_kategorie_Id"].'">'.$row["material_kategorie_Name"].'</a>';    }
            ?> 

        </div>  

        <button class="dropdown-btn ">DÜFTE
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">

            <?php                                         
            // $res = $db->query("SELECT lieferant_Id, lieferant_Name FROM lieferant");
            // while ($row=$res->fetch(PDO::FETCH_ASSOC))      {
            // echo '<a class="dropdown-item" href="'.$row["lieferant_Id"].'">'.$row["lieferant_Name"].'</a>';    }
            ?> 

        </div>  

        <button class="dropdown-btn ">PFLEGE         
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">

            <?php                                        
            // $res = $db->query("SELECT material_kategorie_Id, material_kategorie_Name FROM material_kategorie");
            // while ($row=$res->fetch(PDO::FETCH_ASSOC))      {
            // echo '<a class="dropdown-item" href="'.$row["material_kategorie_Id"].'">'.$row["material_kategorie_Name"].'</a>';    }
            ?> 

        </div>  

  </div>
   -->
              
 



<section id="con">
    <div class="container">
        <h1> Alle Produkte</h1><small class="badge badge-success">
          <?php 
          
          /*if(!empty($_COOKIE['warenkorb'])){
             echo count($_COOKIE['warenkorb']) ;
         
          } else echo "0"; */

           echo (!empty($_COOKIE['warenkorb'])) ? count($_COOKIE['warenkorb']) :"0" ;   

          ?> Stück im Warenkorb...</small>




        
        


          &nbsp &nbsp &nbsp<a href="warenkorb.php">Zum Warenkorb</a>
        <hr>
   
          <div class="row">
            
              <?php

                $res = $db->query("SELECT material_Id, material_Name,material_bild,material_Preis,lieferant_Name FROM material INNER JOIN lieferant ON material.lieferant_Id=lieferant.lieferant_Id");
                while ($row=$res->fetch(PDO::FETCH_ASSOC))  {?>
                      
                <div class="col-md-4">
                  <div class="card" style="width: 18rem;">                   
                        <img src="<?php echo $row["material_bild"] ?>" class="card-img-top" alt="...">                
                        <div class="card-body">
                            <h5 class="card-title"><b><?php echo $row["lieferant_Name"]?></b></h5>
                            <p><?php echo $row["material_Name"]?></p>
                            <div align="right">
                              <p>Preis: &nbsp <b><?php echo $row["material_Preis"] ?>  € </b></p>
                            </div>
                            <div align="right">
                                <a href="korbFuegen.php?korbFuegen=1&id=<?php echo $row['material_Id']?>&stueck=1"  name="warenkorb" class="btn btn-default btn-success btn-sm"> Zum Warenkorb </a>
                            </div>
                        </div>
                    </div>  
                    <br>  <br>            
                </div> 
              <?php }
              ?>        
           
          </div>
        
    </div>
</section>


















<!-- 
<div class="col-6">
      <div class="input-group mb-5 mt-5">
        <div class="input-group-text rounded-0  bg-danger border-danger text-white">       
             <i class="fas fa-cut"></i>
         </div>          
         <div class="input-group-prepend ">
            <button class="btn btn-outline-danger dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false">Dienstleistungen</button>
                        
                  <div class="dropdown-menu">
                      <?php
                                        
                        //  $res = $db->query("SELECT D_Id, D_Name FROM dienstleistung");
                        //  while ($row=$res->fetch(PDO::FETCH_ASSOC))
                        // {
                        // echo '<a class="dropdown-item" href="'.$row["D_Id"].'">'.$row["D_Name"].'</a>';
                        // }
                       ?>
                  </div>
          </div>
        </div>
</div>  -->



<br><br><br><br><br><br><br><br>




<br><br><br><br><br><br><br><br>







  <!--Footer Start-->
  <footer>
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


<script src="js/einkaufen.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>


</body>
</html>