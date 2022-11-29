<?php
include_once('conecta.php');
$dados = $_POST;
$banco = new Banco;


session_start();
$session = $_SESSION;

try {
    $conn = $banco->conectar();
} catch (PDOException $e) {
    echo 'Falha ao salvar os arquivos. Favor, tente mais tarde.';
}

// dependendo do valor que vier em registro, nós usamos um método diferente
// 1 = usuario
// 2 = pix
// 3 = 
// 4 = 

// Faz um INSERT diferente, de acordo com os números que vierem representando as tabelas
switch ($dados['registro']) {

    case 1:
        if ($dados['senha'] == $dados['confirmpassword']) {
            $query = $conn->prepare('SELECT * FROM usuario WHERE cpf = :cpf');
            $query->execute([
                ':cpf' => $dados['cpf']
            ]);
            // Se houver um item com esse nome no banco, ele não insere
            if ($query->fetch(PDO::FETCH_ASSOC) == null) {
                $query = $conn->prepare('INSERT INTO usuario (nome, sobrenome, senha, cpf, email, fone, balanco) VALUES (:nome, :sobrenome, :senha, :cpf, :email, :fone, :balanco);');
                $query->execute([
                    ':nome' => $dados['nome'],
                    ':sobrenome' => $dados['sobrenome'],
                    ':senha' => $dados['senha'],
                    ':cpf' => $dados['cpf'],
                    ':email' => $dados['email'],
                    ':fone' => $dados['fone'],
                    ':balanco' => $dados['balanco'],
                ]);
                header('location:..\frontend\login.php');
            } else {
                // Por enquanto só morre, depois mostrar de forma mais amigável para o usuário
                die('Já existe um usuário com o mesmo CPF cadastrado');
            }
            break;
        } else {
            die("<script>alert('As senhas nâo coincidem');</script>");
        }

    case 2:

    $valor = $dados['valor'];

        if ($session['senha'] == $dados['senha'] and $session['cpf'] == $dados['cpfPagador'] and $session['balanco'] >= $valor) {

            $query1 = $conn->prepare('SELECT * FROM usuario WHERE cpf = :cpfRecebedor');
            $query1->execute([
                ':cpfRecebedor' => $dados['cpfRecebedor']
            ]);
            // Se houver um usuário com esse cpf no banco, ele executa
            if ($query1->fetch(PDO::FETCH_ASSOC) != null) {
                $query2 = $conn->prepare(' UPDATE usuario SET balanco = balanco + :valor WHERE cpf = :cpfRecebedor;');
                $query2->execute([
                    ':cpfRecebedor' => $dados['cpfRecebedor'],
                    ':valor' => $valor
                ]);

                $query3 = $conn->prepare(' UPDATE usuario SET balanco = balanco - :valor WHERE cpf = :cpfPagador;');
                $query3->execute([
                    ':cpfPagador' => $dados['cpfPagador'],
                    ':valor' => $valor
                ]);

                $_SESSION['balanco']=$_SESSION['balanco']-$valor;
                echo "
                <html>
                <body>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                <script>
                Swal.fire({
                  icon: 'success',
                  title: 'Parabéns',
                  text: 'Pix enviado com sucesso!'
                }).then(function() {
                    window.location = '../frontend/pix.php';
                });
              </script>
              </body>
              </html>";

            } else {
                echo "
                <html>
                <body>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                <script>
                Swal.fire({
                  icon: 'error',
                  title: 'Erro...',
                  text: 'CPF do Recebedor inexistente'
                }).then(function() {
                    window.location = '../frontend/pix.php';
                });
              </script>
              </body>
              </html>";
            }
        } else {
            echo "
                <html>
                <body>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
                <script>
                Swal.fire({
                  icon: 'error',
                  title: 'Erro...',
                  text: 'CPF ou senha do usuário incorretos e/ou valor excede balanço da conta'
                }).then(function() {
                    window.location = '../frontend/pix.php';
                });
              </script>
              </body>
              </html>";
        }
        break;

    case 3:
    case 4:
}

function pegaUltimoId($conexao)
{
    $query = $conexao->prepare("SELECT LAST_INSERT_ID()");
    $query->execute();
    return $query->fetch(PDO::FETCH_NUM);
}


?>