<?php
	class ICMS extends TemplateDeImpostos
	{
		function __construct($imposto = null)
		{
			parent::__construct($imposto);
		}

		function deveUsarOMaximo(orcamento $orcamento)
		{
			return $orcamento->getValor() > 500;
		}

		function impostoMaximo(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.15;
		}

		function impostoMinimo(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.05;
		}
	}