<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<title> </title>

	<body>


<?php
	require_once "conexao.php";
	$query="SELECT id_startup, nome, descricao, logotipo FROM startup ORDER BY nome ASC";
	$executar = mysqli_query($conexao,$query);
?>
	<table border='1'>
		<tr>
			<td>Nome</td>
			<td>Ver Detalhes</td>
		</tr>
<?php
	while($dados = mysqli_fetch_array($executar)){
        
		echo "
		
       

		<ul class='list-unstyled'>
  <li class='media'>
    <img class='mr-3' src='logotipos/$dados[logotipo]' width='150px' height='150px' alt='Imagem de exemplo genérica'>
	<div class='media-body'>
      <h5 class='mt-0 mb-1'>$dados[nome]</h5>
	  $dados[descricao]
	 <p> <p> <p>  <a href='detalhes.php?startup=$dados[id_startup]' class='btn btn-primary'>Visitar</a> </p> </p> </p>
	 <br> <br>
	 </div>

  </li>

	
					
		";
	}
?>
	</table>


	 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>

	</html>