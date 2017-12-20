<?php
	class Aprovado implements EstadoDeUmOrcamneto
	{
		public function aplica(orcamento $orcamento)
		{
			$orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.05);
		}

		public function Aprova(orcamento $orcamento)
		{
			throw new Exception("Este orcamento ja se encontra aprovado");
		}

		public function Reprova(orcamento $orcamento)
		{
			throw new Exception("apenas orcamentos em aprovacao podem ser reprovados");
		}

		public function Finaliza(orcamento $orcamento)
		{
			$orcamento->setEstado(new finalizado());
		}
	}