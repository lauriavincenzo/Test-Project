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

// Create connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//
$sql = "SELECT username FROM utente WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1){
    session_regenerate_id();

    //session variables
    $_SESSION["logged"] = true;
    $_SESSION["username"] = $username;
    header("Location: ../php/account.php");
}else{
    echo("Account non trovato");
}
mysqli_close($conn);
?>