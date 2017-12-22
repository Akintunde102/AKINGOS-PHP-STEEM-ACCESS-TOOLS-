<?php
	
	echo '<div style="padding-top: 4px;background: black">';
	echo '<div style="font-size:20px;color: white;">Steem Experiment by <a style="color: royalblue;" href="http://steemit.com/@akintunde">Akintunde<a></div>';
	echo '</div>';
	
	
	
	?><!DOCTYPE html>

<html>
<head>
	<title> Steem User Details</title>
	<link href="css/style.css" rel='stylesheet' type='text/css'/>
		<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Simple Tab Forms Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />>

	<script src="js/jquery.min.js"></script>
<script src="https://cdn.steemjs.com/lib/latest/steem.min.js"></script>
	
	</script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#loadPrice').load('price.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>
				
	<style> 
	.dropshadowclass {
        border: solid 1px #CCC;
    -moz-box-shadow: 5px 5px 0px #999;
    -webkit-box-shadow: 5px 5px 0px #999;
        box-shadow: 5px 5px 0px #999;
        }
	
	.imagedropshadow {
    padding: 5px;
    border: solid 1px #EFEFEF;
}
a:hover img.imagedropshadow {
    border: solid 1px #CCC;
    -moz-box-shadow: 1px 1px 5px #999;
    -webkit-box-shadow: 1px 1px 5px #999;
        box-shadow: 1px 1px 5px #999;
}</style>		
</head>
<body>
	<div class="main-content">

	<div id='loadPrice' style="padding: 10px 0px 20px 0px;
    background: transparent;
    font-weight: 700;
	margin-top: 10px;
    padding: 0.7em 2em;
    color: #FFFFFF;
    margin-right: 10px;
    display: block;" ></div>
	
	
<div style="margin-top: 40px;border-radius: 3px;
    border: 1px solid #EFEFEF; background: rgba(0,0,0,0.4);">
<div>

 <div id="image" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px; "> </div> 
<div style="padding: 10px 0px 20px 0px;
    background: transparent;
    font-weight: 700;
	margin-top: 10px;
    padding: 0.7em 2em;
    color: #FFFFFF;
    margin-right: 10px;" > <span>Name:</span><span id="name" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"> <img src="load.gif" height="60px" /></span><i style="font-size:13px">[VP:<span id="vp" style="color: white;font-size: 13px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span> %] <i> <br/>
	
	<div id="about" style="color: white;font-size: 20px;color: pink;padding: 15px 4px 4px 10px;"><img src="load.gif" height=20px" /> </div> 
	<hr/>
 Total SBD Rewards Received: <span id="tsc" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span> 
 <hr/>
UnReceived SBD: <span id="urs" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span> 
 <hr/>
 Witness Voted For: <span id="wv" style="color: white;word-wrap: break-word;font-size: 27px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span>  <hr/>
 User Id: <span id="uid" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span>  <hr/>
 Rank: <span id="rank" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span>  <hr/>
 Received Vesting Shares: <span id="rvs" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span> <hr/> 
 Delegated Vesting Shares: <span id="dvs" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span> <hr/> 
 Total Vesting Shares: <span id="vs" style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"><img src="load.gif" height="40px" /> </span> <hr/> 


	</div>		
	</div>

	
	

	
	<?php if (!empty($_GET['u'])){ ?>
  
<script type="text/javascript"> 
var $_GET = {};

if(document.location.toString().indexOf('?') !== -1) {
    var query = document.location
                   .toString()
                   // get the query string
                   .replace(/^.*?\?/, '')
                   // and remove any existing hash string (thanks, @vrijdenker)
                   .replace(/#.*$/, '')
                   .split('&');

    for(var i=0, l=query.length; i<l; i++) {
       var aux = decodeURIComponent(query[i]).split('=');
       $_GET[aux[0]] = aux[1];
    }
}


steem.api.getAccounts(
  [$_GET['u']],
   function(err, result) {
	   if (err)
        alert('Failure! ' + err);
      else{
		var string = JSON.stringify(result)
		var witnesses = JSON.stringify(result[0].witness_votes)
	    var json_metadata = JSON.parse(result[0].json_metadata)
   var vs = result[0].vesting_shares;
   var dvs = result[0].delegated_vesting_shares;
   var rvs = result[0].received_vesting_shares;
   
   }
	 var vs = vs.replace(/[^0-9,\.]/g, '');
	 var rvs = rvs.replace(/[^0-9,\.]/g, '');
	 var dvs = dvs.replace(/[^0-9,\.]/g, '');
        document.getElementById('name').innerHTML = result[0].name;
   document.getElementById('uid').innerHTML = result[0].id;
   document.getElementById('urs').innerHTML = result[0].sbd_balance;
   document.getElementById('wv').innerHTML = witnesses;
   document.getElementById('vp').innerHTML = result[0].voting_power / 100;
   document.getElementById('tsc').innerHTML = result[0].posting_rewards / 1000;
   document.getElementById('about').innerHTML = json_metadata.profile.about;
   document.getElementById('image').innerHTML = '<img width="300" height="300" class="imagedropshadow" src=' + json_metadata.profile.profile_image + ' />';
   
   
	  


	
	  if (vs > 0 && vs < 999999) {document.getElementById('rank').innerHTML = 'Red Fish';}
	 else  if (vs > 1000000 && vs < 9999999) {document.getElementById('rank').innerHTML = 'Minnow';}
	 else  if (vs > 10000000 && vs < 99999999) {document.getElementById('rank').innerHTML = 'Dolphin';}
	 else  if (vs > 100000000 && vs < 999999999) {document.getElementById('rank').innerHTML = 'Orca';}
	 else  if (vs > 1000000000) {document.getElementById('rank').innerHTML = 'Whale';}
	 
	 
	 //To format numbers
function number_format(number, decimals, dec_point, thousands_sep) {
    
    var n = !isFinite(+number) ? 0 : +number, 
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        toFixedFix = function (n, prec) {
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            var k = Math.pow(10, prec);
            return Math.round(n * k) / k;
        },
        s = (prec ? toFixedFix(n, prec) : Math.round(n)).toString().split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}


	 document.getElementById('vs').innerHTML = number_format(vs,2,'[dot]');
 document.getElementById('dvs').innerHTML = number_format(dvs,2,'[dot]');
 document.getElementById('rvs').innerHTML = number_format(rvs,2,'[dot]');

	 
   }
  );

</script>

	<?php } ?>
</body>
</html>
