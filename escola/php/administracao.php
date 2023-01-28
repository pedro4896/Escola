<?php
	/*importa a verificacao de login*/
	include('verifica_login.php');
	include('verifica_adm.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Administra&ccedil;&atilde;o</title>
		<link rel="stylesheet" type="text/css" href="../css/adm.css">
	</head>
	<body>
	<div id="encerrar"><a href= logout.php ><img src=../imagens/encerrar.png alt= Encerrar Sessão/><br>Encerrar<br>Sess&atilde;o</a></div>
		<div class="container">
			<a href="lista_discentes.php">
				<div class="card">
					<div class="face face1">
						<div class="content">
							<img src="../imagens/aluno.png">	
							<h3>Discentes</h3>
						</div>
					</div>

					<div class="face face2">
						<div class="content">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>
					</div>
				</div>
			</a>
			

			<a href="lista_usuario.php">
				<div class="card">
					<div class="face face1">
						<div class="content">
							<img src="../imagens/usuario.png">	
							<h3>Usu&aacute;rios</h3>
						</div>
					</div>

					<div class="face face2">
						<div class="content">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						</div>
					</div>
				</div>
			</a>
		</div>
	</body>
</html>