<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<style>

div{
    position:absolute;
    margin-top: 10%;
margin-left: 40%;
}
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
    #p{
        color:white;
       
    }

</style>
<body>
    <ul>
        <li><a class="active" ></a> </li>
        <li><img src="../immagini/logo.png" id ="logo"></li>
        <li><img src="../immagini/scritta.png" id = "cb"> </li>
        <li id = "p"><center>Account</center></li> 
        <li><a href="mailto:cookbetter@gmail.com" id = "contact">Contact us</a></li>
      </ul>
    <div>

<?php
      session_start();
    if($_SESSION["logged"]){
      echo("<center> <font size='50px' ><label>Bentornato </label>
      <label>".$_SESSION["username"]."</label><br>
      <button onclick='window.location.href=\"../php/Logout.php\"'>Logout</button>");
    }else{
      echo("<center>
      <a href='../html/accesso.html'>Accedi</a><br><br><br>
      Non hai un account? <a href='../html/registrati.html'>Registrati</a>
      </center>");
    }
?>    
</div>
   
</body>
</html>