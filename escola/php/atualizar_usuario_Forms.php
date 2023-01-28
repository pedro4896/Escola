<?php
	include('verifica_login.php');
	include('verifica_adm.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atualizar Usu&aacute;rio</title>
	<link rel="stylesheet" type="text/css" href="../css/usuario.css">
</head>
<body>
	<div id="encerrar"><a href= logout.php ><img src=../imagens/encerrar.png alt= Encerrar Sessão/><span><br>Encerrar<br>Sess&atilde;o</span></a></div>
	<div class="cadastro-card">
		<h2>Atualizar Usu&aacute;rio</h2>
		<!--Criacao formulario-->
		<form class="cadastro-form" action="update_usuario.php" method="POST">
			<label for="cpf">Insira o CPF</label>
			<input type="text" name="cpf" placeholder="EX: 00000000000" autofocus id="cpf" maxlength="11" required>
			<label for="senha">Insira a Senha</label>
			<input type="password" name="senha" placeholder="AT&Eacute; 12 CARACTERES" id="senha" maxlength="12">
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
			<div>
				<h2>Mat&eacute;ria Ministrada</h2>
				<h3>Ensino Fundamental</h3>
				<p><input type="radio" name="disciplina" value="Gestao" id="gestao"><span>Gest&atilde;o</span></p>
				<p><input type="radio" name="disciplina" value="Portugues" id="portugues"><span>Portugu&ecirc;s</span></p>
				<p><input type="radio" name="disciplina" value="Matematica" id="matematica"><span>Matem&aacute;tica</span></p>
				<p><input type="radio" name="disciplina" value="Historia" id="historia"><span>Hist&oacute;ria</span></p>
				<p><input type="radio" name="disciplina" value="Geografia" id="geografia"><span>Geografia</span></p>
				<p><input type="radio" name="disciplina" value="Artes" id="artes"><span>Artes</span></p>
				<p><input type="radio" name="disciplina" value="Educacao Fisica" id="edFisica"><span>Educa&ccedil;&atilde;o Fisica</span></p>
				<p><input type="radio" name="disciplina" value="Ciencias" id="ciencias"><span>Ci&ecirc;ncias</span></p>
				<p><input type="radio" name="disciplina" value="Ingles" id="ingles"><span>Ingl&ecirc;s</span></p>
				<p><input type="radio" name="disciplina" value="Ensino Religioso" id="enReligioso"><span>Ensino Religioso</span></p>
				<div><hr size="5" color="black"></div>
				<h3>Ensino Infantil</h3>
				<p><input type="radio" name="disciplina" value="Portugues2" id="portugues2"><span>Portugu&ecirc;s Infantil</span></p>
				<p><input type="radio" name="disciplina" value="Matematica2" id="matematica2"><span>Matem&aacute;tica Infantil</span></p>
				<p><input type="radio" name="disciplina" value="Nat_Soci" id="nat_soci"><span>Natureza e Sociedade</span></p>
			</div>
			<div><hr size="5" color="black"></div>
			<div>
				<h2>Informe a serie que ir&aacute; atualizar</h2>
				<p><input type="radio" name="serie" value="Gestao" id="gestao"><span>Gest&atilde;o</span></p>
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
			<button type="submit">Atualizar</button>
		</form>
	</div>
</body>
</html>