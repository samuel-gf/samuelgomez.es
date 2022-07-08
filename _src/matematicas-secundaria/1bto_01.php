<?php include('inc/cabecera_html.php'); ?>
<?php include('inc/lib.php'); ?>


<!-- Matemáticas -->
<link rel="stylesheet" type="text/css" href="<?php profundidad($argv);?>css/katex.min.css">
<script type="text/javascript" src="<?php profundidad($argv);?>js/katex.min.js"></script>
<script type="text/javascript" src="<?php profundidad($argv);?>js/katex.autorender.min.js"></script>
	

<title>Problemas de matemáticas 1º de Bachillerato</title>
</head>

<body>
<?php include('inc/matematicas.js.php'); ?>

<?php include('inc/cabecera_fixed.php'); ?>

<nav id="menu"><ul>
		<h1>Problemas</h1>
		<li><a href="#numeros_reales">Números reales</a></li>
		<li><a href="#sucesiones">Sucesiones</a></li>

	</ul>
</nav>

<main>
<header>
	<h1>Problemas de 1º de Bachillerato</h1>
</header>


<!-- SECCIÓN -------------------------------------------------------- -->
<section>
<h1><a name="numeros_reales">Números reales</a></h1>

<p>Problemas que básicos de números reales.</p>


<ol class="problemas">
<!--
<img src="<?php echo str_repeat('../', $argv[1]);?>img/matematicas/0001.webp" alt="#">
-->

<li>&#11088;<p>Rosa ha dibujado un rectángulo de 12 cm x 9 cm y ha medido la diagonal con una regla. Ha obtenido
una longitud de 153mm.</p>
	<ol class="apartados">
		<li>Halla el error absoluto y el error relativo de la medida.</li>
		<li>Rosa desea obtener un valor con un porcentaje de error del 1%. ¿Es válida
		la medida que ha hallado para la diagonal o debe repetir el dibujo y volver a hacer la medición?</li>
	</ol>

</li>

<li>&#11088;<p>Sabemos que un termómetro tiene un margen de error de $\pm0,2\degree C$. Si al tomar la
temperatura de una person, aparece $36,7\degree C$ en la pantalla, ¿cuál es el intervalo que contiene
la temperatura exacta de esa persona?</p></li>

<li>&#11088;<p>Las ventas de una empresa durante el último año alcanzaron los 336 millones de euros. Según la 
información que aparece en la prensa, esas ventas ascendieron a 340 millones de euros. Calcula el error absoluto y
el error relativo que se comete.</p></li>

<li>&#11088;<p>Alejandro desea encargar un marco cuadrado para una lámina que tiene 26 cm de lado. Ha hecho
su propia medición del lado de la lámina que quiere enmarcar y ha obtenido un valor de 266 mm. Fernando
ha considerado más adecuado medir el perímetro y ha obtenido un resultado de 105 cm. Halla el error absoluto
y el error relativo que ha cometido cada uno de ellos, y decide quién de los dos ha tomado mejor medida.</p></li>

<!--
<li>&#11088;<p></p></li>
-->
</ol>
</section>



<!-- SECCIÓN -------------------------------------------------------- -->
<section>
<h1><a name="sucesiones">Sucesiones</a></h1>

<h2>Progresiones <u>aritméticas</u></h2>

<ul>
<li><b>Término general</b> de una sucesión aritmética</li>
$$a_n=a_1+(n-1)d$$

<li>Dos términos cualesquiera cumplen:</li>
$$a_m=a_n+(m-n)d$$

<li><b>Suma de los n primeros términos</b> de una progresión <u>aritmética</u></li>
$$S_n=\frac{a_1+a_n}{2}\cdot n$$
</ul>



<h2>Progresiones <u>geométricas</u></h2>

<ul>
<li><b>Término general</b> de una progresión <u>geométrica</u></li>
$$a_n=a_1 \cdot r^{n-1}$$

<li>Dos términos cualquiera de una progresión geométrica cumplen:</li>
$$a_n=a_1 \cdot r^{n-1}$$

<li><b>Suma de los n primeros términos</b> de una progresión <u>geométrica</u></li>
$$S_n=\frac{a_1(r^n-1)}{r-1}; \text{  con } r \neq 1$$


<li><b>Suma de todos los infinitos términos</b> de una progresión geométrica da como resultado
infinito excepto si $-1 &lt; r &lt; 1$, en cuyo caso sí se puede calcular puesto que cada nuevo término es más
pequeño y por lo tanto tienden a cero. La suma es:</li>

$$S=\frac{a_1}{1-r}$$
</ul>


<h2>Problemas</h2>
<ol class="problemas">
<li>&#11088;<p>De una progresión aritmética se sabe que la suma de los términos tercero y séptimo es 50 y que 21
es el resultado de restar al término noveno el segundo término. Escribe el término general y los cinco primeros
términos de la progresión.</p></li>

<li>&#11088;<p>La suma del segundo y el undécimo término de una progresión aritmética es 46; el cuarto término vale 13.
Escribe el término general y los cuatro primeros términos de esta progresión.</p></li>


<li>&#11088;<p>La suma de los tres primeros términos de una progresión aritmética es 66 y la suma de los tres
siguientes es 21. Halla su término general.</p></li>

<li>&#11088;&#11088;<p>La diferencia de una progresión aritmética es $d=-3$ y la suma de los términos cuarto y quinto vale 1.
¿Cuál es su término general?</p></li>

<li>&#11088;&#11088;&#11088;<p>Quizá en alguna ocasión hayas visto fruterías en que las frutas aparecen colocadas formando
una especia de pirámide de base cuadrada en las que las piezas de una capa se situan en los huecos
que quedan entre las frutas de la capa inferior, como las de la imagen.</p>

<img src="<?php profundidad($argv);?>img/matematicas/0006.webp" alt="#">

	<ol class="apartados">
		<li>¿Cuántas frutas hay en la base de la pirámide de tres capas?¿Y en la de cuatro?</li>
		<li>Halla la expresión que proporciona la cantidad de piezas de fruta que hay en la base de la pirámide 
		en función del número de capas de esa pirámide.</li>
		<li>¿Cuántas frutas hay en total en una pirámide de diez capas?</li>
	</ol>
</li>


<li>&#11088;&#11088;&#11088;<p>Escribe tres términos consecutivos de una progresión aritmética cuya suma sea 15 y cuyos cuadrados
suman 99,5.</p></li>


<li>&#11088;&#11088;<p>Halla la suma de los veinticinco primeros términos de una progresión aritmética tal que $a_1=7$ y $d=6$.</p></li>


<li>&#11088;&#11088;&#11088;<p>Encuentra $S_{40}$ en una progresión aritmética, sabiendo que $a_1=5$ y $a_2=8$.</p></li>

<li>&#11088;&#11088;&#11088;<p>Calcula $S_{56}$ en una progresión aritmética, sabiendo que $a_3=11$ y $a_6=26$.</p></li>


<li>&#11088;<p>Calcula la suma de los múltiplos de 7 menores de 1000.</p></li>
<!--
<li>&#11088;<p></p></li>
-->
</ol>
</section>



</main>
<?php include('inc/footer.php'); ?>
