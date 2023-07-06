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
$sql = "SELECT * FROM audio";
$result = mysqli_query($conn,$sql);
$i=1;
?>
<!doctype html>
<html>
<head>
<title>Plates of Joys</title>
<link rel="shortcut icon" type="png" href="../image/fork.png">
<link rel="stylesheet" href="https://fonts.googleapls.com/css2?family=PT+Sans:wght@400:700&display=swap" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card" style="width:16%;right:0; margin-top:-35px; font-size: 20px;">
  <h3 class="w3-bar-item"><b>CONTENT</b></h3>
  <a href="malay.php?id=5002" class="w3-bar-item w3-button">Chapter</a>
  <a href="assessment.php?id=5002" class="w3-bar-item w3-button">Assessment</a>
  <a href="result.php" class="w3-bar-item w3-button">Result</a>
  <a href="feedback.php?id=5002" class="w3-bar-item w3-button">Feedback</a>
  <a href="comment.php" class="w3-bar-item w3-button">Comment</a>
  <div class="w3-dropdown-hover">
    <button class="w3-bar-item w3-button">Metadata</button>
    <div class="w3-dropdown-content w3-bar-block w3-card">
      <a href="associative.php" class="w3-bar-item w3-button">Associative</a>
      <a href="schema.php" class="w3-bar-item w3-button">Schema</a>
      <a href="navigational.php" class="w3-bar-item w3-button">Navigational</a>
    </div>
  </div>
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
	<h2 style="margin-top: 90px;margin-left:30%;">Navigational Metadata</h2>
  <div class="container" style="width: 70%;margin-top: 50px;margin-left: 70px">
	  <table class="table table-hover text-center">
		  <thead class="table-dark">
			  <tr>
				  <th scope="col">No.</th>
				  <th scope="col">Audio Name</th>
				  <th scope="col">Pathfile</th>
				  <th scope="col">Audio</th>
			  </tr>
		  </thead>
		  <tbody>
			  <?php
			  if(mysqli_num_rows($result)>0)
			  {
				  while($row = mysqli_fetch_assoc($result))
				  { ?><tr>
					 <td><?php echo $i++ ?></td>
			  		 <td><?php echo $row['AUDIONAME'] ?></td>
			  		 <td>../audio/<?php echo $row['PATHFILE'] ?></td>
			  		 <td>
						<audio controls>
						<source style="display:block;" width="100px"  height= "350px" src="../audio/<?=$row['PATHFILE']?>" type="audio/mpeg">
						</audio>
			  		</td>
		  			</tr>
				 <?php }
			  } ?>
			  
		  </tbody>
	  </table>
  </div>
	
	
</body>
</html>