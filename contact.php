<?php
$servername = "localhost";
$username = "id3420339_sumit";
$password = "sumit1197";
$dbname = "id3420339_food";

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact_form (name,email,message)
VALUES ('$name','$email','$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your valuable feedback";
	echo "<script>window.location = 'https://bonappetit.cf'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>