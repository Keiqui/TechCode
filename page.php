<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="page.css"/>
<<<<<<< HEAD

	<title>Escolha um Nível</title>
 <link rel="icon" 	type="image/png" 	href="nave_pixelart.gif">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script data-require="jquery@*" data-semver="3.2.1" src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
	
	
	<script>
   var QTDPGT = sessionStorage.getItem('qtdpgt');
   var Acerto = sessionStorage.getItem('acerto');
    
 /////////////   
    function acerto() { 
        var total = parseInt(QTDPGT) + 1 ;
        sessionStorage.setItem('qtdpgt', total ); 
        var qtdacerto = parseInt(Acerto) + 1 ;
        sessionStorage.setItem('acerto',qtdacerto);
        stop(); 
=======
	<title>Escolha um Nível</title>
    <link rel="icon"
    type="imagem/png"
    href="nave_pixelart.gif">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	
	
	
	<script>
    function acerto() {
>>>>>>> 500410af3052fca07ab3e4c0e477878f3e604c34
	Swal.fire(
		'Resposta certa!',
		'Parabens !',
		'success',
	).then((result) => {
<<<<<<< HEAD
        if (QTDPGT > 4) {
            document.cookie = 'qtdacertos='+qtdacerto;
            window.location.href = "pontuacao_final.php";
}else {
  // Reload the Page

  location.reload();}
});
            
}

	function ERRO() {
        var total = parseInt(QTDPGT) + 1 ;
        sessionStorage.setItem('qtdpgt', total );
        stop();
=======
  // Reload the Page
  location.reload();
});
	

}

	function ERRO() {
>>>>>>> 500410af3052fca07ab3e4c0e477878f3e604c34
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Preste mais atenção!'
        }).then((result) => {
<<<<<<< HEAD
        if (QTDPGT > 4) {
            document.cookie = 'qtdacertos='+Acerto;
            window.location.href = "pontuacao_final.php";
}else {
  // Reload the Page

  location.reload();}
});
            
}

     function TEMPO() {
        stop();   
Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Tempo Esgotado!'
}).then((result) => {
// Reload the Page
location.reload();
});

}


</script>
=======
  // Reload the Page
  location.reload();
});
    }

    </script>
>>>>>>> 500410af3052fca07ab3e4c0e477878f3e604c34

	
	
</head>
<body>

<<<<<<< HEAD
<!-- contador Tempo -->
<h1 id="counterarea"></h1>

<script>

var counter;
counter = 60;


var tempp = setInterval(function () {
  counter = counter - 1;
  document.getElementById("counterarea").innerHTML = counter;
  if(counter == 0){
    stop();
    
  }
}, 1000);
function stop(){
        clearInterval(tempp);
    }


</script>
<!--  -->


<div class='coluna-esquerda'></div>   

<!-- <p><span id="nome-usuario"></span></p>
<script> document.getElementById("nome-usuario").innerHTML = QTDPGT; </script> -->




=======
<div class='coluna-esquerda'></div>   
<div class="coluna-direita">PERGUNTA</div>
>>>>>>> 500410af3052fca07ab3e4c0e477878f3e604c34
<?php    
include("config.php");
$DADOS = $_COOKIE;
$sql = "SELECT * FROM questoes where questoes.nivel = '".$DADOS['NIVEL']."' and questoes.tipo = '".$DADOS['TIPO']."' ORDER BY RAND ()  LIMIT 1";
$res = $conn->query($sql);
$row = $res->fetch_object();

$sql2 = "SELECT * FROM questoes where questoes.nivel = '".$DADOS['NIVEL']."' and id <> ".$row->id." and questoes.tipo = '".$DADOS['TIPO']."' ORDER BY RAND ()  LIMIT 1";
$res2 = $conn->query($sql2);
$row2 = $res2->fetch_object();

$sql3 = "SELECT * FROM questoes where questoes.nivel = '".$DADOS['NIVEL']."' AND ID not in (".$row->id.",".$row2->id.") and questoes.tipo = '".$DADOS['TIPO']."' ORDER BY RAND ()  LIMIT 1";
$res3 = $conn->query($sql3);
$row3 = $res3->fetch_object();

<<<<<<< HEAD
$qtdperg = 1;
$agora = rand(1,3);
?>


<!-- exibe a qtd de pergunta -->

<div class='coluna-direita'>PERGUNTA</div>
<p class='coluna-direita' ><span class='coluna-direita' id="qtdd-pgt"></span></p>
<script> document.getElementById("qtdd-pgt").innerHTML = QTDPGT; 
</script>



<?php
 
 


 print "<div class='pergunta'>".$row->pergunta."</div>" ;  
 
 if ($agora == 1) {
 
 print" <div class='container'> ";

 print" <div class='btn' onclick= acerto() ; ><a href='#'>A</a></div>";
 print" <div class='btn'  onclick= ERRO(); ><a href='#'>B</a></div>";
 print" <div class='btn'  onclick= ERRO(); ><a href='#'>C</a></div>";
 print"	</div>	";
 
 
 print"<div class='respa' id='respa'>A--->  ".$row->resposta." </p>" ;
 print"<br></br>";
 print"<div class='respa' id='respb'>B--->  ".$row2->resposta."</p>" ;
 print"<br></br>";
 print"<div class='respa' id='respc'>C--->  ".$row3->resposta."</p>" ;  
 }
 elseif ($agora == 2) {
    print" <div class='container'> ";

    print" <div class='btn'  onclick= ERRO() ; ><a href='#'>A</a></div>";
    print" <div class='btn'  onclick= acerto(); ><a href='#'>B</a></div>";
    print" <div class='btn'  onclick= ERRO(); ><a href='#'>C</a></div>";
    print"	</div>	";
    
    
    print"<div class='respa' id='respa'>A--->  ".$row2->resposta." </p>" ;
    print"<br></br>";
    print"<div class='respa' id='respb'>B--->  ".$row->resposta."</p>" ;
    print"<br></br>";
    print"<div class='respa' id='respc'>C--->  ".$row3->resposta."</p>" ;
 }else {
    print" <div class='container'> ";

    print" <div class='btn'  onclick= ERRO() ; ><a href='#'>A</a></div>";
    print" <div class='btn'  onclick= ERRO(); ><a href='#'>B</a></div>";
    print" <div class='btn'  onclick= acerto(); ><a href='#'>C</a></div>";
    print"	</div>	";
    
    
    print"<div class='respa' id='respa'>A--->  ".$row2->resposta." </p>" ;
    print"<br></br>";
    print"<div class='respa' id='respb'>B--->  ".$row3->resposta."</p>" ;
    print"<br></br>";
    print"<div class='respa' id='respc'>C--->  ".$row->resposta."</p>" ;








 }

=======

 print "<div class='pergunta'>".$row->pergunta."</div>" ;  
 print" <div class='container'> ";
 print" <div class='btn'  onclick= acerto() id='mensagem-sucesso'  ; ><a href='#'>A</a></div>";
 
 
 print" <div class='btn'  onclick= ERRO(); ><a href='#'>B</a></div>";

 

 print" <div class='btn'  onclick= ERRO(); ><a href='#'>C</a></div>";
 
 print"	</div>	";

 print"<div class='pergunta' id='respa'>A)".$row->resposta." </p>" ; 
 print"<div class='pergunta' id='respb'>B)".$row2->resposta."</p>" ;
 print"<div class='pergunta' id='respc'>C)".$row3->resposta."</p>" ;  
 



>>>>>>> 500410af3052fca07ab3e4c0e477878f3e604c34
 //  print"		<div class='btn'><a href='#' >B</a></div>";
//  print"	    <div class='btn'><a href='#'>C</a></div>";
//  print"        <div class='btn'><a href='#'>D</a></div>"; 
        
 
 ?> 

</body>
</html>