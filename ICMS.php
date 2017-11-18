<?php
	class ICMS implements Imposto
	{
		function calcula(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.05;
		}
	}