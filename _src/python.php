<?php include('inc/cabecera_html.php'); ?>
	<title>Apuntes de Python</title>
	<script type="text/javascript" src="js/highlight.min.js"></script> <!-- Color código 1 de 2-->
	<link rel="stylesheet" type="text/css" href="css/github.min.css">  <!-- Color código 2 de 2-->
	</head>
<body>


<?php include('inc/cabecera_fixed.php'); ?>
<script>hljs.highlightAll();</script>

<nav id="menu"><ul>
		<li><a href="#tipos_variables">Tipos de variables</a></li>
		<li><a href="#acumuladores">Acumuladores</a></li>
		<li><a href="#salida_numero">Poner un número en pantalla</a></li>
		<li><a href="#entrada_numero">Preguntar un número</a></li>
		<li><a href="#condicional">Condicional</a></li>
		<li><a href="#bucle_for">Bucle for</a></li>
		<li><a href="#lista">Listas</a></li>
	</ul>
</nav>

<main>

<h1>Apuntes Python</h1>

<!------------------------------------------------------------------------------------->
<section>
<a name="tipos_variables">
	<h2>Tipos de variables</h2>
</a>
<p>El sistema asocia un nombre de variable con un valor que puede ser un
número entero, un número decimal o una cadena:</p>

<h3>Ejemplos</h3>
<pre>
<code class="language-python"># Variables01.py
a = 7           # Número entero
b = 3.14        # Número decimal
c = "Filomena"  # Cadena
</code></pre>

</section>
<!------------------------------------------------------------------------------------->
<section>
<a name="acumuladores">
	<h2>Acumuladores</h2>
</a>
<p>Una variable se puede usar como un acumulador para que su valor se
incremente por encima o por debajo de su valor anterior:</p>

<h3>Ejemplos</h3>
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
<a name="salida_numero">
	<h2>Poner un número en pantalla</h2>
</a>

<h3>Ejemplos</h3>
<pre>
<code class="language-python">
# Poner en pantalla un texto (cadena literal)
print("Aquí se pone el texto")

# Poner en pantalla una variable
print(n)

# Poner en pantalla un texto y una variable
print("El resultado es", n)
</code></pre>



<h3>Problemas</h3>
<ol class="problemas">
	<li>Prueba el siguiente código:
	<pre><code class="language-python">
	print("Hola mundo")
	</code></pre>
	</li>
	<li>Escribe un programa que <em>pregunte al usuario</em> dos números, los sume
		y <em>muestre en pantalla</em> el resultado.</li>
	<li>Escribe un programa que <em>pregunte al usuario</em> tres números que pueden ser 
		decimales o no, calcular el promedio y <em>mostrarlo en pantalla</em>.</li>
	<li>Escribe un programa que <em>pregunte al usuario</em> un número n y <em>muestre
			en pantalla</em> el cuadrado de ese valor.</li>
	<li>Escribe un programa que <em>pregunte al usuario</em> su nombre (cadena literal) y luego <em>ponga 
			en pantalla</em> un saludo a esa persona llamándola por su nombre</li>
	<li><em>Mostrar en pantalla</em> la tabla de multiplicar del 7 en este formato:
		<pre>
		  7 x 1 = 7
		  7 x 2 = 14
		  7 x 3 = 21
		  ...
		</pre>
	</li>
	<li>Escribe un programa que <em>pregunte al usuario</em> el radio de una circunferencia. 
		El programa <em>mostrará en pantalla</em> cual es el perímetro de
		dicha circunferencia. P = 2πr</li>

</ol>
</section>
<!------------------------------------------------------------------------------------->
<section>
<a name="entrada_numero">
	<h2>Preguntar al usuario un número</h2>
</a>

<h3>Ejemplos</h3>
<pre>
<code class="language-python">
# Número entero:
n = int(input("Dime un número entero"))

# Número decimal
n = float(input("Dime un número decimal:"))
</code></pre>

<h3>Problemas</h3>
<ol class="problemas">

	<li>Prueba el siguiente código
	<pre><code class="language-python">
	print("MENÚ del RESTAURANTE")
	print("1.Pollo con patatas")
	print("2.Guisantes con jamón")
	print("3.Caldo de gallina")
	n = int(input("¿Qué plato quieres?"))
	print("Has elegido el plato nº", n)
	</code></pre>
	</li>

	<li>Escribe un problema que <em>pregunte al usuario</em> un número entero 
		y <em>ponga en pantalla</em> el doble de esa cantidad</li>
	<li>Haz un programa que <em>pregunte al usuario</em> tres números y 
		<em>muestre por pantalla</em> cuál de ellos es mayor</li>
	<li>Escribe un programa que <em>pregunte al usuario</em> un número entero
		y <em>ponga en pantalla</em> la tabla de multiplicar de dicho número
		desde el 1 hasta el 10</li>
	<li>Escribir un programa que <em>pregunte al usuario</em> dos números, los sume y
		<em>muestre en pantalla</em> el resultado</li>
	<li>Escribir un programa que <em>pregunte al usuario</em> tres números que
		pueden ser decimales o no, calcular el promedio y <em>mostrarlo en pantalla</em></li>
	<li>Escribir un programa que <em>pregunte al usuario</em> dos números y <em>muestre
			en pantalla</em> el que sea mayor de los dos</li>
	<li>Escribir un programa que <em>pregunte al usuario</em> su nombre (cadena literal) 
		y luego <em>ponga en pantalla</em> un saludo a esa persona llamándola por su nombre</li>
</ol>

</section>
<!------------------------------------------------------------------------------------->
<section>
<a name="condicional">
	<h2>Condicionales</h2>
</a>

<h3>Ejemplos</h3>
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

<h3>Problemas</h3>
<ol class="problemas">
	<li>Prueba este código
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
	<li>Haz un programa que <em>pregunte al usuario</em> tres números y <em>muestre
			por pantalla</em> cuál de ellos es mayor.</li>
	<li>Escribe un programa que <em>pregunte al usuario</em> un número entero y
		<em>ponga en pantalla</em> los 100 primeros múltiplos.</li>
	<li>El sistema <em>pregunta al usuario</em> que hora es (en formato 0-23) y tras
		realizar un cálculo, debe <em>indicar</em> que hora es en Nueva York. No usar los
		minutos. En Nueva York hay seis horas menos que en España.</li>
</ol>
</section>
<!------------------------------------------------------------------------------------->
<section>
<a name="bucle_for">
	<h2>Bucles for</h2>
</a>

<h3>Ejemplos</h3>
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



<h3>Problemas</h3>
</section>
<!------------------------------------------------------------------------------------->
<section>
<a name="lista">
	<h2>Listas</h2>
</a>

<h3>Ejemplos</h3>
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

<h3>Problemas</h3>
<ol class="problemas">
	<li>Prueba este código:
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
	<li>Crear <em>una lista</em> con cuatro nombres de persona y otra con cuatro
		tipos de bailes. <em>Mostrar en pantalla</em> una línea por cada persona
		y al lado el nombre de un baile.</li>
	<li>Crear <em>una lista</em> con 10 números enteros. <em>Mostrar en pantalla</em>, en
		una línea cada número de la lista y al lado el cuadrado de ese
		número.</li>
	<li>El sistema <em>preguntará al usuario</em> por cuatro productos del supermercado 
		y su correspondiente precio. Cada producto será almacenado 
	<em>en la lista</em> llamada productos y cada precio en la lista
		denominada precios. Al final se mostrarán en pantalla los productos y 
		los precios de estos productos en pantalla y una línea
		más para indicar el total a pagar en el supermercado.</li>
	<li>El ordenador <em>pregunta al usuario</em> números, si uno de los números es un 0, 
		el ordenador deja de preguntar, calcula la media y la
		<em>muestra en pantalla</em> (sin contar el último cero).</li>
</ol>
</section>
<!------------------------------------------------------------------------------------->
</main>
<?php include('inc/footer.php'); ?>
