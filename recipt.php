<!DOCTYPE html>
<html>
<head>
<Title>Purchase/Receipt Server</Title>
<meta charset="UTF-8">
<link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!--  author:ZIXI ZHONG -->
<body>

<div class="receipt">
<h3>Receipt</h3>
	
<?php
$howMany = intVal ( ($_POST ["quantity"]) );
$index = strrpos ( $_POST ["size"], ' ' );
$size = substr ( $_POST ['size'], 0, $index );
$cost = 1.0 * (substr ( $_POST ['size'], $index ));
date_default_timezone_set('America/Phoenix');
$date = date ( "d-F-Y" );

// TODO: Complete the receipt to replace the purchase form.
// The following three echos represent a test that we can
// access the values of some of the the input fields.
echo "Purchase date: " . $date . "<br>";
echo "Purchased  " .$howMany."item(s) of size " ." '".$size."' "."at ".$cost." each";
echo "<br>";
echo "Total Cost: $" . $cost*$howMany . "<br><br>";

$customerName = $_POST["firstName"]." ".$_POST["lastName"]."<br>";
$address = $_POST["city"].",".$_POST["state"]."<br>";
$zipCode = $_POST["zip"];
$shipInfo = $customerName.$address.$zipCode;
echo "<fieldset>"."<legend>Ship to</legend>".$shipInfo."</fieldset>";
?>

</div>
</body>
</html>