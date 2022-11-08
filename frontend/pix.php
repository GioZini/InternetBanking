<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once('includes/head.php');
    session_start();
    $dados = $_SESSION
    ?>
    
</head>
<body>
<?php include_once('includes/navbar.php');?>
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Internet Banking</h3></div>
                                    <h3 class="text-center font-weight-light my-4">PIX</h3>
                                    <div class="card-body">
                                        <form method="post">

                                            <div class="form-floating mb-3">
                                                <input type="hidden" value="2" name="registro" id="registro">
                                                <input class="form-control" id="cpfPagador" name="cpfPagador" required placeholder="."/>
                                                    <label for="cpfPagador">CPF do Pagador</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="senha" type="password" name="senha" required placeholder="."/>
                                                    <label for="inputPassword">Senha do Pagador</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="cpfRecebedor" name="cpfRecebedor" required placeholder="."/>
                                                    <label for="cpfRecebedor">CPF do Remetente</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="valor" name="valor" type="number" required placeholder="."/>
                                                    <label for="inputValor">Valor em R$</label>
                                            </div>
                                
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary form-control"  type="submit" name="pagar">Pagar</button>
                                            </div>
                                        </form>
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