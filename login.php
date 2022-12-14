<?php
session_start();

include('conexao.php');
include('config.php')
?>

<!DOCTYPE html>
<html lang="pt">
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

        <link rel="icon" type="images/png" href="images/icon.png"/>

        <title>Megabyte</title>

        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_contact.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      </head>
      <body class="main-layout">
    <?php
        include("menu.php");
    ?>
        <section class="section_contact">
    <br><br>
    <div class="content">
    
    <div class="container" >

      <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0"> 
 
              <h2 class="mb-5">Login</h2>

              <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="Entrar" id="btn_submit" class="btn btn-primary rounded-1 py-2 px-5">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>

            </div>
            <div class="col-lg-4 ml-auto">
              <img src="images/logo_contact.png">
            </div>
          </div>
        </div>  
        </div>
      </div>
  </div>
</section>  
    <?php
        include("footer.php");
    ?>
      <!-- Javascript files-->
      <script src="js/overlay.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>