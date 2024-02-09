<?php 
	print '
	<ul>
		<li><a href="index.php?menu=1">Početna</a></li>
		<li><a href="index.php?menu=2">Novosti</a></li>
		<li><a href="index.php?menu=3">Kontakt</a></li>
		<li><a href="index.php?menu=4">O nama</a></li>
        <li><a href="index.php?menu=5">Cjenik</a></li>
        <li><a href="index.php?menu=6">Galerija</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=7">Registracija</a></li>
			<li><a href="index.php?menu=8">Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=9">Admin</a></li>
			<li><a href="signout.php">Odjava</a></li>';
		}
		print '
	</ul>';
?>
