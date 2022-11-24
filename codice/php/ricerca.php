<?php
session_start();
$servername = "localhost";
$dbUsername = "cookbetter";
$dbPassword = "gpF3XgTRN99m";
$dbname = "my_cookbetter";
$text=$_POST["ingr"];
$ingredienti=explode(",",$text);
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
foreach ($ingredienti as $ingrediente){
  trim($ingrediente);
}
$sql = "SELECT ricetta.nome
        FROM ricetta INNER JOIN (ingredienti INNER JOIN prepara ON ingredienti.ID = prepara.IdIngrediente) ON ricetta.ID = prepara.IdRicetta
        WHERE ingredienti.nome in ('".implode("','",$ingredienti)."')
        GROUP BY ricetta.nome
        HAVING count(*)=".count($ingredienti);
// Eyrtxnuo was here
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    session_regenerate_id();
    $_SESSION["piatto"] ="";
    while($resultt=mysqli_fetch_assoc($result)){
      $_SESSION["piatto"] = $_SESSION["piatto"]."<a href='../php/ricetta.php?ricetta=".$resultt["nome"]."'>".$resultt["nome"]."</a><br>";
    }
    header("Location: ../index.php");
}else{
    echo("Nessuna ricetta trovata");
}
mysqli_close($conn);
