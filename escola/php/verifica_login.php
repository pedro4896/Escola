<?php
    @session_start();
    if(!$_SESSION['cpf']){ //Se a sessao nao existir redireciona para a pagina de login
        header('Location: ../index.html');
        exit();
    }
?>