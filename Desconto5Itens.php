<?php
	class Desconto5Itens implements Desconto
	{
		private $proximoDesconto;

		public function desconto(orcamento $orcamento)
		{
			if (count($orcamento->getItens()) >= 5)
			{
				return $orcamento->getValor() * 0.1;
			}
			else
			{
				$this->proximoDesconto->desconto($orcamento);
			}
		}

		public function setProximo(Desconto $proximo)
		{
			$this->proximoDesconto = $proximo;
		}
	}