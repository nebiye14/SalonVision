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

                <!-- Damen Color-Liste-->
             
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Damen Coloration-Liste <small>
                    
                    
                   
                    </small></h2>
                   
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

                        $dienststmt=$db->prepare("SELECT * FROM dienst_dmn_color");

                        $dienststmt->execute();
                        while($dienstdata=$dienststmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $dienstdata['dmn_color_anw'] ?></td>
                          <td><?php echo $dienstdata['dmn_color_dauer'] ?></td>
                          <td><?php echo $dienstdata['dmn_color_preis'] ?></td>  
                          <td><center><a href="pl_dmn_col_bearbeiten.php?dmn_color_id=<?php echo $dienstdata['dmn_color_id'] ?>">
                            <button class="btn btn-primary btn-xs">Bearbeiten</button></a></center></td>

                          
                          <td><center><a href="../netling/method.php?dmn_color_id=<?php echo $dienstdata['dmn_color_id']?>&colorloeschen=ok"><button class="btn btn-danger btn-xs">Löschen</button></a></center></td>   
                          
                        </tr>

                        <?php }
                        ?>
                      </tbody>
                    </table>
                  
                    <td><center><a href="dmn_coloration_einfuegen.php"><button class="btn btn-primary btn-xl"> Coloration Anwendung Einfügen</button></a></center></td>  
                  </div>
                </div>
              </div>

            
            </div>

            <!-- Damen Kosmetik-Liste--> 
            
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Damen Kosmetik-Liste <small>
                    
                    
                    </small></h2>
                   
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

                        $dienststmt=$db->prepare("SELECT * FROM dienst_dmn_kosmetik");

                        $dienststmt->execute();
                        while($dienstdata=$dienststmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $dienstdata['dmn_kosmetik_anw'] ?></td>
                          <td><?php echo $dienstdata['dmn_kosmetik_dauer'] ?></td>
                          <td><?php echo $dienstdata['dmn_kosmetik_preis'] ?></td>  
                          <td><center><a href="pl_dmn_kos_bearbeiten.php?dmn_kosmetik_id=<?php echo $dienstdata['dmn_kosmetik_id'] ?>">
                            <button class="btn btn-primary btn-xs">Bearbeiten</button></a></center></td>

                          <td><center><a href="../netling/method.php?dmn_kosmetik_id=<?php echo $dienstdata['dmn_kosmetik_id']?>&kosmetikloeschen=ok"><button class="btn btn-danger btn-xs">Löschen</button></a></center></td>   
                          
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                    <td><center><a href="dmn_kosmetik_einfuegen.php"><button class="btn btn-primary btn-xl"> Kosmetik Anwendung Einfügen</button></a></center></td> 
                    
                  </div>
                </div>
              </div>



 <!-- Damen Haar-Liste-->

 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Damen Haar-Liste <small>
                    
                   
                    </small></h2>
                   
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

                        $dienststmt=$db->prepare("SELECT * FROM dienst_dmn_haar");

                        $dienststmt->execute();
                        while($dienstdata=$dienststmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $dienstdata['dmn_haar_anw'] ?></td>
                          <td><?php echo $dienstdata['dmn_haar_dauer'] ?></td>
                          <td><?php echo $dienstdata['dmn_haar_preis'] ?></td>  
                          <td><center><a href="pl_dmn_har_bearbeiten.php?dmn_haar_id=<?php echo $dienstdata['dmn_haar_id'] ?>">
                            <button class="btn btn-primary btn-xs">Bearbeiten</button></a></center></td>

                            <td><center><a href="../netling/method.php?dmn_haar_id=<?php echo $dienstdata['dmn_haar_id']?>&haarloeschen=ok"><button class="btn btn-danger btn-xs">Löschen</button></a></center></td>  
                          
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                    <td><center><a href="dmn_haar_einfuegen.php"><button class="btn btn-primary btn-xl"> Haar Anwendung Einfügen</button></a></center></td> 
                    
                  </div>
                </div>
              </div>
            </div>


              
            </div>


<?php include 'footer.php' ; ?>
