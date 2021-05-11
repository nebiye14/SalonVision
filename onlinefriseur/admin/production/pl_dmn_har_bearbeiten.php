<?php 
include 'header.php' ; 
$kos=$db->prepare("SELECT * FROM dienst_dmn_haar where dmn_haar_id=:id");
$kos->execute(array(
      'id'=> $_GET['dmn_haar_id']
      ));

$kosdata=$kos->fetch(PDO::FETCH_ASSOC);


?> 
 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
  <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
 
    <div class="x_panel">
      <div class="x_title">
      
        <h2>Damen Haar Bearbeiten <small>,

          <?php

             if (isset($_GET['status']) and $_GET['status'] =='ok') {?>

              <b style="color:green;">Erfolgreich...</b>
            

            <?php } elseif (isset($_GET['status']) and $_GET['status']=='no'){?>

              <b style="color:red;"> nicht Erfolgreich...</b>
            

            <?php } ?>


        </small></h2>
        
        
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
              <input type="text" id="first-name" name="dmn_haar_anw" value="<?php echo $kosdata['dmn_haar_anw'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Dauer<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="dmn_haar_dauer" value="<?php echo $kosdata['dmn_haar_dauer'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Preis<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" name="dmn_haar_preis" value="<?php echo $kosdata['dmn_haar_preis'] ?>" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          
         
        


          <input type="hidden" name="dmn_haar_id" value="<?php echo $kosdata['dmn_haar_id']; ?>">



         
          <div class="form-group">
            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" name="p_d_h_bearbeiten" class="btn btn-success">Update</button>
              
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

       