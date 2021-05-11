<?php include 'header.php' ; 

$col=$db->prepare("SELECT * FROM dienst_dmn_color where dmn_color_id=:id");
$col->execute(array(
      'id'=> $_GET['dmn_color_id']
      ));

$coldata=$col->fetch(PDO::FETCH_ASSOC);


?> 

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
             
                <div class="x_panel">
                  <div class="x_title">
                  
                    <h2>Damen Coloration Bearbeiten <small>,

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Anwendung<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="dmn_color_anw" value="<?php echo $coldata['dmn_color_anw'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Dauer<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="dmn_color_dauer" value="<?php echo $coldata['dmn_color_dauer'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Preis<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="dmn_color_preis" value="<?php echo $coldata['dmn_color_preis'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                     
                    


                      <input type="hidden" name="dmn_color_id" value="<?php echo $coldata['dmn_color_id']; ?>">



                     
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="p_d_c_bearbeiten" class="btn btn-success">Update</button>
                          
                        </div>
                      </div>

                    </form>

                  </div>
                </div>
              </div>
            </div>




           

            

          </div>
        </div>
        <!-- /page content -->


<?php include 'footer.php' ; ?>

       