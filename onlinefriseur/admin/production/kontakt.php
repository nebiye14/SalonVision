<?php include 'header.php' ; 






$kontaktstmt=$db->prepare("SELECT * FROM kontakt");
$kontaktstmt->execute();
?> 

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
             <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel"> 
                  <div class="x_title">
                    <h2> <small>

                     


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
                    <br/>

                <!-- Seiteninhalt-->
             
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kontakt Liste <small>
                    
                    
                    <?php

                    if (isset($_GET['loeschen']) and $_GET['loeschen']=='no'){?>

                    <b style="color:red;"> nicht gelöscht...</b>

                    <?php } elseif (isset($_GET['loeschen']) and $_GET['loeschen']=='ok'){?>

                    <b style="color:green;"> gelöscht...</b>


                    <?php } ?>
                                        
                    
                    
                    
                    </small></h2>
                   
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Datum - Uhrzeit</th>
                          <th>Vorname</th>
                          <th>Nachname</th>
                          <th>E-Mail Adresse</th>
                          <th>Nachricht</th>
                          <th></th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                        while($kontaktdata=$kontaktstmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $kontaktdata['kontakt_Zeit'] ?></td>
                          <td><?php echo $kontaktdata['Kontakt_VorName'] ?></td>  
                          <td><?php echo $kontaktdata['Kontakt_NachName'] ?></td> 
                          <td><?php echo $kontaktdata['Kontakt_Email'] ?></td> 
                          <td><?php echo $kontaktdata['Kontakt_Nachricht'] ?></td>     
                          <td><center><a href="../netling/method.php?Kontakt_Id=<?php echo $kontaktdata['Kontakt_Id'];?>&kontaktloeschen=ok"><button class="btn btn-danger btn-xs">Löschen</button></a></center></td>
                          
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
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
        <!-- /page content -->


<?php include 'footer.php' ; ?>

       