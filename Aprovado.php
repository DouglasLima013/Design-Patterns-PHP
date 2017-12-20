<?php
	class Aprovado
	{
		public function aplica(orcamento $orcamento)
		{
			$orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.05);
		}
	}