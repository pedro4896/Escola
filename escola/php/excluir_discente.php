<?php
    include('conexaoBd.php');
    $matricula = $_POST["matricula"];
    $delete = "DELETE FROM `discentes` WHERE `matricula` = $matricula;";

    $executa = $banco->query("$delete");
    if($executa){
        echo("<script>alert('Usuario Excluido');</script>");
        echo ("<script>window.location.href=' lista_discentes.php';</script>");
    }
    else{
      print_r($banco->errorInfo());
    }
?>