<html>
<head>
<meta charset="utf-8" />
<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
// create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$address = $_POST['address'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$date = date('H:i, jS F Y');

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "Items ordered: ".$totalqty."<br />";

echo '<p>Your order is as follows: </p>';
if ($totalqty == 0) {
echo "You did not order anything on the previous page!<br />"; exit;
} else {
if ($tireqty > 0) {
echo $tireqty." tires<br />";
}
if ($oilqty > 0) {
echo $oilqty." bottles of oil<br />";
}
if ($sparkqty > 0) {
echo $sparkqty." spark plugs<br />";
}
}







echo "Items ordered: ".$totalqty."<br />";
$totalamount = 0.00;
define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);
$totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;
$totalamount=number_format($totalamount, 2, '.', ' ');
echo "<p>Total of order is $".$totalamount."</p>";
echo "<p>Address to ship to is ".$address."</p>";

$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil \t".$sparkqty." spark plugs \t\$".$totalamount."\t".$address."\n";

$r=$_SERVER['DOCUMENT_ROOT'];
$t = $r."/Orders/";

// open file for appending
$fp = fopen("$r/Bob/Orders/orders.txt", 'ab');
flock($fp, LOCK_EX);
if (!$fp) {
echo "<p><strong> Your order could not be processed at this time.
Please try again later.</strong></p></body></html>";
exit;
}
fwrite($fp, $outputstring, strlen($outputstring));
flock($fp, LOCK_UN);
fclose($fp);
echo "<p>Order written.</p>";

echo "<h1>".$t."</h1>";


echo "Subtotal: $".number_format($totalamount,2)."<br />";
$taxrate = 0.10; // local sales tax is 10%
$totalamount = $totalamount * (1 + $taxrate);
echo "Total including tax: $".number_format($totalamount,2)."<br />";
if ($tireqty < 10) {
$discount = 0;
} elseif (($tireqty >= 10) && ($tireqty <= 49)) {
$discount = 5;
} elseif (($tireqty >= 50) && ($tireqty <= 99)) {
$discount = 10;
} elseif ($tireqty >= 100) {
$discount = 15;
}
$find = $_POST['find'];
switch($find) {
case "a" :
echo "<p> Regular customer</p>";
break;
case "b" :
echo "<p>Customer referred by TV advert.</p>";
break;
case "c" :
echo "<p>Customer referred by phone directory.</p>";
break;
case "d" :
echo "<p>Customer referred by word of mouth.</p>";
break;
default :
echo "<p>We do not know how this customer found us.</p>";
break;
}
?> 
</body>
</html> 