<?php session_start();
include_once(__DIR__ . '..\..\backend\conecta.php');
if(isset($_POST['login']))
  {
    $cpf = $_POST['cpf'];
    $password = $_POST['password'];

    $banco = new Banco;
    $conn = $banco->conectar();    
    
    $stmt = $conn->prepare('SELECT * FROM usuario WHERE cpf = :cpf AND senha = :senha');
    $stmt->execute([
        ':cpf' => $cpf,
        ':senha' => $password
        ]
    );    
    $ret = $stmt->fetch();
    
    if($ret){        
        $_SESSION['nome']=$ret['nome'];
        $_SESSION['cpf']=$ret['cpf'];
        $_SESSION['balanco']=$ret['balanco'];
        $_SESSION['email']=$ret['email'];
        $_SESSION['fone']=$ret['fone'];
        $_SESSION['senha']=$ret['senha'];

        echo "<script>window.location.href='index.php'</script>";
    }
    else{
        echo "<script>alert('Não foi encontrado usuário com o cpf e senha informados');</script>";
    }
  }
  ?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <?php include_once('includes/head.php');?>
        <title>Login</title>
    </head>
    <body class="bg-danger">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Internet Banking</h3></div>
                                    <h3 class="text-center font-weight-light my-4">Login do Usuário</h3>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputCpf" type="cpf" name="cpf" placeholder="Cpf" required />
                                                <label for="inputcpf">CPF - Ex.: 00011122233</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Senha" name="password" required />
                                                <label for="inputPassword">Senha</label>
                                            </div>
                                
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button  class="btn btn-danger"  type="submit" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registration.php">Não possui uma conta? Cadastre-se!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>