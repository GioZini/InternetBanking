<?php
include_once('conecta.php');
$dados = $_POST;
$banco = new Banco;
try{
    $conn = $banco->conectar();
} catch(PDOException $e){
    echo 'Falha ao salvar os arquivos. Favor, tente mais tarde.';
}

// dependendo do valor que vier em registro, nós inserimos em uma tabela diferente
// 1 = 
// 2 = 
// 3 = usuario
// 4 = 

// Faz um INSERT diferente, de acordo com os números que vierem representando as tabelas
switch ($dados['registro']) {

    case 1:
       
    case 2:

       
    case 3:
        if($dados['senha'] == $dados['confirmpassword']){
        $query = $conn->prepare('SELECT * FROM usuario WHERE cpf = :cpf');
        $query->execute([
            ':cpf' => $dados['cpf']           
        ]);
        // Se houver um item com esse nome no banco, ele não insere
        if($query->fetch(PDO::FETCH_ASSOC) == null){
            $query = $conn->prepare('INSERT INTO usuario (nome, sobrenome, senha, cpf, email, fone) VALUES (:nome, :sobrenome, :senha, :cpf, :email, :fone);');
        $query->execute([
            ':nome' => $dados['nome'],
            ':sobrenome' => $dados['sobrenome'],
            ':senha' => $dados['senha'],
            ':cpf' => $dados['cpf'],
            ':email' => $dados['email'],
            ':fone' => $dados['fone'],
        ]);
        header('location:..\..\frontend\login.php');
        
        } else{
            // Por enquanto só morre, depois mostrar de forma mais amigável para o usuário
            die('Já existe um usuário com o mesmo CPF cadastrado');
        }
        break;
    } else{
        die("<script>alert('As senhas nâo coincidem');</script>");
    }
        //cardapio e cardapio_item
    case 4:
        
}

function pegaUltimoId($conexao){
    $query = $conexao->prepare("SELECT LAST_INSERT_ID()");
    $query->execute();
    return $query->fetch(PDO::FETCH_NUM);
}


?>