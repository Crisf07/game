$(document).ready(function(){
	function isAlfaNumeric(value){
    	var regNumber = /[^A-Za-z0-9]/;
    	return regNumber.test(value)
	}
    $(".outreg").submit(function(){
    	var caca = $("#UserUsername",this).val();
    	if(caca.length>15){
    		alert("El maximo de caracteres para el nickname es de 15");
    		return false;
    	}
    	if(isAlfaNumeric(caca)){
    		alert("solo se pueden caracteres alfanumericos");
    		return false;
    	}
    	var caca = $("#UserNom",this).val();
    	if(isAlfaNumeric(caca)){
    		alert("solo se pueden caracteres alfanumericos");
    		return false;
    	}
    	var caca = $("#UserAp",this).val();
    	if(isAlfaNumeric(caca)){
    		alert("solo se pueden caracteres alfanumericos");
    		return false;
    	}
    	if($("#UserPassword",this).val()!=$("#UserPassword2",this).val()){
    		alert("Las contraseñas son distintas!");
    		return false;
    	}
    });
});