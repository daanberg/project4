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

function genereerkwadraat() {

    var grondgetal = document.getElementById("tafel-grondgetal").value; // De invoer van de gebruiker
    var maxKwadraat = document.getElementById("tafel-max-kwadraat").value;

    var grondgetal = document.getElementById("grondgetal").value; // De invoer van de gebruiker
    var maxKwadraat = document.getElementById("max-kwadraat").value;

    var antwoordKwadraat = document.getElementById("kwadraat-antwoord");
    
    antwoordKwadraat.value = ""; // We beginnen elke reeks met een leeg antwoord veld

    for(var vermenigvuldiger = 1; vermenigvuldiger <= maxKwadraat; vermenigvuldiger++) {
        var product = vermenigvuldiger * grondgetal;  // We rekenen het product uit van 1 vermenigvuldiging
        var vermenigvuldiging = vermenigvuldiger + " x " + grondgetal + " = " + product; // Dit is de tekstuele berekening die we kunnen toevoegen aan het antwoordveld.
        antwoordKwadraat.value += vermenigvuldiging + "\n"; // We de berekening toe aan het antwoord veld afgesloten met een nieuwe regel \n
    }
    return false

}

    function genereerMacht() {
    var grondgetal = document.getElementById("macht-grondgetal").value; // De invoer van de gebruiker
    var maxMacht = document.getElementById("max-macht").value;
    var antwoordMacht = document.getElementById("Macht-antwoord");
    
    antwoordMacht.value = ""; // We beginnen elke reeks met een leeg antwoord veld

    for(var exponent = 0; exponent <= 15; exponent++) {
        var product = exponent * exponent;  // We rekenen het product uit van 1 exponent
        var vermenigvuldiging = exponent + " x " + grondgetal + " = " + product; // Dit is de tekstuele berekening die we kunnen toevoegen aan het antwoordveld.
        antwoordMacht.value += vermenigvuldiging + "\n"; // We de berekening toe aan het antwoord veld afgesloten met een nieuwe regel \n
    }

    return false;
}  

    function genereerPriem() {
    num = document.getElementById("number").value;
    if(num == '' || num < 1) {
    document.getElementById("result").style.color = "red";
    document.getElementById("result").innerHTML = "Please Enter a Valid Number";
    
    return false;
    }
    
}
