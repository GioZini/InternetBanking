<?php
include_once('conecta.php');
$dados = $_POST;
$banco = new Banco;
$valor = $dados['valor'];

session_start();
$session = $_SESSION;

try {
    $conn = $banco->conectar();
} catch (PDOException $e) {
    echo 'Falha no registro do investimento. Favor, tente mais tarde.';
}

// dependendo do valor que vier em registro do investimento, as probabilidades são diferentes
// 1 = Mercado Imobiliário // 40% => Desval. 30% | 40% => Val. 10% | 20% => Val. 50%
// 2 = Bolsa de valores Japonesa // 20% => Desval. 70% | 50% => Desval. 20% | 30% => Val. 110%
// 3 = Criptomoedas // 60% => Desval. 100% | 30% => Desval. 60% | 10% => Val. 400%

switch ($dados['registroInvestimento']) {

    case 1:
        if ($session['balanco'] >= $valor) {

                $sorte = rand(1,5);

            if ($sorte == 1 or $sorte == 2){
                $query1 = $conn->prepare(' UPDATE usuario SET balanco = balanco - (:valor * 0.3) WHERE cpf = :cpfInvestidor;');
                $query1->execute([
                ':cpfInvestidor' => $_SESSION['cpf'],
                ':valor' => $valor
                ]);

                echo "
                <html>
                <body>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                <script>
                Swal.fire({
                icon: 'error',
                title: 'Seu investimento deu resultado',
                text: 'Sentimos muito... seu investimento desvalorizou em 30%'
                }).then(function() {
                    window.location = '../frontend/investments.php';
                });
                </script>
                </body>
                </html>";
            } 
            else{
                if ($sorte == 3 or $sorte == 4) {
                    $query2 = $conn->prepare(' UPDATE usuario SET balanco = balanco + (:valor * 0.1) WHERE cpf = :cpfInvestidor;');
                    $query2->execute([
                    ':cpfInvestidor' => $_SESSION['cpf'],
                    ':valor' => $valor
                    ]);

                    echo "
                    <html>
                    <body>
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                    <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Seu investimento deu resultado',
                    text: 'Parabéns! Seu investimento valorizou em 10%'
                    }).then(function() {
                        window.location = '../frontend/investments.php';
                    });
                    </script>
                    </body>
                    </html>";
                } else {
                        $query3 = $conn->prepare(' UPDATE usuario SET balanco = balanco + (:valor * 0.5) WHERE cpf = :cpfInvestidor;');
                        $query3->execute([
                        ':cpfInvestidor' => $_SESSION['cpf'],
                        ':valor' => $valor
                        ]);

                        echo "
                        <html>
                        <body>
                        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                        <script>
                        Swal.fire({
                        icon: 'success',
                        title: 'Seu investimento deu resultado',
                        text: 'Parabéns! Seu investimento valorizou em 50%'
                        }).then(function() {
                            window.location = '../frontend/investments.php';
                        });
                        </script>
                        </body>
                        </html>";
                }
                
            }
        } else {
            echo "
                <html>
                <body>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                <script>
                Swal.fire({
                  icon: 'warning',
                  title: 'Erro...',
                  text: 'Valor do investimento excede balanço da conta'
                }).then(function() {
                    window.location = '../frontend/investments.php';
                });
              </script>
              </body>
              </html>";
        }
        break;
        


    case 2:
        
        if ($session['balanco'] >= $valor) {

            $sorte = rand(1,10);

        if ($sorte == 1 or $sorte == 2){
            $query1 = $conn->prepare(' UPDATE usuario SET balanco = balanco - (:valor * 0.70) WHERE cpf = :cpfInvestidor;');
            $query1->execute([
            ':cpfInvestidor' => $_SESSION['cpf'],
            ':valor' => $valor
            ]);

            echo "
            <html>
            <body>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
            <script>
            Swal.fire({
            icon: 'error',
            title: 'Seu investimento deu resultado',
            text: 'Sentimos muito... seu investimento desvalorizou em 70%'
            }).then(function() {
                window.location = '../frontend/investments.php';
            });
            </script>
            </body>
            </html>";
        } 
        else{
            if ($sorte >= 3 and $sorte <= 7) {
                $query2 = $conn->prepare(' UPDATE usuario SET balanco = balanco - (:valor * 0.2) WHERE cpf = :cpfInvestidor;');
                $query2->execute([
                ':cpfInvestidor' => $_SESSION['cpf'],
                ':valor' => $valor
                ]);

                echo "
                <html>
                <body>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                <script>
                Swal.fire({
                icon: 'error',
                title: 'Seu investimento deu resultado',
                text: 'Sentimos muito... seu investimento desvalorizou em 20%'
                }).then(function() {
                    window.location = '../frontend/investments.php';
                });
                </script>
                </body>
                </html>";
            } else {
                    $query3 = $conn->prepare(' UPDATE usuario SET balanco = balanco + (:valor * 1.1) WHERE cpf = :cpfInvestidor;');
                    $query3->execute([
                    ':cpfInvestidor' => $_SESSION['cpf'],
                    ':valor' => $valor
                    ]);

                    echo "
                    <html>
                    <body>
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                    <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Seu investimento deu resultado',
                    text: 'Parabéns! Seu investimento valorizou em 110%'
                    }).then(function() {
                        window.location = '../frontend/investments.php';
                    });
                    </script>
                    </body>
                    </html>";
            }
            
        }
    } else {
        echo "
            <html>
            <body>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
            <script>
            Swal.fire({
              icon: 'warning',
              title: 'Erro...',
              text: 'Valor do investimento excede balanço da conta'
            }).then(function() {
                window.location = '../frontend/investments.php';
            });
          </script>
          </body>
          </html>";
    }
    break;

    case 3:
        if ($session['balanco'] >= $valor) {

            $sorte = rand(1,10);

        if ($sorte >= 1 and $sorte <= 6){
            $query1 = $conn->prepare(' UPDATE usuario SET balanco = balanco - (:valor * 1) WHERE cpf = :cpfInvestidor;');
            $query1->execute([
            ':cpfInvestidor' => $_SESSION['cpf'],
            ':valor' => $valor
            ]);

            echo "
            <html>
            <body>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
            <script>
            Swal.fire({
            icon: 'error',
            title: 'Seu investimento deu resultado',
            text: 'Sentimos muito... você perdeu tudo'
            }).then(function() {
                window.location = '../frontend/investments.php';
            });
            </script>
            </body>
            </html>";
        } 
        else{
            if ($sorte >= 6 and $sorte <= 9) {
                $query2 = $conn->prepare(' UPDATE usuario SET balanco = balanco - (:valor * 0.6) WHERE cpf = :cpfInvestidor;');
                $query2->execute([
                ':cpfInvestidor' => $_SESSION['cpf'],
                ':valor' => $valor
                ]);

                echo "
                <html>
                <body>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                <script>
                Swal.fire({
                icon: 'error',
                title: 'Seu investimento deu resultado',
                text: 'Sentimos muito... seu investimento desvalorizou em 60%'
                }).then(function() {
                    window.location = '../frontend/investments.php';
                });
                </script>
                </body>
                </html>";
            } else {
                    $query3 = $conn->prepare(' UPDATE usuario SET balanco = balanco + (:valor * 4) WHERE cpf = :cpfInvestidor;');
                    $query3->execute([
                    ':cpfInvestidor' => $_SESSION['cpf'],
                    ':valor' => $valor
                    ]);

                    echo "
                    <html>
                    <body>
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                    <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'Seu investimento deu resultado',
                    text: 'Sorte grande! Seu investimento valorizou em 400%'
                    }).then(function() {
                        window.location = '../frontend/investments.php';
                    });
                    </script>
                    </body>
                    </html>";
            }
            
        }
    } else {
        echo "
            <html>
            <body>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
            <script>
            Swal.fire({
              icon: 'warning',
              title: 'Erro...',
              text: 'Valor do investimento excede balanço da conta'
            }).then(function() {
                window.location = '../frontend/investments.php';
            });
          </script>
          </body>
          </html>";
    }
    break;
}

?>