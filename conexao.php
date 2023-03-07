<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
<<<<<<< HEAD
	$dbname = "dbAgenda"; 
=======
	$dbname = "dbemerj2";
>>>>>>> 0e0f99e18f62454e03c0d9bf5ad24812aa4b9b94
	try {
			//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	$conn->set_charset("utf8");
    
    

	}catch (mysqli_sql_exception $e) { 
			die ("erro ao criar conexao:".$e->errorMessage());
	}

		//echo "Conexao realizada com sucesso";

	
?>