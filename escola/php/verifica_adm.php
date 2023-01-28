<?php
    @session_start();
    include('conexaoBd.php');
    $cpf = $_SESSION['cpf'];
    $result = $banco->query("SELECT * FROM usuario INNER JOIN docente ON usuario.cpf = docente.cpf_usuario INNER JOIN leciona ON usuario.cpf = leciona.cpf_usuario WHERE cpf = $cpf;");
    if($result)
    {
        //percorre os resultados via o laço foreach
        foreach($result as $linha){
           if($linha['formacao'] != "Gestao" and $linha['turma_serie'] != "Gestao"){
             header('Location: funcionalidades.php');
             exit();
           }  
        }
    } 
?>