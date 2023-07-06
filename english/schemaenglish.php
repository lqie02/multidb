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
$sql = "SELECT table_schema , table_name, create_time, table_collation FROM information_schema.tables WHERE table_schema = 'pr_mon06'";
$result = mysqli_query($conn,$sql);

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
  <a href="english.php?id=5001" class="w3-bar-item w3-button">Chapter</a>
  <a href="assessmentenglish.php?id=5001" class="w3-bar-item w3-button">Assessment</a>
  <a href="resultenglish.php" class="w3-bar-item w3-button">Result</a>
  <a href="feedbackenglish.php?id=5001" class="w3-bar-item w3-button">Feedback</a>
  <a href="commentenglish.php" class="w3-bar-item w3-button">Comment</a>
  <div class="w3-dropdown-hover">
    <button class="w3-bar-item w3-button">Metadata</button>
    <div class="w3-dropdown-content w3-bar-block w3-card">
      <a href="associativeenglish.php" class="w3-bar-item w3-button">Associative</a>
      <a href="schemaenglish.php" class="w3-bar-item w3-button">Schema</a>
      <a href="navigationalenglish.php" class="w3-bar-item w3-button">Navigational</a>
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
	<h2 style="margin-top: 90px;margin-left:30%;">Schema Metadata</h2>
  <div class="container" style="width: 70%;margin-top: 50px;margin-left: 70px">
	  <table class="table table-hover text-center">
		  <thead class="table-dark">
			  <tr>
				  <th scope="col">Table Schema</th>
				  <th scope="col">Table Name</th>
				  <th scope="col">Create Time</th>
				  <th scope="col">Table Collection</th>
			  </tr>
		  </thead>
		  <tbody>
			  <?php
			  if(mysqli_num_rows($result)>0)
			  {
				  while($row = mysqli_fetch_assoc($result))
				  { ?><tr>
					 <td><?php echo $row['table_schema'] ?></td>
			  		 <td><?php echo $row['table_name'] ?></td>
			  		 <td><?php echo $row['create_time'] ?></td>
			  		 <td><?php echo $row['table_collation'] ?></td>
		  			</tr>
				 <?php }
			  } ?>
			  
		  </tbody>
	  </table>
  </div>
	
	
</body>
</html>