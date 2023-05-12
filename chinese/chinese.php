<?php
session_start();

if(isset($_SESSION["visitorID"]))
{
	$id= $_SESSION["visitorID"];
}
else
{
	header('Location: ../index.php');
}

$languageID = $_GET['id'];
?>


<!DOCTYPE html>
<html>
<title>Plates of Joys</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="png" href="../image/fork.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="../css/chinese.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<body>


<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card" style="width:16%;right:0; margin-top: 45px; font-size: 20px;">
  <h3 class="w3-bar-item"><b>CONTENT</b></h3>
  <a href="chinese.php?id=5003" class="w3-bar-item w3-button">Chapter</a>
  <a href="assessment.php?id=5003" class="w3-bar-item w3-button">Assessment</a>
  <a href="result.php" class="w3-bar-item w3-button">Result</a>
  <a href="../feedback.php?id=5003" class="w3-bar-item w3-button">Feedback</a>
  <a href="comment.php" class="w3-bar-item w3-button">Comment</a>
</div>

<div class="w3-top">
      <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="../home.php" class="w3-bar-item w3-button"><b>PLATES</b> of JOYS</a>
    <!-- Float links to the right. Hide them on small screens -->
          <div class="w3-right w3-hide-small">
              <a href="#projects" class="w3-bar-item w3-button">Content</a>
              <a href="#about" class="w3-bar-item w3-button">About</a>
              <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
          </div>
      </div>
  </div>

<section id="blog">
  <div class="blog-heading">
    <h1><b>Chinese Language <span class="txt">中文</span></b></h1>
  </div>

  <div class="blog-container">
    <!--box 1-->
    <div class="blog-box">
      <div class="blog-img">
      <img src="../image/lantern.png" alt="chapter1">
    </div>
    <div class="blog-text">
      <span><b>Chapter 1</b></span>
      <p>Learning about the Chinese Cuisine</p>
      <a href="chapter1.php?id=5003"><i class="fa fa-external-link" aria-hidden="true"></i> &nbsp;Learn More</a>
    </div>
    </div>

     <!--box 2-->
     <div class="blog-box">
      <div class="blog-img">
      <img src="../image/nasi-lemak.png" alt="chapter2">
    </div>
    <div class="blog-text">
      <span><b>Chapter 2</b></span>
      <p>Learning about the Malay Cuisine</p>
      <a href="chp2.php?id=5003"><i class="fa fa-external-link" aria-hidden="true"></i>&nbsp; Learn More</a>
    </div>
    </div> 

    <!--box 3-->
     <div class="blog-box">
      <div class="blog-img">
      <img src="../image/masala-dosa.png" alt="chapter3">
    </div>
    <div class="blog-text">
      <span><b>Chapter 3</b></span>
      <p>Learning about the Indian Cuisine</p>
      <a href="chp3.php?id=5003"><i class="fa fa-external-link" aria-hidden="true"></i>&nbsp; Learn More</a>
    </div>
    </div> 

  </div>
</section>


      
</body>
</html>
