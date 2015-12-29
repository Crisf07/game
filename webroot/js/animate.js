$(document).ready(function(){
    var cont = 0;
    $('.container5').snowfall({flakeCount : 100, maxSpeed : 6, shadow: 100, minSize: 2, maxSize: 7, round: 200});
    $('.errorcontainer').snowfall({flakeCount : 100, maxSpeed : 6, shadow: 100, minSize: 2, maxSize: 7, round: 200});
    
    //********FUNCION ANIMACION DE CARTAS******** 
    
    //********FIN ANIMACION DE CARTAS******** 
    
    //********FUNCION MUESTRA DE REGISTRO********
    $('.showreg').click(function(){
        $('.container6').fadeIn('slow');
        $('.container5').css("opacity", "0.1");
        $('.showreg').css("color", "purple");
    });
    //********FIN FUNCION MUESTRA DE REGISTRO********
    
    //********FUNCION OCULTAR REGISTRO********
    $(document).mouseup(function (e)
    {
    var container = $('.container6');

    if (!container.is(e.target) 
        && container.has(e.target).length === 0)
    {
        container.fadeOut('slow');
        $('.container5').css("opacity", "1");
        $('.container5').css("transition", "1.5s");
    }
    });
    //********FIN OCULTAR REGISTRO********
    
    //********MUESTRA DE DIFICULTAD********
    $('.gamestart').click(function(){
        $('.gamestart').hide();
        $('.selecthab1').fadeIn('slow');
            $(".nav li").click(function(){
                if (!window.confirm("Esta seguro de que desea salir?"))
                    return false;
            });
            $(".navb li").click(function(){
                if (!window.confirm("Esta seguro de que desea salir?"))
                    return false;
            }); 
    });
    //********FIN MUESTRA DE DIFICULTAD********
    
    //********INICIO DE GAME********
    
    $('#beasy').click(function(){
        $('.containerb').hide();
        $('.container').fadeIn('slow');
        $('#easy').css("display", "block");
    });
     $('#bmedium').click(function(){
        $('.containerb').hide();
        $('.container').fadeIn('slow');
        $('#medium').css("display", "block");
    });
     $('#bhard').click(function(){
        $('.containerb').hide();
        $('.container').fadeIn('slow');
        $('#hard').css("display", "block");
    });
    $('#bveryhard').click(function(){
        $('.containerb').hide();
        $('.container').fadeIn('slow');
        $('#veryhard').css("display", "block");
    });
    
    //********FIN INICIO DE GAME********
    
    //********FUNCIONES MUESTRA DE LOGROS********
    var con = 0;
    var con1 = 0;
    var con2 = 0;
    var con3 = 0;
    var con4 = 0;
    var con5 = 0;
    var con6 = 0;
    var con7 = 0;
    var con8 = 0;
    var con9 = 0;
    
    $('#show1').click(function(){
        if (con == 0)
        {
            $('#troph1').fadeIn('slow');
            $('#show1').html("Ocultar Logros");
            con = 1;
        }
        else
        {
            if (con == 1)
            {
                $('#troph1').fadeOut('slow');
                $('#show1').html("Mostrar Logros");
                con = 0;
            }
        }
    });
    
    $('#show2').click(function(){
        if (con1 == 0)
        {
            $('#troph2').fadeIn('slow');
            $('#show2').html("Ocultar Logros");
            con1 = 1;
        }
        else
        {
            if (con1 == 1)
            {
                $('#troph2').fadeOut('slow');
                $('#show2').html("Mostrar Logros");
                con1 = 0;
            }
        }
    });
    
    $('#show3').click(function(){
        if (con2 == 0)
        {
            $('#troph3').fadeIn('slow');
            $('#show3').html("Ocultar Logros");
            con2 = 1;
        }
        else
        {
            if (con2 == 1)
            {
                $('#troph3').fadeOut('slow');
                $('#show3').html("Mostrar Logros");
                con2 = 0;
            }
        }
    });
    
    $('#show4').click(function(){
        if (con3 == 0)
        {
            $('#troph4').fadeIn('slow');
            $('#show4').html("Ocultar Logros");
            con3 = 1;
        }
        else
        {
            if (con3 == 1)
            {
                $('#troph4').fadeOut('slow');
                $('#show4').html("Mostrar Logros");
                con3 = 0;
            }
        }
    });
    
    $('#show5').click(function(){
        if (con4 == 0)
        {
            $('#troph5').fadeIn('slow');
            $('#show5').html("Ocultar Logros");
            con4 = 1;
        }
        else
        {
            if (con4 == 1)
            {
                $('#troph5').fadeOut('slow');
                $('#show5').html("Mostrar Logros");
                con4 = 0;
            }
        }
    });
    
    $('#show6').click(function(){
        if (con5 == 0)
        {
            $('#troph6').fadeIn('slow');
            $('#show6').html("Ocultar Logros");
            con5 = 1;
        }
        else
        {
            if (con5 == 1)
            {
                $('#troph6').fadeOut('slow');
                $('#show6').html("Mostrar Logros");
                con5 = 0;
            }
        }
    });
    
    $('#show7').click(function(){
        if (con6 == 0)
        {
            $('#troph7').fadeIn('slow');
            $('#show7').html("Ocultar Logros");
            con6 = 1;
        }
        else
        {
            if (con6 == 1)
            {
                $('#troph7').fadeOut('slow');
                $('#show7').html("Mostrar Logros");
                con6 = 0;
            }
        }
    });
    //********FIN FUNCIONES MUESTRA DE LOGROS********
    
    //********SOUND********
    var mus = 0;
    $('.pause').click(function(){
        if (mus == 0)
        {
            $("#backmusic").remove();
            mus = 1;
        }
        else 
        {
            if (mus == 1)
            {
               $("body").append('<embed src="sound/soundback.mp3" hidden="true" loop="99" id="backmusic">');   
            }
            mus = 0;
        }
    });
    //********FIN SOUND********
    
    //********ACTIVE DE NAV********
    $('.santa').click(function(){
        $('img', this).css("display", "inline-block");
        $('.rudolf img').css("display", "none");
        $('.gnome img').css("display", "none"); 
    });
    $('.rudolf').click(function(){
        $('img', this).css("display", "inline-block");
        $('.santa img').css("display", "none");
        $('.gnome img').css("display", "none"); 
    });
    $('.gnome').click(function(){
        $('img', this).css("display", "inline-block");
        $('.rudolf img').css("display", "none");
        $('.santa img').css("display", "none"); 
    });
    //********FIN ACTIVE DE NAV*******
    //********ACTIVE DE NAV********
    $('.activesanta').click(function(){
        $('.selecthab1').css("display", "block");
        $('.selecthab2').css("display", "none");
        $('.selecthab3').css("display", "none");
    });
    $('.activerudolf').click(function(){
        $('.selecthab1').css("display", "none");
        $('.selecthab2').css("display", "block");
        $('.selecthab3').css("display", "none");
    });
    $('.activegnome').click(function(){
        $('.selecthab1').css("display", "none");
        $('.selecthab2').css("display", "none");
        $('.selecthab3').css("display", "block");
    });
    //********FIN ACTIVE DE NAV*******
    
});