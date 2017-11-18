<?php
	class Calculadora
	{
		function calcula(orcamento $orcamento, $imposto)
		{
			return $imposto->calcula($orcamento);
		}
	}