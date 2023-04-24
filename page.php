<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="page.css"/>
	<title>Escolha um Nível</title>
    <link rel="icon"
    type="imagem/png"
    href="nave_pixelart.gif">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	
	
	
	<script>
    function acerto() {
	Swal.fire(
		'Resposta certa!',
		'Parabens !',
		'success',
	).then((result) => {
  // Reload the Page
  location.reload();
});
	

}

	function ERRO() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Preste mais atenção!'
        }).then((result) => {
  // Reload the Page
  location.reload();
});
    }

    </script>

	
	
</head>
<body>

<div class='coluna-esquerda'></div>   
<div class="coluna-direita">PERGUNTA</div>
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


 print "<div class='pergunta'>".$row->pergunta."</div>" ;  
 print" <div class='container'> ";
 print" <div class='btn'  onclick= acerto() id='mensagem-sucesso'  ; ><a href='#'>A</a></div>";
 
 
 print" <div class='btn'  onclick= ERRO(); ><a href='#'>B</a></div>";

 

 print" <div class='btn'  onclick= ERRO(); ><a href='#'>C</a></div>";
 
 print"	</div>	";

 print"<div class='pergunta' id='respa'>A)".$row->resposta." </p>" ; 
 print"<div class='pergunta' id='respb'>B)".$row2->resposta."</p>" ;
 print"<div class='pergunta' id='respc'>C)".$row3->resposta."</p>" ;  
 



 //  print"		<div class='btn'><a href='#' >B</a></div>";
//  print"	    <div class='btn'><a href='#'>C</a></div>";
//  print"        <div class='btn'><a href='#'>D</a></div>"; 
        
 
 ?> 

</body>
</html>