<?php
session_start();
include_once 'conexao.php';

//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$cadastrar = filter_input(INPUT_POST, 'cadastrar', FILTER_SANITIZE_STRING);
if($cadastrar){
    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);


//Inserir no BD                                 nomes no banco                 nomes das variaveis
    $result_msg_cont = "INSERT INTO empregador (nome, email, senha, cep, cpf, endereco, bairro, uf, numero, celular) VALUES (:nome, :email, :senha, :cep, :cpf, :endereco, :bairro, :uf, :numero, :celular)";

 $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':nome', $nome);
    $insert_msg_cont->bindParam(':email', $email);
    $insert_msg_cont->bindParam(':senha', $senha);
    $insert_msg_cont->bindParam(':cep', $cep);
    $insert_msg_cont->bindParam(':cpf', $cpf);
    $insert_msg_cont->bindParam(':endereco', $endereco);
    $insert_msg_cont->bindParam(':bairro', $bairro);
    $insert_msg_cont->bindParam(':uf', $uf);
    $insert_msg_cont->bindParam(':numero', $numero);
    $insert_msg_cont->bindParam(':celular', $celular);

if($insert_msg_cont->execute()){
        $_SESSION['msg'] = "<p style='color:green;'>Mensagem enviada com sucesso</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso</p>";
        header("Location: index.php");
    }    
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso</p>";
    header("Location: index.php");

}