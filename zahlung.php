<?php 
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
  <link link rel="stylesheet" href="css/warenkorb.css">
  <link link rel="stylesheet" href="css/zahlung.css">


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
  </header>


  <section>
    <div class="container">    
      
        <div class="container">
            <!-- Zahlungsart wählen-->
            <div id="zahlung">
                <h2>Zahlungsart wählen</h2>
                <div class="card" id="con">
                    <div class="card-header"> 
                        <input type="radio" name="options" id="option1" checked> 
                        <b> Rechnung, Kreditkarte, Lastschrift oder Sofortüberweisung</b>
                        <img width="100" src="img/klarna.png" class="img-fluid ml-5 bild" >
                    </div>
                    <div class="card-body"> 
                        <input type="radio" name="options" id="option2"> Paypal 
                        <img width="100" src="img/paypal.png" class="img-fluid ml-5 bild">
                    </div>
                    
                </div>
            </div>
            <!-- Kontaktdaten -->
            <div id="kontaktdaten">
                    <h2>Kontaktdaten *</h2>
                    <form id="kontaktdatenform" action="kontaktdaten.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">          
                                    <input type="text" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="K_VorName" placeholder="Vorname *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <input type="text" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="K_NachName" placeholder="Nachname *" required>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">          
                                    <input type="text" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="strasse" placeholder="Straße *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <input type="text" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="hausnummer" placeholder="Hausnummer *" required>
                            </div>   
                        </div>
                        <div class="row">  
                            <div class="col-md-6">
                                    <input type="text" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="plz" placeholder="PLZ *" required>
                            </div> 
                            <div class="col-md-6">
                                    <input type="text" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="ort" placeholder="ORT *" required>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-6">                                      
                                <input type="text" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="B_land" placeholder="Bundesland *" required>
                                </div>                           
                                <div class="col-md-6">        
                                    <input type="text" class="form-control rounded-0 border-dark text-dark bg-transparent" 
                                    placeholder="Telefon*" name="telefon" required>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">                                      
                                <input type="email" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="email" placeholder="E-Mail Adresse *" required>
                                </div>                           
                                <div class="col-md-6">        
                                    <input type="email" class="form-control rounded-0 border-dark text-dark bg-transparent" 
                                   name="email2" placeholder="E-Mail-Adresse bestätigen*" required>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">                                      
                                <input type="password" class="form-control rounded-0 border-dark text-dark bg-transparent"
                                    name="passwort" placeholder="Passwort *" required>
                                </div>                           
                                <div class="col-md-6">        
                                    <input type="password" class="form-control rounded-0 border-dark text-dark bg-transparent" 
                                    placeholder="Passwort (Wdh.)*" name="passwort2" required>
                                </div>
                        </div>    
                        <br>
                        <div class="col-md-12">
                        <button type="submit" name="schicken" class="btn btn-dark center">Daten abschicken</button>
                      </div>
                    </form>
                </div>
                <div id="bestellung">
                    <h1> Ihre Bestellung /-en</h1>
                    <hr>
                    <div class="row">
                        <?php 
                        $i=1;
                        $sum=0;
                        
                        foreach($_COOKIE['warenkorb'] as $key => $value) 
                        { 
                            $stmt=$db->query("SELECT * FROM material where material_Id=$key");
                            
                        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) { ?>  
                        
                            <?php $sum+= $row['material_Preis']* $value; ?>
                            
                            
                            <div class="col-md-4">
                                <div class="card pr-5 " style="width: 18rem;">
                                <img src="<?php echo $row['material_bild']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row['material_Name']; ?> </p>
                                    <hr>
                                    <p class="card-text"><?php echo $row['material_Preis']; ?>€ </p>
                                </div>

                            </div>
                            <br>
                        </div> 
                   
                       
                        <?php  }} ?>  
                    </div>
                    <div class="row ">
                        <div class="col-md-4"> 
                            <button class="btn btn-dark"  style="width:100%"> weiter Einkaufen</button>
                        </div>
                        
                        <div class="col-md-4"> 
                            <button class="btn btn-secondary "  style="width:100%"> Zum Warenkorb</button>
                        </div>

                        <div class="col-md-4">
                            <input class="btn btn-primary" type="submit" onclick="ende();" style="width:100%" placeholder="Jetzt Kostenpflichtig bezahlen"> 
                        </div>
                      
                    </div>
                  
                </div> 
           
                
        </div>
    </div>
  </section>

   <footer id="zahlungfooter">
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


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <script type="text/javascript">
     function ende() {

      swal("Ihre Bestellung würde angenommen.");
     }

      $("#kontaktdatenform").submit(function() {
      event.preventDefault();
     $.ajax({

        type:"POST",
        url:"kontaktdaten.php",
        data:$("#kontaktdatenform").serialize(),
        success:function(data) {


            var msg=JSON.parse(data);

            swal("Ihre Bestellung wurde angenommen.",msg.message, msg.status);
          
        }

     });

     return false;
    });
   </script>

                
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</body>
</html>