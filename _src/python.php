<?php include('inc/cabecera_html.php'); ?>
	<title>Apuntes de Python</title>
	<script type="text/javascript" src="js/highlight.min.js"></script> <!-- Color código 1 de 2-->
	<link rel="stylesheet" type="text/css" href="css/github.min.css">  <!-- Color código 2 de 2-->
	</head>
<body>


<?php include('inc/cabecera_fixed.php'); ?>
<script>hljs.highlightAll();</script>

<nav id="menu"><ul>
		<h1>Temas</h1>
		<li><a href="#variables">Variables</a></li>
		<li><a href="#acumuladores">Acumuladores</a></li>
		<li><a href="#salida_numero">Poner un número en pantalla</a></li>
		<li><a href="#entrada_numero">Preguntar un número</a></li>
		<li><a href="#condicional">Condicional</a></li>
		<li><a href="#bucle_for">Bucle for</a></li>
		<li><a href="#lista">Listas</a></li>
	</ul>
</nav>

<main>

<header><h1><a name="variables">Programación con Python</a></h1></header>

<!------------------------------------------------------------------------------------->
<section>
<h1>Variables</h1>

<p>El sistema asocia un nombre de variable con un valor que puede ser un
número entero, un número decimal o una cadena:</p>

<h2>Ejemplos</h2>
<pre>
<code class="language-python"># Variables01.py
a = 7           # Número entero
b = 3.14        # Número decimal
c = "Filomena"  # Cadena
</code></pre>

</section>


<!------------------------------------------------------------------------------------->
<section>
<h1><a name="acumuladores">Acumuladores</a></h1>

<p>Una variable se puede usar como un acumulador para que su valor se
incremente por encima o por debajo de su valor anterior:</p>

<h2>Ejemplos</h2>
<pre>
<code class="language-python"># acumuladores01.py
n = 0      # n vale 0
print(n)   # 0

n = n + 1  # Ahora n vale lo que ya valía antes más 1
print(n)   # 1

n = n + 10 # Ahora n vale lo que ya valía antes más 10
print(n)   # 11

n = n * 2  # Ahora n vale el doble de lo que valía antes
print(n)   # 22
</code></pre>

</section>
<!------------------------------------------------------------------------------------->
<section>
<h1><a name="salida_numero">Poner un número en pantalla</a></h1>

<h2>Ejemplos</h2>
<pre>
<code class="language-python">
# Poner en pantalla un texto (cadena literal)
print("Aquí se pone el texto")

# Poner en pantalla una variable
print(n)

# Poner en pantalla un texto y una variable
print("El resultado es", n)
</code></pre>



<h2>Problemas</h2>
<ol class="problemas">
	<li>&#11088;<p>Prueba el siguiente código:</p>
	<pre><code class="language-python">
	print("Hola mundo")
	</code></pre>
	<li>&#11088;&#11088;<p>Escribe un programa que <u>pregunte al usuario</u> dos números, los sume
		y <u>muestre en pantalla</u> el resultado.</p></li>
	<li>&#11088;&#11088;&#11088;<p>Escribe un programa que <u>pregunte al usuario</u> tres números que pueden ser 
		decimales o no, calcular el promedio y <u>mostrarlo en pantalla</u>.</p></li>
	<li>&#11088;<p>Escribe un programa que <u>pregunte al usuario</u> un número n y <u>muestre
			en pantalla</u> el cuadrado de ese valor.</p></li>
	<li>&#11088;<p>Escribe un programa que <u>pregunte al usuario</u> su nombre (cadena literal) y luego <u>ponga 
			en pantalla</u> un saludo a esa persona llamándola por su nombre.</p></li>
	<li>&#11088;&#11088;<p><u>Mostrar en pantalla</u> la tabla de multiplicar del 7 en este formato:</p>
		<pre>
		  7 x 1 = 7
		  7 x 2 = 14
		  7 x 3 = 21
		  ...
		</pre>
	</li>
	<li>&#11088;&#11088;<p>Escribe un programa que <u>pregunte al usuario</u> el radio de una circunferencia. 
		El programa <u>mostrará en pantalla</u> cual es el perímetro de
		dicha circunferencia. P = 2πr.</p></li>

</ol>
</section>
<!------------------------------------------------------------------------------------->
<section>
<h1><a name="entrada_numero">Preguntar al usuario un número</a></h1>

<h2>Ejemplos</h2>
<pre>
<code class="language-python">
# Número entero:
n = int(input("Dime un número entero"))

# Número decimal
n = float(input("Dime un número decimal:"))
</code></pre>

<h2>Problemas</h2>
<ol class="problemas">

	<li><p>Prueba el siguiente código:</p>
	<pre><code class="language-python">
	print("MENÚ del RESTAURANTE")
	print("1.Pollo con patatas")
	print("2.Guisantes con jamón")
	print("3.Caldo de gallina")
	n = int(input("¿Qué plato quieres?"))
	print("Has elegido el plato nº", n)
	</code></pre>
	</li>

	<li><p>Escribe un problema que <u>pregunte al usuario</u> un número entero 
		y <u>ponga en pantalla</u> el doble de esa cantidad</p></li>
	<li><p>Haz un programa que <u>pregunte al usuario</u> tres números y 
		<u>muestre por pantalla</u> cuál de ellos es mayor</p></li>
	<li><p>Escribe un programa que <u>pregunte al usuario</u> un número entero
		y <u>ponga en pantalla</u> la tabla de multiplicar de dicho número
		desde el 1 hasta el 10</p></li>
	<li><p>Escribir un programa que <u>pregunte al usuario</u> dos números, los sume y
		<u>muestre en pantalla</u> el resultado</p></li>
	<li><p>Escribir un programa que <u>pregunte al usuario</u> tres números que
		pueden ser decimales o no, calcular el promedio y <u>mostrarlo en pantalla</u></p></li>
	<li><p>Escribir un programa que <u>pregunte al usuario</u> dos números y <u>muestre
			en pantalla</u> el que sea mayor de los dos</p></li>
	<li><p>Escribir un programa que <u>pregunte al usuario</u> su nombre (cadena literal) 
		y luego <u>ponga en pantalla</u> un saludo a esa persona llamándola por su nombre</p></li>
</ol>

</section>
<!------------------------------------------------------------------------------------->
<section>
<h1><a name="condicional">Condicionales</a></h1>

<h2>Ejemplos</h2>
<pre>
<code class="language-python">
edad = int(input("Dime tu edad:"))
if edad >= 18:
  print("Eres mayor de edad")
else:
  print("Eres menor de edad")
</code></pre>


<pre>
<code class="language-python">
# Condicional doble (AND)
edad = 20
euros = 30000
if edad>=18 and euros>=10000:
  print("Puedes comprar un coche")
else:
  print("No cumples las dos condiciones")
</code></pre>

<h2>Problemas</h2>
<ol class="problemas">
	<li><p>Prueba este código:</p>
	<pre>
	<code class="language-python">
	edad = int(input("Dime tu edad:"))
	dinero = int(input("¿Cuánto dinero tienes ahorrado?))
	
	if edad >= 18 and dinero >= 10000:
	  print("Tienes dinero para comprar coche y conducir")
	if edad < 18 and dinero >= 10000:
	  print("Puedes comprar coche pero no conducir")
	if edad >= 18 and dinero < 10000:
	  print("Puedes conducir pero no comprar coche")
	if edad < 18 and dinero < 10000:
	  print("No puedes conducir ni comprar coche. ¡Estudia!")
	</code></pre>
	</li>
	<li><p>Haz un programa que <u>pregunte al usuario</u> tres números y <u>muestre
			por pantalla</u> cuál de ellos es mayor.</p></li>
	<li><p>Escribe un programa que <u>pregunte al usuario</u> un número entero y
		<u>ponga en pantalla</u> los 100 primeros múltiplos.</p></li>
	<li><p>El sistema <u>pregunta al usuario</u> que hora es (en formato 0-23) y tras
		realizar un cálculo, debe <u>indicar</u> que hora es en Nueva York. No usar los
		minutos. En Nueva York hay seis horas menos que en España.</p></li>
</ol>
</section>
<!------------------------------------------------------------------------------------->
<section>
<h1><a name="bucle_for">Bucles for</a></h1>

<h2>Ejemplos</h2>
<pre>
<code class="language-python">
# Repetir un bloque 10 veces
for i in range(1,11):
  print("Hola mundo”, i)
</code></pre>


<pre>
<code class="language-python">
# Preguntar al usuario 10 veces
for i in range(1, 11):
  nombre = input("Dime tu nombre:")
  print("Hola", nombre)
</code></pre>


<pre>
<code class="language-python">
# Repetir un bloque y no repetir la última línea
for i in range(1,1000):
  print("Esto forma parte del bucle")
  print("Esto también")
  print("Esto NO se repite")
</code></pre>



<h2>Problemas</h2>
</section>
<!------------------------------------------------------------------------------------->
<section>
<h1><a name="lista">Listas</a></h1>

<h2>Ejemplos</h2>
<pre>
<code class="language-python">
# Crear una lista
nombres = ["Alberto", "Beatriz", "Carlos", "Diana"]
</code></pre>


<pre>
<code class="language-python">
# Usar un elemento de la lista
print(nombres[1],"y", nombres[2])
</code></pre>


<pre>
<code class="language-python">
# Tamaño de la lista
print("Hay", len(nombres), "personas en la lista")
</code></pre>

<pre>
<code class="language-python">
# Mostrar los nombres de la lista
print(nombres)
</code></pre>

<pre>
<code class="language-python">
# Mostrar cada nombre en un línea
for i in range(0, len(nombres)):
  print(nombres[i])
</code></pre>


<pre>
<code class="language-python">
# Añadir un dato al final de la lista
nombres.append("Emiliano")
</code></pre>


<pre>
<code class="language-python">
# Añadir un dato en una posición 1
nombres.insert(1, "Fabiola")
</code></pre>


<pre>
<code class="language-python">
# Añadir un dato al principio de la lista
nombres.insert(0, "Guillermo Fernando")
</code></pre>

<h2>Problemas</h2>
<ol class="problemas">
	<li><p>Prueba este código:</p>
		<pre>
		<code class="language-python">
		lista = []

		lista.append("A")
		print(lista) # A

		lista.append("B")
		print(lista) # A, B

		lista.append("C")
		print(lista) # A, B, C
		</code></pre>
	</li>
	<li><p>Crear <u>una lista</u> con cuatro nombres de persona y otra con cuatro
		tipos de bailes. <u>Mostrar en pantalla</u> una línea por cada persona
		y al lado el nombre de un baile.</p></li>
	<li><p>Crear <u>una lista</u> con 10 números enteros. <u>Mostrar en pantalla</u>, en
		una línea cada número de la lista y al lado el cuadrado de ese
		número.</p></li>
	<li><p>El sistema <u>preguntará al usuario</u> por cuatro productos del supermercado 
		y su correspondiente precio. Cada producto será almacenado 
	<u>en la lista</u> llamada productos y cada precio en la lista
		denominada precios. Al final se mostrarán en pantalla los productos y 
		los precios de estos productos en pantalla y una línea
		más para indicar el total a pagar en el supermercado.</p></li>
	<li><p>El ordenador <u>pregunta al usuario</u> números, si uno de los números es un 0, 
		el ordenador deja de preguntar, calcula la media y la
		<u>muestra en pantalla</u> (sin contar el último cero).</p></li>
</ol>
</section>
<!------------------------------------------------------------------------------------->
</main>
<?php include('inc/footer.php'); ?>
