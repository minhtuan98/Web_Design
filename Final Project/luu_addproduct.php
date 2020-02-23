<?php
	require_once("conn.php");
	

	$name = $_POST["name"];
	$fromwhere = $_POST["fromwhere"];
	$towhere = $_POST["towhere"];
	$price = $_POST["price"];
	$description = $_POST["description"];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";

	//Get file image
	$target_dir = "upload/";
	$file_name = basename($_FILES["image"]["name"]);
	$target_file = $target_dir . $file_name;
	
	if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        die("Sorry, there was an error uploading your file.");
    }
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	if(empty($_POST["id"]))
	{
		//ADD
		$sql = "INSERT INTO chuyenbay (name,fromwhere,towhere,price,description,image)
			VALUES ('$name','$fromwhere','$towhere','$price','$description','$file_name')";
	}
	else
	{
		//UPDATE
		//$sql = "UPDATE chuyenbay SET name ='$name',fromwhere='$fromwhere',towhere='$towhere',price='$price',description='$description' where id =" . $_POST["id"];
		$sql = "UPDATE chuyenbay SET name ='$name',fromwhere='$fromwhere',towhere='$towhere',price='$price',description='$description' WHERE id=".$_POST["id"];	

	}
			
	//Check Connection	
	if ($conn->query($sql) === FALSE) {
		die("Error: " . $sql . $conn->error);
	} else {
		echo "Added successfully";
	}
?>