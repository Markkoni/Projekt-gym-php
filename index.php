<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");
	
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
    include_once("functions.php");
	
print '
<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>Marko&apos;s gym</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Službena stranica teretane Marko&apos;s gym">
		<meta name="keywords" content="teretana, gym, marko">
		<meta name="author" content="Marko Kutleša">
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="image/x-icon" href="images/body-builder.png">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		
	</head>
<body>
	<header>
		<div class ="header"></div>
		<nav class="navigacija">';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("početna.php"); }
	
	else if ($menu == 2) { include("news.php"); }
	
	else if ($menu == 3) { include("kontakt.php"); }
	
	else if ($menu == 4) { include("o nama.php"); }
	
	else if ($menu == 5) { include("cjenik.php"); }
	
	else if ($menu == 6) { include("galerija.php"); }

    else if ($menu == 7) { include("register.php"); }
	
	else if ($menu == 8) { include("signin.php"); }

    else if ($menu == 9) { include("admin.php"); }
	
	print '
	</main>
	<footer>
        <p style="text-align: center;">Copyright &copy; 2024 Marko Kutleša.</p>	
	</footer>
</body>
</html>';
?>
