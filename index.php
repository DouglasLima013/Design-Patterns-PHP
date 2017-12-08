<?php
	require 'Orcamento.php';
	require 'Desconto.php';
	require 'Desconto500Reais.php';
	require 'Desconto5Itens.php';
	require 'SemDesconto.php';
	require 'Item.php';
	require 'Imposto.php';
	require 'Calculadora.php';
	require 'CalculadoraDeDesconto.php';
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
	echo "<br>";

	//Descontos

	$CalculadoraDeDescontos = new CalculadoraDeDesconto;
	$reforma->addItem(new Item("tijolo", 250));
	$reforma->addItem(new Item("tijolo", 250));
	$reforma->addItem(new Item("tijolo", 250));
	$reforma->addItem(new Item("tijolo", 250));
	$reforma->addItem(new Item("tijolo", 250));
	$reforma->addItem(new Item("tijolo", 250));

	echo "Desconto";
	echo "<br>";

	echo $CalculadoraDeDescontos->desconto($reforma);