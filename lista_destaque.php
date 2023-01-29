<?php
$host = 'localhost';
$username = 'root';
$password = '';
$name = 'loja';
      
$conexao = new mysqli($host,$username,$password,$name);     
      
$sql = "SELECT nome_produto, preco, img FROM produtos_destaque";
$result = $conexao->query($sql);

?>

<div class="glasses" id="destaque"> 
<div class="container">
      <div class="row">
         <div class="col-md-10 offset-md-1">
            <div class="titlepage">
               <h2>Destaques</h2>
               <p><?php echo $destaque1?></p>
            </div>
         </div>
      </div>
</div>

   <div class="container-fluid">
      <div class="row">
      <?php
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
      ?>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="glasses_box">
               <figure><img src="<?php echo $row["img"];?>" alt="" width="250px"/></figure>
               <h3><span class="blu"><?php echo $moeda?></span> <?php echo $row["preco"];?> </h3>
               <p><?php echo $row["nome_produto"];?></p>
            </div>
         </div>
         <?php
            }
         }
         ?>    
      </div>    
   </div>
   <div class="col-md-12">
         <a class="read_more" href="loja.php ">Ver Mais</a>
   </div>
</div>

