<html>
<head>
	<title>Bob's Auto Parts</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
	<?php
		echo "<p>Order processed at ";
		echo date('H:i:s j F Y');
		echo "</p> ";
		
		$tireqty = $_POST['tireqty'];
		$oilqty = $_POST['oilqty'];
		$sparkqty = $_POST['sparkqty'];
		
		echo "<p> Your order is as follows: </p>";
		echo $tireqty." tires <br/>";
		echo $oilqty." bottles of oil <br/>";
		echo $sparkqty." spark plugs <br/>";
	?>
</body>
</html>