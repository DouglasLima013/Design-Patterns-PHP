<?php
	abstract class TemplateDeImpostos implements Imposto
	{
		public function calcula(orcamento $orcamento)
		{
			if ($this->deveUsarOMaximo($orcamento))
			{
				return $this->impostoMaximo($orcamento);
			}
			else
			{
				return $this->impostoMinimo($orcamento);
			}
		}

		abstract function deveUsarOMaximo(orcamento $orcamento);

		abstract function impostoMaximo(orcamento $orcamento);

		abstract function impostoMinimo(orcamento $orcamento);
	}