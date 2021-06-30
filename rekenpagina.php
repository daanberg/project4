<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Daan Berg">
    <meta name="keywords" content="">
    <title>Rekenpagina | Mathmate</title>

    <link rel="stylesheet" type="text/css" href="CSS/tafels.css">  
</head>
<body>
    <header>
        <nav>
             <section id="navbar">
                    <ul>
                        <li><a href="Homepagina.php">Home</a></li>
                        <li><a href="rekenpagina.php">Eenvoudige Rekenpagina</a></li>
                        <li><img src="img/thereal.png" height="100vh"></li>
                        <li><a href="rekenpagina2.php">Moeilijke Rekenpagina</a></li>
                        <li><a href="">Game</a></li>
                    </ul>
            </section>
        </nav>
    </header>
    <main>
    <section id="tafels">
            <h1>Tafels</h1>
            <form onsubmit="return genereerTafel();">
                <p>
                    <label>Vermenigvuldigtal:</label>
                    <input id="tafel-vermenigvuldigtal" value="5" type="number">
                </p>
                <p>
                    <label>Max vermenigvuldiger:</label>
                    <input id="tafel-max-vermenigvuldiger" value="10" type="number">
                </p>
                <p>
                    <button type="submit">Genereer tafel</button>
                </p>
                <p>
                    <textarea readonly id="tafel-antwoord"></textarea>
                </p>
            </form>
        </section>
        
        <section id="machtreeks">
            <h1>Machten</h1>
            <form onsubmit="return genereerMacht();">
                <p>
                    <label>grondgetal:</label>
                    <input id="noemer" type="number">
                </p>
                <p>
                    <button type="submit">Genereer tafel</button>
                </p>
                <p>
                    <textarea readonly id="kwadraat-antwoord"></textarea>
                </p>
            </form>
        </section>
        
        <!-- Breuken reeks -->

        <section id="Breuken">
            <h1>Breuken</h1>
            <form onsubmit="return genereerBreuk();">
                <p>
                    <label>Noemer:</label>
                    <input id="noemer" type="number">
                </p>
                <p>
                    <button type="submit">Genereer tafel</button>
                </p>
                <p>
                    <textarea readonly id="breuk-antwoord"></textarea>
                </p>
            </form>
        </section>




        <section id="kwadraten">

            <h1>Kwadraten</h1>
            <form onsubmit="return genereerKwadraat();">
                <p>
                    <label>grondgetal:</label>
                    <input id="macht-grondgetal" value="5" type="number">
                </p>
                <p>
                    <label>Max Kwadraat:</label>
                    <input id="max-Kwadraat" value="10" type="number">
                </p>
                <p>
                    <button type="submit">Genereer kwadraat</button>
                </p>
                <p>
                    <textarea readonly id="macht-antwoord"></textarea>
                </p>
            </form>
        </section>
    </main>

    <footer>
        <section id="footer">
            <p><b>Contactgegevens</b><br>Email: info@mathmate.nl<br>Tel: 070 342 23 65</p>
        </section>
        <section id="footer2">
            <a href="homepage.php"><img src="img/logoperiode4.png" height="250vh"></a>
        </section>
        <section id="socials">
            <a href="https://www.instagram.com/daily_math_/"><img src="img/instagram.png" height="75vh"></a>
            <a href="https://www.twitter.com/"><img src="img/twitter.png" height="75vh"></a>
            <a href="https://www.facebook.com/"><img src="img/facebook2.png" height="75vh"></a>
        </section>
    </footer>
    <script src="js/rekenpagina.js" type=text/javascript></script>
</body>
</html>