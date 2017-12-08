<?php
	//conectar com o servidor
	$conectar=@mysql_connect('localhost','root','') or die ("erro");
	//verificamos la conexion
	if(!$conectar){
		echo"No pode-se conectar com o servidor";
	}else{

		$base=mysql_select_db('teste');
		if(!$base){
			echo"No foi encontrado a base de dados";			
		}
	}
	//recupera as variaves
	$name=$_POST['name'];
	$email=$_POST['email'];
	$senha=$_POST['password'];
	$cpf=$_POST['cpf'];
	//fazendo a sequencia sql
	$sql="INSERT INTO cadastro_empregador VALUES('$name','$email','$senha','$cpf')";
	//executando a sequencia 
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>