<?php
	class EnviaEmail implements acaoAoGerar
	{
		public function executa(NotaFiscal $nf)
		{
			echo "<br>Email enviado<br>";
		}
	}