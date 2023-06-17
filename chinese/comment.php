<?php
session_start();
include('../connection/connection.php');

if(isset($_SESSION["visitorID"]))
{
  $id= $_SESSION["visitorID"];
}
else
{
  header('Location: ../index.php');
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="png" href="../image/fork.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/comment.css">
<script src="https://kit.fontawesome.com/4a0046fff5.js" crossorigin="anonymous"></script>
<title>Plates of Joys</title>
</head>
	
	<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card" style="width:16%;right:0; margin-top:-6px; font-size: 20px; ">
  <h3 class="w3-bar-item" style="font-weight: 700">CONTENT</h3>
  <a href="chinese.php?id=5003" class="w3-bar-item w3-button">Chapter</a>
  <a href="assessment.php?id=5003" class="w3-bar-item w3-button">Assessment</a>
  <a href="result.php" class="w3-bar-item w3-button">Result</a>
  <a href="feedback.php?id=5003" class="w3-bar-item w3-button">Feedback</a>
  <a href="comment.php" class="w3-bar-item w3-button">Comment</a>
</div>
	
<div class="w3-top">
      <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="../home.php" class="w3-bar-item w3-button"><b>PLATES</b> of JOYS</a>
    <!-- Float links to the right. Hide them on small screens -->
          <div class="w3-right w3-hide-small">
              <a href="../home.php" class="w3-bar-item w3-button">Content</a>
              <a href="../about.php" class="w3-bar-item w3-button">About</a>
              <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
          </div>
      </div>
  </div>
	<!-- Contenedor Principal -->
	<div class="comments-container">
		<h1>Comentarios </h1>
		<?php
						mysqli_set_charset($conn,"utf8");
						$query = "SELECT * FROM feedback f, visitor r WHERE f.visitorid = r.visitorid AND languageid = 5003";
						$result = mysqli_query($conn,$query);
						while ($row = mysqli_fetch_assoc($result))
						{
					?>

		<ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="../image/sakura.png" alt="" style="background-color: aliceblue"></div>
					

					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"><?php echo $row['VISITORNAME']; ?></a></h6>
							<span style="margin-left: 10px;margin-top: 10px;">Rating : <?php echo $row['RATING']; ?>/5</span>
							<span style="margin-left: 150px;margin-top: 10px;"><?php echo $row['FEEDDATE']; ?></span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						
						<div class="comment-content">
							<?php echo $row['REMARK']; ?>
						</div>
					</div>
				</div> 
			</li>
		</ul> <?php } ?>
	</div>

<body>
</body>
</html>