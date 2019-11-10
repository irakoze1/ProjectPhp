<?php
	include 'functions/main-functions.php';

    $pages = scandir('pages/');
    if(isset($_GET['page']) && !empty($_GET['page'])){
    	if(in_array($_GET['page'].'.php',$pages)){

    		$page = $_GET['page'];

    	}else{
    		$page = "error";
    	}
    }else{
    	$page = "home";
    }

    $pages_functions = scandir('functions/');
    if (in_array($page.'.func.php',$pages_functions)){
    	include 'functions/'.$page.'.func.php';
    }

?>

<!DOCTYPE html>
    <html>
      <head>

      	<link href="http://fonts.googleapis.com/icon?family=Materialize+Icons" rel="stylesheet">

      	<link rel="stylesheet" type="text/css" href="css/materialize.css" media="screen,projection"/>

      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      </head>
        <body>

        	<div class="container">
        		<?php
        		 include 'pages/'.$page.'.php';
        		?>

        	</div>


        	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        	<script type="text/javascript" src="js/materialize.js"></script>
        </body>
    </html>