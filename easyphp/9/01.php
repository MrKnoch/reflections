<html>
<head>
<title>EOQ</title>
<body>
<div>
	<?php
		$a = isset($_GET["ano"])?$_GET["ano"]:1900;
		$i = date("Y") - $a;
		echo "Você nasceu em $a e tera $i anos <br/>";
		if ($i < 16) {
			$v = "você não vota";
		}
		elseif (($i>=16 && $i<18) || ($i>65)) {			
				$v = "seu voto é opcional";
			}
			else{
				$v = "seu voto é obrigatório";
			}
		echo "Com essa idade $v. </br>";
	?>
</div>
</body>
</html>