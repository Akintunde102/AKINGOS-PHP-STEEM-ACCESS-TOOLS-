<?php

$steemDetails = file_get_contents('https://api.coinmarketcap.com/v1/ticker/steem/');
$steemfile = fopen("steem.txt", "w") or die("Unable to open file!");
fwrite($steemfile, $steemDetails);
fclose($steemfile);

$sbdDetails = file_get_contents('https://api.coinmarketcap.com/v1/ticker/steem-dollars/');
$sbdfile = fopen("sbd.txt", "w") or die("Unable to open file!");
fwrite($sbdfile, $sbdDetails);
fclose($sbdfile);



?>