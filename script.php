<?php


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "lucky";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
function CloseCon($conn){	
	$conn -> close();
}


$oid = $_POST['luckyid'];
$nums = $_POST['lucky'];
$mul = $_POST['multiplier'];
$date = $_POST['date'];



$sql = "INSERT INTO luckyNumber (id, numbers, multiplier, date) VALUES ('$oid', '$nums', '$mul', '$date')";

if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	} else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}

$conn->close();


?>