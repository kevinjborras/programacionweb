function calcular(base, altura) {
    //alert(base);
    //alert(altura);

        if((base != "") && (altura != "")){
            var params = {
                "base" : base,
                "altura" : altura,
            };

            console.log(params)

            $.ajax ({
                type: "post",
                url: "php/operacion.php",
                data: params,
                success: function(respuesta){
                    console.log(respuesta)

                    document.getElementById("resp").innerHTML = respuesta;
                },
                fall: function(){
                    document.getElementById("resp").innerHTML = "Error no se puede ejecutar";
                },
                beforeSend: function(){
                    document.getElementById("resp").innerHTML = "Esperando para enviar datos"
                }
            });

        }else{
            document.getElementById("resp").innerHTML ="Base y/o altura vacio!";
        }
}