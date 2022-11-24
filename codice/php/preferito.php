<?php
session_start();
$servername = "localhost";
$dbUsername = "cookbetter";
$dbPassword = "gpF3XgTRN99m";
$dbname = "my_cookbetter";
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if($_SESSION["logged"] != true){
  echo("Per aggiungere questa ricetta ai preferiti <a href='../html/accesso.html'>Accedi</a>");
}else{
   $sql = "SELECT ID FROM utente WHERE username='".$_SESSION["username"]."'";
   $result = mysqli_query($conn, $sql);
   $id_utente=mysqli_fetch_assoc($result)["ID"];
   $sql = "SELECT ID FROM ricetta WHERE nome='".$_SESSION["ricetta"]."'";
   $result = mysqli_query($conn, $sql);
   $id_piatto=mysqli_fetch_assoc($result)["ID"];
   $sql = "INSERT INTO preferiti (IDUtente,IDRicetta)
   VALUES ('$id_utente', '$id_piatto')";
   mysqli_query($conn, $sql);
   header("Location: ../php/preferiti.php");
}
?>