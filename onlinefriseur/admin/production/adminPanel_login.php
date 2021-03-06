<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Öztas Software</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body  class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
         

          <form action="../netling/method.php" method="POST">


            <h1>Kontroll-Panel </h1>
            
            <div>
              <input type="text" name="admin_mail" class="form-control" placeholder="Admin E-Mail Adresse" required="" />
            </div>
            <div>
              <input type="password" name="admin_passwort" class="form-control" placeholder="Passwort" required="" />
            </div>
            <div>
            <button style="width: 100%; background-color: #73879C; color:white;" type="submit" name="adminEinloggen" class="btn btn-default"> Einloggen</button>
              
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">

             <?php 

             if ($_GET['status']=="no") {
             
             echo "Benutzer wurde nicht gefunden...";

             } elseif ($_GET['status']=="exit") {
             
             echo " Erfolgreich abgemeldet.";

             }

             ?>
               
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-desktop"></i> Öztas Software</h1>
                <p>©2021</p>
              </div>
            </div>
          </form>



        </section>
      </div>

    </div>
  </div>
</body>
</html>
