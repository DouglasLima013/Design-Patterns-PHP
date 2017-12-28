<?php
	class EmAprovacao implements EstadoDeUmOrcamento
	{
		public function aplica(orcamento $orcamento)
		{
			$orcamento->setValor($orcamento->getValor() - $orcamento->getValor() * 0.02);
		}

		public function Aprova(orcamento $orcamento)
		{
			$orcamento->setEstado(new Aprovado());
		}

		public function Reprova(orcamento $orcamento)
		{
			$orcamento->setEstado(new Reprovado());
		}

		public function Finaliza(orcamento $orcamento)
		{
			throw new Exception("Apenas orcamentos aprovados podem ser finalizados");
		}
	}