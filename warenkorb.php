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
  <link link rel="stylesheet" href="css/style.css">
  <link link rel="stylesheet" href="css/warenkorb.css">

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

<div class="container">
  
     <h1>Ihr Warenkorb </h1>
    
  
 
      
  

<div class="row">
  
        <table class="table table-striped">
             <thead>
                 <tr>
                 <th scope="col">#</th>
                 <th scope="col">Artikel Bild</th>
                 <th scope="col">Artikel Name</th>
                 <th scope="col">Stück Preis</th>
                 <th scope="col">Menge</th>
                 <th scope="col">Insgesamt</th>
                 <th></th>
                 </tr>
             </thead>
  

              <tbody>


          <form action="korbFuegen.php" method="GET"> 
                <?php 
                 $i=1;
                 $sum=0;
                //  echo '<pre>';

                // var_dump($_COOKIE);

                //   echo'</pre>';

               if (!empty($_COOKIE['warenkorb'])){  
                foreach($_COOKIE['warenkorb'] as $key => $value) 
                   { 
                    $stmt=$db->query("SELECT * FROM material where material_Id=$key");
                    // $stmt->execute(['$key']);
                    // echo"SELECT * FROM material where material_Id=$key";
                    // echo $stmt->rowCount();
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
                    // var_dump($row);
                       $sum+= $row['material_Preis']* $value ;
                      ?>
                     
                      
                         <tr> 
                         <th scope="row"><?php echo $i++ ?></th>
                         <td><img width="100" src="<?php echo $row['material_bild']; ?>" ></td>
                         <td><?php echo $row['material_Name']; ?> </td>
                         <td><?php echo $row['material_Preis']; ?>€ </td>
                         <td><input style="width:45px" type="number" name="produkt[<?php echo $key ?>][]" min="1" value="<?php echo $value ?>"></td>
                         <td><?php echo $row['material_Preis']* $value ?> € </td>
                         <td><a href="korbFuegen.php?warenkorbLoschen=1&id=<?php echo $key ?>"><i class="fas fa-trash-alt"></i></a></td>      
                     </tr> 
                 <?php } }  ?>       
                
                      <tr>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td><b>Gesamtsumme</b></td>
                         <td><b><?php echo $sum ?> €</b></td>
                     </tr>
                </tbody>
          </table>  
              <div class="col-md-12 d-flex justify-content-end" >
                <button type="submit" name="warenkorbAktualisieren" class="btn btn-warning mr-5 ">Warenkorb aktualisieren</button>
            </form>
            <a href="einkaufen.php" type="button" class="btn  btn-default btn-secondary mt-2 mr-5" style="width:30%; height:70%">Weiter Einkaufen</a>
            <a href="zahlung.php" type="button" class="btn btn-default btn-success mt-2" style="width:30%; height:70%">Zur Kasse </a>
              
        </div>
    
        </div>                       
      </div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>




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

        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script> 

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


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