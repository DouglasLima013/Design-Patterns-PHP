<?php
	class NotaFiscal
	{
		private $empresa;
		private $cnpj;
		private $itens;
		private $valorBruto;
		private $valorImpostos;
		private $observacao;
		private $data;

		function __construct($empresa, $cnpj, $itens, $valorBruto, $valorImpostos, $observacao, $data)
		{
			$this->empresa = $empresa;
			$this->cnpj = $cnpj;
			$this->itens = $itens;
			$this->valorBruto = $valorBruto;
			$this->valorImpostos = $valorImpostos;
			$this->observacao = $observacao;
			$this->data = $data;
		}

		public function getEmpresa()
		{
			return $this->empresa;
		}

		public function getCnpj()
		{
			return $this->cnpj;
		}
	}