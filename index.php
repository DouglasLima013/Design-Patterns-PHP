<?php
	require 'Orcamento.php';
	require 'Calculadora.php';

	$reforma = new Orcamento(500);
	$calculadora = new Calculadora;

	echo $calculadora->calculaICMS($reforma);

	echo "<br>";

	echo $calculadora->calculaISS($reforma);