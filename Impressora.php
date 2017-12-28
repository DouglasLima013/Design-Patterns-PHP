<?php
	class Impressora implements acaoAoGerar
	{
		public function executa(NotaFiscal $nf)
		{
			echo "<br>NotaFiscal impressa<br>";
		}
	}