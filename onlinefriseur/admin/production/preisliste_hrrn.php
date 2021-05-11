
<?php include 'header.php' ; 


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

                         if (isset($_GET['status']) and $_GET['status'] =='ok') {?>

                          <b style="color:green;">Erfolgreich...</b>
                        

                        <?php } elseif (isset($_GET['status']) and $_GET['status']=='no'){?>

                          <b style="color:red;"> nicht Erfolgreich...</b>
                        

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




<!-- Herren Haar-Liste-->

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Herren Haar-Liste <small></small></h2>
                   
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                         
                          <th>Anwendung</th>
                          <th>Dauer</th>
                          <th>Preis</th>
                          <th></th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 

                        $dienststmt=$db->prepare("SELECT * FROM dienst_hrrn_haar");

                        $dienststmt->execute();
                        while($dienstdata=$dienststmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $dienstdata['hrrn_haar_anw'] ?></td>
                          <td><?php echo $dienstdata['hrrn_haar_dauer'] ?></td>
                          <td><?php echo $dienstdata['hrrn_haar_preis'] ?></td>  
                          <td><center><a href=""><button class="btn btn-primary btn-xs">Bearbeiten</button></a></center></td>
                          <td><center><button class="btn btn-danger btn-xs">Löschen</button></center></td>   
                          
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                  
                    
                  </div>
                </div>
              </div>
            </div>

             <!-- Herren Bart-Liste-->

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Herren Bart-Liste <small></small></h2>
                   
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                         
                          <th>Anwendung</th>
                          <th>Dauer</th>
                          <th>Preis</th>
                          <th></th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 

                        $dienststmt=$db->prepare("SELECT * FROM dienst_hrrn_bart");

                        $dienststmt->execute();
                        while($dienstdata=$dienststmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $dienstdata['hrrn_bart_anw'] ?></td>
                          <td><?php echo $dienstdata['hrrn_bart_dauer'] ?></td>
                          <td><?php echo $dienstdata['hrrn_bart_preis'] ?></td>  
                          <td><center><button class="btn btn-primary btn-xs">Bearbeiten</button></center></td>
                          <td><center><button class="btn btn-danger btn-xs">Löschen</button></center></td>   
                          
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                  
                    
                  </div>
                </div>
              </div>
              

            <!-- Damen Coloration-Liste-->

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Damen Coloration-Liste <small></small></h2>
                   
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                         
                          <th>Anwendung</th>
                          <th>Dauer</th>
                          <th>Preis</th>
                          <th></th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 

                        $dienststmt=$db->prepare("SELECT * FROM dienst_hrrn_color");

                        $dienststmt->execute();
                        while($dienstdata=$dienststmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $dienstdata['hrrn_color_anw'] ?></td>
                          <td><?php echo $dienstdata['hrrn_color_dauer'] ?></td>
                          <td><?php echo $dienstdata['hrrn_color_preis'] ?></td>  
                          <td><center><button class="btn btn-primary btn-xs">Bearbeiten</button></center></td>
                          <td><center><button class="btn btn-danger btn-xs">Löschen</button></center></td>   
                          
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
        </div>
        <!-- /page content -->

        <?php include 'footer.php' ; ?>