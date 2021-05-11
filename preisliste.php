<?php 

    include ("verbindung.php");
   
?>

<!doctype html>
<html lang="de">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--Custom Css-->
  <link rel="stylesheet" href="css/preisliste.css">
  

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


  <!--Header Preisliste Start-->
  <section class="p-5 text-center mt-5">
    <div class="container">
      <h2 class="mb-5 font-weight-bold pl">Preisliste</h2>
      <hr class="klammer"><i class="fas fa-leaf igrau"></i>
    </div>
  </section>

  <!--Header Preisliste Ende-->




  <!--Card Accordion start-->

  <section id="preisListe" class="generic">

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card bg-light border-0">
            <img src="img/woman8.jpg" alt="" class=" card-img-top rounded-10 shadow">
            <div class="card-body">
              <h5 class="lead text-dark font-weight-bold text-center text-uppercase mb-4">Damen</h5>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link text-dark font-weight-bold" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Haare
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Anwendungen</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
  
                        </thead>
                        <tbody>

                        <?php 
                        $stmt=$db->prepare('SELECT * FROM dienst_dmn_haar');
                        $stmt->execute();
                        $preislist=$stmt->fetchAll(PDO::FETCH_OBJ);

                        foreach($preislist as $preis) {?>
                            <tr>
                                <td><?=$preis->dmn_haar_id ?></td>
                                <td><?=$preis->dmn_haar_anw ?></td>
                                <td><?=$preis->dmn_haar_dauer ?>Minuten</td>
                                <td><?=$preis->dmn_haar_preis ?>€</td>
                            </tr>
                        <?php } ?>


                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed text-dark font-weight-bold" type="button"
                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Kosmetik
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Anwendung</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php 
                      
                                            
                       $res = $db->query("SELECT * FROM dienst_dmn_kosmetik");
                   
                   
                       while ($row=$res->fetch(PDO::FETCH_ASSOC))
                            {?>
                              <tr>
                               <td><?=$row["dmn_kosmetik_id"]?></td>
                               <td><?=$row["dmn_kosmetik_anw"]?></td>
                               <td><?=$row["dmn_kosmetik_dauer"]?>Minuten</td>
                               <td><?=$row["dmn_kosmetik_preis"]?>€</td>
                               </tr>
                           <?php } ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed text-dark font-weight-bold" type="button"
                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        Colaration
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Anwendung</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      
                                            
                       $res = $db->query("SELECT * FROM dienst_dmn_color");
                   
                   
                       while ($row=$res->fetch(PDO::FETCH_ASSOC))
                            {?>
                              <tr>
                               <td><?=$row["dmn_color_id"]?></td>
                               <td><?=$row["dmn_color_anw"]?></td>
                               <td><?=$row["dmn_color_dauer"]?>Minuten</td>
                               <td><?=$row["dmn_color_preis"]?>€</td>
                               </tr>
                           <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card bg-light border-0">
            <img src="./img/man9.jpg" alt="" class=" card-img-top rounded-10 shadow">
            <div class="card-body">
              <h5 class="lead text-dark font-weight-bold text-center text-uppercase mb-4">Herren</h5>
              <div class="accordion" id="accordionExample2">
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                      <button class="btn btn-link text-dark font-weight-bold" type="button" data-toggle="collapse"
                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        Haare
                      </button>
                    </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                    data-parent="#accordionExample2">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Anwendungen</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      
                                            
                      $res = $db->query("SELECT * FROM dienst_hrrn_haar");
                  
                  
                      while ($row=$res->fetch(PDO::FETCH_ASSOC))
                           {?>
                             <tr>
                              <td><?=$row["hrrn_haar_id"]?></td>
                              <td><?=$row["hrrn_haar_anw"]?></td>
                              <td><?=$row["hrrn_haar_dauer"]?>Minuten</td>
                              <td><?=$row["hrrn_haar_preis"]?>€</td>
                              </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed text-dark font-weight-bold" type="button"
                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                        aria-controls="collapseFive">
                        Bart
                      </button>
                    </h2>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                    data-parent="#accordionExample2">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Anwendungen</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      
                                            
                      $res = $db->query("SELECT * FROM dienst_hrrn_bart");
                  
                  
                      while ($row=$res->fetch(PDO::FETCH_ASSOC))
                           {?>
                             <tr>
                              <td><?=$row["hrrn_bart_id"]?></td>
                              <td><?=$row["hrrn_bart_anw"]?></td>
                              <td><?=$row["hrrn_bart_dauer"]?>Minuten</td>
                              <td><?=$row["hrrn_bart_preis"]?>€</td>
                              </tr>
                          <?php } ?>
                       

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed text-dark font-weight-bold" type="button"
                        data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                        aria-controls="collapseThree">
                        Colaration
                      </button>
                    </h2>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample2">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                          <th scope="col">#</th>
                            <th scope="col">Anwendungen</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      
                                            
                      $res = $db->query("SELECT * FROM dienst_hrrn_color");
                  
                  
                      while ($row=$res->fetch(PDO::FETCH_ASSOC))
                           {?>
                             <tr>
                              <td><?=$row["hrrn_color_id"]?></td>
                              <td><?=$row["hrrn_color_anw"]?></td>
                              <td><?=$row["hrrn_color_dauer"]?>Minuten</td>
                              <td><?=$row["hrrn_color_preis"]?>€</td>
                              </tr>
                          <?php } ?>

                       

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="preisListe" class="generic">
    <!-- <h2 class="display-5 text-weight-bold text-center text-danger mt-5">Preisliste</h2> -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card bg-light border-0">
            <img src="./img/teenager3.jpg" alt="" class=" card-img-top rounded-10 shadow">
            <div class="card-body">
              <h5 class="lead text-dark font-weight-bold text-center text-uppercase mb-4">Jugendliche</h5>
              <div class="accordion" id="accordionExample3">
                <div class="card">
                  <div class="card-header" id="headingSeven">
                    <h2 class="mb-0">
                      <button class="btn btn-link text-dark font-weight-bold" type="button" data-toggle="collapse"
                        data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseOne">
                        Mädchen
                      </button>
                    </h2>
                  </div>
                  <div id="collapseSeven" class="collapse " aria-labelledby="headingSeven"
                    data-parent="#accordionExample3">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Anwendung</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      
                                            
                      $res = $db->query("SELECT * FROM dienst_jugendlich_mdchn");
                  
                  
                      while ($row=$res->fetch(PDO::FETCH_ASSOC))
                           {?>
                             <tr>
                              <td><?=$row["jugendlich_mdchn_id"]?></td>
                              <td><?=$row["jugendlich_mdchn_anw"]?></td>
                              <td><?=$row["jugendlich_mdchn_dauer"]?>Minuten</td>
                              <td><?=$row["jugendlich_mdchn_preis"]?>€</td>
                              </tr>
                          <?php } ?>

                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingEight">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed text-dark font-weight-bold" type="button"
                        data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Junge
                      </button>
                    </h2>
                  </div>
                  <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                    data-parent="#accordionExample3">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Anwendung</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      
                                            
                      $res = $db->query("SELECT * FROM dienst_jugendlich_jnge");
                  
                  
                      while ($row=$res->fetch(PDO::FETCH_ASSOC))
                           {?>
                             <tr>
                              <td><?=$row["jugendlich_jnge_id"]?></td>
                              <td><?=$row["jugendlich_jnge_anw"]?></td>
                              <td><?=$row["jugendlich_jnge_dauer"]?>Minuten</td>
                              <td><?=$row["jugendlich_jnge_preis"]?>€</td>
                              </tr>
                          <?php } ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
        <div class="col">
          <div class="card bg-light border-0">
            <img src="./img/kind.jpg" alt="" class=" card-img-top rounded-10 shadow">
            <div class="card-body">
              <h5 class="lead text-dark font-weight-bold text-center text-uppercase mb-4">Kinder</h5>
              <div class="accordion" id="accordionExample4">
                <div class="card">
                  <div class="card-header" id="headingNine">
                    <h2 class="mb-0">
                      <button class="btn btn-link text-dark font-weight-bold" type="button" data-toggle="collapse"
                        data-target="#collapseNine" aria-expanded="true" aria-controls="collapseOne">
                        Mädchen
                      </button>
                    </h2>
                  </div>
                  <div id="collapseNine" class="collapse " aria-labelledby="headingNine"
                    data-parent="#accordionExample4">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Anwendung</th>
                            <th scope="col">Dauer</th>
                            <th scope="col">Preis</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      
                                            
                      $res = $db->query("SELECT * FROM dienst_kinder_mdchn");
                  
                  
                      while ($row=$res->fetch(PDO::FETCH_ASSOC))
                           {?>
                             <tr>
                              <td><?=$row["kinder_mdchn_id"]?></td>
                              <td><?=$row["kinder_mdchn_anw"]?></td>
                              <td><?=$row["kinder_mdchn_dauer"]?>Minuten</td>
                              <td><?=$row["kinder_mdchn_preis"]?>€</td>
                              
                              </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTen">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed text-dark font-weight-bold" type="button"
                        data-toggle="collapse" data-target="#collapseTen" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Junge
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample4">
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                      
                                            
                      $res = $db->query("SELECT * FROM dienst_kinder_jnge");
                  
                  
                      while ($row=$res->fetch(PDO::FETCH_ASSOC))
                           {?>
                             <tr>
                              <td><?=$row["kinder_jnge_id"]?></td>
                              <td><?=$row["kinder_jnge_anw"]?></td>
                              <td><?=$row["kinder_jnge_dauer"]?>Minuten</td>
                              <td><?=$row["kinder_jnge_preis"]?>€</td>
                              </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>


  <!--Card Accordion ende-->


  


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
 <!--Footer Ende-->




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