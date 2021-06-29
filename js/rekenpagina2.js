function genereerFib(){
    var num = document.getElementById("fib-max").value;
    var a = 0, b = 1, c = 1;
    document.getElementById("fib-antwoord").value = "";
    while(c <= num){
        document.getElementById("fib-antwoord").value+= c + "\n";
        c= a + b;
        a= b;
        b= c;
        
    }
    return false;
}