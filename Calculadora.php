<?php
	require 'ICMS.php';
	require 'ISS.php';

	class Calculadora
	{
		function calcula(orcamento $orcamento, $imposto)
		{
			if ($imposto == "ICMS")
			{
				$icms = new ICMS;
				return $icms->calcula($orcamento);
			}
			elseif ($imposto == "ISS")
			{
				$iss = new ISS;
				return $iss->calcula($orcamento);
			}
		}
	}