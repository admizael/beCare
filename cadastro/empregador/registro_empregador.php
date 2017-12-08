<?php 
class bd{	
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "babysiter"
	
	public function conecta_mysql(){
		$con = mysql_connect($this -> host,$this -> user, $this -> password) or die(mysql_error());
		mysql_select_db($this -> database) or die ("Erro ao selecionar o banco de dados:" .mysql_error());

		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET character_set_connection=utf8");
		mysql_query("SET character_set_client=utf8");
		mysql_query("SET character_set_results=utf8");

		return $con; 
	}
}

?>


<?php

require_once('bd.class.php');


	$empegador =$_POST['nome'];
	$email     =$_POST['email'];
	$senha     =$_POST['senha'];

$objBD = new bd();
$objBD ->conecta_mysql();

$sql = "Insert  int cadastroEmpregador(empregador, email, senha) values ('$empregador, $email, $senha')"

echo $sql;
?>