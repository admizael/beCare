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
    
    <div class="container" id="listing ">
        <div class="row">
            <div class="title_form">
                <h1 class="amarelo">Crie sua conta de Babá</h1>
            </div>
        </div>
        <legend class="rosa">Dados de acesso</legend>
        
         <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

        <form method="POST" class="form-group" action="validar_baba.php">
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
        
         
        <label  class="form-group__item" for="nascimento">Nascimento</label>
        <div class="type-items">
            <input type="date" name=nascimento >
        </div><br>
                
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
                </div><br>

            <div class="form-group radio_buttons ">
                <span>Sexo</span>
                <div class="type-items-form">
                     <span class="radio">
                        <label class="radio_buttons_label" for="radio_buttons_label">
                            <input class="radio_buttons gender" type="radio" value="feminino" name="sexo">Feminino
                        </label>
                    </span>
                    <span class="radio">
                        <label class="radio_buttons_label" for="radio_buttons_label">
                            <input class="radio_buttons gender" type="radio" value="masculino" name="sexo">Masculino
                        </label>
                    </span>
                </div>
            </div>
            
            <div class="form-group radio_buttons select-form">
                <span>Estado Civil</span>
                <div class="type-items-form">
                    <div>
                        <select name="estado_civil">
                            <option value=" " name="estado_civil"></option>
                            <option value="solteiro" name="estado_civil">Solteira(o)</option>
                            <option value="casado" name="estado_civil">Casada(o)</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <legend class="rosa">Informações Profissionais</legend>

                <div class="form-group radio_buttons ">
                    <span>Horas Disponíveis no dia</span>
                    <div class="type-items-form" name="horas_disponiveis">
                        <p class="radio">
                            <label class="checkbox_buttons_label" for="radio_buttons_label">
                                Folguista/Por hora
                                <input class="radio_buttons" type="checkbox" value="Folguista/ Por hora" name="horas_disponiveis" id="details_gender_1">
                            </label>
                        </p>
                        <p class="checkbox">
                            <label class="checkbox_buttons_label" for="checkbox_buttons_label">
                                Meio período manhã
                                <input class="checkbox_buttons" type="checkbox" value="Meio periodo manha" name="horas_disponiveis" id="details_gender_2">
                            </label>
                        </p>                                   

                        <p class="checkbox">
                            <label class="checkbox_buttons_label" for="checkbox_buttons_label">
                                 Meio período Tarde
                                <input class="checkbox_buttons" type="checkbox" value="Meio periodo tarde" name="horas_disponiveis" id="details_gender_2">
                            </label>
                        </p>                

                        <p class="checkbox">
                            <label class="checkbox_buttons_label" for="checkbox_buttons_label">
                                 Mensalista Diurno
                                <input class="checkbox_buttons" type="checkbox" value="Mensalista diurno" name="horas_disponiveis" id="details_gender_2">
                            </label>
                        </p>

                        <p class="checkbox">
                            <label class="checkbox_buttons_label" for="checkbox_buttons_label">
                                 Mensalista Moturno
                                <input class="checkbox_buttons" type="checkbox" value="Menslista noturno" name="horas_disponiveis" id="details_gender_2">
                            </label>
                        </p>
                    </div>
                </div>     

                <div class="form-group radio_buttons ">
                    <span>Faixa etária da criança</span>
                    <div class="type-items-form" name="idade_crianca">
                        <p class="radio">
                            <label class="checkbox_buttons_label" for="radio_buttons_label">
                                Recém Nascido
                                <input class="radio_buttons" type="checkbox" value="Recem Nascido" name="idade_crianca" id="details_gender_1">
                            </label>
                        </p>
                        <p class="checkbox">
                            <label class="checkbox_buttons_label" for="checkbox_buttons_label">
                                0 a 2 anos
                                <input class="checkbox_buttons" type="checkbox" value="0 a 2 anos" name="idade_crianca" id="details_gender_2">
                            </label>
                        </p>                                   

                        <p class="checkbox">
                            <label class="checkbox_buttons_label" for="checkbox_buttons_label">
                                 2 a 5 anos
                                <input class="checkbox_buttons" type="checkbox" value="2 a 5 anos" name="idade_crianca" id="details_gender_2">
                            </label>
                        </p>                

                        <p class="checkbox">
                            <label class="checkbox_buttons_label" for="checkbox_buttons_label">
                                 mais de 5 anos
                                <input class="checkbox_buttons" type="checkbox" value="mais de 5 anos" name="idade_crianca" id="details_gender_2">
                            </label>
                        </p>
                    </div>
                </div> 

                <div class="form-group radio_buttons select-form">
                <span>Sua Escolaridade</span>
                <div class="type-items-form">
                    <div>
                        <select name="escolaridade">
                            <option value=" " name="escolaridade"></option>
                            <option value="ensino superior" name="escolaridade">Ensino Superior</option>
                            <option value="curso tecnico" name="escolaridade">Curso Tecnico</option>
                            <option value="ensino medio" name="escolaridade">Ensino Medio</option>
                            <option value="ensino fundamental" name="escolaridade">Ensino Fundamental</option>
                        </select>
                    </div>
                </div>
                </div>

                <div class="form-group radio_buttons select-form">
                <span>Experiência</span>
                <div class="type-items-form">
                    <div>
                        <select name="experiencia">
                            <option value=" " name="experiencia"></option>
                            <option value="Sem experiência" name="experiencia">Sem experiência</option>
                            <option value="menos de 1 ano" name="experiencia">menos de 1 ano </option>
                            <option value="1 a 2 anos" name="experiencia">1 a 2 anos</option>
                            <option value="2 a 5 anos" name="experiencia">2 a 5 anos</option>
                            <option value="mais de 5 anos" name="experiencia">mais de 5 anos</option>
                        </select>
                    </div>
                </div>
                </div>

                  <div class="form-group radio_buttons select-form">
                <span>Disponibilidade</span>
                <div class="type-items-form">
                    <div>
                        <select name="disponibilidade">
                            <option value=" " name="disponibilidade"></option>
                            <option value="Sem experiência" name="disponibilidade">Estou trabalhando</option>
                            <option value="menos de 1 ano" name="disponibilidade">Inicio Imediato </option>
                        </select>
                    </div>
                </div>
                </div>
            
                 <legend class="rosa">Fale sobre sua experiência e motivação</legend>
                <p class="text-center">Não coloque telefone e e-mail neste campo. Caso contrário seu cadastro será excluído.</p>
                <div class="form-group text optional housemaid_description" name="descricao">
                    <label class="form-group__item" for="housemaid_description">Descrição:</label>
                    <div>
                        <textarea rows="4" placeholder="Escreva aqui um pouco sobre você, conte-nos sua experiência." class="text optional form-control" name="descricao" id="housemaid_description"></textarea>
                    </div>
                </div>
                
            <div class="form-group">
                <div class="type-items">
                    <input name="cadastrar" type="submit" value="Enviar" class="btn btn-primary azulbg">
                </div>
            </div>
        </form>
    </div> 
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
