<?php 
include 'header.php' ; 


$produktstmt=$db->prepare("SELECT mat.material_Id, mat.material_Name, mat.material_bild, matka.material_kategorie_Name, li.lieferant_Name, mat.material_Preis 
FROM material_kategorie matka  inner join material mat on mat.material_kategorie_Id=matka.material_kategorie_Id 
inner join lieferant li
on mat.lieferant_Id = li.lieferant_Id");


$produktstmt->execute();

/* $veri=$db->prepare("SELECT * FROM material ");
$veri->execute();
$veridata=$veri->fetch(PDO::FETCH_ASSOC); */

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

                <!-- Seiteninhalt-->
             
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Produkt Liste <small></small></h2>
                   
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Name </th>
                          <th>Bild</th>
                          <th>Kategorie</th>
                          <th>Lieferant</th>
                          <th>Preis</th>
                         
                          <th></th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>

                        <?php 
                        while($produktdata=$produktstmt->fetch(PDO::FETCH_ASSOC)) {?>

                        <tr>
                        
                          <td><?php echo $produktdata['material_Name'] ?></td>
                          <td><?php echo $produktdata['material_bild'] ?></td>  
                          <td><?php echo $produktdata['material_kategorie_Name'] ?></td> 
                          <td><?php echo $produktdata['lieferant_Name'] ?></td> 
                          <td><?php echo $produktdata['material_Preis'] ?></td>     
                          <td><center><a href="produkt-bearbeiten.php?material_Id=<?php echo $produktdata['material_Id'] ?>"><button class="btn btn-primary btn-xs">Bearbeiten</button></a></center></td>
                          <td><center><button class="btn btn-danger btn-xs">Löschen</button></center></td>   
                          
                        </tr>

                        <?php }
                        ?>
                        
                       
                       
                      </tbody>
                    </table>
                    <br>
                    <td><center><a href="material-einfuegen.php"><button class="btn btn-primary btn-xs pt-2"> Produkt Einfügen</button></a></center></td>
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

       