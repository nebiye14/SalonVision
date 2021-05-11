<?php include 'header.php' ; 

$mat=$db->prepare("SELECT mat.material_Id, mat.material_Name, mat.material_bild, matka.material_kategorie_Name, li.lieferant_Name, mat.material_Preis 
FROM material_kategorie matka  inner join material mat on mat.material_kategorie_Id=matka.material_kategorie_Id 
inner join lieferant li
on mat.lieferant_Id = li.lieferant_Id where mat.material_Id=:id");
$mat->execute(array(
      'id'=> $_GET['material_Id']
      ));

$matdata=$mat->fetch(PDO::FETCH_ASSOC);


?> 

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Produkt Bearbeiten <small>,

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

                    <!-- eine Spitze oben -->
                    <form action="../netling/method.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                   


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="material_Name" value="<?php echo $matdata['material_Name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Bild<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="material_bild" value="<?php echo $matdata['material_bild'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kategorie<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="material_kategorie_Name" value="<?php echo $matdata['material_kategorie_Name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Lieferant<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="lieferant_Name" value="<?php echo $matdata['lieferant_Name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Preis<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" name="material_Preis" value="<?php echo $matdata['material_Preis'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                      <input type="hidden" name="material_Id" value="<?php echo $matdata['material_Id']; ?>">



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="matbearbeiten" class="btn btn-success">Update</button>
                          
                        </div>
                      </div>

                    </form>



                  </div>
                </div>
              </div>
            </div>
<hr>
<hr>
<hr>


            

          </div>
        </div>
        <!-- /page content -->


<?php include 'footer.php' ; ?>

       