<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    margin: 0;
}

    ul {
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
    #logo{
      width: 85px;
      height:75px;
    }
    #cb{
      width: 90px;
      height: 60px;
      margin-top:15px ;
       
    }
    #contact{
      position:absolute;
      margin-left: 75%;
      text-align: center;
    }
    #tab{
        position: absolute;
        margin-top: 8%;
        margin-left: 5%;
    }
    #p{
        color:white;
       
    }
    center{
      position: absolute;
      margin-top: 8%;
      margin-left: 50%;
      transform: translate(-50%);
    }
  
    </style>
<body>
    <ul>
        <li><a class="active" ></a> </li>
        <li><img src="../immagini/logo.png" id ="logo"></li>
        <li><img src="../immagini/scritta.png" id = "cb"> </li>
        <li id = "p"><center>PREFERITI</center></li> 
        <li><a href="mailto:cookbetter@gmail.com" id = "contact">Contact us</a></li>
      </ul>

    <?php
      session_start();
      if($_SESSION["logged"] == true){
        $servername = "localhost";
      $dbUsername = "cookbetter";
      $dbPassword = "gpF3XgTRN99m";
      $dbname = "my_cookbetter";
      $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $sql = "SELECT ricetta.nome
              FROM ricetta INNER JOIN (utente INNER JOIN preferiti ON utente.ID = preferiti.IDUtente) ON ricetta.ID = preferiti.IDRicetta
              WHERE utente.username='".$_SESSION["username"]."'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
          session_regenerate_id();
          echo("<table id='tab'>");
          while($resultt=mysqli_fetch_assoc($result)){
            echo("<tr>
                    <td>".$resultt["nome"]."</td> 
                  </tr>"
                );
          }
          echo("</table>");
      }else{
          echo("Nessun preferito inserito");
      }
      }else{
        echo("<center>
        <a href='../html/accesso.html'>Accedi</a><br><br><br>
        Non hai un account? <a href='../html/registrati.html'>Registrati</a>
        </center>");
      }
      
    ?>
</body>
</html>