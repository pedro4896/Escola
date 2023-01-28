<?php
	include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro Discente</title>
	<link rel="stylesheet" type="text/css" href="../css/discente.css">
</head>
<body>
<div id="encerrar"><a href= logout.php ><img src=../imagens/encerrar.png alt= Encerrar Sessão/><span><br>Encerrar<br>Sess&atilde;o</span></a></div>
	<div class="cadastro-card">
		<h2>Cadastro de Discentes</h2>
		<!--Criacao do formulario-->
		<form class="cadastro-form" action="cadastro_discente.php" method="POST">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" placeholder="NOME" id="nome" required>
			<label for="genero">G&ecirc;nero:</label>
			<input type="text" name="sexo" placeholder="G&Ecirc;NERO" id="genero" required>
			<label for="data"> Data de Nascimento:</label>
			<input type="date" name="data" placeholder="AAAA/MM/DD" id="data" required>
			<label for="naturalidade">Naturalidade:</label>
			<input type="text" name="naturalidade" placeholder="NATURALIDADE" id="naturalidade" required>
			<label for="pais">Pa&iacute;s:</label>
			<input type="text" name="pais" placeholder="PA&Iacute;S" id="pais" required>
			<label for="estado">Estado:</label>
			<input type="text" name="estado" placeholder="ESTADO" id="estado" required>
			<label for="cidade">Cidade:</label>
			<input type="text" name="cidade" placeholder="CIDADE" id="cidade" required>
			<label for="bairro">Bairro:</label>
			<input type="text" name="bairro" placeholder="BAIRRO" id="bairro" required>
			<label for="rua"> Rua:</label>
			<input type="text" name="rua" placeholder="RUA/AVENIDA" id="rua">
			<label for="numero">N&uacute;mero:</label>
            <input type="text" name="numero" placeholder="N&Uacute;MERO" id="numero" required>
            <label for="nomePai">Nome do pai:</label>
			<input type="text" name="nomePai" placeholder="NOME" id="nomePai" required>
            <label for="nomeMae">Nome m&atilde;e:</label>
			<input type="text" name="nomeMae" placeholder="NOME" id="nomeMae" required>
			<label for="telefonePai">Telefone do pai:</label>
            <input type="tel" name="telefonePai" placeholder="(xx) xxxxx-xxxx" id="telefonePai" required>
            <label for="telefoneMae">Telefone da M&atilde;e:</label>
            <input type="tel" name="telefoneMae" placeholder="(xx) xxxxx-xxxx" id="telefoneMae" required>
			<div>
				<h2>Matr&iacute;cula de S&eacute;rie</h2>
				<p><input type="radio" name="serie" value="Jardim 1" id="jardim_1"><span>Jardim 1</span></p>
				<p><input type="radio" name="serie" value="Jardim 2" id="jardim_2"><span>Jardim 2</span></p>
				<p><input type="radio" name="serie" value="Jardim 3" id="jardim_3"><span>Jardim 3</span></p>
				<p><input type="radio" name="serie" value="1 Ano" id="1_ano"><span>1° Ano</span></p>
				<p><input type="radio" name="serie" value="2 Ano" id="2_ano"><span>2° Ano</span></p>
				<p><input type="radio" name="serie" value="3 Ano" id="3_ano"><span>3° Ano</span></p>
				<p><input type="radio" name="serie" value="4 Ano" id="4_ano"><span>4° Ano</span></p>
				<p><input type="radio" name="serie" value="5 Ano" id="5_ano"><span>5° Ano</span></p>
				<p><input type="radio" name="serie" value="6 Ano" id="6_ano"><span>6° Ano</span></p>
				<p><input type="radio" name="serie" value="7 Ano" id="7_ano"><span>7° Ano</span></p>
			</div>
			<button type="submit">Cadastrar</button>
		</form>
	</div>
	<script src=../js/validar_cadastro.js></script>
</body>
</html>