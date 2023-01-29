<?php  
include ("config.php");

$host = 'localhost';
$username = 'root';
$password = '';
$name = 'loja';
      
$conexao = new mysqli($host,$username,$password,$name);     
      
$sql = "SELECT nome_produto, preco, img_produto FROM produtos";
$result = $conexao->query($sql);

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
        <link rel="stylesheet" href="css/loja.css">
        <link rel="stylesheet" href="css/compras.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php
        include("menu.php");
    ?>
        <!-- Categorias -->
        <div class="Categories">
                <div class="container_cat">
                    <div class="row_cat">
                        <div class="col-md-12_cat">
                            <div class="title_cat">
                                <h2>CATEGORIAS</h2>
                                <ul class="categiri" align="center">
                                    <li id="active"><a href="#">Todos os Produtos</a></li>
                                    <li><a href="#">Processadores</a></li>
                                    <li><a href="#">Placas Gráficas</a></li>
                                    <li><a href="#">Memórias RAM</a></li>
                                    <li><a href="#">MotherBoards</a></li>
                                    <li><a href="#">Fontes de Alimentação</a></li>
                                    <li><a href="#">Caixas de computador</a></li>
                                </ul>
                        	 </div>
                        </div>
                    </div>
        <div id="brand"  class="brand-bg">
            <p class="map_pages"><a href="index.php">Home</a> > <b>Produtos<b></p><br>
            <h3>Produtos</h3>
            <div class="row">
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                    <div class="brand-box">
                        <i><img src="<?php echo $row["img_produto"];?>" width="250px"/>
                    </i>
                        <h4><?php echo $row["nome_produto"];?><br><br><?php echo $moeda?><span class="nolmal"><?php echo $row["preco"];?></span></h4>
                    </div>
                    <a class="buynow" href="#">Buy now</a>
                </div>
                <?php
                    }
                }
            ?>  
            </div>
        </div>


    <?php
        include("footer.php")
    ?>
    </body>
</html>