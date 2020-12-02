<?php

require_once "conexao.php";

if(empty($_POST['emaill']) || empty($_POST['senhal'])){
    header('Location: index.html');
}

$emaill = mysqli_real_escape_string($conexao, $_POST['emaill']);
$senhal = mysqli_real_escape_string($conexao, $_POST['senhal']);

$query = "select email from startup where email='{$emaill}' and senha = sha1('{$senhal}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $emaill;
    header('Location: lista.php');
    exit();
}else{
    "<script>
				alert('nada amore');
				
			 </script>";
}

?>