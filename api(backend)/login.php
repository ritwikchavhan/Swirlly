<?php
	include 'dbConnect.php';

	echo "login<br>";

	 $json = file_get_contents('php://input');
	 echo $obj = json_decode($json, true);
    
    $name = $obj['name'];
    $email = $obj['email'];
    $password = $obj['password'];

    $sql = "SELECT * FROM signup Where id=2";

    if($row= mysqli_query($con,$sql)){
    	echo"Get<br>";
        $x = mysqli_fetch_assoc($row);
        print_r(json_encode($x))."<br>" ;
        
            }
     
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
   

</body>
</html>