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
		private $listaDeAcoes;

		function __construct()
		{
			$this->valorBruto = 0;
			$this->valorImpostos = 0;
			$this->listaDeAcoes = array();
			$this->itens = array();
		}

		public function addAcao(acaoAoGerar $acao)
		{
			$this->listaDeAcoes[] = $acao;
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

			foreach($this->listaDeAcoes as $acao)
			{
				$acao->executa($nf);
			}
			return $nf;
		}
	}