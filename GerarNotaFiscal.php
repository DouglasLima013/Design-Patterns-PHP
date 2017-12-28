<?php
	date_default_timezone_set("Brazil/East");

	function CarregaClasse($nomeDaClasse)
	{
		require $nomeDaClasse . ".php";
	}

	spl_autoload_register("CarregaClasse");

	$gerarNotaFiscal = new GeradorDeNotaFiscal;

	$gerarNotaFiscal->empresa("New Co");
	$gerarNotaFiscal->cnpj(12346789);
	$gerarNotaFiscal->addItem(new Item("tijolo", 250));
	$gerarNotaFiscal->addItem(new Item("cimento", 250));
	$gerarNotaFiscal->observacao("Tijolos Amarelos");
	$gerarNotaFiscal->novaData();

	$gerarNotaFiscal->addAcao(new Impressora());
	$gerarNotaFiscal->addAcao(new NotafiscalDAO());
	$gerarNotaFiscal->addAcao(new EnviaEmail());
	$nf = $gerarNotaFiscal->gerar();

	echo "<pre>";
	print_r($nf);