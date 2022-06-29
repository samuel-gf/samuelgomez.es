<?php include('inc/cabecera_html.php'); ?>
	<title>Apuntes de Javascript</title>
	<link rel="stylesheet" type="text/css" href="css/highlight.css">  
	</head>
<body>

<?php include('inc/lib.php'); ?>
<?php include('inc/cabecera_fixed.php'); ?>

<nav id="menu"><ul>
		<li><a href="#top">Cabecera</a></li>
		<li><a href="#funciones_utiles">Funciones útiles</a></li>
		<li><a href="#svg">SVG</a></li>
		<li><a href="#post_ajax">Post con ajax</a></li>
	</ul>
</nav>

<main>
<header><h1>Apuntes de Javascript</h1></header>



<section>
<h1><a name="cabecera">Cabecera</a></h1>

<p>El archivo .html debe hacer referencia al script .js y esto se logra añadiendo a la cabecera del
.html esta línea:</p>

<pre>
<code class="language-html">
<script type="text/javascript" src="archivo.js"></script>

</code></pre>
</section>



<!------------------------------------------------------------------------------------->
<section>
<h1><a name="funciones_utiles">Funciones útiles</a></h1>

<h2>Ejecutar tras la carga del DOM</h2>

<?php
$c = <<<'END_CODE'
document.addEventListener('DOMContentLoaded', function(){ 
  // Tu código aquí
}, false);
END_CODE;
colorea($c, "javascript");
?>


<h2>Detener el hilo de ejecución por un tiempo</h2>
<?php
$c = <<<'END_CODE'
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function myFunción(){
  await sleep(100);
}
END_CODE;
colorea($c, "javascript");
?>

</section>


<!------------------------------------------------------------------------------------->

<section>
<h1><a name="svg">SVG</a></h1>
</a>

<p>La <a href="js/Svg.js">librería Svg</a> completa</p>

Crear el objeto
<p>Contenedor del lienzo en el <em>html</em> será</p>

<?php
$c = <<<'END_CODE'
	<svg id="canvas1" width="800px" height="500px">
END_CODE;
colorea($c, "html");
?>

<?php
$c = <<<'END_CODE'
// Ejemplo para crear el lienzo en <em>javascript</em>
async function main(){
  s = new Svg("canvas1", 800, 500);
  s.drawAxis();
  s.drawGrid();
}
END_CODE;
colorea($c, "javascript");
?>

Dibujar objetos en el lienzo
<?php
$c = <<<'END_CODE'

	// Prototipos de métodos de la clase Svg
	addCircle(circleId, cx, cy, r, fillColor, strokeWidth = 0, strokeColor = null);
	addLine(lineId, x0, y0, x1, y1, color, width);

END_CODE;
colorea($c, "javascript");
?>


En este ejemplo se crea un punto llamado <em>p1</em> en las 
coordenadas <em>x, y</em> de radio 4 y de color rojo

<?php
$c = <<<'END_CODE'

s.addCircle("p1", x, y, 4, "red");

END_CODE;
colorea($c, "javascript");
?>

<p>Mover dos puntos asincrónicamente. Uno se moverá en círculos y el otro en línea recta</p>
<?php
$c = <<<'END_CODE'
var o1, o2;
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function mover1(){
  for(var i=0; i<200; i+=0.1){
    var p = 50*Math.sin(i/10.0);
    o1.setAttribute("cx", s.px(50*Math.cos(i/10.0)));
    o1.setAttribute("cy", s.py(50*Math.sin(i/10.)));
    await sleep(1);
    console.log("1");
  }
}

async function mover2(){
  for(var i=0; i<100; i++){
    console.log("2");
    o2.setAttribute("cx", s.px(-i));
    await sleep(100);
    console.log("2");
  }
}

document.addEventListener('DOMContentLoaded', function(){ 
  s = new Svg("canvas1", 800, 500);
  s.drawAxis();
  s.drawGrid();
  o1  = s.addCircle("c1", 0, 0, 5, "red");
  o2  = s.addCircle("c2", 0, 0, 5, "blue");

  mover1();
  mover2();

}, false);
END_CODE;
colorea($c, "javascript");
?>
</section>


<!------------------------------------------------------------------------------------->
<section>
<h1><a name="post_ajax">Enviar post mediante ajax</a></h1>

<p>Creamos dos ficheros, una será un <i>.html</i> en el cliente y un <i>.php</i> en el servidor.

<h2>Cliente</h2>

<?php
$c = <<<'END_CODE'
	<!-- Cliente HTML -->
	<!DOCTYPE html>
	<html>
	<head>
	</head>
	<script>
	document.addEventListener('DOMContentLoaded', function(){ 
		document.getElementById("b").addEventListener("click", function(){
		let obj_post = {
			nombre: document.getElementById("campo1").value,
			apellido: document.getElementById("campo2").value
		}
		let xhr = new XMLHttpRequest(); 
		xhr.open("POST", "http://192.168.1.118:8080/ajax_post.php");
		xhr.setRequestHeader("Content-Type", "application/json");
		xhr.send(JSON.stringify(obj_post));
		});
	}, false);
	</script>

	<body>
		<form>
			<input id="campo1" type="text" value="Ambrosio">
			<input id="campo2" type="text" value="Benavente">
			<input id="btn" type="button" value="Enviar">
		</form>
	</body>
	</html>
END_CODE;
colorea($c, "html");
?>

<h2>Servidor</h2>

<?php
$c = <<<'END_CODE'
	<?php

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: content-type');
	header('Access-Control-Allow-Methods: POST');

	$json = file_get_contents('php://input');
	$data = json_decode($json);

	error_log(print_r($data, true));
END_CODE;
colorea($c, "php");
?>
</section>


</main>
<?php include('inc/footer.php'); ?>
