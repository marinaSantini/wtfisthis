<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8" />
	<title>WTF is this</title>
	<link rel="stylesheet" href="../style/mobile.css" type="text/css" />
	<meta name="viewport" content="user-scalable=no, width=device_width" />
	
	<script type="text/javascript" src="../js/jquery-1.5.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.js"></script>
	<script type="text/javascript" src="../js/jquery.NobleCount.js"></script>
   	<script type="text/javascript" src="../js/jquery.form.js"></script>
   	<script type="text/javascript" src="../js/wtf.js"></script>
	<script type="text/javascript" src="../js/latest_questions.js"></script>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>WTF is this</h1>
			<nav>
				<ul id="tabnav"> 
					<li class="active"><a href="latest_questions.php">Senaste</a></li> 
					<li><a href="#">Populäraste</a></li> 
					<li><a href="#">I din närhet</a></li> 
					<li><a href="create_question.php">Skapa en fråga</a></li> 
				</ul> 	
			</nav>
		</header>
		<div id="content">
			<noscript>
				<h2>OBS</h2>
				<p>Wtf Is This kräver javascript för att fungera fullt ut!</p>
				<p>Android: välj webb - menu - more - settings - enable javascript</p>
				<p>Iphone: välj settings - safari - enable javascript</p>
				<img id="noscript_image" src="images/default.jpg" />
			</noscript>
			<ol id="questions">
				<li></li>
			</ol>
			<a id="more_link" href="#">Visa fler</a>
		</div>
		
		<div id="about">
			<h3>Om WTF is this</h3>
			<p>WTF is this är en nytt sätt att söka och hitta information. Du kan publicera bilder på underliga saker och ställa öppna frågor till alla besökare om vad det är för nåt, få svar från riktiga människor och hjälpa till genom att dela med dig av dina insikter.</p>			
		</div>
	
		<footer>
			<p>copyright &copy; <a href="mailto:wtf@isthis.net">WTF is this</a> 2011</p>
		</footer>
   </div>
   <div class="templates">
		<ol>
			<li class="question">
				<a class="question_link">
					<img src="#" alt="Bild för fråga" class="question_thumbnail" />
					<h2 class="question_title"></h2>
					<p class="question_date"></p>
				</a>
			</li>
		</ol>
    </div>
</body>
</html>
