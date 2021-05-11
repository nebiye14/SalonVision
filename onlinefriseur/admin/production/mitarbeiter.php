
<?php 

include 'header.php' ; 

$mitstmt=$db->prepare("SELECT * FROM mitarbeiter");
$mitstmt->execute();


?> 

        <!-- Seiteninhalt-->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
             
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mitarbeiter Liste <small>
                    
                    <?php

                    if (isset($_GET['loeschen']) and $_GET['loeschen']=='no'){?>

                    <b style="color:red;"> nicht gelöscht...</b>

                    <?php } elseif (isset($_GET['loeschen']) and $_GET['loeschen']=='ok'){?>

                    <b style="color:green;"> gelöscht...</b>


                    <?php } ?>
                    
                    </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    Mitarbeiter aus der Tabelle entfernen und daran arbeiten.
                    </p>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          
                          <th>Vorname</th>
                          <th>Nachname</th>
                          <th>Per.No</th>
                          <th>Ort</th>
                          <th>Geburtsdatum</th>
                          <th>E-Mail Adresse</th>
                          <th>Gehalt</th>
                          <th>Abteilung</th>
                          <th>Bild</th>
                          <th></th>
                          <th></th>
                         
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                        while($mitdata=$mitstmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $mitdata['Mi_VorName'] ?></td>
                          <td><?php echo $mitdata['Mi_NachName'] ?></td>
                          <td><?php echo $mitdata['Mi_PerNo'] ?></td>
                          <td><?php echo $mitdata['Mi_Ort'] ?></td>
                          <td><?php echo $mitdata['Mi_GebDat'] ?></td> 
                          <td><?php echo $mitdata['Mi_Email'] ?></td>
                          <td><?php echo $mitdata['Mi_Gehalt'] ?></td>
                          <td><?php echo $mitdata['Mi_Abteilung'] ?></td>     
                          <td><?php echo $mitdata['Mi_Bild'] ?></td>                        
                          <td><center><a href="mitarbeiter-bearbeiten.php?Mi_Id=<?php echo $mitdata['Mi_Id']; ?>"><button class="btn btn-primary btn-xs">Bearbeiten</button></a></center></td>
                          <td><center><a href="../netling/method.php?Mi_Id=<?php echo $mitdata['Mi_Id']; ?>&mitloeschen=ok"><button class="btn btn-danger btn-xs">Löschen</button></a></center></td>
                          
                        </tr>
                        
                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                    <td><center><a href="mitarbeiter-einfuegen.php"><button class="btn btn-primary btn-xl"> Mitarbeiter Einfügen</button></a></center></td>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
        <!-- Seiteninhalt -->


<?php include 'footer.php' ; ?>

       


         

        