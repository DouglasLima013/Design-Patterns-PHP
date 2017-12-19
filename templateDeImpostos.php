<?php
	abstract class TemplateDeImpostos extends Imposto
	{
		function __construct($imposto = null)
		{
			parent::__construct($imposto);
		}

		public function calcula(orcamento $orcamento)
		{
			if ($this->deveUsarOMaximo($orcamento))
			{
				return $this->impostoMaximo($orcamento) + $this->calculaOutroImposto($orcamento);
			}
			else
			{
				return $this->impostoMinimo($orcamento) + $this->calculaOutroImposto($orcamento);
			}
		}

		abstract function deveUsarOMaximo(orcamento $orcamento);

		abstract function impostoMaximo(orcamento $orcamento);

		abstract function impostoMinimo(orcamento $orcamento);
	}