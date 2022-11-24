<?php
//session start
session_start();

//database information
$servername = "localhost";
$dbUsername = "cookbetter";
$dbPassword = "gpF3XgTRN99m";
$dbname = "my_cookbetter";

//user information
$username= $_POST["nomu"];
$password=$_POST["pssw"];
$email=$_POST["mailtext"];

// Create connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//create record
$sql = "INSERT INTO utente (username, password, email)
VALUES ('$username', '$password', '$email' )";

//ceck connection and insertion
if (mysqli_query($conn, $sql)) {
  session_regenerate_id();

  //session variables
  $_SESSION["logged"] = true;
  $_SESSION["username"] = $username;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: ../php/account.php");

mysqli_close($conn);
?>