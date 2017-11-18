<?php
	class ICMS
	{
		function calcula(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.05;
		}
	}