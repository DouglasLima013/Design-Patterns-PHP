<?php
	interface EstadoDeUmOrcamento
	{
		public function aplica(orcamento $orcamento);

		public function Aprova(orcamento $orcamento);

		public function Reprova(orcamento $orcamento);

		public function Finaliza(orcamento $orcamento);
	}