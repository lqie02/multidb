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

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	
    $lid = $_POST['languageid'];
    $ratingValue = $_POST['ratingValue'];
	$textarea = $_POST['textarea'];
    
	$query = "INSERT INTO feedback (VISITORID,LANGUAGEID,RATING,FEEDDATE,REMARK) VALUES ('$id','$lid','$ratingValue',NOW(),'$textarea')";
	
	if($conn -> query($query))
	{
		echo "<script>alert('Thank You For Your Rating.');</script>";
		echo"<meta http-equiv='refresh' content='0; url=comment.php'/>";
	}
	else
		{
			echo "<script>alert('>Error on submit please try again.');</script>";
			echo"<meta http-equiv='refresh' content='0; url=feedback.php?id=5003'/>";
		}
	
}

?>