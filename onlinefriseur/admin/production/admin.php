
<?php 

include 'header.php' ; 

$adminstmt=$db->prepare("SELECT * FROM admin");
$adminstmt->execute();


?> 

        <!-- Seiteninhalt-->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
             
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Liste <small>
                    
                    <?php

                    if (isset($_GET['loeschen']) and $_GET['loeschen'] =='ok') {?>

                    <b style="color:green;"> gelöscht...</b>


                    <?php } elseif (isset($_GET['loeschen']) and $_GET['loeschen']=='no'){?>

                    <b style="color:red;"> nicht gelöscht...</b>


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
                    Admin aus der Tabelle entfernen und daran arbeiten.
                    </p>


                   
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Registrierungsdatum</th>
                          <th>Vorname</th>
                          <th>Nachname</th>
                          <th>E-Mail Adresse</th>
                          <th>Bild</th>
                          <th>Telefon</th>
                          <th>Anschrift</th>
                          <th></th>
                          <th></th>
                         
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                        while($admindata=$adminstmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $admindata['admin_zeit'] ?></td>
                          <td><?php echo $admindata['admin_vorName'] ?></td>
                          <td><?php echo $admindata['admin_nachName'] ?></td>
                          <td><?php echo $admindata['admin_mail'] ?></td> 
                          <td><?php echo $admindata['admin_bild'] ?></td> 
                          <td><?php echo $admindata['admin_gsm'] ?></td> 
                          <td><?php echo $admindata['admin_anschrift'] ?></td>                        
                          <td><center><a href="admin-bearbeiten.php?admin_id=<?php echo $admindata['admin_id']; ?>"><button class="btn btn-primary btn-xs">Bearbeiten</button></a></center></td>
                          <td><center><a href="../netling/method.php?admin_id=<?php echo $admindata['admin_id']; ?>&adminloeschen=ok"><button class="btn btn-danger btn-xs">Löschen</button></a></center></td>
                          
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                    <td><center><a href="admin-einfuegen.php"><button class="btn btn-primary btn-xl"> Admin Einfügen</button></a></center></td>
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

       


         

        