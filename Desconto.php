<?php
	interface Desconto
	{
		public function desconto(orcamento $orcamento);

		public function setProximo(Desconto $proximo);
	}