<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"></link>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
</head>


<body>

<?php
    $host=mysqli_connect("localhost","AnAnt","AnAnt","AnAnt");
    if(mysqli_connect_errno($host)){
		echo "<div class='modal' id='myModal'>
									<div class='modal-header'>
										<h4 align='center'>Sorry!</h4>
									</div>
									
									<div class='modal-body'>
										
											<p align='center'>Right now, we are unable to process your request. Please try after some time.</p>
											
										
									</div>
									
									<div class='modal-footer'>
										<button class='btn btn-success' data-dismiss='modal' id='check' aria-hidden='true'>OK</button>
									</div>								
								</div>";
    	
    	} else {
    		$name = $_POST['name'];
    		$email = $_POST['email'];
    		$message = $_POST['message'];

    		
    		$sql = "INSERT INTO Feedback (Name, Email, Message) VALUES ('$name', '$email', '$message')";
    		$result = mysqli_query($host, $sql);
    		
    		

		echo '<div class="modal" id="myModal">
									<div class="modal-header">
										<h4 align="center">Thankyou!</h4>
									</div>
									
									<div class="modal-body">
										
											<p align="center">Thanks for submitting your valuable feedback!</p>
											
										
									</div>
									
									<div class="modal-footer">
										<button class="btn btn-success" data-dismiss="modal" id="check" aria-hidden="true">Close</button>
									</div>								
								</div>';

}    		
?>


								
								</body>
								
								<script type="text/javascript" >
$(document).ready(function(e)
{
	$('#check').click(function(e){
		window.location="index.php";		
		})
	});
</script>
								</html>
