<?php
include('../../private/session.php');

echo "test";
// Escape user inputs for security
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

// Escape user inputs for security
//$id = mysqli_real_escape_string($connection, $_POST['id']);
//$username = mysqli_real_escape_string($connection, $_POST['username']);
//$password = mysqli_real_escape_string($connection, $_POST['password']);

 
// Attempt insert query execution
$sql = "INSERT INTO users (id, username, password) VALUES ('$id', '$username', '$password')";

echo "</br>SQL: $sql </br>";

if(mysqli_query($connection, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// Close connection
mysqli_close($link);
?>