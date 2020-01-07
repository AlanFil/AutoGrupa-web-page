<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: admin-work.php');
		exit();
	}

?>

<head>
	<meta charset="utf-8">
	<title> AutoGrupa </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
</head>

<style>
body{
	background-color:#093a59;
	color:white;}
</style>

<body>
	<form action="zaloguj.php" method="post">
		Login: <br/> <input type="password" name="login"/> <br/>
		Hasło: <br/> <input type="password" name="haslo"/> <br/>
		<input type="submit" value="Zaloguj się"/>
	</form> 
</body>