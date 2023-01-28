<?php
	include('verifica_login.php');
	include('verifica_adm.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atualizar Discente</title>
	<link rel="stylesheet" type="text/css" href="../css/discente.css">
</head>
<body>
<div id="encerrar"><a href= logout.php ><img src=../imagens/encerrar.png alt= Encerrar Sessão/><span><br>Encerrar<br>Sess&atilde;o</span></a></div>
	<div class="cadastro-card">
		<h2>Atualizar Discente</h2>
		<!--Cria o formulario-->
		<form class="cadastro-form" action="update_discente.php" method="POST">
            <label for="matricula">Insira a Matr&iacute;cula</label>
			<input type="text" name="matricula" placeholder="Matr&iacute;cula" id="matricula" required>
			<label for="nome">Insira o Nome</label>
			<input type="text" name="nome" placeholder="NOME" id="nome">
			<label for="genero">Insira o G&ecirc;nero</label>
			<input type="text" name="sexo" placeholder="G&Ecirc;NERO" id="genero">
			<label for="data">Insira a Data de Nascimento</label>
			<input type="date" name="data" placeholder="AAAA/MM/DD" id="data">
			<label for="naturalidade">Insira a Naturalidade</label>
			<input type="text" name="naturalidade" placeholder="NATURALIDADE" id="naturalidade">
			<label for="pais">Insira o Pa&iacute;s</label>
			<input type="text" name="pais" placeholder="PA&Iacute;S" id="pais">
			<label for="estado">Insira o Estado</label>
			<input type="text" name="estado" placeholder="ESTADO" id="estado">
			<label for="cidade">Insira a Cidade</label>
			<input type="text" name="cidade" placeholder="CIDADE" id="cidade">
			<label for="bairro">Insira o Bairro</label>
			<input type="text" name="bairro" placeholder="BAIRRO" id="bairro">
			<label for="rua">Insira a Rua</label>
			<input type="text" name="rua" placeholder="RUA/AVENIDA" id="rua">
			<label for="numero">Insira o N&uacute;mero</label>
            <input type="text" name="numero" placeholder="N&Uacute;MERO" id="numero">
            <label for="nomePai">Insira o nome do pai</label>
			<input type="text" name="nomePai" placeholder="NOME" id="nomePai">
            <label for="nomeMae">Insira o nome m&atilde;e</label>
			<input type="text" name="nomeMae" placeholder="NOME" id="nomeMae">
			<label for="telefonePai">Insira o telefone do pai</label>
            <input type="tel" name="telefonePai" placeholder="(xx) xxxxx-xxxx" id="telefonePai">
            <label for="telefoneMae">Insira o telefone da M&atilde;e</label>
            <input type="tel" name="telefoneMae" placeholder="(xx) xxxxx-xxxx" id="telefoneMae">
            <div>
                <h2>Situa&ccedil;&atilde;o do Discente</h2>
                <p><input type="radio" name="situacao" value="Indeferido"><span>Indeferido</span></p>
				<p><input type="radio" name="situacao" value="Indeferido"><span>Deferido</span></p>
            </div>
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
</body>
</html>