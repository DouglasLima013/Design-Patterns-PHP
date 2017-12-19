<?php
	abstract class Imposto
	{
		protected $outroImposto;

		function __construct($imposto = null)
		{
			$this->outroImposto = $imposto;
		}

		public abstract function calcula(orcamento $orcamento);

		public function calculaOutroImposto(orcamento $orcamento)
		{
			if (is_null($this->outroImposto)) return 0;

			return $this->outroImposto->calcula($orcamento);
		}
	}