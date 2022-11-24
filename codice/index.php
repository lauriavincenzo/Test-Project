<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookBetter - il meglio in cucina e online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>


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






  #mySidenav a {
    margin-top: 5%;
  position: absolute;
  left: -88px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#home {
  top: 20px;
  background-color: #04AA6D;
}

#preferiti {
  top: 80px;
  background-color: #2196F3;
}

#account {
  top: 140px;
  background-color: #f44336;
}


#ingr {
   
      margin-top: 20px;
        width: 500px;
        margin-left:178px;
        height: 30px; 
    }
    #ig{

      position: absolute;
      margin-left:-255px;
      margin-top: 215px;
    }
    #logo{
      width: 85px;
      height:75px;
    }
    #cerca
    {
      margin-top: 20px;
      margin-left:10px;
      width: 55px;
       height: 30px;
    }
    #cb{
      width: 90px;
      height: 60px;
      margin-top:15px ;
       
    }
    #contact{
      position:absolute;
      margin-left: 18%;
      text-align: center;
    }
     #ricgg{
       
       margin-top: 15%;
     }
   
    footer {
      
      position:absolute; 
      margin-bottom : 0;
      margin-left: 0;
      
      text-align: center;
      width: 100%;
      height: 25px;
      padding: 3px;
      background-color: DarkSalmon;
      color: white;
    }
    #hh
    {
      position:absolute;
      margin-top: 7%;
      margin-left: 20.3%;
      font-size: 20px;
      font-family:cursive;
    }
    #ingr{
      max-width: 75%;
    }
    #risultato{
      position: absolute;
      margin-top: 6%;
      margin-left: 38%;
    }

  </style>
<body>


  <div id="mySidenav" class="sidenav">
    <a href="../index.php" id="home">Home</a>
    <a href="../php/preferiti.php" id="preferiti">Preferiti</a>
    <a href="../php/account.php" id="account">Account</a>
  </div>
  
  
      
 
    <!--<center><font size="20" id = "ig"><label  >INSERISCI INGREDIENTE </label></font><br></center> 
    <center><input type = "Text" id = "ingr" name = "ingr"/> </center> -->
    <ul>
      <li><a class="active" ></a> </li>
      <li><img src="../immagini/logo.png" id ="logo"></li>
      <li><img src="../immagini/scritta.png" id = "cb"> </li>
      <li><form action="../php/ricerca.php" method="post"><input type = "text" id = "ingr" name = "ingr" placeholder="inserisci ingredienti separati da una virgola"> </li>
      <li><input type = "submit" value = "Cerca" id = "cerca" /></form></li>
      <li><a href="mailto:cookbetter@gmail.com" id = "contact">Contact us</a></li>
    </ul>

    <div id="risultato">
    <?php
      session_start();
      echo($_SESSION["piatto"]);
      $_SESSION["piatto"]="";
    ?>
    </div>

    <h2 id="hh">  RICETTE DEL GIORNO</h2>


     
    <div class="container">
        
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" id = "ricgg">
          <div class="item active">
            <a href= "https://ricette.giallozafferano.it/Winter-choco-coffee.html"> <img src="../immagini/chioco.webp" alt="chioco" style="width:100%; height: 100%;"></a>
          </div>
    
          <div class="item">
            <a href= "https://ricette.giallozafferano.it/Zucca-gratinata-con-scaglie-di-ricotta-affumicata.html"> <img src="../immagini/zucca.jpg" alt="zucca" style="width:100%; height: 100%;"></a>
          </div>
        
          <div class="item">
            <a href= "https://ricette.giallozafferano.it/Fonduta-alla-Valdostana.html"> <img src="../immagini/valdostana.webp" alt="vald" style="width:100%; height: 100%;"></a>
          </div>
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
     
    </div>
      <footer>
         
        EDIT BY: Minciotti Lorenzo - Perrica Francesco - Lauria Vincenzo Andrea - Lainati Samuele Arrigo
        </p>
      </footer>

    
</body>
</html>