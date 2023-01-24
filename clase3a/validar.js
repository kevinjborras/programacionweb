function validar () {

    var base = document.getElementById("baseID").value;
    var altura = document.getElementById("alturaID").value;

    console.log(base);
    console.log(altura);

    document.URL = "operacion.php?base="+base+"&&altura="+altura;
    result = JSON.parse();
    document.getElementById("resp").innerHTML = area; 

}