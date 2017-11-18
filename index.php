<?php
	require 'Orcamento.php';
	require 'Imposto.php';
	require 'Calculadora.php';
	require 'ICMS.php';
	require 'ISS.php';
	require 'KCV.php';

	$reforma = new Orcamento(500);
	$calculadora = new Calculadora;

	echo $calculadora->calcula($reforma, new ICMS);
	echo "<br>";

	echo $calculadora->calcula($reforma, new ISS);
	echo "<br>";

	echo $calculadora->calcula($reforma, new KCV);