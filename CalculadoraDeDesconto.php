<?php
	require_once 'Desconto500Reais.php';
	require_once 'Desconto5Itens.php';
	require_once 'SemDesconto.php';

	class CalculadoraDeDesconto
	{
		public function desconto(orcamento $orcamento)
		{
			$Desconto500Reais = new Desconto500Reais;
			$Desconto5Itens = new Desconto5Itens;
			$SemDesconto = new SemDesconto;

			$Desconto500Reais->setProximo($Desconto5Itens);
			$Desconto5Itens->setProximo($SemDesconto);

			$valorDoDesconto = $Desconto500Reais->desconto($orcamento);

			return $valorDoDesconto;
		}
	}