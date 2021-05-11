<?php include 'header.php' ; 






$terminstmt=$db->prepare("SELECT * FROM termin");
$terminstmt->execute();
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

                      <?php

                         if (isset($_GET['loeschen']) and $_GET['loeschen'] =='ok') {?>

                          <b style="color:green;">gelöscht...</b>
                        

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
                    <br/>

                <!-- Seiteninhalt-->
             
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Termin Liste <small></small></h2>
                   
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Datum </th>
                          <th>Uhrzeit</th>
                          <th>Vorname</th>
                          <th>Nachname</th>
                          <th>E-Mail Adresse</th>
                          <th>Mitarbeiter</th>
                          <th>Dienstleistung</th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                        while($termindata=$terminstmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $termindata['T_Datum'] ?></td>
                          <td><?php echo $termindata['Z_Uhr'] ?></td>  
                          <td><?php echo $termindata['K_VorName'] ?></td> 
                          <td><?php echo $termindata['K_NachName'] ?></td> 
                          <td><?php echo $termindata['K_Email'] ?></td>     
                          <td><?php echo $termindata['Mi_Name'] ?></td> 
                          <td><?php echo $termindata['D_Name'] ?></td>     
                          <td><center><a href="../netling/method.php?T_Id=<?php echo $termindata['T_Id']; ?>&terminloeschen=ok"><button class="btn btn-danger btn-xs">Löschen</button></a></center></td>
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                    <br>
                    <td><center><button class="btn btn-primary btn-xs pt-2"> Termin Einfügen</button></center></td>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          </div> 
          </div>
     

          </div>
        </div>
     


<?php include 'footer.php' ; ?>

       