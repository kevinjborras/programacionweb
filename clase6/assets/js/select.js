$.ajax({
    url: "../php.select.php",
    type: "POST",
    success: function(response){

    },
    fail: function(){
        $("#resp").html = "<tr><td colspan=6>Error al procesar la peticion</td></tr>";
    },
    error: function(jqXHR, textStatus, errorThrown){
        console.log(textStatus,errorThrown);
    }
})