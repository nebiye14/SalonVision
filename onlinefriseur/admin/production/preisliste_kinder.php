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

                <!-- Kinder Preisliste-->
             
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kinder Mädchen-Preisliste <small></small></h2>
                   
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

                        $dienststmt=$db->prepare("SELECT * FROM dienst_kinder_mdchn");

                        $dienststmt->execute();
                        while($dienstdata=$dienststmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $dienstdata['kinder_mdchn_anw'] ?></td>
                          <td><?php echo $dienstdata['kinder_mdchn_dauer'] ?></td>
                          <td><?php echo $dienstdata['kinder_mdchn_preis'] ?></td>  
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

            <!-- Kinder Preisliste--> 
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kinder Junge-Preisliste <small></small></h2>
                   
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

                        $dienststmt=$db->prepare("SELECT * FROM dienst_kinder_jnge");

                        $dienststmt->execute();
                        while($dienstdata=$dienststmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $dienstdata['kinder_jnge_anw'] ?></td>
                          <td><?php echo $dienstdata['kinder_jnge_dauer'] ?></td>
                          <td><?php echo $dienstdata['kinder_jnge_preis'] ?></td>  
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

              

             
        






<?php include 'footer.php' ; ?>
