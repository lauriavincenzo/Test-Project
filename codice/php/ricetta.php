<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cacio e Pepe</title>
</head>
<style>
    body{
     margin:0;
    }
    ul {
        margin-bottom: 0%;
  position: fixed;
  z-index: +100;
  list-style-type: none;
  width: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
 
  float: left;
  margin-bottom: 0%;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}




#cb{
      width: 90px;
      height: 60px;
      margin-top:15px ;
       
    }
  #logo{
      width: 85px;
      height:75px;
    }
  #contact{
      position:absolute;
      margin-left: 80%;
      text-align: center;
    }
#img{
    position:absolute;
    margin-top: 10%;
    margin-left: -15%;
    width: 450px;
    height: 300px;
}
#cp{
    position:absolute;
    font-size: 30px;
    margin-top:8%;
    margin-left: 42.5%;

}
#testo {
  position:absolute;
  margin-top: 30%;
}
#titolo{
  position:absolute;
  margin-left: 8%;
  margin-top: 7%;
}
#bottone{
  position:absolute;
  margin-left: 28%;
  margin-top: 8.5%;
}
#immagine{
  position:absolute;
  margin-left: 8%;
  margin-top: 11%;
}
#ingredienti{
  position:absolute;
  margin-left: 8%;
  margin-top: 35%;
}
#tempoprep{
  position:absolute;
  margin-left: 8%;
  margin-top: 55%;
}
#procedimento{
  position:absolute;
  margin-left: 8%;
  margin-top: 60%;
  margin-right: 8%;
}

</style>
<body>
    <ul>
        <li><a class="active" ></a> </li>
        <li><img src="../immagini/logo.png" id ="logo"></li>
        <li><img src="../immagini/scritta.png" id = "cb"> </li>
        <li><a href="mailto:cookbetter@gmail.com" id = "contact">Contact us</a></li>
      </ul>
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
$nome=$_GET["ricetta"];
$_SESSION["ricetta"]=$nome;
echo("<div id='titolo'><h2>".$nome."</h2></div>");
echo("<button id='bottone' onclick='window.location.href=\"../php/preferito.php\"'>????</button>");
$sql="SELECT ricetta.immagine
      FROM ricetta 
      WHERE ricetta.nome='".$nome."'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        $resultt=mysqli_fetch_assoc($result);
        echo("<div id='immagine'><img src=".$resultt["immagine"]." width='500' height='350'></div>");
    }
$sql="SELECT ingredienti.nome
FROM ingredienti INNER JOIN (ricetta INNER JOIN prepara ON ricetta.ID = prepara.IdRicetta) ON ingredienti.ID = prepara.IdIngrediente
WHERE ricetta.nome='".$nome."'";
$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      session_regenerate_id();
      echo("<div id='ingredienti'><h2>Ingredienti</h2>");
      echo("<table>");
      while($resultt=mysqli_fetch_assoc($result)){
        echo("<tr>
                <td>".$resultt["nome"]."</td> 
              </tr>"
            );
      }
      echo("</table></div>");
  }
$sql="SELECT ricetta.tempoprep
      FROM ricetta 
      WHERE ricetta.nome='".$nome."'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        $resultt=mysqli_fetch_assoc($result);
        echo("<div id='tempoprep'><h2>Tempo di preparazione</h2>".$resultt["tempoprep"]." minuti</div>");
    }
$sql="SELECT ricetta.procedimento
      FROM ricetta 
      WHERE ricetta.nome='".$nome."'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        $resultt=mysqli_fetch_assoc($result);
        echo("<div id='procedimento'><h2>Preparazione</h2>".$resultt["procedimento"]."</div>");
    }
  ?>
       <!-- <center id="cp"> CACIO E PEPE</center> 
        


        <center>  <img src="https://www.giallozafferano.it/images/219-21989/Spaghetti-Cacio-e-Pepe_450x300.jpg" id ="img"> </center>   
        <input type = "Submit" value = "????" id = "pref" />
     <p id="testo">
        Iniziate a preparare la cacio e pepe pestando i grani di pepe in un mortaio fino a ridurli a una polvere fine. <br>
        Grattugiate il formaggio in un???ampia ciotola, poi unite il pepe.<br>
        
        -Scaldate l???acqua per la pasta, quando arriva a ebollizione, aggiungete una presa di sale grosso e tuffate i tonnarelli.<br>
         Aggiungete gradatamente un po??? di acqua di cottura della pasta nella ciotola con il pecorino e mescolate energicamente con una frusta fino a ottenere una cremina. <br>
         Scolate i tonnarelli, trasferiteli nella ciotola con il formaggio e mantecate.<br>
         Distribuite la cacio e pepe nei piatti da portata, aggiungete una spolverata di pepe a piacere e servite.


     </p> -->
    
</body>
</html>