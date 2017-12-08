<?php
	class SemDesconto implements Desconto
	{
		public function desconto(orcamento $orcamento)
		{
			echo "sem desconto";
		}

		public function setProximo(Desconto $proximo)
		{
			//NULL
		}
	}