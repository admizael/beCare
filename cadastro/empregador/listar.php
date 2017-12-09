
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

	$sql = mysqli_query($conexao, "select * from cadastro_empregador") or die ("Erro na consulta");

	// NUMERO DE LINHAS
	// $linhas = mysqli_num_rows($sql);
	// echo $linhas;
	
	while ($dados = mysqli_fetch_assoc($sql)) {
		echo $dados['nome'].' - '.$dados['email'].'<br>';
	}

?>