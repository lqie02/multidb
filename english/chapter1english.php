<?php
  session_start();
  $visitor =  $_SESSION['visitorID'];
  $id = $_GET['id'];
  include "../connection/connection.php";


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="png" href="../image/fork.png">
<link rel="stylesheet" href="https://fonts.googleapls.com/css2?family=PT+Sans:wght@400:700&display=swap" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../css/cont1.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<style>
.button {
  background-color:#4682b4 ;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin-bottom: 30px;
  margin-top: -50px;
  margin-right: 300px;
  cursor: pointer;
  float: right;
  border-radius: 2px;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.8);
}

.modal-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 90%;
  max-width: 640px;
  border-radius: 5px;
  padding: 20px;
  box-sizing: border-box;
}


.close {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 24px;
  font-weight: bold;
  color: white;
  padding: 10px;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

</style>
	
<title>Plates of Joys</title>
</head>

<body>
	
	<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="../home.php" class="w3-bar-item w3-button"><b>PLATES</b> of JOYS</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="english.php?id=5001" class="w3-bar-item w3-button">Content</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
	
	<h1><center>Chapter 1 </center></h1>
		

<table class="content-table" border="0" cellspacing="30" width="60%" align="center">
	<tbody>
		
		<?php
	mysqli_set_charset($conn,"utf8");
    $img1sql = "SELECT * from image i, content c, audio a,video v WHERE i.CONTENTID = c.CONTENTID AND a.CONTENTID = c.CONTENTID AND v.CONTENTID = c.CONTENTID AND c.LANGUAGEID =5001 LIMIT 5";
    $img1result = mysqli_query($conn,$img1sql);
    while($row = mysqli_fetch_assoc($img1result)) 
	{ 
        ?>
        <tr>
            <th>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['IMAGE']).'" />'; ?>
			</th>
            <td><br><br>
               <b style="font-size: 18px;"> <?php echo $row['CONTENTNAME'] ?></b>
                <br>
                <audio controls>
					<source style="display:block;" width="100px"  height= "350px" src="../audio/<?=$row['PATHFILE']?>" 
                type="audio/mpeg">
				</audio>
				<p><b>Description</b></p>
				<p align="justify"><?php echo $row['DESCRIPTION'] ?></p>
				
           
          <a href="#" onclick="openModal('../video/<?=$row['PATHF'] ?>')">Click to watch video</a>

<div id="videoModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()" style="margin-left: 100px; margin-top: -40px;">&times;</span>
    <video id="videoPlayer" width="640" height="360" controls>
      <source src="../video/<?=$row['PATHF'] ?>" type="video/mp4">
    </video>
  </div>
</div>


            </td>
        </tr>
<?php
    }
?> 		
	
	</tbody>
</table>
<a href="english.php?id=5001" class="button">Finish</a>

	<script>
		function openModal(videoUrl) {
  var modal = document.getElementById("videoModal");
  var videoPlayer = document.getElementById("videoPlayer");
  videoPlayer.setAttribute("src", videoUrl);
  modal.style.display = "block";
}

function closeModal() {
  var modal = document.getElementById("videoModal");
  var videoPlayer = document.getElementById("videoPlayer");
  videoPlayer.pause();
  videoPlayer.removeAttribute("src");
  modal.style.display = "none";
}

	</script>
</body>
</html>
