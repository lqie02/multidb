<?php
  session_start();
  $visitor =  $_SESSION['visitorID'];
  include "../connection/connection.php";


?>
<!doctype html>
<html>
<head>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="png" href="../image/fork.png">
<link rel="stylesheet" href="https://fonts.googleapls.com/css2?family=PT+Sans:wght@400:700&display=swap" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<title>Plates of Joys</title>
	<style>
		h1 .cn
		{
			font-family: KaiTi;
		}
		h1
{
	
	font-family: Palatino Linotype, serif;
	margin-bottom: 20px;
	
}

	</style>
</head>

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card" style="width:16%;right:0; margin-top: 45px; font-size: 20px;">
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

<!-- Navbar (sit on top) -->
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
	
	<h1 style="margin-top: 90px"><center>Result</h1>
	<br>
	<div class="container" style="width: 70%; margin-left: 90px;">
		
  <form method="GET">
    <div class="form-group">
        <div class="form-group">
    		<select class="form-control" id="level" name="level" style="width: 30%; display: inline-block;">
        		<option value="">-- Select Level --</option>
       			<option value="Easy">Easy</option>
        		<option value="Medium">Medium</option>
        		<option value="Hard">Hard</option>
    		</select>
    			<button type="submit" class="btn btn-primary" style="display: inline-block; vertical-align: top; margin-left: 10px;">Search</button>
    			<a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-secondary" style="display: inline-block; vertical-align: top; margin-left: 10px;">Reset</a>
		</div>
</form>
		
  <br><br>
  <table class="table table-hover text-center">
    <thead class="table-dark">
      <tr>
        <th scope="col">NO.</th>
        <th scope="col">ASSESSMENT NAME</th>
        <th scope="col">LEVEL</th>
        <th scope="col">MARKS</th>
        <th scope="col">ASSESSMENT DATE</th>      
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_GET['level']) && !empty($_GET['level'])) {
        $level = $_GET['level'];
        $test = mysqli_query($conn,"SELECT * FROM assesmenttaken a JOIN assessment s ON a.ASSID = s.ASSID WHERE VISITORID = '$visitor' AND LEVEL = '$level' AND ASSNAME LIKE '%English%' ORDER BY CASE WHEN s.LEVEL = 'Easy' THEN 1 WHEN s.LEVEL = 'Medium' THEN 2 WHEN s.LEVEL ='Hard' THEN 3 END;");
      } else {
        $test = mysqli_query($conn,"SELECT * FROM assesmenttaken a JOIN assessment s ON a.ASSID = s.ASSID WHERE VISITORID = '$visitor' AND ASSNAME LIKE '%English%' ORDER BY CASE WHEN s.LEVEL = 'Easy' THEN 1 WHEN s.LEVEL = 'Medium' THEN 2 WHEN s.LEVEL ='Hard' THEN 3 END;");
      }
      
      $i=1;
     
      if(mysqli_num_rows($test)>0){
        while ($row=mysqli_fetch_assoc($test)){
          $mark = $row['MARKS']/$row['ASSMARKS'] * 100;
          ?><tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $row['ASSNAME'] ?></td>
            <td><?php echo $row['LEVEL'] ?></td>
            <td><?php echo $mark; ?></td>
            <td><?php echo $row['ASSDATE'] ?></td>
          </tr>
          <?php }
      }?>
    </tbody>
  </table>
</div>
	
</body>
</html>