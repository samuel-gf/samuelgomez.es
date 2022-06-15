<?php include('../inc/cabecera_html.html'); ?>
	<title>Tecnología, programación y robótica</title>
	<script type="text/javascript" src="js/highlight.min.js"></script> <!-- Color código 1 de 2-->
	<link rel="stylesheet" type="text/css" href="css/github.min.css">  <!-- Color código 2 de 2-->
	</head>
<body>

<?php include('../inc/cabecera_fixed.html'); ?>

<script>hljs.highlightAll();</script>

<script>
// Adapta el tamaño de las imágenes a pantalla
document.addEventListener('DOMContentLoaded', function(){ 
	var arr = document.querySelectorAll("img");
	arr[0].style.display = "none";
	for (let i=1; i<arr.length; i++){
		arr[i].style = "";
	}
}, false);
</script>

<nav id="menu_content"><ul>
	<li><a href="#hola-mundo">Hola mundo</a></li>
	<li><a href="#botón-doble-led">Botón doble LED</a></li>
	<li><a href="#semáforo-de-tres-luces">Semáforo de tres luces</a></li>
	<li><a href="#piezoeléctrico-led-y-botón">Piezoeléctrico, LED y botón</a></li>
	<li><a href="#emisor-de-código-morse">Emisor de código morse</a></li>
	<li><a href="#botón-de-control">Botón de control</a></li>
	<li><a href="#alarma">Alarma</a></li>
	<li><a href="#semáforo-con-aviso-acústico">Semáforo con aviso acústico</a></li>
	<li><a href="#monitor-serie">Monitor serie</a></li>
	<li><a href="#servomotor">Servomotor</a></li>
	<li><a href="#botón-hombre-muerto">Botón hombre muerto</a></li>
	<li><a href="#resistencia-variable-potenciómetro">Resistencia variable (potenciómetro)</a></li>
	<li><a href="#pitidos-de-frecuencia-variable">Pitidos de frecuencia variable</a></li>
	<li><a href="#batería-musical">Batería musical</a></li>
	<li><a href="#servo-y-joystick-coordinados">Servo y joystick coordinados</a></li>
	<li><a href="#servo-y-joystick-con-luces">Servo y joystick con luces</a></li>
	<li><a href="#piano-de-tres-botones">Piano de tres botones</a></li>
	<li><a href="#sensor-de-distancia">Sensor de distancia</a></li>
	<li><a href="#sensor-de-distancia-avanzado">Sensor de distancia avanzado</a></li>
	</ul>
</nav>

<main>



<p><img src="img/arduino_logo.jpg" alt="image" style="height:6cm" /></p>
<h1 id="hola-mundo"><a name="Hola_mundo">Hola mundo</a></h1>
<h2 id="objetivos">Objetivos</h2>
<p>Este proyecto sirve para testear un LED y empezar a familiarizarse con la placa de pruebas.</p>
<h2 id="pasos-para-desarrollar-el-proyecto">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Colocar la placa Arduino a la izquierda y la placa de pruebas a la derecha</p></li>
<li><p>Buscar en el LED el ánodo y el cátodo y luego colocarlo en la placa de pruebas</p></li>
<li><p>Realizar el cableado siguiendo el esquema</p></li>
<li><p>Escribir el software en el editor Arduino y subirlo para probarlo</p></li>
</ol>
<p><img src="img/01.jpg" alt="image" style="height:6cm" /></p>
<div class="sourceCode" id="cb1" data-linenos="true" data-bgcolor="bg"><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb1-1" title="1"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb1-2" title="2">    pinMode(<span class="dv">4</span>, OUTPUT);</a>
<a class="sourceLine" id="cb1-3" title="3">}</a>
<a class="sourceLine" id="cb1-4" title="4"></a>
<a class="sourceLine" id="cb1-5" title="5"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb1-6" title="6">    digitalWrite(<span class="dv">4</span>, HIGH);</a>
<a class="sourceLine" id="cb1-7" title="7">    delay(<span class="dv">1000</span>);</a>
<a class="sourceLine" id="cb1-8" title="8">    digitalWrite(<span class="dv">4</span>, LOW);</a>
<a class="sourceLine" id="cb1-9" title="9">    delay(<span class="dv">1000</span>);</a>
<a class="sourceLine" id="cb1-10" title="10">}</a></code></pre></div>
<h1 id="botón-doble-led"><a name="Bot.C3.B3n_doble_LED">Botón doble LED</a></h1>
<h2 id="objetivos-1">Objetivos</h2>
<p>Este proyecto sirve para prácticar la conexión de un botón y de un LED.</p>
<h2 id="pasos-para-desarrollar-el-proyecto-1">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Montar el botón siguiendo el esquema</p></li>
<li><p>Montar el LED de color rojo y conectarlo al puerto 4</p></li>
<li><p>Montar el LED de color verde y conectarlo al puerto 5</p></li>
<li><p>Escribir el software y probarlo y conectarlo al puerto 6</p></li>
</ol>
<p><img src="img/02.jpg" alt="image" style="height:6cm" /></p>
<div class="sourceCode" id="cb2" data-linenos="true" data-bgcolor="bg"><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb2-1" title="1"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb2-2" title="2">    pinMode(<span class="dv">4</span>, OUTPUT);</a>
<a class="sourceLine" id="cb2-3" title="3">    pinMode(<span class="dv">5</span>, OUTPUT);</a>
<a class="sourceLine" id="cb2-4" title="4">    pinMode(<span class="dv">6</span>, INPUT);</a>
<a class="sourceLine" id="cb2-5" title="5">}</a>
<a class="sourceLine" id="cb2-6" title="6"></a>
<a class="sourceLine" id="cb2-7" title="7"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb2-8" title="8">    <span class="cf">if</span> (digitalRead(<span class="dv">6</span>)==HIGH){</a>
<a class="sourceLine" id="cb2-9" title="9">        digitalWrite(<span class="dv">4</span>, HIGH);</a>
<a class="sourceLine" id="cb2-10" title="10">        digitalWrite(<span class="dv">5</span>, LOW);</a>
<a class="sourceLine" id="cb2-11" title="11">    } <span class="cf">else</span> {</a>
<a class="sourceLine" id="cb2-12" title="12">        digitalWrite(<span class="dv">4</span>, LOW);</a>
<a class="sourceLine" id="cb2-13" title="13">        digitalWrite(<span class="dv">5</span>, HIGH);</a>
<a class="sourceLine" id="cb2-14" title="14">    }</a>
<a class="sourceLine" id="cb2-15" title="15">}</a></code></pre></div>
<h1 id="semáforo-de-tres-luces"><a name="Sem.C3.A1foro_de_tres_luces">Semáforo de tres luces</a></h1>
<h2 id="objetivos-2">Objetivos</h2>
<p>Las luces se encenderán siguiendo el orden</p>
<h2 id="pasos-para-desarrollar-el-proyecto-2">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>El LED rojo se conecta al puerto 4</p></li>
<li><p>El LED ambar se conecta al puerto 5</p></li>
<li><p>El LED verde se conecta al puerto 6</p></li>
<li><p>La luz roja luce durante 7 segundos, luego la verde 7 y finalmente la ambar durante 1 segundo antes de volver a comenzar el ciclo</p></li>
</ol>
<p><img src="img/03.jpg" alt="image" style="height:11cm" /></p>
<div class="sourceCode" id="cb3" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb3-1" title="1"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb3-2" title="2">    pinMode(<span class="dv">4</span>, OUTPUT);</a>
<a class="sourceLine" id="cb3-3" title="3">    pinMode(<span class="dv">5</span>, OUTPUT);</a>
<a class="sourceLine" id="cb3-4" title="4">    pinMode(<span class="dv">6</span>, OUTPUT);</a>
<a class="sourceLine" id="cb3-5" title="5">}</a>
<a class="sourceLine" id="cb3-6" title="6"></a>
<a class="sourceLine" id="cb3-7" title="7"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb3-8" title="8">    digitalWrite(<span class="dv">4</span>,HIGH);</a>
<a class="sourceLine" id="cb3-9" title="9">    digitalWrite(<span class="dv">5</span>,LOW);</a>
<a class="sourceLine" id="cb3-10" title="10">    digitalWrite(<span class="dv">6</span>,LOW);</a>
<a class="sourceLine" id="cb3-11" title="11">    delay(<span class="dv">7000</span>);</a>
<a class="sourceLine" id="cb3-12" title="12"></a>
<a class="sourceLine" id="cb3-13" title="13">    digitalWrite(<span class="dv">4</span>,LOW);</a>
<a class="sourceLine" id="cb3-14" title="14">    digitalWrite(<span class="dv">5</span>,LOW);</a>
<a class="sourceLine" id="cb3-15" title="15">    digitalWrite(<span class="dv">6</span>,HIGH);</a>
<a class="sourceLine" id="cb3-16" title="16">    delay(<span class="dv">7000</span>);</a>
<a class="sourceLine" id="cb3-17" title="17"></a>
<a class="sourceLine" id="cb3-18" title="18">    digitalWrite(<span class="dv">4</span>,LOW);</a>
<a class="sourceLine" id="cb3-19" title="19">    digitalWrite(<span class="dv">5</span>,HIGH);</a>
<a class="sourceLine" id="cb3-20" title="20">    digitalWrite(<span class="dv">6</span>,LOW);</a>
<a class="sourceLine" id="cb3-21" title="21">    delay(<span class="dv">1000</span>);</a>
<a class="sourceLine" id="cb3-22" title="22">}</a></code></pre></div>
<h1 id="piezoeléctrico-led-y-botón"><a name="Piezoel.C3.A9ctrico.2C_LED_y_bot.C3.B3n">Piezoeléctrico, LED y botón</a></h1>
<h2 id="objetivos-3">Objetivos</h2>
<p>El piezoeléctrico emitirá pitidos a intervalos de un segundo, y una frecuencia de 3000 Hz. El LED rojo parpadeará cuando suene el pitido. El botón inhibe el sonido del piezo, pero no del LED.</p>
<h2 id="pasos-para-desarrollar-el-proyecto-3">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>El piezoeléctrico se conecta al puerto 9</p></li>
<li><p>El LED rojo se conecta al puerto 4</p></li>
<li><p>El botón se conecta al puerto 5</p></li>
<li><p>Cuando el botón se pulsa, el sonido no se inhibe sino que suena otro tono diferente</p></li>
</ol>
<p><img src="img/04.jpg" alt="image" style="height:12cm" /></p>
<div class="sourceCode" id="cb4" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb4-1" title="1"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb4-2" title="2">    pinMode(<span class="dv">4</span>, OUTPUT);</a>
<a class="sourceLine" id="cb4-3" title="3">    pinMode(<span class="dv">5</span>, OUTPUT);</a>
<a class="sourceLine" id="cb4-4" title="4">    pinMode(<span class="dv">6</span>, INPUT);</a>
<a class="sourceLine" id="cb4-5" title="5">}</a>
<a class="sourceLine" id="cb4-6" title="6"></a>
<a class="sourceLine" id="cb4-7" title="7"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb4-8" title="8">    <span class="cf">if</span> (digitalRead(<span class="dv">6</span>)==HIGH){</a>
<a class="sourceLine" id="cb4-9" title="9">        digitalWrite(<span class="dv">4</span>, HIGH);</a>
<a class="sourceLine" id="cb4-10" title="10">        digitalWrite(<span class="dv">5</span>, LOW);</a>
<a class="sourceLine" id="cb4-11" title="11">    } <span class="cf">else</span> {</a>
<a class="sourceLine" id="cb4-12" title="12">        digitalWrite(<span class="dv">4</span>, LOW);</a>
<a class="sourceLine" id="cb4-13" title="13">        digitalWrite(<span class="dv">5</span>, HIGH);</a>
<a class="sourceLine" id="cb4-14" title="14">    }</a>
<a class="sourceLine" id="cb4-15" title="15">}</a></code></pre></div>
<h1 id="emisor-de-código-morse"><a name="Emisor_de_c.C3.B3digo_morse">Emisor de código morse</a></h1>
<h2 id="objetivos-4">Objetivos</h2>
<p>En este proyecto construimos una máquina generadora de código morse con dos botones. El código morse se empleaba en transmisiones telegráficas y cada letra tiene su representación. En nuestro hardware, dos botones controlan los pitidos del piezoeléctrico. Uno produce pitidos cortos y otro produce pitidos largos.</p>
<h2 id="práctica">Práctica</h2>
<p>Prueba a emitir un mensaje de SOS, para ello comprueba en la Figura <a href="#cod_morse" data-reference-type="ref" data-reference="cod_morse">[cod_morse]</a> a que conjunto de puntos y letras corresponde cada letra (S, O, S).</p>
<figure>
<img src="img/05.02.jpg" alt="Código Morse" style="width:6cm" /><figcaption>Código Morse</figcaption>
</figure>
<p><span id="cod_morse" label="cod_morse">[cod_morse]</span></p>
<h2 id="pasos-para-desarrollar-el-proyecto-4" class="unnumbered">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Se desarrolla y se sube el software</p></li>
<li><p>El piezoeléctrico se conecta al puerto 9</p></li>
<li><p>El botón <span class="math inline"><em>A</em></span> se conecta al puerto 4</p></li>
<li><p>El botón <span class="math inline"><em>B</em></span> se conecta al puerto 5</p></li>
</ol>
<p><img src="img/05.jpg" alt="image" style="width:12cm" /></p>
<div class="sourceCode" id="cb5" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb5-1" title="1"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb5-2" title="2">  pinMode(<span class="dv">4</span>, INPUT);</a>
<a class="sourceLine" id="cb5-3" title="3">  pinMode(<span class="dv">5</span>, INPUT);</a>
<a class="sourceLine" id="cb5-4" title="4">  pinMode(<span class="dv">9</span>, OUTPUT);</a>
<a class="sourceLine" id="cb5-5" title="5">}</a>
<a class="sourceLine" id="cb5-6" title="6"></a>
<a class="sourceLine" id="cb5-7" title="7"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb5-8" title="8">  <span class="cf">if</span> (digitalRead(<span class="dv">4</span>)==HIGH){  <span class="co">// Si se pulsa el botón 4</span></a>
<a class="sourceLine" id="cb5-9" title="9">    tone(<span class="dv">9</span>, <span class="dv">3000</span>, <span class="dv">100</span>);</a>
<a class="sourceLine" id="cb5-10" title="10">  }</a>
<a class="sourceLine" id="cb5-11" title="11">  <span class="cf">if</span> (digitalRead(<span class="dv">5</span>)==HIGH){  <span class="co">// Si se pulsa del botón 5</span></a>
<a class="sourceLine" id="cb5-12" title="12">    tone(<span class="dv">9</span>, <span class="dv">3000</span>, <span class="dv">300</span>);</a>
<a class="sourceLine" id="cb5-13" title="13">  }</a>
<a class="sourceLine" id="cb5-14" title="14">  delay(<span class="dv">500</span>);</a>
<a class="sourceLine" id="cb5-15" title="15">}</a></code></pre></div>
<h1 id="botón-de-control"><a name="Bot.C3.B3n_de_control">Botón de control</a></h1>
<h2 id="pasos-para-desarrollar-el-proyecto-5">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Montar un LED rojo en el puerto 5 y uno verde en el 6 (HW)</p></li>
<li><p>El LED rojo debe parpadear a intervalos de 1 segundo (SW)</p></li>
<li><p>Montar un botón en el puerto 3 (HW)</p></li>
<li><p>Si se pulsa el botón, el LED verde debe encenderse (SW)</p></li>
</ol>
<h1 id="alarma"><a name="Alarma">Alarma</a></h1>
<h2 id="pasos-para-desarrollar-el-proyecto-6" class="unnumbered">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Poner un piezoeléctrico conectado al puerto 9 (HW)</p></li>
<li><p>El piezoeléctrico debe emitir un pitido cada segundo (SW)</p></li>
<li><p>Montar un LED rojo conectado al puerto 7 (HW)</p></li>
<li><p>El LED rojo debe parpadear intermitentemente cuando suene la alarma (SW)</p></li>
</ol>
<h1 id="semáforo-con-aviso-acústico"><a name="Sem.C3.A1foro_con_aviso_ac.C3.BAstico">Semáforo con aviso acústico</a></h1>
<p><strong>Nota</strong> Este proyecto presenta una dificultad añadida ya que el software del paso 2 y el 3 son diferentes. Además, el paso 4 depende tanto de hardware como de software para poder ser completado.</p>
<h2 id="pasos-para-desarrollar-el-proyecto-7">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Montar un LED verde y otro rojo en los puertos 4 y 5 respectívamente (HW)</p></li>
<li><p>Los LED deben encenderse secuencialmente a intervalos de 4 segundos (SW)</p></li>
<li><p>El LED verde debe estar encendido 2 segundos, luego parpadea a intervalos de medio segundo (durante dos segundos) antes de cambiar al rojo (SW)</p></li>
<li><p>Conectar un piezoeléctrico al puerto 6 y hacer que emita un pitido cuando el semáforo esté en verde (HW + SW)</p></li>
</ol>
<h1 id="monitor-serie"><a name="Monitor_serie">Monitor serie</a></h1>
<h2 id="objetivos-5">Objetivos</h2>
<p><strong>Este proyecto no se firma</strong> Este es un proyecto que servirá para realizar pruebas.</p>
<h2 id="primer-software">Primer software</h2>
<div class="sourceCode" id="cb6" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb6-1" title="1"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb6-2" title="2">  Serial.begin(<span class="dv">9600</span>);</a>
<a class="sourceLine" id="cb6-3" title="3">}</a>
<a class="sourceLine" id="cb6-4" title="4"></a>
<a class="sourceLine" id="cb6-5" title="5"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb6-6" title="6">  Serial.println(<span class="st">&quot;Hola&quot;</span>);</a>
<a class="sourceLine" id="cb6-7" title="7">}</a></code></pre></div>
<h2 id="segundo-software">Segundo software</h2>
<div class="sourceCode" id="cb7" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb7-1" title="1"><span class="dt">int</span> n = <span class="dv">0</span>;              <span class="co">// Inicializa la variable</span></a>
<a class="sourceLine" id="cb7-2" title="2"></a>
<a class="sourceLine" id="cb7-3" title="3"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb7-4" title="4">  Serial.begin(<span class="dv">9600</span>); <span class="co">// Inicializa monitor serie</span></a>
<a class="sourceLine" id="cb7-5" title="5">}</a>
<a class="sourceLine" id="cb7-6" title="6"></a>
<a class="sourceLine" id="cb7-7" title="7"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb7-8" title="8">  n++;                <span class="co">// Incrementa la variable </span></a>
<a class="sourceLine" id="cb7-9" title="9">  Serial.println(n);  <span class="co">// Mostrar en pantalla el valor</span></a>
<a class="sourceLine" id="cb7-10" title="10">  delay(<span class="dv">100</span>);</a>
<a class="sourceLine" id="cb7-11" title="11">}</a></code></pre></div>
<h1 id="servomotor"><a name="Servomotor">Servomotor</a></h1>
<h2 id="objetivos-6">Objetivos</h2>
<p><strong>Este proyecto no se firma</strong> Este es un proyecto que servirá para realizar pruebas.</p>
<p><img src="img/06.jpg" alt="image" style="height:5cm" /></p>
<h2 id="primer-software-1">Primer software</h2>
<div class="sourceCode" id="cb8" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb8-1" title="1"><span class="pp">#include </span><span class="im">&lt;Servo.h&gt;</span></a>
<a class="sourceLine" id="cb8-2" title="2"></a>
<a class="sourceLine" id="cb8-3" title="3">Servo s1;             <span class="co">// Asigna nombre al servo</span></a>
<a class="sourceLine" id="cb8-4" title="4"></a>
<a class="sourceLine" id="cb8-5" title="5"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb8-6" title="6">  s1.attach(<span class="dv">9</span>);       <span class="co">// Conectado al puerto 9</span></a>
<a class="sourceLine" id="cb8-7" title="7">}</a>
<a class="sourceLine" id="cb8-8" title="8"></a>
<a class="sourceLine" id="cb8-9" title="9"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb8-10" title="10">  s1.write(<span class="dv">0</span>);        <span class="co">// Posición 0 grados</span></a>
<a class="sourceLine" id="cb8-11" title="11">  delay(<span class="dv">1000</span>);</a>
<a class="sourceLine" id="cb8-12" title="12">  s1.write(<span class="dv">90</span>);       <span class="co">// Posición 90 grados</span></a>
<a class="sourceLine" id="cb8-13" title="13">  delay(<span class="dv">1000</span>);</a>
<a class="sourceLine" id="cb8-14" title="14">}</a></code></pre></div>
<h2 id="segundo-software-1">Segundo software</h2>
<div class="sourceCode" id="cb9" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb9-1" title="1"><span class="pp">#include </span><span class="im">&lt;Servo.h&gt;</span></a>
<a class="sourceLine" id="cb9-2" title="2"></a>
<a class="sourceLine" id="cb9-3" title="3">Servo s1;</a>
<a class="sourceLine" id="cb9-4" title="4"><span class="dt">int</span> p = <span class="dv">0</span>;             <span class="co">// posición</span></a>
<a class="sourceLine" id="cb9-5" title="5"></a>
<a class="sourceLine" id="cb9-6" title="6"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb9-7" title="7">  s1.attach(<span class="dv">9</span>);</a>
<a class="sourceLine" id="cb9-8" title="8">}</a>
<a class="sourceLine" id="cb9-9" title="9"></a>
<a class="sourceLine" id="cb9-10" title="10"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb9-11" title="11">  p++;                 <span class="co">// Incrementa p</span></a>
<a class="sourceLine" id="cb9-12" title="12">  s1.write(p);         <span class="co">// Mueve el servo</span></a>
<a class="sourceLine" id="cb9-13" title="13">  delay(<span class="dv">20</span>);</a>
<a class="sourceLine" id="cb9-14" title="14"></a>
<a class="sourceLine" id="cb9-15" title="15">  <span class="cf">if</span> (p == <span class="dv">170</span>) {      <span class="co">// Si llega a 170 grados</span></a>
<a class="sourceLine" id="cb9-16" title="16">      p = <span class="dv">0</span>;           <span class="co">// Vuelve a la posición inicial</span></a>
<a class="sourceLine" id="cb9-17" title="17">      s1.write(p);</a>
<a class="sourceLine" id="cb9-18" title="18">      delay(<span class="dv">500</span>);</a>
<a class="sourceLine" id="cb9-19" title="19">  }</a>
<a class="sourceLine" id="cb9-20" title="20">}</a></code></pre></div>
<h1 id="botón-hombre-muerto"><a name="Bot.C3.B3n_hombre_muerto">Botón hombre muerto</a></h1>
<p><strong>Este proyecto no se firma</strong> Este es un proyecto que servirá para realizar pruebas.</p>
<p><img src="img/07.jpg" alt="image" style="height:5cm" /></p>
<h2 id="pasos-para-desarrollar-el-proyecto-8">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Montar un botón en el puerto 7 y un servomotor en el puerto 10 (HW)</p></li>
<li><p>El servomotor debe hacer oscilar su brazo a intervalos de 1 segundo entre sus dos extremos solo si el botón se pulsa, el servomotor se detendrá si el botón se suelta (SW)</p></li>
<li><p>Montar un LED rojo en el puerto 3 que debe encenderse si el botón del puerto 7 NO está pulsado (HW + SW)</p></li>
<li><p>Añadir un piezoeléctrico al puerto 6 que sonará cuando el botón NO ESTÉ PULSADO (HW + SW)</p></li>
</ol>
<div class="sourceCode" id="cb10" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb10-1" title="1"><span class="pp">#include </span><span class="im">&lt;Servo.h&gt;</span></a>
<a class="sourceLine" id="cb10-2" title="2"></a>
<a class="sourceLine" id="cb10-3" title="3">Servo s;</a>
<a class="sourceLine" id="cb10-4" title="4"></a>
<a class="sourceLine" id="cb10-5" title="5"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb10-6" title="6">  pinMode(<span class="dv">3</span>, OUTPUT);  <span class="co">// LED</span></a>
<a class="sourceLine" id="cb10-7" title="7">  pinMode(<span class="dv">6</span>, OUTPUT);  <span class="co">// Piezoeléctrico</span></a>
<a class="sourceLine" id="cb10-8" title="8">  pinMode(<span class="dv">7</span>, INPUT);   <span class="co">// Botón</span></a>
<a class="sourceLine" id="cb10-9" title="9">  s.attach(<span class="dv">10</span>);        <span class="co">// Servomotor</span></a>
<a class="sourceLine" id="cb10-10" title="10">}</a>
<a class="sourceLine" id="cb10-11" title="11"></a>
<a class="sourceLine" id="cb10-12" title="12"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb10-13" title="13">  <span class="cf">if</span> (digitalRead(<span class="dv">7</span>)==HIGH){ <span class="co">// Botón pulsado</span></a>
<a class="sourceLine" id="cb10-14" title="14">    digitalWrite(<span class="dv">3</span>, LOW);</a>
<a class="sourceLine" id="cb10-15" title="15">    s.write(<span class="dv">10</span>);</a>
<a class="sourceLine" id="cb10-16" title="16">    delay(<span class="dv">1000</span>);</a>
<a class="sourceLine" id="cb10-17" title="17">    s.write(<span class="dv">170</span>);</a>
<a class="sourceLine" id="cb10-18" title="18">    delay(<span class="dv">1000</span>);</a>
<a class="sourceLine" id="cb10-19" title="19">  } <span class="cf">else</span> {                   <span class="co">// Botón NO pulsado</span></a>
<a class="sourceLine" id="cb10-20" title="20">    digitalWrite(<span class="dv">3</span>, HIGH);</a>
<a class="sourceLine" id="cb10-21" title="21">    tone(<span class="dv">6</span>, <span class="dv">4000</span>, <span class="dv">2000</span>);</a>
<a class="sourceLine" id="cb10-22" title="22">    delay(<span class="dv">2000</span>);</a>
<a class="sourceLine" id="cb10-23" title="23">  }</a>
<a class="sourceLine" id="cb10-24" title="24">}</a></code></pre></div>
<h1 id="resistencia-variable-potenciómetro"><a name="Resistencia_variable_.28potenci.C3.B3metro.29">Resistencia variable (potenciómetro)</a></h1>
<p><img src="img/08.jpg" alt="image" style="height:5cm" /></p>
<p><strong>Este proyecto no se firma</strong> Este es un proyecto que servirá para realizar pruebas.</p>
<h2 id="pasos-para-desarrollar-el-proyecto-9">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Montar la resistencia variable siguiendo los pasos indicados</p></li>
<li><p>Montar los tres LED sobre la placa</p></li>
<li><p>Escribir el software</p></li>
<li><p>Modificar el software para que las luces funcionen al revés</p></li>
</ol>
<div class="sourceCode" id="cb11" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb11-1" title="1"></a>
<a class="sourceLine" id="cb11-2" title="2"><span class="dt">int</span> x = <span class="dv">0</span>;             <span class="co">// Variable</span></a>
<a class="sourceLine" id="cb11-3" title="3"></a>
<a class="sourceLine" id="cb11-4" title="4"><span class="dt">void</span> setup() {</a>
<a class="sourceLine" id="cb11-5" title="5">  pinMode(<span class="dv">2</span>, OUTPUT);  <span class="co">// LED</span></a>
<a class="sourceLine" id="cb11-6" title="6">  pinMode(<span class="dv">3</span>, OUTPUT);  <span class="co">// LED</span></a>
<a class="sourceLine" id="cb11-7" title="7">  pinMode(<span class="dv">4</span>, OUTPUT);  <span class="co">// LED</span></a>
<a class="sourceLine" id="cb11-8" title="8">  Serial.begin(<span class="dv">9600</span>);  <span class="co">// Monitor serie</span></a>
<a class="sourceLine" id="cb11-9" title="9">}</a>
<a class="sourceLine" id="cb11-10" title="10"></a>
<a class="sourceLine" id="cb11-11" title="11"><span class="dt">void</span> loop() {</a>
<a class="sourceLine" id="cb11-12" title="12">    x = analogRead(A0);</a>
<a class="sourceLine" id="cb11-13" title="13">    Serial.println(x);</a>
<a class="sourceLine" id="cb11-14" title="14">    <span class="cf">if</span> (x &lt;= <span class="dv">200</span>) {</a>
<a class="sourceLine" id="cb11-15" title="15">        digitalWrite(<span class="dv">2</span>, HIGH);</a>
<a class="sourceLine" id="cb11-16" title="16">        digitalWrite(<span class="dv">3</span>, LOW);</a>
<a class="sourceLine" id="cb11-17" title="17">        digitalWrite(<span class="dv">4</span>, LOW);</a>
<a class="sourceLine" id="cb11-18" title="18">    }</a>
<a class="sourceLine" id="cb11-19" title="19">    <span class="cf">if</span> (x &gt; <span class="dv">200</span> &amp;&amp; x &lt; <span class="dv">400</span>) {</a>
<a class="sourceLine" id="cb11-20" title="20">        digitalWrite(<span class="dv">2</span>, LOW);</a>
<a class="sourceLine" id="cb11-21" title="21">        digitalWrite(<span class="dv">3</span>, HIGH);</a>
<a class="sourceLine" id="cb11-22" title="22">        digitalWrite(<span class="dv">4</span>, LOW);</a>
<a class="sourceLine" id="cb11-23" title="23">    }</a>
<a class="sourceLine" id="cb11-24" title="24">    <span class="cf">if</span> (x &gt;= <span class="dv">400</span>) {</a>
<a class="sourceLine" id="cb11-25" title="25">        digitalWrite(<span class="dv">2</span>, LOW);</a>
<a class="sourceLine" id="cb11-26" title="26">        digitalWrite(<span class="dv">3</span>, LOW);</a>
<a class="sourceLine" id="cb11-27" title="27">        digitalWrite(<span class="dv">4</span>, HIGH);</a>
<a class="sourceLine" id="cb11-28" title="28">    }</a>
<a class="sourceLine" id="cb11-29" title="29">}</a></code></pre></div>
<h1 id="pitidos-de-frecuencia-variable"><a name="Pitidos_de_frecuencia_variable">Pitidos de frecuencia variable</a></h1>
<h2 id="pasos-para-desarrollar-el-proyecto-10">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Montar la resistencia variable (potenciómetro) de manera que su salida se encuentre conectada con el puerto analógico A0 y un piezoeléctrico en el puerto 9. También es necesario montar un LED de color rojo en el puerto 7 y otro de color verde en el puerto 8. [HW]</p></li>
<li><p>Escribir el software que permita mostrar en la pantalla del ordenador mediante el monitor serie el valor de la resitencia variable (potenciómetro). [SW]</p></li>
<li><p>Hacer que el piezoeléctrico emita pitidos con intervalos de un segundo entre un pitido y el siguiente. La frecuencia del pitido estará dado por el valor indicado en el potenciómetro según la fórmula <span class="math inline"><em>f</em> = 2 * <em>x</em> + 500</span>, donde <span class="math inline"><em>f</em></span> es la frecuencia del pitido y <span class="math inline"><em>x</em></span> es el valor del potenciómetro. Mientras se emite un pitido el LED rojo estará encendido y se apagará cuando deje de sonar el pitido. [SW]</p></li>
<li><p>Hacer que el pitido siempre se emita a 2000 hercios pero el intervalo de espera entre un pitido y el siguiente sea variable en función de la posición del potenciómetro. Además el LED verde se encenderá cuando el piezo eléctrico no emita sonido. [SW]</p></li>
</ol>
<h1 id="batería-musical"><a name="Bater.C3.ADa_musical">Batería musical</a></h1>
<h2 id="pasos-para-desarrollar-el-proyecto-11">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Conecta el servomotor al puerto 10 y comprobar que se mueve [HW + SW]</p></li>
<li><p>Construye una estructura con envases de plástico o de metal [HW]</p></li>
<li><p>Consigue que la máqina sea capaz de hacer un ritmo sencillo, es decir, un golpe en cada uno de los envasas y a continuación un golpe en el otro envase [SW]</p></li>
<li><p>Logra que la máquina realice un ritmo complejo, es decir, además de alternar golpes entre los dos envases, en alguno de ellos debe ser capaz de dar dos o más golpes seguidos [SW]</p></li>
</ol>
<h1 id="servo-y-joystick-coordinados"><a name="Servo_y_joystick_coordinados">Servo y joystick coordinados</a></h1>
<h2 id="pasos-para-desarrollar-el-proyecto-12">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Poner un joystick conectado al puerto A1 y un servomotor en el puerto 9 [HW]</p></li>
<li><p>Mostrar en el monitor serie el valor tomado por la entrada analógica y ver como varía según mueves el mando en el eje X [SW]</p></li>
<li><p>Poner un servomotor que gire y adopte un ángulo proporcional a la entrada analógica del anterior apartado: ‘s1.write(analogRead(A1)/6.5);‘ [HW y SW]</p></li>
<li><p>Un LED rojo se encenderá solo si el servomotor se encuentra cerca de uno de sus límites de movimiento [SW]</p></li>
</ol>
<h1 id="servo-y-joystick-con-luces"><a name="Servo_y_joystick_con_luces">Servo y joystick con luces</a></h1>
<h2 id="pasos-para-desarrollar-el-proyecto-13">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>El servomotor se mueve en función del movimiento del joystick [HW y SW]</p></li>
<li><p>Cuando el servomotor se mueve a un lado se enciende una luz roja [HW y SW]</p></li>
<li><p>Cuando el servomotor se mueve al otro lado se encuende la luz verde [HW y SW]</p></li>
<li><p>Cuando el servomotor está en el centro las luces deben parpadear [SW]</p></li>
</ol>
<h1 id="piano-de-tres-botones"><a name="Piano_de_tres_botones">Piano de tres botones</a></h1>
<h2 id="pasos-para-desarrollar-el-proyecto-14">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Poner botón en el puerto 4 y piezoeléctrico en el puerto 9 [HW]</p></li>
<li><p>Si se pulsa el botón debe sonar una nota musical f=261.63 Hz y duración t=250 milisegundos. [SW]<br />
Recuerda como se usaba tone con estos ejemplos:<br />
</p>
<div class="sourceCode" id="cb12" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb12-1" title="1"><span class="dt">void</span> setup(){</a>
<a class="sourceLine" id="cb12-2" title="2">    pinMode(<span class="dv">9</span>, OUTPUT);</a>
<a class="sourceLine" id="cb12-3" title="3">}</a>
<a class="sourceLine" id="cb12-4" title="4"></a>
<a class="sourceLine" id="cb12-5" title="5"><span class="dt">void</span> loop(){</a>
<a class="sourceLine" id="cb12-6" title="6">    <span class="co">//tone(PUERTO,FRECUENCIA,TIEMPO);</span></a>
<a class="sourceLine" id="cb12-7" title="7">    tone(<span class="dv">9</span>,        <span class="fl">3000.0</span>,     <span class="dv">1000</span>);</a>
<a class="sourceLine" id="cb12-8" title="8">}</a></code></pre></div></li>
<li><p>Añadir dos botones más en los puertos 5 y 6 [HW]</p></li>
<li><p>Al pulsar los botones 5 y 6 deben sonar las notas musicales con frecuencias f=293.66 Hz y f=329.63 Hz [SW]</p></li>
</ol>
<h1 id="sensor-de-distancia"><a name="Sensor_de_distancia">Sensor de distancia</a></h1>
<p><img src="img/09.jpg" alt="image" style="height:6cm" /></p>
<div class="sourceCode" id="cb13" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb13-1" title="1"><span class="co">// PRIMER SOFTWARE -----------------------------------</span></a>
<a class="sourceLine" id="cb13-2" title="2"><span class="dt">long</span> t;    <span class="co">// Tiempo</span></a>
<a class="sourceLine" id="cb13-3" title="3"><span class="dt">long</span> x;    <span class="co">// Espacio o distancia</span></a>
<a class="sourceLine" id="cb13-4" title="4"></a>
<a class="sourceLine" id="cb13-5" title="5"><span class="dt">void</span> setup(){</a>
<a class="sourceLine" id="cb13-6" title="6">    pinMode(<span class="dv">10</span>, OUTPUT);  <span class="co">// Disparador</span></a>
<a class="sourceLine" id="cb13-7" title="7">    pinMode(<span class="dv">9</span>, INPUT);    <span class="co">// Receptor</span></a>
<a class="sourceLine" id="cb13-8" title="8">}</a>
<a class="sourceLine" id="cb13-9" title="9"></a>
<a class="sourceLine" id="cb13-10" title="10"><span class="dt">void</span> loop(){</a>
<a class="sourceLine" id="cb13-11" title="11">    delayMicroseconds(<span class="dv">2</span>);</a>
<a class="sourceLine" id="cb13-12" title="12">    digitalWrite(<span class="dv">10</span>, HIGH);</a>
<a class="sourceLine" id="cb13-13" title="13">    delayMicroseconds(<span class="dv">10</span>);</a>
<a class="sourceLine" id="cb13-14" title="14">    digitalWrite(<span class="dv">10</span>, LOW);</a>
<a class="sourceLine" id="cb13-15" title="15">    t = pulseIn(<span class="dv">9</span>, HIGH);</a>
<a class="sourceLine" id="cb13-16" title="16">    x = t * <span class="fl">0.017</span>;</a>
<a class="sourceLine" id="cb13-17" title="17">}</a></code></pre></div>
<div class="sourceCode" id="cb14" data-linenos="true" data-bgcolor="bg" data-autogobble=""><pre class="sourceCode numberSource c++ numberLines"><code class="sourceCode cpp"><a class="sourceLine" id="cb14-1" title="1"><span class="co">// SEGUNDO SOFTWARE ------------------------------------</span></a>
<a class="sourceLine" id="cb14-2" title="2"><span class="dt">void</span> setup(){</a>
<a class="sourceLine" id="cb14-3" title="3">    Serial.begin(<span class="dv">9600</span>);</a>
<a class="sourceLine" id="cb14-4" title="4">}</a>
<a class="sourceLine" id="cb14-5" title="5"></a>
<a class="sourceLine" id="cb14-6" title="6"><span class="dt">void</span> loop(){</a>
<a class="sourceLine" id="cb14-7" title="7">    Serial.println(x);</a>
<a class="sourceLine" id="cb14-8" title="8">}</a></code></pre></div>
<h2 id="pasos-para-desarrollar-el-proyecto-15">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Conectar el cableado siguiendo el esquema [HW]</p></li>
<li><p>Escribir el primer software[SW]</p></li>
<li><p>Añadir al primer software el segundo [SW]</p></li>
<li><p>Modificarlo para que ponga en el monitor serie un mensaje cuando el sensor detecte corta distancia</p></li>
</ol>
<h1 id="sensor-de-distancia-avanzado"><a name="Sensor_de_distancia_avanzado">Sensor de distancia avanzado</a></h1>
<h2 id="pasos-para-desarrollar-el-proyecto-16">Pasos para desarrollar el proyecto</h2>
<ol>
<li><p>Implementar el diseño de hardware del proyecto anterior [HW]</p></li>
<li><p>Añadir dos luces LED, una roja y una verde [HW]</p></li>
<li><p>Programa el software que permita que la luz verde se encienda si el objeto está lejos y la roja si el objeto que detecta el sensor está cerca [SW]</p></li>
<li><p>Añade un piezoeléctrico que debe pitar en caso de que el objeto que detecta el sensor está extremadamente cerca [SW+HW]</p></li>
</ol>
</main>
<?php include('../inc/footer.html'); ?>
