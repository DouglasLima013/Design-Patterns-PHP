<?php
	class Calculadora
	{
		function calcula(orcamento $orcamento, $imposto)
		{
			if ($imposto == "ICMS")
			{
				return $orcamento->getValor() * 0.05;
			}
			elseif ($imposto == "ISS")
			{
				return $orcamento->getValor() * 0.1;
			}
		}
	}