<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pontuacao_final.css">
	<title>Pontuação Final</title>
    <script>
         var Acerto = sessionStorage.getItem('acerto');
         document.cookie = 'qtdacertos='+Acerto;


    </script>
</head>

<body>
   
    <legend>Resultado Final</legend>
    <Fieldset></Fieldset>
    
    <?php
    $Cookies = $_COOKIE;
    $qtdacerto = $Cookies['qtdacertos'];
    $nome = $Cookies['NOME']; 


    //print"<div>".$qtdacerto."</div>";
    if ($qtdacerto > 4) {
    print "<div class='mensagem3'> Uauu!! ".$nome." Você é um gênio, parabens!! :D </div>"; 
    } elseif (($qtdacerto <= 4) and ($qtdacerto >= 3)) {
    print"<div class='mensagem3'> Você foi bem, ".$nome." mas pode melhorar. <br>  Confio em você para a próxima!! :) </div>";
    }else{
    print"<div class='mensagem3'> Oh, não ".$nome."! você não teve um bom resultado :c <br> ... Estude mais para a próxima!! </div>"; 
    }   
    ?>
    
    <div class="num_fieldset"> <span id="qtdd-pgt"></span></div>
    <script> document.getElementById("qtdd-pgt").innerHTML = Acerto;
    </script>
    <img class="trofeu" src="trofeu.png" >
    <div class="botao">
    <button><a href="index.php">Voltar ao Menu</a></button>
    </div>
</body>