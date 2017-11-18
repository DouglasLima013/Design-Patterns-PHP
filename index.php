<?php
	require 'Orcamento.php';
	require 'Calculadora.php';

	$reforma = new Orcamento(500);
	$calculadora = new Calculadora;

	echo $calculadora->calcula($reforma, "ICMS");

	echo "<br>";

	echo $calculadora->calcula($reforma, "ISS");