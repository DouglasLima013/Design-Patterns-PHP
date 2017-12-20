<?php
	class finalizado
	{
		public function aplica(orcamento $orcamento)
		{
			throw new Exception("Um orçamento Finalizado não pode receber descontos");
		}
	}