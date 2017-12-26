<?php
	date_default_timezone_set("Brazil/East");
	require 'NotaFiscal.php';
	require 'Item.php';
	require 'GeradorDeNotaFiscal.php';

	$gerarNotaFiscal = new GeradorDeNotaFiscal;

	$gerarNotaFiscal->empresa("New Co");
	$gerarNotaFiscal->cnpj(12346789);
	$gerarNotaFiscal->addItem(new Item("tijolo", 250));
	$gerarNotaFiscal->addItem(new Item("cimento", 250));
	$gerarNotaFiscal->observacao("Tijolos Amarelos");
	$gerarNotaFiscal->novaData();

	$nf = $gerarNotaFiscal->gerar();

	echo "<pre>";
	print_r($nf);