<?php
    $host=mysqli_connect("localhost","root","12345","health");
    if(mysqli_connect_errno($host)){
    	echo "Could Not Connect To Database";
    	} else {
    		echo "Connected";
    		}
    		
    		$name = $_POST['name'];
    		$phone = $_POST['phone'];
    		$email = $_POST['email'];
    		$message = $_POST['message'];

    		
    		$sql = "INSERT INTO Feedback (Name, Phone, Email, Message) VALUES ('$name', '$phone', '$email', '$message')";
    		$result = mysqli_query($host, $sql);
    		
    		
    		
?>