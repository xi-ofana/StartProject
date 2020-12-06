<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<link rel="stylesheet" href="src/css/main.css">

		<title>
			Startup
		</title>

	</head>
	<body>


	<?php
	require_once "conexao.php";
	//print_r($_GET);
	$id_startup = $_GET["startup"];
	$query = "SELECT * FROM startup WHERE id_startup=$id_startup";
	
	//echo $query;exit;
	$executa = mysqli_query($conexao,$query);
	$dados = mysqli_fetch_array($executa);

	
	echo "		<div class='row' style='background-color='white'>
	
	<p><img src='logotipos/$dados[logotipo]' width='35%'/></p>
	<p><b>Razão Social: </b>$dados[nome]</p>		
	<p>$dados[razao_social]</p>
	<p><b>CNPJ: </b>$dados[cnpj]</p>
	<div class='d-flex'><b>Segmento: </b><p>$dados[segmento]</p></div>
	<p>$dados[endereco]</p>
	<p><b>Cidade: </b>$dados[cidade]</p>	
	<p>$dados[data_fundacao]</p>	
	<p>$dados[numero_funcionarios]</p>	
	<p>$dados[telefone]</p>	
	<p>$dados[descricao]</p>	

	";
?>
<a href="lista.php" class='btn btn-danger'>Voltar</a>
</div>
	
	</body>
</html>
