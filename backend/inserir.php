<?php
include_once('conecta.php');
$dados = $_POST;
$banco = new Banco;
try{
    $conn = $banco->conectar();
} catch(PDOException $e){
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
        if($dados['senha'] == $dados['confirmpassword']){
        $query = $conn->prepare('SELECT * FROM usuario WHERE cpf = :cpf');
        $query->execute([
            ':cpf' => $dados['cpf']           
        ]);
        // Se houver um item com esse nome no banco, ele não insere
        if($query->fetch(PDO::FETCH_ASSOC) == null){
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
        
        } else{
            // Por enquanto só morre, depois mostrar de forma mais amigável para o usuário
            die('Já existe um usuário com o mesmo CPF cadastrado');
        }
        break;
    } else{
        die("<script>alert('As senhas nâo coincidem');</script>");
    }

    case 2:
        
        $query0 = $conn0->prepare('SELECT * FROM usuario WHERE cpf = :cpfPagador');
            $query0->execute([
                ':cpfPagador' => $dados['cpfPagador'], 
                'senha' => $senha           
            ]);

        if($dados['senha'] == [$senha]){
            $query1 = $conn1->prepare('SELECT * FROM usuario WHERE cpf = :cpfPagador');
            $query1->execute([
                ':cpfPagador' => $dados['cpfPagador']           
            ]);

            $query2 = $conn2->prepare('SELECT * FROM usuario WHERE cpf = :cpfRecebedor');
            $query2->execute([
                ':cpfRecebedor' => $dados['cpfRecebedor']           
            ]);
            // Se não houver um item com esses cpfs no banco, ele não executa
            if($query1->fetch(PDO::FETCH_ASSOC) != null AND $query2->fetch(PDO::FETCH_ASSOC) != null){
                
                die('funcionou');
                /* $query = $conn->prepare('INSERT INTO usuario (nome, sobrenome, senha, cpf, email, fone, balanco) VALUES (:nome, :sobrenome, :senha, :cpf, :email, :fone, :balanco);');
            $query->execute([
                ':nome' => $dados['nome'],
                ':sobrenome' => $dados['sobrenome'],
                ':senha' => $dados['senha'],
                ':cpf' => $dados['cpf'],
                ':email' => $dados['email'],
                ':fone' => $dados['fone'],
                ':balanco' => $dados['balanco'],
            ]);
            header('location:..\frontend\login.php'); */
            
            } else{
                // Por enquanto só morre, depois mostrar de forma mais amigável para o usuário
                die('CPF do Pagador ou Recebedor inexistente');
            }
            break;
        } else{
            die("<script>alert('Senha Incorreta');</script>");
        }

    case 3:
    case 4:
        
}

function pegaUltimoId($conexao){
    $query = $conexao->prepare("SELECT LAST_INSERT_ID()");
    $query->execute();
    return $query->fetch(PDO::FETCH_NUM);
}


?>