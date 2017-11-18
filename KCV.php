<?php
	class KCV
	{
		public function calcula(orcamento $orcamento)
		{
			return $orcamento->getValor() * 0.2;
		}
	}