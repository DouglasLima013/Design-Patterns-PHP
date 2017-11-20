<?php
	class CalculadoraDeDesconto
	{
		public function calcula(orcamento $orcamento)
		{
			if (count($orcamento->getItens()) > 5)
			{
				return $orcamento->getValor * 0.1
			}
			elseif ($orcamento->getValor() > 500)
			{
				# code...
			}
		}
	}