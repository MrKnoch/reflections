<html>
<head>
<title>EOQ</title>
<body>
<div>
	<?php
		$valor = $_GET["v"];
		$rq = sqrt($valor);
		echo "A raiz de $valor, é igual a ". number_format($rq, 2);
	?>
</div>
</body>
</html>