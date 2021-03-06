<?php
	class ISS extends TemplateDeImpostos
	{
		function __construct($imposto = null)
		{
			parent::__construct($imposto);
		}

		function deveUsarOMaximo(orcamento $orcamento)
		{
			return $orcamento->getValor() > 300;
		}

		function impostoMaximo(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.15;
		}

		function impostoMinimo(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.1;
		}
	}