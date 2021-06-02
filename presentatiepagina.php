<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Daan Berg">
    <meta name="keywords" content="">
    <title>Presentatiepagina | Mathmate</title>

    <link rel="stylesheet" type="text/css" href="CSS/presentatie.css">  
</head>

<body>
    <header>
        <nav>
             <section id="navbar">
                    <ul>
                        <li><a href="Homepage.php">Home</a></li>
                        <li><a href="">Onderwerpen</a></li>
                        <li><img src="img/thereal.png" height="100vh"></li>
                        <li><a href="">Game</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
            </section>
        </nav>
    </header>

    <div class="slideshow-container">

    <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/thereal1.png" style="width:100%">
    <div class="text"></div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/thereal.png" style="width:100%">
    <div class="text"></div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/thereal.png" style="width:100%">
    <div class="text"></div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
    </div>    

	<script src="css/slideshow.js">
    </script>

    <footer>
        
    </footer>
</body>
</html>