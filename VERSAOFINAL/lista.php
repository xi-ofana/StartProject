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

	<title> Catálogo </title>

	<body>
      <!--
        Pre-loader
      -->
      <!-- início do preloader -->
      <div id="preloader">
          <div class="inner">
            <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>                    
            </div>
          </div>
      </div>
      <!--- TODO O HEADER (CABEÇALHO) DA PÁGINA --->
      <header class="pb-2 mb-2 pb-lg-1 pb-xl-1 mb-lg-1 mb-xl-3 mb-sm-3 pb-sm-5"id="topo">
              <nav class="navbar fixed-top navbar-expand-lg d-inline-flex " role="navigation">
                  
                    
                    <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" 
                    aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-list" fill="whitesmoke" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    </button>

                    <div class=" collapse navbar-collapse" id="conteudoNavbarSuportado">

                          <ul class="navbar-nav mr-auto">
                            <button onclick="document.location='index.html'" id="button_head">
                            <li class="navbar-item p-2 mx-auto">
                              <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="#8ad6ee" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                              </svg><br>
                              StartWeb</li></button>

                        <button onclick="document.location='sobre.html'" id="button_head" >
                          <li class="nav-item m-1 p-1">
                            <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-file-easel-fill" fill="#8ad6ee" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 5a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 6.5v2A1.5 1.5 0 0 0 5.5 10h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 10H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 10h.473A1.5 1.5 0 0 0 12 8.5v-2A1.5 1.5 0 0 0 10.5 5h-2zM5 6.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"/>
                            </svg><br>Sobre
                         </li>
                        </button>
                        <button onclick="document.location='lista.php'" id="button_head" >
                          <li class="nav-item m-1 p-1"> 
                            <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-file-play-fill" fill="#8ad6ee" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6 5.883v4.234a.5.5 0 0 0 .757.429l3.528-2.117a.5.5 0 0 0 0-.858L6.757 5.454a.5.5 0 0 0-.757.43z"/>
                            </svg><br>Catálogo
                          </li>
                        </button>
                        
                        <button type="menu" id="button_head" data-toggle="modal" data-target="#projetos">
                          <li class="nav-item m-1 p-1">
                            
                        <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-journals" fill="#8ad6ee" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z"/>
                          <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                        </svg><br>
                        Projetos
                          </li>
                        </button>
                      
                      </ul>
                  </div>
              </nav>
        
		</header>
		



        <!-- 
			AQUI VAI O CONTEÚDO
		-->
		<div class="row mt-5 pt-5">
       
		</div>
<?php
	require_once "conexao.php";
	$query="SELECT id_startup, nome, descricao, segmento, logotipo, cidade, data_fundacao FROM startup ORDER BY nome ASC";
  $executar = mysqli_query($conexao,$query);

?>

<?php
	while($dados = mysqli_fetch_array($executar)){
        
		echo "
			<div class='row mb-5 mr-2 ml-3 p-5 m-lg-5 m-xl-5 m-sm-5 p-lg-5 p-xl-5 p-sm-5 ' style='background-color: white;'>
				<div class='col-12 col-lg-4 col-xl-4 col-sm-4'>
					<img class='rounded mx-auto img-thumbnail m-3 ' width='300px' height='200px' src='logotipos/$dados[logotipo]'  alt='logo'>
				</div>
				<div class='col-12 col-lg col-xl col-sm'>
					<h5 class=' display-4 mb-4' style='font-size: 45px; color: #378fac'>$dados[nome]
					</h5>
					<div class='d-flex'>
					
					<br>
				  		<p class='text-muted'>$dados[segmento]</p>
	  						<p class='text-muted'>/</p>
							  	<p class='text-muted'>$dados[cidade]</p>
					</div>
					<hr>
					
					<p class='text'> $dados[descricao]</p>
					
					<p> <p> <p> <p> 
					<hr>
					<a href='detalhes.php?startup=$dados[id_startup]' class='btn btn-entrar mt-1'>Conhecer</a> </p> </p> </p> </p>
					
				</div>
			</div>
						";
	}
?>
<hr>
<div class="modal fade" id="projetos" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"></span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <div class="container-sm">
                        <label class="form-text">
                          Preencha para adicionar um projeto: 
                        </label>
                        <form action="cadastrarp.php" method="POST">
                        <input type="text" class="form-control mb-1" placeholder="Nome do projeto">
                        <label class="form-text mb-1">Descrição do projeto: </label>
                        <textarea class="form-control mt-1 mb-1" maxlength="500" placeholder="Descrição"></textarea>
                        <label class="form-text mb-1 mt-1">Autor: </label>
                        <input type="text" class="form-control mt-1 mb-1">
                        <label class="form-text mt-1 mb-1">Telefone do projeto: </label>
                        <input type="tel" class="form-control phone-ddd-mask mt-1 mb-1" placeholder="(DDD)0000-0000">
                        <label class="form-text mb-1 mt-1">Email: </label>
                        <input type="email" class="form-control mt-1 mb-1">

                       </div>
                      </div>
                      <div class="modal-footer m-3">
                        <button type="button" class="btn btn-google" data-dismiss="modal">Voltar</button>
                        <button type="submit" class="btn btn-primary" >Enviar</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
		<!--
          RODAPÉ
        -->
        <footer class="container-footer mx-0">
          <div class="row align-items-center">
            <div class="col"></div>
                <div class="col align-items-center m-3">
                  <a href="https://iconscout.com/illustrations/collaborate" target="_blank">Collaborate Illustration</a> by <a href="https://iconscout.com/contributors/pixel-true-designs">Pixel True</a> on <a href="https://iconscout.com">Iconscout</a>
                </div>
            <div class="col"></div>
              </div>
              <div class="row align-items-center">
                <div class="col"></div>
                  <div class="col align-items-center m-3">
                  <span class="text-monospace"> 
                    Desenvolvido por TR3S GATINHAX(^･ｪ･^) - 2020
                  </span>
                </div>
                <div class="col"></div>
              </div>
              
              

           <!--
          BOOTSTRAP LINKS :)
        -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
        <!--
          JAVASCRIPT DO PRE-LOADER
        -->
        <script>

          //<![CDATA[
          $(window).on('load', function () {
            $('#preloader .inner').fadeOut();
            $('#preloader').delay(350).fadeOut('slow'); 
            $('body').delay(350).css({'overflow': 'visible'});
          })
          //]]>
          
          </script>
      
        
      </footer> 	
</body>

	</html>