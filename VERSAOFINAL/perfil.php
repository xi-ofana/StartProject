<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title> Meu perfil </title>
<?php
require_once "conexao.php";

session_start();
//print_r($_SESSION); exit;
if((!isset ($_SESSION['login']) == true))
{
  unset($_SESSION['login']);
  header('location:index.php');
  }else{

  

$logado = $_SESSION['login'];
?>

</head>

<body>
<?php
	$query="SELECT id_startup, nome, descricao, logotipo, data_fundacao, email, telefone, endereco FROM startup WHERE id_startup=$logado";
    $executar = mysqli_query($conexao,$query);
?>

<?php
	$dados = mysqli_fetch_array($executar);
    
		//print_r($dados);
		echo"

    <img src='logotipos/$dados[logotipo]' width='150px' height='140px' alt='logo'>
	<div class='media-body'>
      <h5 class='mt-0 mb-1'>$dados[nome]</h5>
	  $dados[descricao]
	 <br> <br> <br>
	 </div>";
}
?>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>