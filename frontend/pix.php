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
<body class="bg-danger">
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
                                        <form method="post" name="pix" action="../backend/inserir.php">

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
                                                <button class="btn btn-danger form-control"  type="submit" name="pagar">Pagar</button>
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
    </body>
</html>