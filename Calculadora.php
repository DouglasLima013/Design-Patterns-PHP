<?php
	class Calculadora
	{
		function calculaICMS(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.05;
		}

		function calculaISS(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.1;
		}
	}