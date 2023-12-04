<?php
	$Name = $_POST['Name'];
	$CompanyName = $_POST['Company'];
	$Merchant = $_POST['Merchant'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$encrypted = md5($password);
	

	// Database connection
	$conn = new mysqli('localhost','root','','label');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, Company, Merchant, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $Name, $CompanyName, $Merchant, $email, $encrypted, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo " Registration successful...OUR EXECUTIVE WILL BE IN TOUCH WITH YOU SOON...";
		$stmt->close();
		$conn->close();
	}
?>
