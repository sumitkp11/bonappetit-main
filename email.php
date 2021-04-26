<?php
$servername = "localhost";
$username = "id3420339_sumit";
$password = "sumit1197";
$dbname = "id3420339_food";

$email = $_POST['email'];
$url = 'https://whatsinyourdish.000webhostapp.com/';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO email_list (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script>window.location = 'https://whatsinyourdish.000webhostapp.com/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>