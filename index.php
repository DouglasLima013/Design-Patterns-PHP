<?php
	require 'Orcamento.php';
	require 'Calculadora.php';
	require 'ICMS.php';
	require 'ISS.php';

	$reforma = new Orcamento(500);
	$calculadora = new Calculadora;

	echo $calculadora->calcula($reforma, new ICMS);

	echo "<br>";

	echo $calculadora->calcula($reforma, new ISS);