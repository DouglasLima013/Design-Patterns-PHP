<?php
	require 'Desconto500Reais.php';
	require 'Desconto5Itens.php';

	class CalculadoraDeDesconto
	{
		public function desconto(orcamento $orcamento)
		{
			$desconto = new Desconto500Reais();
			$valorDoDesconto = $desconto->desconto($orcamento);

			if ($valorDoDesconto == 0)
			{
				$desconto = new Desconto5Itens;
				$valorDoDesconto = $desconto->desconto($orcamento);
			}

			return $valorDoDesconto;
		}
	}