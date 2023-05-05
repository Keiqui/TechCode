<!DOCTYPE html>
<html style="background-color: rgb(11, 8, 26);"
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jogo.css">
    <link rel="icon" 	type="image/png" 	href="nave_pixelart.gif">
    <title>TechCode, sua inteligência em jogo</title>
    <!-- <audio src="telainicial.mp3" autoplay loop></audio> -->
    
    
    <audio autoplay id="teste"  src="telainicial.mp3" loop>  </audio>

    

    <script>

      var audio = document.getElementById("teste");
      audio.volume = 0.1;



      function SALVARNOME() {
        var nome = document.getElementById("meu-submit").value ;
        if (nome == ''){
        
        
        }else{
          document.cookie = 'NOME='+nome; 
        }
}


    //   function SALVARNOME() {
    //     var nome = document.getElementById("meu-submit").value ;
    //     alert(nome);
    //     document.cookie = 'NOME='+nome;
    // }
        
    </script>

  </head> 

    

  <legend>TechCode</legend>
    <style>
      /* Definir o tamanho do vídeo para ocupar toda a tela */
      #video-background {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        background-size: cover;
        opacity: 0.2; /* Define a opacidade para 50% */
      }

      /* Esconder o conteúdo do vídeo */
      .content {
        position: relative;
        z-index: 9999;
      }
      
    </style>
  </head>
  <?PHP $nomephp = $_COOKIE; ?>
  <img class="nave" src="nave_pixelart.gif" alt="nave">
    <div class="container">
<?PHP 

if (!isset($nomephp['NOME'])) {
  
  PRINT "<div class='btn'><a href='#' ><input type='text' id='meu-submit' placeholder='Nick'></a></div>";
}elseif ($nomephp['NOME'] == '') {
  PRINT "<div class='btn'><a href='#' ><input type='text' id='meu-submit' placeholder='Nick'></a></div>";
}else {
  PRINT "<div class='btn'><a href='#' ><input type='text' id='meu-submit' placeholder=".$nomephp['NOME']."></a></div>";
}      
      
      ?>
      <div class="btn"><a href="jogo_pagmaterias.html"  onclick= SALVARNOME()  id="MostrarDica2";>Entrar</a></div>
 <!-- <div class="btn"><a href="/Teckcode/pergunta&resposta/page.PHP"  onclick= mostrarValor()  id="MostrarDica2";>Entrar</a></div> -->
		<!-- <div class="btn"><a href="#">Nick:</a></div> -->
    
		
		<div class="btn"><a href="sobrenos.html">Sobre nós</a></div>
        <!-- <div class="btn"><a href="#">WEB</a></div> -->

	</div>	
    <video id="video-background" autoplay muted loop>
      <source src="fundo_codigo_binario.mp4" type="video/mp4">
    </video>
    <div class="content">
      <!-- Aqui vai o conteúdo da sua página -->
    
  </body>
</html>

