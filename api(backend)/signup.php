<?php
	include 'dbConnect.php';

	echo "Signup<br>";
	
	 $json = file_get_contents('php://input');
	 echo $obj = json_decode($json, true);
    
    $name = $obj['name'];
    $email = $obj['email'];
    $password = $obj['password'];

    $sql = "INSERT INTO `signup`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
    print_r($sql);
    if(mysqli_query($con,$sql)){
    	echo"Inserted";
    }
?>