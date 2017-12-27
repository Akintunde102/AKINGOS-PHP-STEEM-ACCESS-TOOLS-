
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery JSONPanel Plugin Demo</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <link href="css/jsonpanel.css" rel="stylesheet" type="text/css">
   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/autolinker.js"></script>
    <script src="js/jsonpanel.js" data-cover></script>
    <script>
        $(document).on('ready', function(){

          $('.jsonpanel').jsonpanel({
            data: {
              <?php 


			  $a = str_replace("[{", "", $_POST['details']); 
			  $b = str_replace("}]", "", $a); 
			  
			  echo $b;
			  
			  ?>
            }
          });

        });

    </script>
  </head>
  <body>
    <h1>jQuery JSONPanel Plugin Demo</h1></div>
    <div class="jsonpanel"></div>
  </body>
</html>
