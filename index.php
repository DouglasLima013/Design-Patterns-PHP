<?php
	require 'Orcamento.php';
	require 'Desconto.php';
	require 'Desconto500Reais.php';
	require 'Desconto5Itens.php';
	require 'SemDesconto.php';
	require 'Item.php';
	require 'Calculadora.php';
	require 'CalculadoraDeDesconto.php';
	require 'Imposto.php';
	require 'templateDeImpostos.php';
	require 'EstadoDeUmOrcamento.php';
	require 'ICMS.php';
	require 'ISS.php';
	require 'KCV.php';
	require 'EmAprovacao.php';
	require 'Aprovado.php';
	require 'Reprovado.php';
	require 'Finalizado.php';

	$reforma = new Orcamento(490);

	echo $reforma->getValor() . "<br>";
	$reforma->aplicarDesconto();
	echo $reforma->getValor() . "<br>";

	$reforma->Aprova();
	$reforma->aplicarDesconto();
	echo $reforma->getValor() . "<br>";

	$reforma->Reprova();

	$calculadora = new Calculadora;

	echo $calculadora->calcula($reforma, new ICMS());
	echo "<br>";

	echo $calculadora->calcula($reforma, new ISS());
	echo "<br>";

	echo $calculadora->calcula($reforma, new KCV(new ICMS()));
	echo "<br>";

	//Descontos

	$CalculadoraDeDescontos = new CalculadoraDeDesconto;
	$reforma->addItem(new Item("tijolo", 100));
	$reforma->addItem(new Item("tijolo", 100));
	$reforma->addItem(new Item("tijolo", 100));
	$reforma->addItem(new Item("tijolo", 100));

	echo "Desconto";
	echo "<br>";

	echo $CalculadoraDeDescontos->desconto($reforma);