<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Frequ&ecirc;ncia</title>
		<link rel="stylesheet" type="text/css" href="../css/frequencia.css">
	</head>
	<body>
		<div id="encerrar"><a href= logout.php ><img src=../imagens/encerrar.png alt= Encerrar Sessão/><br>Encerrar<br>Sess&atilde;o</a></div>
		<div class="container" class="clear">
            <?php
                include('verifica_login.php');
                include('conexaoBd.php');
                $result = $banco->query("SELECT turma FROM serie;");
                if($result){
                    foreach($result as $linha){
                        if($linha['turma'] != 'Gestao'){
                            $troca = explode(" ", $linha['turma']);
                            if($linha['turma'] == 'Jardim 1' || $linha['turma'] == 'Jardim 2' || $linha['turma'] == 'Jardim 3'){
                                $turma = "frequencia/"."$troca[0]"."$troca[1]/" ."$troca[0]"."$troca[1]";
                            }else{
                                $turma = "frequencia/"."$troca[0]"."Ano/" ."$troca[0]"."$troca[1]";
                            }
                            echo("
                                <a href=$turma.php>
                                    <div class='card'>
                                        <div class='face face1'>
                                            <div class='content'>
                                                <img src=../imagens/design_128.png>	
                                                <h3>".$linha['turma']."</h3>
                                            </div>
                                        </div>

                                        <div class='face face2'>
                                            <div class='content'>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            ");    
                        }
                    }
                }
            ?>
		</div>
	</body>
</html>