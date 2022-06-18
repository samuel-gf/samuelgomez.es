<?php include('inc/cabecera_html.php'); ?>
<title>Apuntes de Tikz</title>
<script type="text/javascript" src="js/highlight.min.js"></script> <!-- Color código 1 de 2-->
<link rel="stylesheet" type="text/css" href="css/github.min.css">  <!-- Color código 2 de 2-->
</head>

<body>
<?php include('inc/cabecera_fixed.php'); ?>

<script>hljs.highlightAll();</script>

<nav id="menu"><ul>
		<li><a href="#introduccion">Introducción</a></li>
		<li><a href="#base">Base</a></li>
	</ul>
</nav>

<main>

<a name="introduccion">
<h1>Apuntes de Tikz</h1>
</a>

<section>
<h2>Introducción</h2>
<p><a href="https://tikz.dev/" target="_blank">Tikz</a> es un lenguaje que 
sirve para crear gráficos estáticos en 
<a href="https://www.latex-project.org/" target="_blank">LaTeX</a>. Los resultados son muy vistosos y
espectaculares.</p>

<img src="img/0003.webp" style="border: 1px solid black; width: 50%;">
</section>



<section>
<a name="base"><h2>Base</h2></a>
<p>En la cabecera del fichero <b>LaTeX</b> debes usar:</p>

<pre><code class="lang-tex">% En la cabecera del fichero .tex
\usepackage{tikz}
\usetikzlibrary{babel}
</code></pre>

<p>Y en el lugar donde quieras incluir el gráfico puedes poner algo tal que así:</p>
<pre><code class="lang-tex">% Hola mundo Tikz
\begin{tikzpicture}
	\draw (-2,0) -- (2,0);
	\filldraw [gray] (0,0) circle (2pt);
	\draw (-2,-2) .. controls (0,0) .. (2,-2);
	\draw (-2,2) .. controls (-1,0) and (1,0) .. (2,2);
\end{tikzpicture}
</code></pre>
</section>

</main>
<?php include('inc/footer.php'); ?>
