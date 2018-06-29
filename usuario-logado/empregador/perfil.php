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
    <link rel="stylesheet" href="../../css/userLogin.css">
    <link rel="stylesheet" href="../../css/perfil.css">
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
          <div class="select-perfil">
            <select>
              <option>
                Minha Conta
              </option>         
              <option>
                Perfil
              </option>         
              <option>
                Encontrar Babá
              </option>         
              <option>
                Sair
              </option>
            </select>
          </div>
       </nav> 
      <div class="menu-mask"></div>  
    </header>
    <div class="box-perfil">  
      <div class="wapper-box--more-information">
        <div class="wapper-box--user">
          <div class="wapper-box--user-information">
            <div class="more-information-box-data-items">
              <div class="box-data--itens-perfil">  
                <img src="../../img/perfil.png"/>
                <div class="box-data--itens-perfil-text">  
                  <h3> Mizael </h3>
                  <span>Duque de Caxias - RJ</span>
                  <span>21 anos</span>
                </div>
              </div>
              <div class="box-data-items-text">
                <h3> Dados Pessoais </h3>
                <strong>CPF:</strong><span>
                 122.323.231-2
                </span>
              </div>                                  
              <div class="box-data-items-text">
                <strong>Telefone: </strong><span>
                (21) 2253 5353
                </span>
              </div>                  
              <div class="box-data-items-text">
                <strong>Nascimento:</strong><span>
                 12/04/1988
                </span>
              </div>
              <div class="box-data-items-text">
                <strong>Rua:</strong><span>
                 ipsum dolor sit amet, 
                </span>
              </div>                   
            </div>                 
          </div>
          <div class="box-actions">
            <span>Ações</span>
            <div class="box-actions-wrapper">
              <a class="azulbg" href="">Editar Perfil</a>
              <a class="rosabg" href="">Mensagem</a>
              <a class="azulbg" href="">Ajuda</a>
              <a class="rosabg" href="">Sair</a>
            </div>
            <div class="box-text">
              <h3>Conexões</h3>
              <span>Convide as mães e os pais para os quais ja trabalhou e peça para que façam uma avaliação sua.</span>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <footer>
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
          <span>&copy; 2018  -  Copyright -  BeCare Now WebSite</span>
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
      $(".box-user-item__buttom.rosabg").click(function() {
      $(".wapper-box--more-information").toggleClass("active");
    });           

    $(".more-information-close").click(function() {
      $(".wapper-box--more-information").toggleClass("active");
    }); 

    </script>      
  </body>
</html>