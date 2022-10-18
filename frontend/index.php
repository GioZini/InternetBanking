<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once('includes/head.php');
    session_start();
    $_SESSION['nome'] = 'gustavo';
    $dados = $_SESSION;
    
    if (isset($dados['usuario'])) {
        header('Location: login.php');
    }
    ?>
    
</head>
<body>
<?php include_once('includes/navbar.php'); 
?>
<div><h1>Bem vindo ao Internet Banking</h1></div>
<div><p>Acesse facilmente as informações da sua conta</p></div>
</body>
</html>