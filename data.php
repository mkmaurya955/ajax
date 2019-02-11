<?php 
$conn = new mysqli('localhost', 'root', '', 'login');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT username FROM users");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo $row['username'] . '<br>';
	}
}
?>
