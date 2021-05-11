<?php include 'header.php' ; 

$lif=$db->prepare("SELECT * FROM lieferant where lieferant_Id=:id");
$lif->execute(array(
      'id'=> $_GET['lieferant_Id']
      ));

$lifdata=$lif->fetch(PDO::FETCH_ASSOC);


?> 

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lieferant Bearbeiten <small>,

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
                          <input type="text" id="first-name" name="lieferant_Name" value="<?php echo $lifdata['lieferant_Name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Logo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="lieferant_logo" value="<?php echo $lifdata['lieferant_logo'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Lieferant No<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="lieferant_No" value="<?php echo $lifdata['lieferant_No'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Anschrift<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="lieferant_adresse" value="<?php echo $lifdata['lieferant_adresse'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Telefon<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="lieferant_telefon" value="<?php echo $lifdata['lieferant_telefon'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      


                      <input type="hidden" name="lieferant_Id" value="<?php echo $lifdata['lieferant_Id']; ?>">



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="lifbearbeiten" class="btn btn-success">Update</button>
                          
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

       