<?php

function colorea($codigo, $lenguaje){
	file_put_contents("tmp.txt", $codigo);
	exec("cat tmp.txt | pygmentize -f html -l $lenguaje", $resultado);
	$resultado = implode("\n", $resultado);
	echo "<code>$resultado</code>";
	unlink("tmp.txt");
}

function profundidad($argv){
	$profundidad = isset($argv[1])?$argv[1]:0;
	echo str_repeat('../', $profundidad);
}

function matematiza($codigo, $lenguaje = "mathml"){
	file_put_contents("tmp.txt", $codigo);
	exec("pandoc tmp.txt --$lenguaje", $resultado);
	$resultado = implode("\n", $resultado);
	echo $resultado;
	unlink("tmp.txt");
}

function m($codigo, $lenguage = "mathml"){
	matematiza($codigo, $lenguaje);
}
