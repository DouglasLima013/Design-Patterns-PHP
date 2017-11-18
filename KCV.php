<?php
	class KCV implements Imposto
	{
		public function calcula(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.2;
		}
	}