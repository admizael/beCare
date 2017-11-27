<!DOCTYPE html>
<html>
<head>
	<title>cadastro_empregador</title>
</head>

<body>

<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "babysiter";
	$conexão = mysql_connect($host, $user, $pass) or die(mysql_error());
	mysql_select_db($banco) or die (mysql_error());
?>



<?php 

	$nome = $_POST ['nome'];
	$email = $_POST ['email'];
	$senha = $_POST ['senha'];

	$sql = mysql_query("INSERT INTO empregador(nome, email, senha) VALUES('$nome', '$email', '$senha')");

?>

</body>

</html>