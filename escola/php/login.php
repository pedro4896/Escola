<?php
    session_start();
    include('conexaoBd.php');
    $cpf = $_POST["cpf"];
	$senha = $_POST["senha"];
	$result = $banco->query("SELECT * FROM usuario");
    if($result)
    {
        //percorre os resultados via o laço foreach
        foreach($result as $linha){
           if($linha['cpf'] == "$cpf" and $linha['senha'] == "$senha"){
           	 $_SESSION['cpf'] = $cpf;
             header('Location: funcionalidades.php');
             exit();
           }  
        }
    }
    echo("<script>alert('Acesso negado, dados incorretos');</script>");
	echo ("<script>window.location.href='../index.html';</script>");
?>