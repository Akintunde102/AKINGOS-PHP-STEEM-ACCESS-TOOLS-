	<?php
	$steemDetails = file_get_contents('steem.txt');
		$sbdDetails = file_get_contents('sbd.txt');
		$btcDetails = file_get_contents('btc.txt');
		
		
	echo '<span style="color:white;font-size: 30px;">';
$btc = json_decode($btcDetails, true); // decode the JSON feed
echo  'Bitcoin: $'.number_format(round($btc[0]["price_usd"],3));
	
	echo '</span>';
	
		echo '<hr/><div>';
		
	echo '<span style="color:white;font-size: 30px;">';
$steem = json_decode($steemDetails, true); // decode the JSON feed
echo  'Steem: $'.round($steem[0]["price_usd"],3);
	
	echo '&nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;&nbsp;</span>';
		

	echo '<span style="color:white;font-size: 30px;">';
$sbd = json_decode($sbdDetails, true); // decode the JSON feed
echo  'SBD: $'.round($sbd[0]["price_usd"],3);
	
	echo '</span></div>';
	
	echo '<hr/><div>';
	echo '<span style="color:white;font-size: 20px;">';
$steem = json_decode($steemDetails, true); // decode the JSON feed
echo  'Steem:'.round($steem[0]["price_btc"],7).' btc';
	
	echo '&nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;&nbsp;</span>';
	
	
	echo '<span style="color:white;font-size: 20px;">';
$sbd = json_decode($sbdDetails, true); // decode the JSON feed
echo  'SBD:'.round($sbd[0]["price_btc"],7). ' btc';
	
	echo '</span>';
	
	echo '</div>';
	?>
