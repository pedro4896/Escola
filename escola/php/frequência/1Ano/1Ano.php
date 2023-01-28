<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Frequ&ecirc;ncia</title>
		<link rel="stylesheet" type="text/css" href="../../../css/frequencia.css">
	</head>
	<body>
		<div id="encerrar"><a href= "../../logout.php" ><img src=../../../imagens/encerrar.png alt= Encerrar Sessão/><br>Encerrar<br>Sess&atilde;o</a></div>
		<div class="container" class="clear">
            <?php
                include('../../verifica_login.php');
                include('../../conexaoBd.php');
                $result = $banco->query("SELECT * FROM disciplinas where codigo LIKE '1_%' ORDER BY nome ASC;");
                $i = 0;
                if($result){
                    foreach($result as $linha){
                        if($linha['nome'] != 'Gestao'){
                            $disciplina = preg_replace("/[^\w\s]/", "", iconv("UTF-8", "ASCII//TRANSLIT", $linha['nome']));
                            $disciplina = str_replace(" ", "_", $disciplina);
                            $disciplina = strtolower($disciplina);
                            echo("
                                <a href=$disciplina.php>
                                    <div class='card'>
                                        <div class='face face1'>
                                            <div class='content'>
                                                <img src=../../../imagens/design_128.png>	
                                                <h3>".$linha['nome']."</h3>
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
                        $i++;
                        if($i == 9){
                            exit();
                        }
                    }
                }
            ?>
		</div>
	</body>
</html>