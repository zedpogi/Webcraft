<?php
	$firstName = $_POST['Username'];
	$password = $_POST['psw'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Username, psw, psw-repeat) values(?, ?, ?)");
		$stmt->bind_param("sss", $Username, $psw,);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>