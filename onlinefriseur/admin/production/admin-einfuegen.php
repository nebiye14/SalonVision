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
                    <h2> Neu Admin  <small>,

                      <?php

                         if (isset($_GET['status']) and $_GET['status'] =='ja') {?>

                          <b style="color:green;">Erfolgreich...</b>
                        

                        <?php } elseif (isset($_GET['status']) and $_GET['status']=='nein'){?>

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Vorname<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="admin_vorName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nachname<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="admin_nachName"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Personal No<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="admin_no"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="first-name" name="admin_mail2"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Passwort <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="first-name" name="admin_passwort2"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Bild<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="admin_bild"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Telefon<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="admin_gsm"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Anschrift<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="admin_anschrift"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <!--                     
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Status<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="first-name" class="form-control" name="admin_status"  required>

                            <option value="0"> Aktiv</option>


                            <option value="0" > Passiv</option>

                          </select>
                        </div>
                      </div>
-->

                      



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="admineinfuegen" class="btn btn-success">Update</button>
                          
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

       