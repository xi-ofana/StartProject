<?php
    require_once "conexao.php";
    $nomeproj=$_POST["nomeproj"];
    $descproj=$_POST["descproj"];
    $autor=$_POST["autor"];
    $telefonep=$_POST["telefonep"];
    $emailp=$_POST["emailp"];

    $query = "INSERT INTO projetos (nomeproj, descproj, autor, telefonep, emailp) VALUES ('$nomeproj','$descproj', '$autor', '$emailp', '$telefonep')";
    $inserir = mysqli_query($conexao,$query);
        
      //  echo $query;exit;


		if($inserir==1){
			echo "<script>
				alert('Projeto cadastrado com sucesso!');
				location.href='index.html';
			 </script>
		";
		}else{
			echo "<script>
				alert('Ops deu ruim!');
				
			 </script>";
		}
    
?>