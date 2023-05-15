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

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Plates of Joys</title>
  <link rel="stylesheet" type="text/css" href="../css/feedback.css">
  <link rel="stylesheet" type="text/css" href="../css/feed.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="png" href="../image/fork.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/4a0046fff5.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card" style="width:16%;right:0; margin-top: 45px; font-size: 20px; ">
  <h3 class="w3-bar-item" style="font-weight: 700">CONTENT</h3>
  <a href="chinese.php?id=5003" class="w3-bar-item w3-button">Chapter</a>
  <a href="assessment.php?id=5003" class="w3-bar-item w3-button">Assessment</a>
  <a href="result.php" class="w3-bar-item w3-button">Result</a>
  <a href="feedback.php?id=5003" class="w3-bar-item w3-button">Feedback</a>
  <a href="comment.php" class="w3-bar-item w3-button">Comment</a>
</div>

<div class="w3-top">
      <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="home.php" class="w3-bar-item w3-button" ><b>PLATES</b> of JOYS</a>
    <!-- Float links to the right. Hide them on small screens -->
          <div class="w3-right w3-hide-small">
              <a href="#" class="w3-bar-item w3-button">Content</a>
              <a href="#about" class="w3-bar-item w3-button">About</a>
              <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
          </div>
      </div>
  </div>
<section id="blog">
  <div class="blog-heading">
    <h1>Feedback <span class="txt">反馈</span></h1>
  </div>
</section>
	
<div class="wrapper">
  <div class="blog-box">
      <div class="blog-img">
      <img src="../image/feedback.png" alt="quiz2">
    </div>
    <div class="blog-text">
      <span><b><center>Feedback</center></b></span>
      <br>
      <button class="feedback_btn send_btn">Send Your Feedback</button>
    </div>
  
  
  <div class="modal_wrapper">
    <div class="shadow close_btn"></div>
    
    <div class="modal">
      <div class="close_btn">
        <i class="fa-solid fa-xmark"></i>
      </div>
      
      <div class="header">
		<form action="feed_process.php" method="POST" >  
        <h3><center>Give Feedback</center></h3>
        <p>What do you think of this learning language system?</p>
     
        <div class="feedback_icons">
          <ul id="ratingList">
            <li>
			
             <i class="fa-regular fa-face-meh-blank" name="rating" value="1"></i>
            </li>
            <li>
              
              <i class="fa-regular fa-face-smile" name="rating" value="2"></i>
            </li>
            <li>
			
             <i class="fa-regular fa-face-kiss-beam" name="rating" value="3"></i>
            </li>
            <li>
			  
              <i class="fa-regular fa-face-smile-wink"  name="rating" value="4"></i>
            </li>
            <li>
			 
              <i class="fa-regular fa-face-grin-hearts" name="rating" value="5"></i>
            </li>
          </ul>
		<input type="hidden" id="ratingValue" name="ratingValue" value="">
		<input type="text" id="languageid" name="languageid" value="<?php echo $id?>" hidden>

        </div>
      </div>
      <div class="body">
        <p>Do you have any thoughts you would like to share for this language?</p>
        <textarea class="textarea" name="textarea"></textarea>
      </div>
      <div class="footer">
        <button  type="submit" name="submit"  id="submitBtn" value="Submit" class="send_btn">Submit</button>
      </div>
		  </form>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
var feedback_btn = document.querySelector(".feedback_btn");
var wrapper = document.querySelector(".wrapper");
var close_btns = document.querySelectorAll(".close_btn");
var li_items = document.querySelectorAll("ul li");

feedback_btn.addEventListener("click", function () {
  wrapper.classList.add("active");
});

close_btns.forEach(function (btn) {
  btn.addEventListener("click", function () {
    wrapper.classList.remove("active");
  });
});

li_items.forEach(function (item) {
  item.addEventListener("click", function () {
    li_items.forEach(function (li) {
      li.classList.remove("active");
    });

    item.classList.add("active");
  });
});


// Get the rating list and submit button by their respective IDs
  const ratingList = document.getElementById('ratingList');
  const submitBtn = document.getElementById('submitBtn');
  
  // Add a click event listener to the submit button
  submitBtn.addEventListener('click', () => {
    // Retrieve the selected rating value from the hidden input field
    const ratingValue = document.getElementById('ratingValue').value;
    
    // Send the selected rating value to the server using a form submit
    if (ratingValue) {
      // Set the value of the hidden input field to the selected rating value
      document.getElementById('ratingValue').value = ratingValue;
      
      // Submit the form
      ratingList.parentNode.submit();
    }
  });
  
  // Add a click event listener to the rating list
  ratingList.addEventListener('click', (event) => {
    // Check if the clicked target is an icon
    if (event.target.nodeName === 'I') {
      // Retrieve the value attribute of the clicked icon
      const ratingValue = event.target.getAttribute('value');
      
      // Set the value of the hidden input field to the selected rating value
      document.getElementById('ratingValue').value = ratingValue;
    }
  });

</script>

</body>
</html>