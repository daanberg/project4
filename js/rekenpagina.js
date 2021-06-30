function genereerTafel() {
    var vermenigvuldigtal = document.getElementById("tafel-vermenigvuldigtal").value; // De invoer van de gebruiker
    var maxVermenigvuldiger = document.getElementById("tafel-max-vermenigvuldiger").value;
    var antwoordVeld = document.getElementById("tafel-antwoord");
    
    antwoordVeld.value = ""; // We beginnen elke reeks met een leeg antwoord veld

    for(var vermenigvuldiger = 1; vermenigvuldiger <= maxVermenigvuldiger; vermenigvuldiger++) {
        var product = vermenigvuldiger * vermenigvuldigtal;  // We rekenen het product uit van 1 vermenigvuldiging
        var vermenigvuldiging = vermenigvuldiger + " x " + vermenigvuldigtal + " = " + product; // Dit is de tekstuele berekening die we kunnen toevoegen aan het antwoordveld.
        antwoordVeld.value += vermenigvuldiging + "\n"; // We de berekening toe aan het antwoord veld afgesloten met een nieuwe regel \n
    }

    return false; // We moeten false returnen, om te voorkomen dat de browser de pagina herlaad.
}

// Machten (Kevin)
function genereerKwadraat() {
    var grondgetal = document.getElementById("macht-grondgetal").value; // De invoer van de gebruiker
    var maxKwadraat = document.getElementById("max-kwadraat").value;
    var antwoordMacht = document.getElementById("Macht-antwoord");
    
    antwoordMacht.value = ""; // We beginnen elke reeks met een leeg antwoord veld

    for(var exponent = 0; exponent <= 15; exponent++) {
        var product = exponent * exponent;  // We rekenen het product uit van 1 exponent
        var vermenigvuldiging = exponent + " ^ " + grondgetal + " = " + product; // Dit is de tekstuele berekening die we kunnen toevoegen aan het antwoordveld.
        antwoordMacht.value += vermenigvuldiging + "\n"; // We de berekening toe aan het antwoord veld afgesloten met een nieuwe regel \n
    }

    return false;
}  
// Breuken (Oskar)


    
//      btnBreuk.onclick = function genereerTafel() {
//     var vermenigvuldigtal = document.getElementById("breuktal").value; // De invoer van de gebruiker
//     var maxVermenigvuldiger = document.getElementById("breuk-max").value;
//     var antwoordVeld = document.getElementById("breuk-antwoord");
    
//     antwoordVeld.value = ""; // We beginnen elke reeks met een leeg antwoord veld

//     for(var vermenigvuldiger = 1; vermenigvuldiger <= maxVermenigvuldiger; vermenigvuldiger++) {
//         var product = vermenigvuldiger / vermenigvuldigtal;  // We rekenen het product uit van 1 vermenigvuldiging
//         var vermenigvuldiging = vermenigvuldiger + " / " + vermenigvuldigtal + " = " + product+"|"; // Dit is de tekstuele berekening die we kunnen toevoegen aan het antwoordveld.
//         antwoordVeld.innerHTML += vermenigvuldiging + "\n"; // We de berekening toe aan het antwoord veld afgesloten met een nieuwe regel \n
//     }

//     return false; // We moeten false returnen, om te voorkomen dat de browser de pagina herlaad.

// }


    // Breuken (Oskar)
function genereerBreuk() {
    var Noemer = document.getElementById("noemer").value; // De invoer van de gebruiker
    var antwoordBreuk = document.getElementById("breuk-antwoord");
    
    antwoordBreuk.value = " "; // We beginnen elke reeks met een leeg antwoord veld

    for(var i = 1; i <= Noemer; i++) {
        var product = 1 / i;  // We rekenen het product uit van 1 vermenigvuldiging
        var breuk = 1 + " / " + i + " = " + product+"|"; // Dit is de tekstuele berekening die we kunnen toevoegen aan het antwoordveld.
        antwoordBreuk.value += breuk + "\n"; // We de berekening toe aan het antwoord veld afgesloten met een nieuwe regel \n
    }

    return false; // We moeten false returnen, om te voorkomen dat de browser de pagina herlaad.
}

function genereerMacht(){
    var grondgetal = document.getElementById("").value; // De invoer van de gebruiker
    var antwoordKwadraat = document.getElementById("");
    
    antwoordKwadraat.value = " "; // We beginnen elke reeks met een leeg antwoord veld

    for(var i = 1; i <= Noemer; i++) {
        var product = 1 / i;  // We rekenen het product uit van 1 vermenigvuldiging
        var breuk = 1 + " X " + i + " = " + product+"|"; // Dit is de tekstuele berekening die we kunnen toevoegen aan het antwoordveld.
        antwoordBreuk.value += breuk + "\n"; // We de berekening toe aan het antwoord veld afgesloten met een nieuwe regel \n
    }

    return false; // We moeten false returnen, om te voorkomen dat de browser de pagina herlaad.
}