<?php

function colorea($codigo, $lenguaje){
	file_put_contents("tmp.txt", $codigo);
	exec("cat tmp.txt | pygmentize -f html -l $lenguaje", $codigo);
	$codigo = implode("\n", $codigo);
	echo "<code>$codigo</code>";
	unlink("tmp.txt");
}
