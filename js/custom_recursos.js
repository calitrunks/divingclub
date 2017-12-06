 $(document).ready(function(){ 



  jQuery.fn.buscar = function() {
    var tarjetas = $(".recursos");
    var texto    = $("#tfBuscar").val();
    texto        = texto.toLowerCase();
    tarjetas.show();
    for(var i=0; i< tarjetas.size(); i++){
        var contenido = tarjetas.eq(i).text();
        contenido     = contenido.toLowerCase();
        var index     = contenido.indexOf(texto);
        if(index == -1){
            tarjetas.eq(i).hide();
        }   
    }
 };

 });