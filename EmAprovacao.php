<?php
	class EmAprovacao
	{
		public function aplica(orcamento $orcamento)
		{
			$orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.02);
		}
	}