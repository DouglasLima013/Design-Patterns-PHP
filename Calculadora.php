<?php
	class Calculadora
	{
		function calcula(orcamento $orcamento, Imposto $imposto)
		{
			return $imposto->calcula($orcamento);
		}
	}