<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$flip = $_POST['flip'];
$radio = $_POST['gender'];
$checkbox = $_POST['checkbox1'];
$comment = $_POST['comment'];
?>

<!doctype html>
<html>
<head>
	<title>WMA apps WorkShop 5 sidepanel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="assets/themes/awsblue.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <link rel="stylesheet" href="assets/css/jquery.mobile.structure-1.4.5.min.css"/>    
    <link rel="stylesheets" href="assets/css/jquery.mobile-1.4.5.min.css">
    
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>

<div data-role="page">
 	<div data-role="header" class="jqm-header">
		<h1 class="jqm-logo"><img src="images/logo.png" alt="jQuery Mobile Framework"></h1>
	</div>
         
 	<div data-role="content">
        <?php 
		echo "<h3>Thanks " . $firstName . " " .  $lastName. "</h3>";
		echo "<p alin='center'> Succesfully Submited Jquery Mobile Form Via PHP.</br></br>";		
		echo "<strong>Details below :</strong> </br>"; 
		echo "Your E-mail is : <strong>" . $email	. "</strong></br>"; 
		echo "Flip Switch : <strong>" . $flip	. "</strong></br>"; 
		echo "Gender : <strong>" . $radio	. "</strong></br>"; 
		echo "Agree On terms : <strong>" . $checkbox . "</strong></br>";
		echo "Message : <strong>" . $comment . "</strong></br></p>"; 
		?>
 	</div>
 
 	<div data-role="footer">
     <a href="index.html" data-transition="slidedown"> BacK to Main page </a>
  	</div>
 </div>
 
</body>
</html>