<?php
	class ISS implements Imposto
	{
		function calcula(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.1;
		}
	}