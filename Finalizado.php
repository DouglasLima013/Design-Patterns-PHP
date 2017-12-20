<?php
	class finalizado implements EstadoDeUmOrcamneto
	{
		public function aplica(orcamento $orcamento)
		{
			throw new Exception("Um orçamento Finalizado não pode receber descontos");
		}

		public function Aprova(orcamento $orcamento)
		{
			throw new Exception("apenas orcamentos em aprovacao podem ser aprovados");
		}

		public function Reprova(orcamento $orcamento)
		{
			throw new Exception("apenas orcamentos em aprovacao podem ser reprovados");
		}

		public function Finaliza(orcamento $orcamento)
		{
			throw new Exception("Este orcamento ja se encontra finalizado");
		}
	}