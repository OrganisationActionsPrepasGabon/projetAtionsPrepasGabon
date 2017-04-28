<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="apg SITE">
    <meta name="author" content="Terrence SOUMBOU">
    <title>Home | Action Gabon Prepas</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <?php 
          $info = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
		 
    include('vues/header.php');
	
    if(isset($info)&& !empty($info))
    {
		list($param,$page)=explode("=",$info,2);
	$page = explode("=", $info)[1];
		 if(is_file('controller/'.$page.'.php')){
			include ('controller/'.$page.'.php');
		 }else{
			include('controller/404.php');
		 }
    }
	else{
		include('controller/accueil.php');
	}
    
   include('vues/bottom.php');
   
   
    // $parsed_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_FRAGMENT);
   // echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
   // include('vues/header.php');
    // if(isset($parsed_url )&& !empty($parsed_url ) && is_file('controller/'.$parsed_url .'.php'))
    // {
        // include 'controller/'.$parsed_url .'.php';
    // }
	// else if(isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI']) && !iseet(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY)){
		// include('controller/accueil.php');
	// }else{
		// include('controller/404.php');
	// }
    
   // include('vues/bottom.php');
?>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	
</body>
</html>