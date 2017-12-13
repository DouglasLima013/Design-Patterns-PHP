<?php
	class SemDesconto implements Desconto
	{
		public function desconto(orcamento $orcamento)
		{
			return 0;
		}

		public function setProximo(Desconto $proximo)
		{
			//faz nada
		}
	}