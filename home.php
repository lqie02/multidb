<?php
session_start();

if(isset($_SESSION["visitorID"]))
{
	$id= $_SESSION["visitorID"];
}
else
{
	header('Location: index.php');
}
?>
<!doctype html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="image/fork.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Plates of Joys</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://kit.fontawesome.com/805d306191.js" crossorigin="anonymous"></script>
    <script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>

<body>
	<!-- Navbar (sit on top) -->
	<div class="w3-top">
  		<div class="w3-bar w3-white w3-wide w3-padding w3-card">
   	 		<a href="#home" class="w3-bar-item w3-button"><b>PLATES</b> of JOYS</a>
    <!-- Float links to the right. Hide them on small screens -->
    			<div class="w3-right w3-hide-small">
      				<a href="#projects" class="w3-bar-item w3-button">Content</a>
      				<a href="#about" class="w3-bar-item w3-button">About</a>
      				<a href="logout.php" class="w3-bar-item w3-button">Logout</a>
   	 			</div>
  		</div>
	</div>

	<header id="header">
		<div class="head-container">
			<div class="quote">
				<h1><b>Welcome to Language Learning System</b></h1>
	                 <div class="svg-image">
						<img src="image/background.jpg" alt="svg">
				     </div>   
				     <h5>Malaysian cuisine is a fusion of flavors and culinary techniques from Malay, Chinese, Indian, and indigenous cultures, resulting in a rich and diverse culinary heritage.  This system will have the capability to learn about food from various cultures in different languages.</h5>    
	                <div class="play">
	                    <i class="fa fa-cutlery"></i><span><a href="#services_section">Learn Now</a></span>
	                </div>
			</div>
			
		</div>

	</header>

    <div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 45px; padding: 100px; padding-bottom: 40px; color: black;">Please Choose Your Language:</p></center>
		</div>
		<a href="#.php?id=5001"><div class="s-card"><img src="image/eng.png"><p>ENGLISH</p></div></a>
		<a href="#.php?id=5002"><div class="s-card"><img src="image/melayu.png"><p>BAHASA MELAYU</p></div></a>
		<a href="chinese/chinese.php?id=5003"><div class="s-card"><img src="image/chat.png"><p>CHINESE</p></div></a>
	</div>


</body>
</html>