<?php
session_start();


include ("conexao.php");
include ("config.php");
?>

<!DOCTYPE html>
<html lang="pt">
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

        <link rel="icon" type="imagem/png" href="images/icone.png"/>

        <title>Megabyte</title>

        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/overlay.css">
        <link rel="stylesheet" href="css/compras.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      </head>

    <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#sobre">Sobre</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Loja</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contacte-nos</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="#" onclick=on();>Login</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#" onclick=on2()>Criar Conta</a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#" onclick=onCompras()><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Fim header inner -->
      <!-- Fim header -->
      <!-- Login -->
      <div id="overlay-one">
         <div class="centro">
            <div class="container-login">
               <label for="" class="close-btn fas fa-times" onclick=off(); style="color:#03cafc;position: absolute;right: 20px;top: 15px; font-size: 18px;cursor: pointer;"></label>
                  <div class="login-content">Login</div>
                  <?php
                    if(isset($_SESSION['offline'])):
                  ?>
                  <div class="login_erro">
                    <p>Erro no login</p>
                  </div>
                  <?php
                  endif;
                  unset($_SESSION['offline']);
                  ?>
                  <form action="users.php">
                     <div class="dados">
                        <label>Email</label>
                        <input type="text" required>
                     </div>
                     <div class="dados">
                        <label>Password</label>
                        <input type="password" required>
                     </div>
                     <div class="esqueceu-pass"><a href="#">Esqueceste-te da palavra-passe?</a></div>
                     <div class="btn">
                        <div class="space"></div>
                           <button type="submit">Login</button>
                     </div>
                  </form>
            </div>
         </div>
      </div>
      <!-- Fim Login -->
      <!-- Registo -->
      <div id="overlay-two">
         <div class="centro1">
            <div class="container-registo">
               <label for="" class="close-btn fas fa-times" onclick=off2(); style="color:#03cafc;position: absolute;right: 20px;top: 15px; font-size: 18px;cursor: pointer;"></label>
                  <div class="registo-content">Criar Conta</div>
                  <?php
                  if(isset($_SESSION['status_registo']) == true):
                  ?>
                  <div class="sucesso">
                    <p>Registo Efetuado Com Sucesso!</p>
                  </div>
                  <?php
                  endif;
                  unset($_SESSION['status_registo']);
                  ?>
                  <?php
                  if(isset($_SESSION['user_existe'])):
                  ?>
                  <div class="user_existe">
                  <p>User já existe!</p>
                  </div>
                  <?php
                  endif;
                  unset($_SESSION['user_existe']);
                  ?>
                  <form action="users.php" method="POST">
                     <div class="dados">
                        <label>Nome</label>
                        <input type="text" name="nome" required>
                     </div>
                     <div class="dados">
                        <label>Email</label>
                        <input type="email" name="email" required>
                     </div>
                     <div class="dados">
                        <label>Password</label>
                        <input type="password" name="pass" required>
                     </div>
                     <div class="btn">
                        <div class="space"></div>
                           <button type="submit">Criar Conta</button>
                     </div>
                  </form>
            </div>
         </div>
      </div>
      <!-- FIM Registo -->
      <!-- INICIO Compras -->
      <div id="overlay-three">
        <div class="centro">
            <div class="container-compras">
                <label for="" class="close-btn fas fa-times" onclick=offCompras(); style="color:#03cafc;position: absolute;right: 20px;top: 15px; font-size: 18px;cursor: pointer;"></label>
                <div class="compras-content"></div>

            </div>
        </div>
      </div>
      <!-- FIM Compras -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">Bem-Vindo <br></span>Megabyte</h1>
                           <a class="read_more" href="#">Compre agora</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">Entregando um amanhã melhor <br></span>Atualize sua vida</h1>
                           <a class="read_more" href="#">Compre agora</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1> <span class="blu">Entregando um amanhã melhor <br></span>Atualize sua vida</h1>
                           <a class="read_more" href="#">Compre agora</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div class="about" id="sobre">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/logo3.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Sobre a nossa loja</h2>
                     <?php echo $descricao?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Nossos Produtos</h2>
                     <p><?php echo $nossos_produtos?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="" alt=""/></figure>
                     <h3><span class="blu"><?php echo $moeda?></span>50</h3>
                     <p>Não sei</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="" alt=""/></figure>
                     <h3><span class="blu"><?php echo $moeda?></span>50</h3>
                     <p>Não Sei</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="" alt=""/></figure>
                     <h3><span class="blu"><?php echo $moeda?></span>50</h3>
                     <p>Não Sei</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="" alt=""/></figure>
                     <h3><span class="blu"><?php echo $moeda?></span>50</h3>
                     <p>Não Sei</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="" alt=""/></figure>
                     <h3><span class="blu"><?php echo $moeda?></span>50</h3>
                     <p>Não Sei</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="" alt=""/></figure>
                     <h3><span class="blu"><?php echo $moeda?></span>50</h3>
                     <p>Não Sei</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="" alt=""/></figure>
                     <h3><span class="blu"><?php echo $moeda?></span>50</h3>
                     <p>Não Sei</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="" alt=""/></figure>
                     <h3><span class="blu"><?php echo $moeda?></span>50</h3>
                     <p>Não Sei</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Ver Mais</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
      <!-- Produto em destaque -->
      <div id="about" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="images/shop_img.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Nossos melhores componentes</h2>
                        <p><?php echo $destaque?></p>
                        <a class="read_more" href="#">Compre Agora</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- fim Produto em destaque -->
      <footer>
        <section class="footer">
            <div class="content-footer">
                <div class="ul1">
                    <ul>
                        <li><a href="#" target="_blank">Política de Privacidade</a></li>
                        <li><a href="#" target="_blank">Proteção de Marca</a></li>
                        <li><a href="#">Contacta-nos</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#" target="_blank">Empregos</a></li>
                    </ul>
                </div>
                <div class="ul2">
                    <ul>
                        <li><a href="#" target="_blank">Termos de Uso</a></li>
                        <li><a href="#" target="_blank">Informação</a></li>
                        <li><a href="#" target="_blank">Imprensa</a></li>
                        <li><a href="#" target="_blank">Loja</a></li>
                    </ul>
                </div>
                <div class="ul3">
                    <ul>
                        <h2>Redes Sociais</h2>
                            <li><a href="#" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li><a href="#" target="_blank"> <i class="fab fa-instagram"></i> </a></li>
                            <li><a href="#" target="_blank"> <i class="fab fa-twitter"></i> </a></li> 
                            <li><a href="#" target="_blank"> <i class="fab fa-youtube"></i> </a></li>
                    </ul>
                </div>
                <div class="ul4">
                    <ul>
                        <h2>Contactos</h2>
                            <li><i class="far fa-envelope"></i> <span><?php echo $email?></span></li>
                            <li><i class="fas fa-phone-alt"></i> <span><?php echo $telefone?></span></li>
                    </ul>
                </div>
            </div>
                <img class="logo_footer" src="images/logo.png">
                <p>© 2022 Megabyte. Todos os direitos reservados.</p>
        </section>
    </footer>
      <!-- end footer -->
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
