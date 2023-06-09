<?php
session_start();
include('connection/connection.php');

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
      				<a href="home.php" class="w3-bar-item w3-button">Content</a>
      				<a href="about.php" class="w3-bar-item w3-button">About</a>
      				<a href="logout.php" class="w3-bar-item w3-button">Logout</a>
   	 			</div>
  		</div>
	</div>

	<header id="header">
		<div class="head-container">
			<div class="quote">
				<h1><b>Lets know about us!</b></h1>
	                 <div class="svg-image">
						<img src="image/about.png" alt="svg" width="400" height="300">
				     </div>   
				     <h5 style="text-align:justify">We are a language learning system website development company. Our mission is to empower individuals with the ability to learn languages effectively and confidently. With our innovative technology and user-friendly platform, we strive to make language learning accessible to people of all ages and backgrounds.</h5>

<h5 style="text-align:justify">At our company, we believe in the transformative power of language education. We are passionate about creating a supportive and immersive learning environment that fosters language proficiency and cultural understanding. Our team of experienced developers, educators, and language experts work collaboratively to design and deliver high-quality learning resources and interactive tools. Through our language learning system website, we offer a comprehensive range of courses, exercises, and multimedia content tailored to meet the diverse needs and goals of our users. Our curriculum encompasses various proficiency levels and covers a wide array of languages, ensuring that learners can find the right resources to enhance their linguistic skills.</h5>

<h5 style="text-align:justify">We prioritize user experience and continuously strive to enhance our platform's functionality and accessibility. Our website features intuitive navigation, personalized learning paths, and interactive features that engage and motivate learners throughout their language learning journey. We also provide progress tracking and performance analytics to help users monitor their development and celebrate their achievements. In addition to our robust digital offerings, we foster a sense of community among our users. Through forums, discussion boards, and virtual language exchange programs, we encourage learners to connect, practice, and support each other in their language learning endeavors.</h5>

<h5 style="text-align:justify">As a company, we are committed to staying abreast of the latest developments in language education and incorporating them into our system. We value user feedback and continuously update and refine our content and features based on user input and emerging trends in language learning pedagogy.Join us on our language learning adventure and unlock the doors to a world of communication and cultural exchange. With our expertise and dedication, we are confident that we can help you achieve your language learning goals effectively and enjoyably.</h5>
	                </div>
			</div>
			
		</div>

	</header>
</body>
</html>