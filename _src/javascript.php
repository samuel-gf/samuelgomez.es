<?php include('inc/cabecera_html.php'); ?>
	<title>Apuntes de Javascript</title>
	<script type="text/javascript" src="js/highlight.min.js"></script> <!-- Color código 1 de 2-->
	<link rel="stylesheet" type="text/css" href="css/github.min.css">  <!-- Color código 2 de 2-->
	</head>
<body>

<?php include('inc/cabecera_fixed.php'); ?>

<script>hljs.highlightAll();</script>

<nav id="menu_content"><ul>
		<li><a href="#cabecera">Cabecera</a></li>
		<li><a href="#funciones_utiles">Funciones útiles</a></li>
		<li><a href="#svg">SVG</a></li>
		<li><a href="#post_ajax">Post con ajax</a></li>
	</ul>
</nav>

<main>

<h1>Apuntes de Javascript</h1>

<section>
<a name="cabecera">
	<h2>Cabecera</h2>
</a>

<p>El archivo .html debe hacer referencia al script .js y esto se logra añadiendo a la cabecera del
.html esta línea:</p>

<pre>
<code class="language-html">
&lt;script type="text/javascript" src="archivo.js"&gt;&lt;/script&gt;

</code></pre>
</section>



<!------------------------------------------------------------------------------------->
<section>
<a name="funciones_utiles">
	<h2>Funciones útiles</h2>
</a>

<h3>Ejecutar tras la carga del DOM</h3>

<pre><code class="language-javascript">
document.addEventListener('DOMContentLoaded', function(){ 
  // Tu código aquí
}, false);

</code></pre>

<h3>Detener el hilo de ejecución por un tiempo</h3>
<pre>
<code class="language-javascript">
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function myFunción(){
  await sleep(100);
}

</code></pre>
</section>


<!------------------------------------------------------------------------------------->

<section>
<a name="svg">
	<h2>SVG</h2>
</a>

<p>La <a href="js/Svg.js">librería Svg</a> completa</p>

Crear el objeto
<p>Contenedor del lienzo en el <em>html</em> será</p>

<pre>
<code class="language-html">&lt;svg id="canvas1" width="800px" height="500px"&gt;
</code></pre>

<pre>
<code class="language-javascript">// Ejemplo para crear el lienzo en <em>javascript</em>
async function main(){
  s = new Svg("canvas1", 800, 500);
  s.drawAxis();
  s.drawGrid();
}
</code></pre>

Dibujar objetos en el lienzo
<pre><code class="javascript">  
// Prototipos de métodos de la clase Svg
addCircle(circleId, cx, cy, r, fillColor, strokeWidth = 0, strokeColor = null);
addLine(lineId, x0, y0, x1, y1, color, width);

</code></pre>

En este ejemplo se crea un punto llamado <em>p1</em> en las 
coordenadas <em>x, y</em> de radio 4 y de color rojo
<pre><code class="javascript">
s.addCircle("p1", x, y, 4, "red");

</code></pre>

<p>Mover dos puntos asincrónicamente. Uno se moverá en círculos y el otro en línea recta</p>
<pre><code class="javascript">
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
</code></pre>
</section>


<!------------------------------------------------------------------------------------->
<section>
<a name="post_ajax">
	<h2>Enviar post mediante ajax</h2>
</a>

<p>Creamos dos ficheros, una será un <i>.html</i> en el cliente y un <i>.php</i> en el servidor.

<h3>Cliente</h3>

<pre><code class="language-html">&lt;!-- Cliente HTML --&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;/head&gt;
&lt;script&gt;
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
&lt;/script&gt;

&lt;body&gt;
	&lt;form&gt;
		&lt;input id="campo1" type="text" value="Ambrosio"&gt;
		&lt;input id="campo2" type="text" value="Benavente"&gt;
		&lt;input id="btn" type="button" value="Enviar"&gt;
	&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
</section>

<h3>Servidor</h3>
<pre><code class="language-javascript">&lt;?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: content-type');
header('Access-Control-Allow-Methods: POST');

$json = file_get_contents('php://input');
$data = json_decode($json);

error_log(print_r($data, true));
</code></pre>
</section>


</main>
<?php include('inc/footer.php'); ?>
