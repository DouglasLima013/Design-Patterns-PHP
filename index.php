<?php

	function carregaClasse($nomeDaClasse)
	{
		require $nomeDaClasse . ".php";
	}

	spl_autoload_register("CarregaClasse");

	$reforma = new Orcamento(490);

	echo $reforma->getValor() . "<br>";
	$reforma->aplicarDesconto();
	echo $reforma->getValor() . "<br>";

	$reforma->Aprova();
	$reforma->aplicarDesconto();
	echo $reforma->getValor() . "<br>";

	echo "teste de erro";
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