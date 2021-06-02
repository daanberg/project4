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
                        <li><a href="">Home</a></li>
                        <li><a href="">Rekenpagina</a></li>
                        <li><img src="img/thereal.png" height="100vh"></li>
                        <li><a href="">Game</a></li>
                        <li><a href="">Contact</a></li>
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
        <section id="kwadraten">
            <h1>Tafels</h1>
            <form onsubmit="return  genereerkwadraat();">
                <p>
                    <label>grondgetal:</label>
<<<<<<< Updated upstream
                    <input id="tafel-grondgetal" value="5" type="number">
                </p>
                <p>
                    <label>Tot getal:</label>
                    <input id="tafel-max-kwadraat" value="10" type="number">
=======
                    <input id="grondgetal" value="5" type="number">
                </p>
                <p>
                    <label>Tot getal:</label>
                    <input id="max-kwadraat" value="10" type="number">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream

        <section id="kwadraten">
=======
        
        <section id="">
>>>>>>> Stashed changes
            <h1>Tafels</h1>
            <form onsubmit="return genereerMacht();">
                <p>
                    <label>grondgetal:</label>
                    <input id="macht-grondgetal" value="5" type="number">
                </p>
                <p>
                    <label>Tot getal:</label>
                    <input id="max-macht" value="10" type="number">
                </p>
                <p>
                    <button type="submit">Genereer tafel</button>
                </p>
                <p>
                    <textarea readonly id="Macht-antwoord"></textarea>
                </p>
            </form>
        </section>
    </main>

    <footer>

    </footer>
    <script src="js/rekenpagina.js" type=text/javascript></script>
</body>
</html>