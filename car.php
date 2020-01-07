<head>
	<meta charset="utf-8">
	<title> AutoGrupa </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
</head>

<style>
.mySlides {display:none;}
</style>

<body>
<?php
	$posted_id = $_GET["id"];

	require_once "connect.php";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno;
	} else {
		
	$sql = "SELECT * FROM samochody WHERE id=$posted_id";
	
	if($rezultat = @$polaczenie->query($sql)){
		$ile = $rezultat->num_rows;
		if($ile>0){
			$wiersz = $rezultat->fetch_assoc();	
			?>

 <div id="container">
<!------------------ INDEX ------------------>	
	<div id="index">
<a href="index.php"><div id="logo" ></div></a>
<div class="option" id="kontakt"><a href="kontakt.php" 		 class="option-tilelink">	KONTAKT			</a></div>
<div class="option">			 <a href="o_nas.php"		 class="option-tilelink">	O NAS			</a></div>
<div class="option">			 <a href="jak_to_dziala.php" class="option-tilelink">	JAK TO DZIAŁA? 	</a></div>
<div class="option">			 <a href="samochody.php"	 class="option-tilelink">	SAMOCHODY		</a></div>
	</div>

	
<!------------------ CONTENT ---------------->	
	<div id="car-content">
		<?php
		 $i1 = "'img/cars/".$wiersz['img_name1']."'"; 
		 $i2 = "'img/cars/".$wiersz['img_name2']."'"; 
		 $i3 = "'img/cars/".$wiersz['img_name3']."'"; 
		 $i4 = "'img/cars/".$wiersz['img_name4']."'"; 
		 $i5 = "'img/cars/".$wiersz['img_name5']."'"; 
		 $i6 = "'img/cars/".$wiersz['img_name6']."'"; 
		 $i7 = "'img/cars/".$wiersz['img_name7']."'"; 
		 $i8 = "'img/cars/".$wiersz['img_name8']."'"; 
		 ?>
		<div>
			<button class='left  car-button'  onclick='plusDivs(-1)'>&#10094;</button>
			<button class='right car-button'  onclick='plusDivs(1)'>&#10095;</button>

			<div class="mySlides car-photo" style="background-image: url(<?php echo $i1; ?>); max-width:100%; height:540px; margin:auto;"></div>
			<?php if($wiersz['img_name2']==''){} else { echo '<div class="mySlides car-photo" style="background-image: url('.$i2.'); max-width:100%; height:540px; margin:auto;"></div>';}?>
			<?php if($wiersz['img_name3']==''){} else { echo '<div class="mySlides car-photo" style="background-image: url('.$i3.'); max-width:100%; height:540px; margin:auto;"></div>';}?>
			<?php if($wiersz['img_name4']==''){} else { echo '<div class="mySlides car-photo" style="background-image: url('.$i4.'); max-width:100%; height:540px; margin:auto;"></div>';}?>
			<?php if($wiersz['img_name5']==''){} else { echo '<div class="mySlides car-photo" style="background-image: url('.$i5.'); max-width:100%; height:540px; margin:auto;"></div>';}?>
			<?php if($wiersz['img_name6']==''){} else { echo '<div class="mySlides car-photo" style="background-image: url('.$i6.'); max-width:100%; height:540px; margin:auto;"></div>';}?>
			<?php if($wiersz['img_name7']==''){} else { echo '<div class="mySlides car-photo" style="background-image: url('.$i7.'); max-width:100%; height:540px; margin:auto;"></div>';}?>
			<?php if($wiersz['img_name8']==''){} else { echo '<div class="mySlides car-photo" style="background-image: url('.$i8.'); max-width:100%; height:540px; margin:auto;"></div>';}?>
		
		</div>
		
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
		
		<div id="car-price-box">
			<div class="car-price-lr"><?php echo $wiersz['Cena'];?>zł</div>
			<div class="car-price-lr"><?php echo $wiersz['Cena/msc'];?>zł/msc</div>
		</div>
		
		<div id="car-description">
			<div class="car-description-lr">
				<p class="description">Marka:				</p>
				<p class="description">Model: 				</p>
				<p class="description">Wersja wyposażenia:  </p>
				<p class="description">Rocznik: 			</p>
				<p class="description">Kolor: 				</p>
			</div>
			<div class="car-description-lr">
				<b><p class="description"><?php echo $wiersz['Marka']?></p></b>
				<b><p class="description"><?php echo $wiersz['Model']?></p></b>
				<b><p class="description"><?php echo $wiersz['Wersja_wyposazenia']?> </p></b>
				<b><p class="description"><?php echo $wiersz['Rocznik']?> </p></b>
				<b><p class="description"><?php echo $wiersz['Kolor']?></p></b>		
			</div>
			
			
			<div class="car-description-lr">
				<p class="description">Nadwozie: 		</p>
				<p class="description">Paliwo: 			</p>
				<p class="description">Skrzynia biegów: </p>
				<p class="description">Silnik: 			</p>
				<p class="description">Moc: 			</p>
			</div>
			<div class="car-description-lr">
				<b><p class="description"><?php echo $wiersz['Nadwozie']?></p></b>
				<b><p class="description"><?php echo $wiersz['Paliwo']?></p></b>
				<b><p class="description"><?php echo $wiersz['Skrzynia_biegow']?></p></b>
				<b><p class="description"><?php echo $wiersz['Silnik']?></p></b>
				<b><p class="description"><?php echo $wiersz['Moc']?></p></b>		
			</div>
			
			<div id="car-description2">
				Wyposażenie:</br>
				<div id="wyposazenie"> <?php echo $wiersz['Wyposazenie']?> </div>
			</div>
			
			<div style="margin-bottom: 100px;">
				<img src="img/pdf.svg" width="75px" height="50px" class="center"/>
			</div>
			
		</div>
	</div>
 </div>
 
 <?php
 			$rezultat->close();
		} else {
			
		}
	}
	
	
	$polaczenie->close();
	}
 
 ?>
<!------------------ FOOTER ----------------->	
	<footer>
	 <p>
		<i class="icon-mail-alt"></i>&nbsp;&nbsp;biuro@autogrupa.com.pl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i class="icon-phone"></i>&nbsp;&nbsp; +48 <b>791 877 962</b>&nbsp;&nbsp;&nbsp;&nbsp;+48 <b>518 194 160</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </p>
	</footer>
</body>