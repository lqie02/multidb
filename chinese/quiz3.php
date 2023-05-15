<?php
session_start();
include "../connection/connection.php";
if(isset($_SESSION["visitorID"]))
{
  $id= $_SESSION["visitorID"];
}
else
{
  header('Location: ../index.php');
}

$assid = $_GET['aid'];


?>


<!DOCTYPE html>
<html>
<title>Plates of Joys</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="png" href="../image/fork.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="../css/quiz1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
	

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
	
	<center><h1>Assessment 3 <span class="qz"> / 测验3</span></h1></center>
	<br>
	<center><h3>Level: Hard</h3></center>
	
	
	
	<div class="card mb-3">
		<?php 
    $quiz3 = "SELECT * from questiontable WHERE assid = '".$assid."' limit 1";
    $quiz3res = mysqli_query($conn,$quiz3);
		
		if ($quiz3res && mysqli_num_rows($quiz3res)>0)
		{
			while($row = mysqli_fetch_assoc($quiz3res)) 
			{ ?>

					<form action="evaluate3.php" method="POST" >
						<div class="card-body">

							
							<h5 class="card-title"><?php echo $row['question'] ?></h5>
							
    						<p class="card-text"> <?php echo '<input type ="hidden" name="correctAnswer" value = "'. $row["answer"] .'" '?></p>
							<p class="card-text"> <?php echo '<input type ="hidden" name="questionID" value = "'. $row["questionID"] .'" '?></p>
							<p class="card-text"> <?php echo '<input type ="hidden" name="assid" value = "'. $row["assid"] .'" '?></p>
							<p class="card-text"> <?php echo '<input type ="radio" name="ans" value = "'. $row["choice1"] .'" >'?>  <?php echo $row['choice1'] ?></p>
							<p class="card-text"> <?php echo '<input type ="radio" name="ans" value = "'. $row["choice2"] .'" >'?> <?php echo $row['choice2'] ?></p>
							<p class="card-text"> <?php echo '<input type ="radio" name="ans" value = "'. $row["choice3"] .'" >'?> <?php echo $row['choice3'] ?></p>
							<p class="card-text"> <?php echo '<input type ="radio" name="ans" value = "'. $row["choice4"] .'" >'?> <?php echo $row['choice4'] ?></p> <br>
							<button   name="submit" class="button btn1">Submit</button> 
							
  						</div>
					</form>
		<?php $_SESSION['total'] = 0; ?>
		

	<?php } 
		}
		else{
			echo "No question found.";
		} ?>
		
</div>
	
	
</body>
</html>