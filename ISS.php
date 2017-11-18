<?php
	class ISS
	{
		function calcula(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.1;
		}
	}