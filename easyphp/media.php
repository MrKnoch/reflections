<html>
<head>
<title>EOQ</title>
<body>
<div>
	<?php
		$a = $_GET["a"];
		$b = $_GET["b"];
		$m = (($a+$b)/2) >= 7?"aprovado":"reprovado";
		echo "Este aluno foi? $m";
	?>
</div>
</body>
</html>