<html>
<head>
<title>EOQ</title>
<body>
<div>
	<pre>
	<?php
	$a= $_GET["a"];
	$b = $_GET["b"];
	$c = $_GET["c"];

		if ($a>$b && $a>$c) {
			if($b>$c){
			}
			else{
				$aux = $b;
				$b = $c;
				$c = $aux;
			}
		}
		elseif ($a<$b && $a<$c) {
			$aux = $c;
			$c = $a;
			$a = $aux;
		}
		elseif($c>$b) {
			$aux = $b;
			$b = $c;
			$C = $aux;
		}


		printf("A = %d, B = %d, C = %d", $a, $b, $c)

	?>
	</pre>
</div>
</body>
</html>