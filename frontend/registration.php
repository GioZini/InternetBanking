<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php include_once('includes/head.php');?>

    <title>InternetBanking | Cadastro</title>

    <?php session_start(); ?>
</head>

<body class="bg-danger">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">InternetBanking</h3>
                                </div>
                                <h3 class="text-center font-weight-light my-4">Cadastro de Usuário</h3>
                                <div class="card-body">
                                    <form method="post" name="registration" action="../backend/inserir.php">
                                        <div class="form-floating mb-3">
                                            <input type="hidden" value="3" name="registro" id="registro">
                                            <input class="form-control" id="nome" type="text" name="nome"
                                                placeholder="Insira Nome" required />
                                            <label for="nome">Nome</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="sobrenome" type="text" name="sobrenome"/>
                                            <label for="sobrenome">Sobrenome</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="cpf" type="text" name="cpf"/>
                                            <label for="cpf">CPF - Ex.: 00011122233</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" type="mail" name="email"/>
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="fone" type="text" name="fone"/>
                                            <label for="fone">Fone - Ex.: 54912345678</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" type="password"
                                                        placeholder="Crie uma Senha" name="senha" id="senha" />
                                                    <label for="senha">Senha</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm"
                                                        type="password" placeholder="Confirme a Senha"
                                                        name="confirmpassword" id="confirmpassword" />
                                                    <label for="inputPasswordConfirm">Confirmar a Senha</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" name="submit" class="btn btn-danger btn-block">Criar Conta</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                <?php
                                $sessao = isset($_SESSION['usuario_id']);
                                        if($sessao == false)
                                        { echo '<div class="small"><a href=..\frontend\login.php>Já possui uma conta? Faça o Login</a></div><hr />';
                                        }else{
                                }
                                ?>    
              
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>