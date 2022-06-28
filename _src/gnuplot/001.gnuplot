# Gráfico del problema 5 página 23 libro ed. Casals. Aprendizaje basado en problemas
set terminal pngcairo size 800,400 enhanced 
set output "001.png"

set xtics axis nomirror 0, 0.5, 10
set xrange [0:10]
set xlabel "Tiempo (minutos)" 

set ytics axis nomirror 0, 10, 100
set yrange [0:100]

set grid ytics
set border 3 
set style line 1 linecolor rgb "red" linewidth 2

plot "-" with lines linestyle 1 title "" 
	0	0
	1.5	60 
	2   55
	2.5	55
	3   45
	3.5	40
	4	40
	4.5	35
	5	35
	5.5	30
	6.5	30
	7	25
	7.9	25
	8.7	15
	9.3	15
	9.7	10
EOF
