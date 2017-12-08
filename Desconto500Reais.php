<?php
	class Desconto500Reais
	{
		public function desconto(orcamento $orcamento)
		{
			if ($orcamento->getValor() >= 500)
			{
				return $orcamento->getValor() * 0.05;
			}
			else
			{
				return 0;
			}
		}
	}