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
    $nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
    $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $estado_civil = filter_input(INPUT_POST, 'estado_civil', FILTER_SANITIZE_STRING);
    $horas_disponiveis = filter_input(INPUT_POST, 'horas_disponiveis', FILTER_SANITIZE_STRING);
    $idade_crianca = filter_input(INPUT_POST, 'idade_crianca', FILTER_SANITIZE_STRING);
    $escolaridade = filter_input(INPUT_POST, 'escolaridade', FILTER_SANITIZE_STRING);
    $experiencia = filter_input(INPUT_POST, 'experiencia', FILTER_SANITIZE_STRING);
    $disponibilidade = filter_input(INPUT_POST, 'disponibilidade', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);



//Inserir no BD                                 nomes no banco                 nomes das variaveis
    $result_msg_cont = "INSERT INTO baba (nome, email, senha, cep, cpf, endereco, bairro, uf, numero, celular, nascimento, sexo, estado_civil, horas_disponiveis, idade_crianca, escolaridade, experiencia, disponibilidade, descricao) VALUES (:nome, :email, :senha, :cep, :cpf, :endereco, :bairro, :uf, :numero, :celular, :nascimento, :sexo, :estado_civil, :horas_disponiveis, :idade_crianca, :escolaridade, :experiencia, :disponibilidade, :descricao)";

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
    $insert_msg_cont->bindParam(':nascimento', $nascimento);
    $insert_msg_cont->bindParam(':sexo', $sexo);
    $insert_msg_cont->bindParam(':estado_civil', $estado_civil);
    $insert_msg_cont->bindParam(':horas_disponiveis', $horas_disponiveis);
    $insert_msg_cont->bindParam(':idade_crianca', $idade_crianca);
    $insert_msg_cont->bindParam(':escolaridade', $escolaridade);
    $insert_msg_cont->bindParam(':experiencia', $experiencia);
    $insert_msg_cont->bindParam(':disponibilidade', $disponibilidade);
    $insert_msg_cont->bindParam(':descricao', $descricao);


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