	<?php
	$steemDetails = file_get_contents('steem.txt');
	echo '<span style="color:white;font-size: 30px;">';
$steem = json_decode($steemDetails, true); // decode the JSON feed
echo  'Steem: $'.round($steem[0]["price_usd"],3);
	
	echo '&nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;&nbsp;</span>';
	
	
	$sbdDetails = file_get_contents('sbd.txt');
	echo '<span style="color:white;font-size: 30px;">';
$sbd = json_decode($sbdDetails, true); // decode the JSON feed
echo  'SBD: $'.round($sbd[0]["price_usd"],3);
	
	echo '</span>';
	?>
