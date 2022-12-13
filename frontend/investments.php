<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    session_start();
    $session = $_SESSION;
    include_once('includes/head.php'); include_once('includes/modal.php');
    ?>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<?php include_once('includes/navbar.php');?>

<div class="Currency">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>INVISTA NOS MELHORES MERCADOS <strong class="cur">CONOSCO</strong></h2>
          <span><img src="images/boder.png" alt="img"/> </span> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="three-box">
          <figure><img src="https://blog.movingimoveis.com.br/wp-content/uploads/2020/09/post_thumbnail-9e28e79a8cca3df6361643ac757216c4.jpeg" alt="img"/></figure>
          <div class="Bitcoin"> <i><img src="images/dollar.png" alt="img"/></i>
            <h3>Mercado Imobiliário</h3>
            <p>O mercado imobiliário é o setor em que são negociados imóveis. Ou seja, há a compra, venda e aluguel de casas, apartamentos, lotes, espaços comerciais e mais. Investimento pouco volátil e de retorno modesto</p>
          </div>
          <a class="read-more" data-bs-toggle="modal" data-bs-target="#modal-imob" href="#">Investir Agora</a> </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="three-box">
          <figure><img src="images/jpx.png" alt="img"/></figure>
          <div class="Bitcoin"> <i><img src="images/dollar.png" alt="img"/></i>
            <h3>Bolsa de valores Japonesa</h3>
            <p>A Bolsa de Valores é um mercado em investidores podem negociar a compra e a venda de ações de produtos financeiros. A Bolsa Japonesa é uma das que mais cresce no mundo. Investimento modestamente volátil e de retorno médio</p>
          </div>
          <a class="read-more" data-bs-toggle="modal" data-bs-target="#modal-jap" href="#">Investir Agora</a> </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="three-box">
          <figure><img src="https://penntoday.upenn.edu/sites/default/files/2022-01/cryptocurrency-main.jpg" alt="img"/></figure>
          <div class="Bitcoin"> <i><img src="images/dollar.png" alt="img"/></i>
            <h3>Investimento em Criptomoedas</h3>
            <p>As criptomoedas são ativos digital que utilizam uma codificação com base em criptografia para realizar e rastrear transações. É um dinheiro inteiramente virtual, ou seja, não existe moeda ou cédula física. Investimento extremamente volátil e de retorno alto</p>
          </div>
          <a class="read-more" data-bs-toggle="modal" data-bs-target="#modal-cripto" href="#">Investir Agora</a> </div>
      </div>
    </div>
  </div>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>