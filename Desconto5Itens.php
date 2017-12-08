<?php
	class Desconto5Itens
	{
		public function desconto(orcamento $orcamento)
		{
			if (count($orcamento->getItens()) > 5)
			{
				return $orcamento->getValor() * 0.1;
			}
			else
			{
				return 0;
			}
		}
	}