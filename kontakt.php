<head>
	<meta charset="utf-8">
	<title> AutoGrupa </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
</head>

<body>


 <div id="container">
<!------------------ INDEX ------------------>	
	<div id="index">
		<a href="index.php"><div id="logo" ></div></a>
		<div class="option" id="kontakt"><a href="kontakt.php" 		 class="option-tilelink">	KONTAKT			</a></div>
		<div class="option">			 <a href="o_nas.php"		 class="option-tilelink">	O NAS			</a></div>
		<div class="option">			 <a href="jak_to_dziala.php" class="option-tilelink">	JAK TO DZIAŁA? 	</a></div>
		<div class="option">			 <a href="samochody.php"	 class="option-tilelink">	SAMOCHODY		</a></div>
	</div>
	
	
	<div id="kontakt-content">
		<!-- LEFT --->
		<div id="kontakt-left">
			<big style="font-size:25px;"><b> Autogrupa sp. z o.o. </big></br>
			<b style="line-height:0px;">_________________________</b></br></br>
			<b>Jasielska 14C/35, 60-476 Poznań, Polska</br>
			KRS:</b> 0000802362</br>
			<b>REGON:</b> 384287320</br></br>
			biuro@autogrupa.com.pl</b></p>
			<a href="http://www.facebook.com/" target="_blank"><img src="img/facebook.png" width="30px" height="30px"></a></br></br></br>
			
			<b>Sebastian Schnierl</b></br>
			<small>sebastian.schnierl@autogrupa.com.pl</small></br></br>
			+48 <b>791 877 962</b></br></br></br>
		
			<b>Paweł Wunderse</b></br>
			<small>pawel.wunderse@autogrupa.com.pl</small></br></br>
			+48 <b>518 194 160</b></br>
		
		</div>
	
	
	
	
		<!-- RIGHT -->
		<div id="kontakt-right">
			<div style="margin-left:25px;">
				<form method="post" action="send_mail.php">
					<p>Imię*</p>
					<input type="text" name="person_name" requied />
					<p>Email kontaktowy*</p>
					<input type="text" name="email_address" requied />
					<p>Numer telefonu</p>
					<input type="text" name="phone_number"/>
					<p>Treść wiadomości</p>
					<textarea rows="8" name="message"> </textarea></br></br>
					
					<p>* - pola obowiązkowe<p>
					<label><input type="checkbox" requied> <small> *Wyrażam zgodę na przetwarzanie moich danych osobowych zgodnie z Ustawą z dnia 29.08.1997
							roku o Ochronie Danych Osobowych; (tekst jednolity: Dz. U. 2016 r. poz. 922). 	</small></label></br></br>
					<label><input type="checkbox" requied> <small> *RODO... 			</small></label>
					</br></br></br></br>
					<input type="submit" name="submit" style="background-color:#156596; padding:10px 20px; color:white; float:right; margin: 13px; cursor:pointer;" value="WYŚLIJ NAM SWOJE ZAPYTANIE"></input>
				</form>
			</div>
		</div>	
	</div>

 <footer>
	 <p>
		<i class="icon-mail-alt"></i>&nbsp;&nbsp;biuro@autogrupa.com.pl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i class="icon-phone"></i>&nbsp;&nbsp; +48 <b>791 877 962</b>&nbsp;&nbsp;&nbsp;&nbsp;+48 <b>518 194 160</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 </p>
</footer>
</body>