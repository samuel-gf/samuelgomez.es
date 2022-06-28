<?php include('inc/cabecera_html.php'); ?>
<title>Apuntes de Tikz</title>
<script type="text/javascript" src="js/highlight.min.js"></script> <!-- Color código 1 de 2-->
<link rel="stylesheet" type="text/css" href="css/github.min.css">  <!-- Color código 2 de 2-->
</head>

<body>
<?php include('inc/cabecera_fixed.php'); ?>

<script>hljs.highlightAll();</script>

<nav id="menu"><ul>
		<li><a href="#top">Introducción</a></li>
		<li><a href="#base">Base</a></li>
	</ul>
</nav>

<main>
<header><h1>Apuntes de Tikz</h1></header>

<section>
<h1><a name="introduccion">Introducción</a></h1>

<p><a href="https://tikz.dev/" target="_blank">Tikz</a> es un lenguaje que 
sirve para crear gráficos estáticos en 
<a href="https://www.latex-project.org/" target="_blank">LaTeX</a>. Los resultados son muy vistosos y
espectaculares.</p>

<img src="img/matematicas/0003.webp" style="border: 1px solid black; width: 50%;">
</section>



<section>
<h1><a name="base">Base</a></h1>
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
