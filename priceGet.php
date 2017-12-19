<?php

$steemDetails = file_get_contents('https://api.cryptonator.com/api/full/steem-usd/');
$steemfile = fopen("steem.txt", "w") or die("Unable to open file!");
fwrite($steemfile, $steemDetails);
fclose($steemfile);

$sbdDetails = file_get_contents('https://api.cryptonator.com/api/full/sbd-usd/');
$sbdfile = fopen("sbd.txt", "w") or die("Unable to open file!");
fwrite($sbdfile, $sbdDetails);
fclose($sbdfile);



?>