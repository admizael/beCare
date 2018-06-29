<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> BeCare Now - Specialized in baby care </title>
    <meta name="description" content="Agência especializada em serviços de Babá">
    <meta name="keywords" content="agencia de baba, baba, sites">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="icon" href="../../img/baby-logo3.png">
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Leckerli+One');
</style>

<body>
    <!-- CABEÇALHO -->
    <header class="cabecalho container" style="background: #fff">
        <a href="index.html"><h1 class="logo"></h1></a>
        <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul>
                <li><a href="../../index.html">Home</a></li>
                <li><a href="../../index.html#servicos">Serviços</a></li>
                <li><a href="../../index.html#somos">Quem somos</a></li>
                <li><a href="../../index.html#faleconosco">Contato</a></li>
            </ul>
        </nav>
        <div class="menu-mask"></div>
    </header>

        <div class="container" id="listing" style="background-color: #f1f1f">
        <div class="row">
            <div class="title_form">
                <h1 class="amarelo">Crie sua conta de Empregador</h1>
            </div>
        </div> 
        <legend class="azul">Dados de acesso</legend>
        
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

        <form method="POST" class="form-group" action="validar_empregador.php">
            <label class="form-group__item" for="name">Nome: </label>
            <div class="type-items">
                <input type="text" name="nome" placeholder="Inserir o nome completo"><br><br>
            </div>

            <label class="form-group__item" for="email">E-mail: </label>
            <div class="type-items">
                <input type="email" name="email" placeholder="Seu melhor e-mail"><br><br>            
            </div>
            
            <label class="form-group__item" for="password">Senha: </label>
            <div class="type-items">
                <input type="password" name="senha" placeholder=""><br><br>            
            </div>

        <legend class="azul">Dados pessoais</legend></p></p>
        
            <label class="form-group__item" for="cpf">CPF</label>
            <div class="type-items">
                <input type="text" placeholder="Digite apenas números" name="cpf">
            </div><br>

            <label class="form-group__item" for="cep">CEP</label>
            <div class="type-items">
                <input type="text" placeholder="Digite apenas números" name="cep">
            </div><br>
            
            <label class="form-group__item" for="endereco">Endereço</label>
            <div class="type-items">
                <input type="text" placeholder="Digite apenas endereço" name="endereco">
            </div><br>

            <label class="form-group__item" for="bairro">Bairro</label>
            <div class="type-items">
                <input placeholder="Digite apenas o bairro" type="text" name="bairro">
            </div><br>
           
            <label class="form-group__item" for="uf">UF</label>
            <div class="type-items">
                <input placeholder="Digite apenas sua UF" type="text" name="uf">
            </div><br>

             <label class="form-group__item" for="numero">Número</label>
                <div class="type-items">
                    <input placeholder="Ex: 148" type="text" name="numero">
                </div><br>

            <label class="form-group__item" for="phones_number">Celular</label>
                <div class="type-items">
                    <input placeholder="DDD + Telefone" type="text" name="celular">
                </div>

            <div class="form-group">
                <div class="type-items">
                    <input name="cadastrar" type="submit" value="Enviar" class="btn btn-primary azulbg">
                </div>
            </div>
        </form><br>
    <footer>
        <div class="">
            <div class="box-footer">
                <a class="up" href="#"><img alt="up-logo" src="../../img/up-chevron.svg"></a>
                <nav class="menu-list">
                    <div class="box-incons">
                        <a href="#"><img alt="facebook-logo" src="../../img/facebook-logo-button.svg"></a>
                        <a href="#"><img alt="twitter-logo" src="../../img/twitter-logo-button.svg"></a>
                        <a href="#"><img alt="google-plus-logo" src="../../img/google-plus-logo-button2.svg"></a>
                        <a href="#"><img alt="instagram-logo" src="../../img/instagram-logo.svg"></a>
                        <a href="#"><img alt="whatsapp-logo" src="../../img/whatsapp.svg"></a>
                    </div>
                    <ul class="list a">
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#somos">Quem Somos</a></li>
                        <li><a href="#faleconosco">Contatos</a></li>
                    </ul>
                </nav>
            </div>
            <div class="box-footer rosa3">
                <div class="copy">
                    <span>&copy; 2018  -  Copyright - BeCare Now WebSite</span>
                </div>
            </div>
    </footer>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
      function toggle() {
        $(".menu-mask").toggleClass("active");
        $(".menu").toggleClass("active");
      }
      
      $(".btn-menu").click(function() {
        toggle();
      });
      
      $(".btn-close").click(function() {
        toggle();
      }); 
               
      $(".menu-mask").click(function() {
        toggle();
      });          
      
      $(".menu ul li a").click(function() {
        toggle();
      }); 
    </script>
</body>

</html>
