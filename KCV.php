<?php
	class KCV extends Imposto
	{
		function __construct($imposto = null)
		{
			parent::__construct($imposto);
		}

		public function calcula(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.2 + $this->calculaOutroImposto($orcamento);
		}
	}