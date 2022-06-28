<?php include('inc/cabecera_html.php'); ?>
	<title>Practicas de Tenología, programación y robótica con Arduino</title>
	<script type="text/javascript" src="../js/highlight.min.js"></script> <!-- Color código 1 de 2-->
	<link rel="stylesheet" type="text/css" href="../css/github.min.css">  <!-- Color código 2 de 2-->
	</head>
<body>

<?php include('inc/cabecera_fixed.php'); ?>
<script>hljs.highlightAll();</script>

<nav id="menu"><ul>
<h1>Proyectos TPR</h1>
<li><a href="#top">Hola mundo</a></li>
<li><a href="#btn-doble-led">Botón doble LED</a></li>
<li><a href="#semaforo-tres-luces">Semáforo de tres luces</a></li>
<li><a href="#piezoelectrico-led-y-boton">Piezoeléctrico, LED y botón</a></li>
<li><a href="#emisor-morse">Emisor de código morse</a></li>
<li><a href="#boton-control">Botón de control</a></li>
<li><a href="#alarma">Alarma</a></li>
<li><a href="#semaforo-acustico">Semáforo con aviso acústico</a></li>
<li><a href="#monitor-serie">Monitor serie</a></li>
<li><a href="#servomotor">Servomotor</a></li>
<li><a href="#boton-hombre-muerto">Botón hombre muerto</a></li>
<li><a href="#resistencia-variable-potenciometro">Resistencia variable (potenciómetro)</a></li>
<li><a href="#pitidos-frecuencia-variable">Pitidos de frecuencia variable</a></li>
<li><a href="#bateria-musical">Batería musical</a></li>
<li><a href="#servo-joystick-coordinados">Servo y joystick coordinados</a></li>
<li><a href="#servo-joystick-luces">Servo y joystick con luces</a></li>
<li><a href="#piano-tres-botones">Piano de tres botones</a></li>
<li><a href="#sensor-distancia">Sensor de distancia</a></li>
<li><a href="#sensor-distancia-avanzado">Sensor de distancia avanzado</a></li>
</ul>
</nav>


<main>

<header>
	<h1>Practicas de tecnología, programación y robótica con Arduino</h1>
	<img src="../img/tpr/arduino_logo.webp" alt="Arduino logo">
</header>

<section class="proyecto">
<h1><a name="hola-mundo">Hola mundo</a></h1>

<h2>Objetivos</h2>
<p>Este proyecto sirve para testear un LED y empezar a familiarizarse con la placa de pruebas.</p>

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Colocar la placa Arduino a la izquierda y la placa de pruebas a la derecha</li>
<li>Buscar en el LED el ánodo y el cátodo y luego colocarlo en la placa de pruebas</li>
<li>Realizar el cableado siguiendo el esquema</li>
<li>Escribir el software en el editor Arduino y subirlo para probarlo</li>
</ol>

<img src="../img/tpr/01.webp" alt="circuito">

<pre><code class="language-cpp">// Hola mundo
void setup() {
    pinMode(4, OUTPUT);
}

void loop() {
    digitalWrite(4, HIGH);
    delay(1000);
    digitalWrite(4, LOW);
    delay(1000);
}
</code></pre>
</section>







<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="btn-doble-led">Botón doble LED</a></h1>
<h2>Objetivos</h2>
<p>Este proyecto sirve para prácticar la conexión de un botón y de un LED.</p>

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Montar el botón siguiendo el esquema</li>
<li>Montar el LED de color rojo y conectarlo al puerto 4</li>
<li>Montar el LED de color verde y conectarlo al puerto 5</li>
<li>Escribir el software y probarlo y conectarlo al puerto 6</li>
</ol>

<img src="../img/tpr/02.webp">

<pre><code class="language-cpp">// Botón doble LED
void setup() {
    pinMode(4, OUTPUT);
    pinMode(5, OUTPUT);
    pinMode(6, INPUT);
}

void loop() {
    if (digitalRead(6)==HIGH){
        digitalWrite(4, HIGH);
        digitalWrite(5, LOW);
    } else {
        digitalWrite(4, LOW);
        digitalWrite(5, HIGH);
    }
}
</code></pre>
</section>





<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="semaforo-tres-luces">Semáforo de tres luces</a></h1>
<h2>Objetivos</h2>
<p>Las luces se encenderán siguiendo el orden</p>
<h2>Pasos para desarrollar el proyecto</h2>

<ol>
<li>El LED rojo se conecta al puerto 4</li>
<li>El LED ambar se conecta al puerto 5</li>
<li>El LED verde se conecta al puerto 6</li>
<li>La luz roja luce durante 7 segundos, luego la verde 7 y finalmente la ambar durante 1 segundo antes de volver a comenzar el ciclo</li>
</ol>


<pre><code class="language-cpp">// Semáforo de tres luces
void setup() {
    pinMode(4, OUTPUT);
    pinMode(5, OUTPUT);
    pinMode(6, OUTPUT);
}

void loop() {
    digitalWrite(4,HIGH);
    digitalWrite(5,LOW);
    digitalWrite(6,LOW);
    delay(7000);

    digitalWrite(4,LOW);
    digitalWrite(5,LOW);
    digitalWrite(6,HIGH);
    delay(7000);

    digitalWrite(4,LOW);
    digitalWrite(5,HIGH);
    digitalWrite(6,LOW);
    delay(1000);
}
</code></pre>
</section>






<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="piezoelectrico-led-y-boton">Piezoeléctrico, LED y botón</a></h1>
<h2>Objetivos</h2>
<p>El piezoeléctrico emitirá pitidos a intervalos de un segundo, y una frecuencia de 3000 Hz. El LED rojo parpadeará cuando suene el pitido. El botón inhibe el sonido del piezo, pero no del LED.</p>
<h2>Pasos para desarrollar el proyecto</h2>

<ol>
<li>El piezoeléctrico se conecta al puerto 9</li>
<li>El LED rojo se conecta al puerto 4</li>
<li>El botón se conecta al puerto 5</li>
<li>Cuando el botón se pulsa, el sonido no se inhibe sino que suena otro tono diferente</li>
</ol>


<p><img src="../img/tpr/04.webp" alt="Circuito del proyecto"></p>

<pre><code class="language-cpp">// Piezoeléctrico, LED, botón
void setup() {
    pinMode(4, OUTPUT);
    pinMode(5, OUTPUT);
    pinMode(6, INPUT);
}

void loop() {
    if (digitalRead(6)==HIGH){
        digitalWrite(4, HIGH);
        digitalWrite(5, LOW);
    } else {
        digitalWrite(4, LOW);
        digitalWrite(5, HIGH);
    }
}
</code></pre>
</section>




<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="emisor-morse">Emisor de código morse</a></h1>
<h2>Objetivos</h2>
<p>En este proyecto construimos una máquina generadora de código morse con dos botones. El código morse se empleaba en transmisiones telegráficas y cada letra tiene su representación. En nuestro hardware, dos botones controlan los pitidos del piezoeléctrico. Uno produce pitidos cortos y otro produce pitidos largos.</p>
<h2>Práctica</h2>
<p>Prueba a emitir un mensaje de SOS, para ello comprueba en la tabla de más abajo a que conjunto de puntos y letras corresponde cada letra (S, O, S).</p>

<figure style="text-align: center;">
<img src="../img/tpr/05.02.webp" alt="Código Morse">
<figcaption>Código Morse</figcaption>
</figure>

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Se desarrolla y se sube el software</li>
<li>El piezoeléctrico se conecta al puerto 9</li>
<li>El botón <b>A</b> se conecta al puerto 4</li>
<li>El botón <b>B</b> se conecta al puerto 5</li>
</ol>

<img src="../img/tpr/05.webp" alt="Circuito del proyecto">

<pre><code class="language-cpp">// Emisor morse
void setup() {
  pinMode(4, INPUT);
  pinMode(5, INPUT);
  pinMode(9, OUTPUT);
}

void loop() {
  if (digitalRead(4)==HIGH){  // Si se pulsa el botón 4
    tone(9, 3000, 100);
  }
  if (digitalRead(5)==HIGH){  // Si se pulsa del botón 5
    tone(9, 3000, 300);
  }
  delay(500);
}
</code></pre>
</section>





<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="boton-control">Botón de control</a></h1>
<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Montar un LED rojo en el puerto 5 y uno verde en el 6 (HW)</li>
<li>El LED rojo debe parpadear a intervalos de 1 segundo (SW)</li>
<li>Montar un botón en el puerto 3 (HW)</li>
<li>Si se pulsa el botón, el LED verde debe encenderse (SW)</li>
</ol>
</section>


<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="alarma">Alarma</a></h1>
<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Poner un piezoeléctrico conectado al puerto 9 (HW)</li>
<li>El piezoeléctrico debe emitir un pitido cada segundo (SW)</li>
<li>Montar un LED rojo conectado al puerto 7 (HW)</li>
<li>El LED rojo debe parpadear intermitentemente cuando suene la alarma (SW)</li>
</ol>
</section>




<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="semaforo-acustico">Semáforo con aviso acústico</a></h1>
<p><b>Nota</b> Este proyecto presenta una dificultad añadida ya que el software del paso 2 y el 3 son diferentes. Además, el paso 4 depende tanto de hardware como de software para poder ser completado.</p>
<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Montar un LED verde y otro rojo en los puertos 4 y 5 respectívamente (HW)</li>
<li>Los LED deben encenderse secuencialmente a intervalos de 4 segundos (SW)</li>
<li>El LED verde debe estar encendido 2 segundos, luego parpadea a intervalos de medio segundo (durante dos segundos) antes de cambiar al rojo (SW)</li>
<li>Conectar un piezoeléctrico al puerto 6 y hacer que emita un pitido cuando el semáforo esté en verde (HW + SW)</li>
</ol>
</section>





<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="monitor-serie">Monitor serie</a></h1>
<h2>Objetivos</h2>
<p>Este proyecto servirá para testear el monitor serie. Es un proyecto muy sencillo y por eso <strong>no se firma</strong> pero 
es importante que comprendas como funciona porque será la base de proyectos futuros.</p>


<h2>Primer software</h2>// Primer software
<pre><code class="language-cpp">
void setup() {
  Serial.begin(9600);
}

void loop() {
  Serial.println("Hola");
}
</code></pre>

<h2>Segundo software</h2>
<pre><code class="language-cpp">// Segundo software
int n = 0;              // Inicializa la variable

void setup() {
  Serial.begin(9600); // Inicializa monitor serie
}

void loop() {
  n++;                // Incrementa la variable 
  Serial.println(n);  // Mostrar en pantalla el valor
  delay(100);
}
</code></pre>
</section>




<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="servomotor">Servomotor</a></h1>

<h2>Objetivos</h2>
<p>En este proyecto haremos que el servomotor se mueva de un lado a otro de manera automática. Es un
proyecto bastante sencillo por lo que <strong>no se firmará</strong> pero es bastante importante que comprendas
como funciona porque este componente se utilizará en poryectos futuros.</p>

<img src="../img/tpr/06.webp">

<h2>Primer software</h2>


<pre><code class="language-cpp">// Primer software del proyecto servo
#include &lt;Servo.h&gt;

Servo s1;             // Asigna nombre al servo

void setup() {
  s1.attach(9);       // Conectado al puerto 9
}

void loop() {
  s1.write(0);        // Posición 0 grados
  delay(1000);
  s1.write(90);       // Posición 90 grados
  delay(1000);
}
</code></pre>

<h2>Segundo software</h2>


<pre><code class="language-cpp">// Segundo software del proyecto servo
#include &lt;Servo.h&gt;

Servo s1;
int p = 0;             // posición

void setup() {
  s1.attach(9);
}

void loop() {
  p++;                 // Incrementa p
  s1.write(p);         // Mueve el servo
  delay(20);

  if (p == 170) {      // Si llega a 170 grados
      p = 0;           // Vuelve a la posición inicial
      s1.write(p);
      delay(500);
  }
}
</code></pre>
</section>



<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="boton-hombre-muerto">Botón hombre muerto</a></h1>

<p><mark>Este proyecto no se firma</mark> Este es un proyecto que servirá para realizar pruebas.</p>

<img src="../img/tpr/07.webp" alt="Circuito del proyecto">

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Montar un botón en el puerto 7 y un servomotor en el puerto 10 (HW)</li>
<li>El servomotor debe hacer oscilar su brazo a intervalos de 1 segundo entre sus dos extremos solo si el botón se pulsa, el servomotor se detendrá si el botón se suelta (SW)</li>
<li>Montar un LED rojo en el puerto 3 que debe encenderse si el botón del puerto 7 NO está pulsado (HW + SW)</li>
<li>Añadir un piezoeléctrico al puerto 6 que sonará cuando el botón NO ESTÉ PULSADO (HW + SW)</li>
</ol>


<pre><code class="language-cpp">// Botón hombre muerto
#include &lt;Servo.h&gt;

Servo s;

void setup() {
  pinMode(3, OUTPUT);  // LED
  pinMode(6, OUTPUT);  // Piezoeléctrico
  pinMode(7, INPUT);   // Botón
  s.attach(10);        // Servomotor
}

void loop() {
  if (digitalRead(7)==HIGH){ // Botón pulsado
    digitalWrite(3, LOW);
    s.write(10);
    delay(1000);
    s.write(170);
    delay(1000);
  } else {                   // Botón NO pulsado
    digitalWrite(3, HIGH);
    tone(6, 4000, 2000);
    delay(2000);
  }
}
</code></pre>
</section>






<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="resistencia-variable-potenciometro">Resistencia variable (potenciómetro)</a></h1>

<img src="../img/tpr/08.webp" alt="Circuito del proyecto">

<p><mark>Este proyecto no se firma</mark> Este es un proyecto que servirá para realizar pruebas.</p>

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Montar la resistencia variable siguiendo los pasos indicados</li>
<li>Montar los tres LED sobre la placa</li>
<li>Escribir el software</li>
<li>Modificar el software para que las luces funcionen al revés</li>
</ol>


<pre><code class="language-cpp">// Resistencia variable
int x = 0;             // Variable

void setup() {
  pinMode(2, OUTPUT);  // LED
  pinMode(3, OUTPUT);  // LED
  pinMode(4, OUTPUT);  // LED
  Serial.begin(9600);  // Monitor serie
}

void loop() {
    x = analogRead(A0);
    Serial.println(x);
    if (x <= 200) {
        digitalWrite(2, HIGH);
        digitalWrite(3, LOW);
        digitalWrite(4, LOW);
    }
    if (x > 200 && x < 400) {
        digitalWrite(2, LOW);
        digitalWrite(3, HIGH);
        digitalWrite(4, LOW);
    }
    if (x >= 400) {
        digitalWrite(2, LOW);
        digitalWrite(3, LOW);
        digitalWrite(4, HIGH);
    }
}
</code></pre>
</section>




<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="pitidos-frecuencia-variable">Pitidos de frecuencia variable</a></h1>

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Montar la resistencia variable (potenciómetro) de manera que su salida se encuentre conectada con el puerto analógico A0 y un piezoeléctrico en el puerto 9. También es necesario montar un LED de color rojo en el puerto 7 y otro de color verde en el puerto 8. [HW]</li>
<li>Escribir el software que permita mostrar en la pantalla del ordenador mediante el monitor serie el valor de la resitencia variable (potenciómetro). [SW]</li>
<li>Hacer que el piezoeléctrico emita pitidos con intervalos de un segundo entre un pitido y el siguiente. La frecuencia del pitido estará dado por el valor indicado en el potenciómetro según la fórmula <span class="math inline"><em>f</em> = 2 * <em>x</em> + 500</span>, donde <span class="math inline"><em>f</em></span> es la frecuencia del pitido y <span class="math inline"><em>x</em></span> es el valor del potenciómetro. Mientras se emite un pitido el LED rojo estará encendido y se apagará cuando deje de sonar el pitido. [SW]</li>
<li>Hacer que el pitido siempre se emita a 2000 hercios pero el intervalo de espera entre un pitido y el siguiente sea variable en función de la posición del potenciómetro. Además el LED verde se encenderá cuando el piezo eléctrico no emita sonido. [SW]</li>
</ol>
</section>




<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="bateria-musical">Batería musical</a></h1>
<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Conecta el servomotor al puerto 10 y comprobar que se mueve [HW + SW]</li>
<li>Construye una estructura con envases de plástico o de metal [HW]</li>
<li>Consigue que la máqina sea capaz de hacer un ritmo sencillo, es decir, un golpe en cada uno de los envasas y a continuación un golpe en el otro envase [SW]</li>
<li>Logra que la máquina realice un ritmo complejo, es decir, además de alternar golpes entre los dos envases, en alguno de ellos debe ser capaz de dar dos o más golpes seguidos [SW]</li>
</ol>
</section>




<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="servo-joystick-coordinados">Servo y joystick coordinados</a></h1>

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Poner un joystick conectado al puerto A1 y un servomotor en el puerto 9 [HW]</li>
<li>Mostrar en el monitor serie el valor tomado por la entrada analógica y ver como varía según mueves el mando en el eje X [SW]</li>
<li>Poner un servomotor que gire y adopte un ángulo proporcional a la entrada analógica del anterior apartado: ‘s1.write(analogRead(A1)/6.5);‘ [HW y SW]</li>
<li>Un LED rojo se encenderá solo si el servomotor se encuentra cerca de uno de sus límites de movimiento [SW]</li>
</ol>
</section>





<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="servo-joystick-luces">Servo y joystick con luces</a></h1>

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>El servomotor se mueve en función del movimiento del joystick [HW y SW]</li>
<li>Cuando el servomotor se mueve a un lado se enciende una luz roja [HW y SW]</li>
<li>Cuando el servomotor se mueve al otro lado se encuende la luz verde [HW y SW]</li>
<li>Cuando el servomotor está en el centro las luces deben parpadear [SW]</li>
</ol>
</section>






<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="piano-tres-botones">Piano de tres botones</a></h1>

<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Poner botón en el puerto 4 y piezoeléctrico en el puerto 9 [HW]</li>
<li>Si se pulsa el botón debe sonar una nota musical f=261.63 Hz y duración t=250 milisegundos. [SW]<br />
Recuerda como se usaba tone con estos ejemplos:<br />
</p>


<pre><code class="language-cpp">// Piano de tres botones
void setup(){
    pinMode(9, OUTPUT);
}

void loop(){
    //tone(PUERTO,FRECUENCIA,TIEMPO);
    tone(9,        3000.0,     1000);
}
</code></pre>
</li>

<li>Añadir dos botones más en los puertos 5 y 6 [HW]</li>
<li>Al pulsar los botones 5 y 6 deben sonar las notas musicales con frecuencias f=293.66 Hz y f=329.63 Hz [SW]</li>
</ol>

</section>




<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="sensor-distancia">Sensor de distancia</a></h1>

<img src="../img/tpr/09.webp" alt="Circuito del proyecto">



<pre><code class="language-cpp">// Primer software
long t;    // Tiempo
long x;    // Espacio o distancia

void setup(){
    pinMode(10, OUTPUT);  // Disparador
    pinMode(9, INPUT);    // Receptor
}

void loop(){
    delayMicroseconds(2);
    digitalWrite(10, HIGH);
    delayMicroseconds(10);
    digitalWrite(10, LOW);
    t = pulseIn(9, HIGH);
    x = t * 0.017;
}
</code></pre>


<pre><code class="language-cpp">// Segundo software
void setup(){
    Serial.begin(9600);
}

void loop(){
    Serial.println(x);
}
</code></pre>




<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Conectar el cableado siguiendo el esquema [HW]</li>
<li>Escribir el primer software[SW]</li>
<li>Añadir al primer software el segundo [SW]</li>
<li>Modificarlo para que ponga en el monitor serie un mensaje cuando el sensor detecte corta distancia</li>
</ol>

</section>





<!-- ------------------------------------------------ -->
<section class="proyecto">
<h1><a name="sensor-distancia-avanzado">Sensor de distancia avanzado</a></h1>
<h2>Pasos para desarrollar el proyecto</h2>
<ol>
<li>Implementar el diseño de hardware del proyecto anterior [HW]</li>
<li>Añadir dos luces LED, una roja y una verde [HW]</li>
<li>Programa el software que permita que la luz verde se encienda si el objeto está lejos y la roja si el objeto que detecta el sensor está cerca [SW]</li>
<li>Añade un piezoeléctrico que debe pitar en caso de que el objeto que detecta el sensor está extremadamente cerca [SW+HW]</li>
</ol>

</section>
</main>
<?php include('inc/footer.php'); ?>
