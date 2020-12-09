<?php
	require_once "conexao.php";
	$nome = $_POST["campoNome"];
	$data_fundacao  = $_POST["fundac"];
	$razao = $_POST["razao"];
	$cnpj = $_POST["cnpj"];
	$segmento = $_POST["segmento"];
	$endereco = $_POST["endEmp"];
	$numero = $_POST["numero"];
    $cidade = $_POST["cidade"];
	$funcionarios = $_POST["funcionarios"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$csenha = $_POST["confsenha"];
	$descricao = $_POST["descricao"];
	$logo = $_FILES["logotipo"];
	$telefone = $_POST["telefone"];
	
	//print_r($_POST);
	//print_r($logo);
	//exit;
	
	
	/*VALIDAÇÕES*/
	

	if($senha!=$csenha){
		echo "<script>
				alert('As senhas não coincidem!');
				history.back();
			 </script>
		";
	}else{
		$senha = sha1($senha);
		$extensao = explode(".",$logo["name"]);
		$nomeimagem = md5(uniqid(time())).".".$extensao[1];
		$destino = "logotipos/".$nomeimagem;
		$upar = move_uploaded_file($logo["tmp_name"],$destino);
		
		$query = "INSERT INTO startup (nome,razao_social,cnpj,segmento,endereco,cidade,data_fundacao, numero, numero_funcionarios,telefone,email,senha,logotipo,descricao)
				  VALUES('$nome','$razao','$cnpj','$segmento','$endereco','$cidade','$numero','$data_fundacao','$funcionarios','$telefone','$email','$senha','$nomeimagem','$descricao')";
		
		$inserir = mysqli_query($conexao,$query);
		//echo $query;exit;


		if($upar==1 && $inserir==1){
			echo "<script>
				alert('STARTUP cadastrada com sucesso!');
				location.href='index.html';
			 </script>
		";
		}else{
			echo "<script>
				alert('Ops deu ruim!');
				
			 </script>";
		}
	}
?>