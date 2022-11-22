<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once('includes/head.php');
    session_start();
    $session = $_SESSION
    ?>
    
</head>
<body>
<?php include_once('includes/navbar.php');?>
<div><h1>Bem vindo ao Internet Banking, <?php echo $session['nome'];?></h1></div>
<div><p>Acesse facilmente as informações da sua conta</p></div>
<div><h2>Seu Balanço é de: R$<?php echo $session['balanco'];?></h2></div>
</body>
</html>