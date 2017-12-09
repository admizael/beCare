<?php
	//conectamos com o servidor
	$conexao=mysqli_connect('localhost','root','');
	//verificamos a conexao
	if(!$conexao){
		echo"Não foi possivel se conectar com o servidor";
	}else{

		$banco=mysqli_select_db( $conexao,'teste');
		if(!$banco){
			echo"Não foi encontrada a base de dados";			
		}
	}
	// Charset para utilizar acentuação
	mysqli_set_charset($conexao,'utf8');

	//recuperar as variaveis
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$mensagem=$_POST['mensagem'];
	//fazendo a sentença sql
	/*$sql="INSERT INTO cadastro_empregador(nome,email,mensagem) VALUES('$nombre',
								   '$correo',
								   '$mensaje')";*/
	//executamos la sentencia de sql
	
	//$ejecutar=mysqli_query($conectar,$sql); // também posso usar o insert into direto dentro da função mysql_qquery
	
	$executar=mysqli_query($conexao, "INSERT INTO cadastro_empregador(nome,email,mensagem) VALUES('$nome',
								   '$email',
								   '$mensagem')");

	//verificamos se está executando
	if(!$executar){
		echo"Ocorreu algum erro";
	}else{
		echo"Datos Guardados Corretamente<br><a href='index.html'>Voltar</a>";
	}
?>