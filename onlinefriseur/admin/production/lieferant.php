
<?php 

include 'header.php' ; 

$liefstmt=$db->prepare("SELECT * FROM lieferant");
$liefstmt->execute();


?> 

        <!-- Seiteninhalt-->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
             
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lieferant Liste <small>Users</small></h2>
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
                    Lieferant aus der Tabelle entfernen und daran arbeiten.
                    </p>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          
                          <th>Name</th>
                          <th>Logo</th>
                          <th>No</th>
                          <th>Anschrift</th>
                          <th>Telefon</th>
                          <th></th>
                          <th></th>
                         
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                        while($liefdata=$liefstmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                          <td><?php echo $liefdata['lieferant_Name'] ?></td>
                          <td><?php echo $liefdata['lieferant_logo'] ?></td>
                          <td><?php echo $liefdata['lieferant_No'] ?></td>
                          <td><?php echo $liefdata['lieferant_adresse'] ?></td>
                          <td><?php echo $liefdata['lieferant_telefon'] ?></td>
                                           
                          <td><center><a href="lieferant-bearbeiten.php?lieferant_Id=<?php echo $liefdata['lieferant_Id']?>"><button class="btn btn-primary btn-xs">Bearbeiten</button></a></center></td>
                          <td><center><a href="../netling/method.php?lieferant_Id=<?php echo $liefdata['lieferant_Id']?>&liefloeschen=ok"><button class="btn btn-danger btn-xs">Löschen</button></a></center></td>
                          
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                    <td><center><a href="lieferant-einfuegen.php"><button class="btn btn-primary btn-xl"> Lieferant Einfügen</button></a></center></td>
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

       


         

        