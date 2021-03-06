<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
?>
<!DOCTYPE html>
<html lang="bg" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Тъкане</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="style.css"  rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    
<body>
    <div class="container">
        <div class="row">
            <div class="navbar navbar-inverse navbar-fixed-top" >
                <div class="container">
                    <div class="navbar-header">
                       <h1 id="nh">Stan.net</h1> 
                        <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#responsive-menu" >
                            <span class="sr-only">Открита навигация</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                         </button>
                         <!-- <a class="navbar-brand" href="#">име на кампания</a>-->
                    </div>
                            <div class="collapse navbar-collapse"  id="responsive-menu"> 
                                <ul class="nav navbar-nav" >
                                    <li><a href="Zanas.php" class="button">За нас</a></li>
                                    <li><a href="#" class="button">Начало</a></li>
                                    <li ><a href="#" class="button" >Галерия</a></li>
                                    <li><a class="button"   href="#" >Видео</a></li>
                                    <li><a href="#" class="button">Забавление</a></li>
                                    <li><a href="#" class="button">Как да...</a></li>
                                <li class="dropdown" id="dropdown-reg"><a data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-3x"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="register.php">Регистрация</a></li>
                                        <li><a href="login.php">Вход</a></li>
                                    </ul>
                                </li>  
                            </ul>
                      </div>
                </div>
        </div>
    </div>
</div>
    
<div class="background-wrap">
    <video id="backgroundvideo" autoplay muted loop>
        <source src="funnybunny.mp4" type="video/mp4" >
        <source src="funnybunny.mp4" type="video/ogg">
    </video>
 </div>
    
<div class="content">
    <p>
     Тъкането е  изкуство, което още от най-ранни времена е занимавало хората.Когато видим съвършенството на орнаментите, хармонията,
	 техниката, изглежда че тъкането е едно от най-типичните артистични постижения на креативния талант на нашия народ.
    </p>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    
    </body>
</html>

