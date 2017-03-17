<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>ÉOQ</title>
	<style>
		h2 {
			font: 12pt Arial;
			color: #171559;			
		}
	</style>
</head>
<body>
<div>
	<?php
		$pro = $_GET["x"];
		$des = $_GET["y"];
		$tot;

		echo "O valor digitado do produto é de $pro, com $des% de desconto<br/>";

		$des /= 100;

		$tot = $pro * $des;

		echo "Este produto com desconto, ira custar R$ ". number_format($tot, 2, ",", ".");
	?>
</div>
</body>
</html>
