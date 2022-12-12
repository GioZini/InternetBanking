<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    session_start();
    $dados = $_SESSION;
    include_once('includes/head.php'); include_once('includes/modal.php');
    ?>
    
</head>
<body>
<?php include_once('includes/navbar.php');?>

    <div class=>

        <div class="card" style="width: 23rem;">
            <img src="https://blog.movingimoveis.com.br/wp-content/uploads/2020/09/post_thumbnail-9e28e79a8cca3df6361643ac757216c4.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mercado Imobiliário</h5>
                <p class="card-text">Investimento pouco volátil e de retorno modesto.</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-imob" class="btn btn-danger">Investir agora</a>
            </div>
            </div>

            <div class="card" style="width: 23rem;">
            <img src="https://www.jpx.co.jp/english/common/images/other/b5b4pj000000f2gn-img/ogp.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bolsa de valores Japonesa</h5>
                <p class="card-text">Investimento modestamente volátil e de retorno médio.</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-jap" class="btn btn-danger">Investir agora</a>
            </div>
            </div>

            <div class="card" style="width: 23rem;">
            <img src="https://penntoday.upenn.edu/sites/default/files/2022-01/cryptocurrency-main.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Criptomoedas</h5>
                <p class="card-text">Investimento extremamente volátil e de retorno alto.</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-cripto" class="btn btn-danger">Investir agora</a>
            </div>
            </div>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>