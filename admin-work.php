<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
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
	<div style="width:auto; margin: 0px 0px 30px 10px;">
<div style="float:left; width:220px;">
	<h2> Dodaj samochód </h2>
	<form method="post" action="newcar.php" enctype="multipart/form-data">
		Marka:  			<br/><input type="text" size="5" name="Marka" /><br/>
		Model: 				<br/><input type="text" size="5" name="Model" /><br/>
		Wersja Wyposażenia: <br/><input type="text" size="5" name="Wersja_wyposazenia" /><br/>
		Rocznik:  			<br/><input type="text" size="5" name="Rocznik" /><br/>
		Paliwo:  			<br/><input type="text" size="5" name="Paliwo" /><br/>
		Nadwozie:  			<br/><input type="text" size="5" name="Nadwozie" /><br/>
		Kolor: 				<br/><input type="text" size="5" name="Kolor" /><br/>
		Skrzynia biegów: 	<br/><input type="text" size="5" name="Skrzynia_biegow" /><br/>
		Silnik:  			<br/><input type="text" size="5" name="Silnik" /><br/>
		Moc:  				<br/><input type="text" size="5" name="Moc" /><br/>
		Wyposażenie:		<br/><textarea name="Wyposazenie"></textarea><br/>
		Cena (wyświetlana): <br/><input type="text" size="5" name="Cena" /><br/>
		Cena (właściwa):  	<br/><input type="text" size="5" name="PCena" /><br/>
		Cena/msc (wyświetlana):<br/><input type="text" size="5" name="Cena_msc" /><br/>
		
		<br/><br/>
		Dodaj pierwsze zdjęcie:
		<input type="file" name="fileToUpload1" id="fileToUpload1">

		<br/><br/>
		Dodaj drugie zdjęcie:
		<input type="file" name="fileToUpload2" id="fileToUpload2">

		<br/><br/>
		Dodaj trzecie zdjęcie:
		<input type="file" name="fileToUpload3" id="fileToUpload3">

		<br/><br/>
		Dodaj czwarte zdjęcie:
		<input type="file" name="fileToUpload4" id="fileToUpload4">

		<br/><br/>
		Dodaj piąte zdjęcie:
		<input type="file" name="fileToUpload5" id="fileToUpload5">

		<br/><br/>
		Dodaj szóste zdjęcie:
		<input type="file" name="fileToUpload6" id="fileToUpload6">

		<br/><br/>
		Dodaj siódme zdjęcie:
		<input type="file" name="fileToUpload7" id="fileToUpload7">
		
		<br/><br/>
		Dodaj ósme zdjęcie:
		<input type="file" name="fileToUpload8" id="fileToUpload8">

		<br/><br/>
		<input type="submit" value="Dodaj samochód" />
	</form>
</div>

<div style="float:left; width:220px; margin-left: 150px;">
	<h2> Usuń samochód </h2>
	<form method="post" action="delcar.php">
		ID: 	<br/><input type="text" size="5" name="del_id" /><br/>
		<input type="submit" value="Usuń samochód" />
	</form>
</div>
	
	<div style="float: right; margin-right: 10px;">
<?php echo '<div style="text-align:right;"><h2>[ <a href="logout.php" style="color:white">Wyloguj się</a> ]</h2>
 <h2> Sprawdź bieżące samochody <a href="samochody.php" target="_blank" style="color:white">tutaj</a>.</h2></div>'?>
</div>
	</div>
</body>
