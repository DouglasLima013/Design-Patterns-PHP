<?php
	class Reprovado implements EstadoDeUmOrcamento
	{
		public function aplica(orcamento $orcamento)
		{
			throw new Exception("Um orçamento reprovado não pode receber descontos");
		}

		public function Aprova(orcamento $orcamento)
		{
			throw new Exception("apenas orcamentos em aprovacao podem ser aprovados");
		}

		public function Reprova(orcamento $orcamento)
		{
			throw new Exception("Este orcamento ja se encontra reprovado");
		}

		public function Finaliza(orcamento $orcamento)
		{
			$orcamento->setEstado(new finalizado());
		}
	}