<?php
	class Reprovado
	{
		public function aplica(orcamento $orcamento)
		{
			throw new Exception("Um orçamento reprovado não pode receber descontos");
		}
	}