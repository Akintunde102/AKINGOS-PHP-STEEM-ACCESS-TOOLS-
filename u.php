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
		<meta name="keywords" content="Simple Tab Forms Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

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
	
	
	
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				</script>
				
			
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
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #EFEFEF;
    display: block;" ></div>
<form style="margin-top: 40px;border-radius: 3px;
    border: 1px solid #EFEFEF; background: rgba(0,0,0,0.4);" action="user.php" target="result" method="get">
<div><legend style="color: white;font-size: 27px;padding: 15px 4px 4px 10px;"> Input Your Username in the field Below</legend> <input style="padding: 50px 0px 0px 0px;
    background: transparent;
    font-weight: 700;
	margin: 10px 0 30px 8px;
    padding: 0.7em 2em;
	height: 50px;
	width: 450px;
    color: #FFFFFF;
    margin-right: 10px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid #EFEFEF;
    display: block;" type="text" name="u" placeholder="input your username here without @" />
	<input style="height: 50px;
	width: 450px;margin: -10px 0 30px 8px;" type="submit" value="Check Username"></div>		
	</form>

	
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
	    var json_metadata = JSON.parse(result[0].json_metadata)
   var vs = result[0].vesting_shares;}
	 var vs = vs.replace(/[^0-9,\.]/g, '');
        document.getElementsByTagName('div')[0].innerHTML = result[0].name;
   document.getElementsByTagName('div')[1].innerHTML = result[0].id;
   document.getElementsByTagName('div')[2].innerHTML = '<img src=' + json_metadata.profile.profile_image + ' />';
   
   
	  
	 
	  if (vs > 0 && vs < 999999) {document.getElementsByTagName('div')[4].innerHTML = 'Red Fish /Plankton';}
	 else  if (vs > 1000000 && vs < 9999999) {document.getElementsByTagName('div')[4].innerHTML = 'Minnow';}
	 else  if (vs > 10000000 && vs < 99999999) {document.getElementsByTagName('div')[4].innerHTML = 'Dolphin';}
	 else  if (vs > 100000000 && vs < 999999999) {document.getElementsByTagName('div')[4].innerHTML = 'Orca';}
	 else  if (vs > 1000000000) {document.getElementsByTagName('div')[4].innerHTML = 'Whale';}
	 
	 
	 //To format numbers
function number_format(number, decimals, dec_point, thousands_sep) {
    // http://kevin.vanzonneveld.net
    // +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +     bugfix by: Michael White (http://getsprink.com)
    // +     bugfix by: Benjamin Lupton
    // +     bugfix by: Allan Jensen (http://www.winternet.no)
    // +    revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // +     bugfix by: Howard Yeend
    // +    revised by: Luke Smith (http://lucassmith.name)
    // +     bugfix by: Diogo Resende
    // +     bugfix by: Rival
    // +      input by: Kheang Hok Chin (http://www.distantia.ca/)
    // +   improved by: davook
    // +   improved by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Jay Klehr
    // +   improved by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Amir Habibi (http://www.residence-mixte.com/)
    // +     bugfix by: Brett Zamir (http://brett-zamir.me)
    // +   improved by: Theriault
    // +   improved by: Drew Noakes
    // *     example 1: number_format(1234.56);
    // *     returns 1: '1,235'
    // *     example 2: number_format(1234.56, 2, ',', ' ');
    // *     returns 2: '1 234,56'
    // *     example 3: number_format(1234.5678, 2, '.', '');
    // *     returns 3: '1234.57'
    // *     example 4: number_format(67, 2, ',', '.');
    // *     returns 4: '67,00'
    // *     example 5: number_format(1000);
    // *     returns 5: '1,000'
    // *     example 6: number_format(67.311, 2);
    // *     returns 6: '67.31'
    // *     example 7: number_format(1000.55, 1);
    // *     returns 7: '1,000.6'
    // *     example 8: number_format(67000, 5, ',', '.');
    // *     returns 8: '67.000,00000'
    // *     example 9: number_format(0.9, 0);
    // *     returns 9: '1'
    // *    example 10: number_format('1.20', 2);
    // *    returns 10: '1.20'
    // *    example 11: number_format('1.20', 4);
    // *    returns 11: '1.2000'
    // *    example 12: number_format('1.2000', 3);
    // *    returns 12: '1.200'
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


	 document.getElementsByTagName('div')[3].innerHTML = number_format(vs,2,'[dot]');

	 
   }
  );

</script>

	<?php } ?>
</body>
</html>
