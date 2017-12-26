<?php
	class GeradorDeNotaFiscal
	{
		private $empresa;
		private $cnpj;
		private $itens;
		private $valorBruto;
		private $valorImpostos;
		private $observacao;
		private $data;

		function __construct()
		{
			$this->itens = array();
			$this->valorBruto = 0;
			$this->valorImpostos = 0;
		}

		public function empresa($empresa)
		{
			$this->empresa = $empresa;
		}

		public function cnpj($cnpj)
		{
			$this->cnpj = $cnpj;
		}

		public function addItem(Item $novoItem)
		{
			$this->itens[] = $novoItem;
			$this->valorBruto += $novoItem->getValor();
			$this->valorImpostos += $novoItem->getValor() * 0.2;
		}

		public function observacao($novaObservacao)
		{
			$this->observacao = $novaObservacao;
		}

		public function novaData($novaData = null)
		{
			if (is_null($novaData))
			{
				$this->data = date("y-m-d h:i:s");
			}
			else
			{
				$this->data = $novaData;
			}
		}

		public function gerar()
		{
			$nf = new NotaFiscal($this->empresa, $this->cnpj, $this->itens, $this->valorBruto, $this->valorImpostos, $this->observacao, $this->data);
			return $nf;
		}
	}