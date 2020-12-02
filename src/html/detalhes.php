<?php
	require_once "conexao.php";
	//print_r($_GET);
	$id_startup = $_GET["startup"];
	$query = "SELECT * FROM startup WHERE id_startup=$id_startup";
	
	//echo $query;exit;
	$executa = mysqli_query($conexao,$query);
	$dados = mysqli_fetch_array($executa);

	
	echo "		
		<p><img src='logotipos/$dados[logotipo]' width='35%'/></p>
		<p><b>Razão Social:</b>$dados[nome]</p>		
		<p>$dados[razao_social]</p>
		<p><b>CNPJ:</b>$dados[cnpj]</p>
		<p>$dados[segmento]</p>
		<p>$dados[endereco]</p>
		<p><b>Cidade:</b>$dados[cidade]</p>	
		<p>$dados[data_fundacao]</p>	
		<p>$dados[numero_funcionarios]</p>	
		<p>$dados[telefone]</p>	
		<p>$dados[descricao]</p>	
	";
?>
	</table>