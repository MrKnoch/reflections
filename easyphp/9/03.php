<html>
<head>
<title>EOQ</title>
<body>
<div>
	<?php
		$n1 = isset($_GET["n1"])?$_GET["n1"]:0;
		$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
		$med = ($n1+$n2)/2;
		echo "A média entre $n1 e $n2 é igual a $med <br/>";
		if ($med<5) {
			$s = "REPROVADO";
		}
		elseif ($med>=5 && $med<=7) {			
				$s = "RECUPERAÇÃO";
			}
			else{
				$s = "APROVADO";
			}
		echo "Situação do aluno: $s. </br>";
	?>
</div>
</body>
</html>