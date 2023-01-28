<?php
    @session_start();//inicia a sessao
    session_destroy();//destroi a sessao
    header('Location: ../index.html');//redireciona para a pagina de login
    exit();
?>