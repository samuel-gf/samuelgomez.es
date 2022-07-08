<?php include('inc/cabecera_html.php'); ?>
<?php include('inc/lib.php'); ?>
	<!-- Matemáticas -->
	<link rel="stylesheet" type="text/css" href="<?php profundidad($argv);?>css/katex.min.css">
	<script type="text/javascript" src="<?php profundidad($argv);?>js/katex.min.js"></script>
	<script type="text/javascript" src="<?php profundidad($argv);?>js/katex.autorender.min.js"></script>

	<title>Espacios vectoriales</title>
	<link rel="stylesheet" type="text/css" href="css/highlight.css">  
	</head>
<body>

<?php include('inc/matematicas.js.php'); ?>
<?php include('inc/cabecera_fixed.php'); ?>

<nav id="menu">
	<ul>
	<h1>Espacios vectoriales</h1>
	<li><a href="#top">Conceptos generales</a></li>
	<li><a href="#subespacios">Subespacios vectoriales</a></li>
	<li><a href="#homomorfismos">Homomorfismo entre espacios vectoriales</a></li>
	<li><a href="#problemas">Problemas</a></li>
	</ul>
</nav>

<main>
<header><h1>Espacios vectoriales</h1></header>



<section>
<h1><a name="cabecera">Conceptos generales</a></h1>

<p>Sea un conjunto de elementos denominados vectores y otro conjunto de elemen-
tos denominados escalares donde los primeros tienen una operación interna y otra
externa tal que cumplen:</p>

<h2>Ley interna $+$</h2>
Configura la estructura $(V,+)$ como grupo abeliano (conmutativo) y por lo 
tanto cumple las leyes $AeiC$ (Asociativa, elemento neutro, elemento inverso y complementario).</p>

<ol class="propiedades">
<li>Asociativa $$\forall x,y,z \in V(k) \Rightarrow (x+y)+z=x+(y+z)$$</li>
<li>Elemento neutro $$\forall x \in V(k) \Rightarrow x+0=x$$</li>
<li>Simetrizable $$\forall x \in V(k), \exists (-x) \in V(k) \Rightarrow x + (-x) = 0$$</li>
<li>Conmutativa $$\forall x,y \in V(k) \Rightarrow x+y=y+x$$</li>
</ol>



<h2>Ley externa $\cdot$</h2>
<p>Denominada producto ($\cdot$) se relaciona un vector por un escalar y asigna así
$\lambda x = x \lambda$ y cumple las propiedades $AeD^{+}_vD^{+}_c$.

<ol class="propiedades">
<li>Asociativa mixta $$\alpha (\beta x) = (\alpha \beta) x$$</li>
<li>Elemento neutro <p>El elemento neutro es el escalar $1$ así pues: $1\cdot x = x$</p></li>
<li>Distributiva respecto de la suma de vectores $$\lambda(x+y)=\lambda x + \lambda y$$</li>
<li>Distributiva respecto a la suma de escalares $$(\alpha + \beta)x=\alpha x + \beta x$$</li>
</ol>

<h2>Ejemplos de espacios vectoriales</h2>
<ol class="letras">
<li>Vectores libres tridimensionales sobre el cuerpo $\R$ con las operaciones:
	<ul>
		<li><b>Suma</b> Aplicando la regla del paralelogramo</li>
		<li><b>Producto por un número real</b> El producto de un número real $\lambda$ por un vector $x$ es otro
		vector $\lambda x$, cuyo módulo se obtiene multiplicando por $|\lambda|$ el módulo $|x|$, su dirección es la de $x$ y su sentido
		coincide con el de $x$ cuando $\lambda$ es positivo, y el contrario cuando es negativo.</li>
	</ul>
</li>
<li>El conjunto $\R(\R)$</li>
	<p><b>Suma</b> Estos vectores unidimensionales son fáciles de operar $\R \times \R \rightarrow \R$ puesto que solo	
		tiene una componente. Por ejemplo: $3+5=8$</p>
<li>Producto por un escalar $\R \times \R \rightarrow \R$. Por ejemplo $3\cdot 5 = 15$.</li>
</ol>


<h2>Propiedades que se deducen de los axiomas</h2>

<ol class="propiedades">
<li>$\forall \lambda  \in \Bbb{K}, \lambda 0 = 0$
	<p>Demostración: $\lambda x = \lambda (x + 0) = \lambda x  + \lambda 0 \Rightarrow \lambda  0 = 0$</li>
<li>$\forall x \in V(\Bbb{K}, 0x = 0$
	<p>Demostración: $x=x(1+0)=x\cdot 1 + x\cdot 0 \Rightarrow 0x = 0$</li>
<li>$\lambda x=0  \Rightarrow \lambda = 0 \lor x=0$
	<p>Para su demostración hay dos posibilidades:
	<p>Primera posibilidad: $\lambda \neq 0 \Rightarrow \exists \lambda^{-1}$ porque $\lambda \in \Bbb{K}$ y podemos escribir
		$x=\lambda^{-1}(\lambda x)$ sustituyendo con el antecedente $\lambda^{-1} 0 \Rightarrow (\lambda^{-1}\lambda)x=0$ y como 
		lo que está entre paréntesis es la unidad, nos queda que $1x=0$, es decir $x=0$.</p>
	<p>Segunda posibilidad: $\lambda=0$ ya demostrado en $0x=0$.</p>
	</li>
</ol>
</section>


<!-- SECCIÓN  ***************************************************** -->
<section>

</section>


</main>
<?php include('inc/footer.php'); ?>
