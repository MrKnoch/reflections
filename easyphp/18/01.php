<html>
<head>
<title>EOQ</title>
<body>
<div>
	<pre>
	<?php
		$n[0] = $_GET["a"];
		$n = array( 1=>($n[0]/100),
					2=>(($n[0]%100)/10),
					3=> ($n[0]%10));

		//$n[0] = $_GET["a"];
		//$n[1]= $n[0]/100;
		//$n[2]= ($n[0]%100)/10;
		//$n[3] = $n[0]%10;

		printf ("\nEste valor possui %d centenas, %d dezenas, e  %d unidades.", $n[1], $n[2], $n[3]);
	?>
	</pre>
</div>
</body>
</html>