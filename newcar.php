<style>
body{
	background-color:#093a59;
	color:white;}
</style>
<?php
	
	require_once "connect.php";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	
	$marka = 		$_POST['Marka'];
	$model =		$_POST['Model'];
	$wersja = 		$_POST['Wersja_wyposazenia'];
	$rocznik = 		$_POST['Rocznik'];
	$paliwo = 		$_POST['Paliwo'];
	$nadwozie = 	$_POST['Nadwozie'];
	$kolor = 		$_POST['Kolor'];
	$skrzynia = 	$_POST['Skrzynia_biegow'];
	$silnik = 		$_POST['Silnik'];
	$moc = 			$_POST['Moc'];
	$wyposazenie = 	$_POST['Wyposazenie'];
	$cena = 		$_POST['Cena'];
	$Pcena = 		$_POST['PCena'];
	$cenamsc = 		$_POST['Cena_msc'];
	$img_name1 =	basename( $_FILES["fileToUpload1"]["name"]);
	$img_name2 =	basename( $_FILES["fileToUpload2"]["name"]);
	$img_name3 =	basename( $_FILES["fileToUpload3"]["name"]);
	$img_name4 =	basename( $_FILES["fileToUpload4"]["name"]);
	$img_name5 =	basename( $_FILES["fileToUpload5"]["name"]);
	$img_name6 =	basename( $_FILES["fileToUpload6"]["name"]);
	$img_name7 =	basename( $_FILES["fileToUpload7"]["name"]);
	$img_name8 =	basename( $_FILES["fileToUpload8"]["name"]);
	
	
	
	
	
	//Adding photo
	$target_dir = "img/cars/";
	$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
		if($check != false) {
			echo "File is an image - " . $check["mime"] . ".<br/>";
			$uploadOk = 1;
		} else {
			echo "Plik nie był obrazkiem.<br/>";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Niestety, taki plik już istnieje.<br/>";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Samochód nie został dodany.<br/><br/>";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
			$polaczenie->query("INSERT INTO samochody VALUES (NULL, '$marka', '$model', '$wersja', '$rocznik',
			'$paliwo', '$nadwozie', '$kolor', '$skrzynia', '$silnik', '$moc', '$wyposazenie', '$cena','$Pcena', '$cenamsc',
			'$img_name1', '$img_name2', '$img_name3', '$img_name4', '$img_name5', '$img_name6', '$img_name7', '$img_name8')");
			
			move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_dir.basename($_FILES["fileToUpload2"]["name"]));
			move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_dir.basename($_FILES["fileToUpload3"]["name"]));
			move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_dir.basename($_FILES["fileToUpload4"]["name"]));
			move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_dir.basename($_FILES["fileToUpload5"]["name"]));
			move_uploaded_file($_FILES["fileToUpload6"]["tmp_name"], $target_dir.basename($_FILES["fileToUpload6"]["name"]));
			move_uploaded_file($_FILES["fileToUpload7"]["tmp_name"], $target_dir.basename($_FILES["fileToUpload7"]["name"]));
			move_uploaded_file($_FILES["fileToUpload8"]["tmp_name"], $target_dir.basename($_FILES["fileToUpload8"]["name"]));
			
			echo "Dodano samochód!<br/>";
		} else {
			echo "Coś poszło nie tak. Spróbuj ponownie.<br/>";
		}
	}
	
	echo 'Sprawdź bieżące <a href="samochody.php" target="_blank" style="color:white">tutaj</a><br/>';
	echo '<a href="admin-work.php" style="color:white">Wróć</a>';
	
	$polaczenie->close();
	?>
	
	
	

