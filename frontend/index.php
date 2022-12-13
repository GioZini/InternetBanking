<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once('includes/head.php');
    session_start();
    $session = $_SESSION
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
<body class="main-layout">
<?php include_once('includes/navbar.php');?>
<br>
<section class="slider_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6"> 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="first-slide" src="images/banner.jpg" alt="First slide"> </div>
          </div>
        </div>
        <!-- end banner --> 
      </div>
      <div class="col-md-6">
        <div class="full-slider_cont">
          <h1>Internet<br>
            <span class="dark_brown">Banking</span></h1>
          <p>Suas soluções bancárias são simplificadas e livres de taxas quando<br>
            feitas pelo Sistema Internet Banking.<br> 
            Todos usuários são livres de taxas para usufruir do nosso pix e da<br> 
            nossa ampla variedade de investimentos bancários, que vão da compra<br> 
            de participações em fundos do mercado imobiliário, compra de ações<br> 
            da bolsa de valores japonesa e investimentos em criptomoedas. 
           </p>
          <div class="button_section"> <a class="main_bt" href="pix.php">Pix</a> <a class="main_bt" href="investments.php">Investir</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>