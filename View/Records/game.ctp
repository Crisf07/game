<title>Game | Oxus</title>
<script type="text/javascript">
    $(document).ready(function(){
        var f = 0;
        var g = 0;
        var caca = <?php echo json_encode($current_user); ?>;
        var psf = 0;
        var fin = 0;
        var pp = 200;
        var coinsf = 0;
        var pointf = 0;
        var prueba;
        $('.conthab').submit(function() {
            var asd = $(this).serializeArray();
            var Record = {user_id:caca["id"]};
            var c=0;
            for(var i in asd){
                if(asd[i]["name"]=="data[Record][ability1]"){
                    if(asd[i]["value"]!="")
                        Record["ability1"]=asd[i]["value"];
                }
                if(asd[i]["name"]=="data[Record][ability2]"){
                    if(asd[i]["value"]!="")
                        Record["ability2"]=asd[i]["value"];
                }
                if(asd[i]["name"]=="data[Record][ability3]"){
                    if(asd[i]["value"]!="")
                        Record["ability3"]=asd[i]["value"];
                }
            }
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: {Record},
                success: function(data) {
                    $('.selecthab1').css("display", "none");
                    $('.selecthab2').css("display", "none");
                    $('.selecthab3').css("display", "none");
                    $('.dific').fadeIn();
                }
            });        
            return false;   
        }); 
        $("#beasy").click(function(){
            var caca = <?php echo json_encode($current_user); ?>;
            var Record = {dificult_id:$(this).val(),user_id:caca["id"]}
            $.ajax({
                type: 'POST',
                url: "/records/dif",
                data: {Record},
                dataType: "JSON",
                success: function(data) {
                    prueba = data[0]["Record"];
                    fin = data[0]["Record"]["id"];
                    $(".pts").html(data[0]["Record"]["puntaje"]+" pts");
                    $("#difif").html(data[0]["Dificult"]["nombre"]);
                    if(data[0]["Record"]["ability1"]!=="")
                        $("#img1").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability1"]+'.jpg');
                    if(data[0]["Record"]["ability2"]!=="")
                        $("#img2").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability2"]+'.jpg');
                    if(data[0]["Record"]["ability3"]!=="")
                        $("#img3").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability3"]+'.jpg');

                    if(data[0]["Record"]["ability1"]=="h1l1"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+15);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"]=="h1l2"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+25);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"]=="h1l3"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+35);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"].substr(0,1)!="h1"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                    if(data[0]["Record"]["ability3"] == "h6l1")
                        pp = 250;
                    if(data[0]["Record"]["ability3"] == "h6l2")
                        pp = 275;
                    if(data[0]["Record"]["ability3"] == "h6l3")
                        pp = 300;
                }
            }); 
        });
        $("#bmedium").click(function(){
            var caca = <?php echo json_encode($current_user); ?>;
            var Record = {dificult_id:$(this).val(),user_id:caca["id"]}
            $.ajax({
                type: 'POST',
                url: "/records/dif",
                data: {Record},
                dataType: "JSON",
                success: function(data) {
                    prueba = data[0]["Record"];
                    fin = data[0]["Record"]["id"];
                    if(data[0]["Record"]["ability1"]!=="")
                        $("#img1").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability1"]+'.jpg');
                    if(data[0]["Record"]["ability2"]!=="")
                        $("#img2").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability2"]+'.jpg');
                    if(data[0]["Record"]["ability3"]!=="")
                        $("#img3").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability3"]+'.jpg');
                    $(".pts").html(data[0]["Record"]["puntaje"]+" pts");
                    $("#difif").html(data[0]["Dificult"]["nombre"]);
                    if(data[0]["Record"]["ability1"]=="h1l1"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+15);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"]=="h1l2"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+25);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"]=="h1l3"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+35);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"].substr(0,1)!="h1"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                    if(data[0]["Record"]["ability3"] == "h6l1")
                        pp = 250;
                    if(data[0]["Record"]["ability3"] == "h6l2")
                        pp = 275;
                    if(data[0]["Record"]["ability3"] == "h6l3")
                        pp = 300;
                }
            }); 
        });
        $("#bhard").click(function(){
             var caca = <?php echo json_encode($current_user); ?>;
            var Record = {dificult_id:$(this).val(),user_id:caca["id"]}
            $.ajax({
                type: 'POST',
                url: "/records/dif",
                data: {Record},
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    prueba = data[0]["Record"];
                    fin = data[0]["Record"]["id"];
                    if(data[0]["Record"]["ability1"]!=="")
                        $("#img1").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability1"]+'.jpg');
                    if(data[0]["Record"]["ability2"]!=="")
                        $("#img2").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability2"]+'.jpg');
                    if(data[0]["Record"]["ability3"]!=="")
                        $("#img3").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability3"]+'.jpg');
                    $(".pts").html(data[0]["Record"]["puntaje"]+" pts");
                    $("#difif").html(data[0]["Dificult"]["nombre"]);
                    if(data[0]["Record"]["ability1"]=="h1l1"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+15);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"]=="h1l2"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+25);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"]=="h1l3"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+35);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"].substr(0,1)!="h1"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                    if(data[0]["Record"]["ability3"] == "h6l1")
                        pp = 250;
                    if(data[0]["Record"]["ability3"] == "h6l2")
                        pp = 275;
                    if(data[0]["Record"]["ability3"] == "h6l3")
                        pp = 300;
                }
            }); 
        });
        $("#bveryhard").click(function(){
            var caca = <?php echo json_encode($current_user); ?>;
            var Record = {dificult_id:$(this).val(),user_id:caca["id"]}
            $.ajax({
                type: 'POST',
                url: "/records/dif",
                data: {Record},
                dataType: "JSON",
                success: function(data) {
                    prueba = data[0]["Record"];
                    fin = data[0]["Record"]["id"];
                    if(data[0]["Record"]["ability1"]!=="")
                        $("#img1").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability1"]+'.jpg');
                    if(data[0]["Record"]["ability2"]!=="")
                        $("#img2").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability2"]+'.jpg');
                    if(data[0]["Record"]["ability3"]!=="")
                        $("#img3").attr("src",'/img/ability/profile/'+data[0]["Record"]["ability3"]+'.jpg');
                    $(".pts").html(data[0]["Record"]["puntaje"]+" pts");
                    $("#difif").html(data[0]["Dificult"]["nombre"]);
                    if(data[0]["Record"]["ability1"]=="h1l1"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+15);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"]=="h1l2"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+25);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"]=="h1l3"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60+35);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                if(data[0]["Record"]["ability1"].substr(0,1)!="h1"){
                        $("#clock").attr("data-timer",data[0]["Dificult"]["time"].substr(3,2)*60);
                        $('#clock').TimeCircles({
                            "count_past_zero": false,
                            "animation": "smooth",
                            "circle_bg_color": "#60686F",
                            "time": {
                                "Days": {
                                    "text": "Days",
                                    "color": "#FFCC66",
                                    "show": false
                                },
                                "Hours": {
                                    "text": "Hours",
                                    "color": "#a3ff99",
                                    "show": false
                                },
                                "Minutes": {
                                    "text": "Minutes",
                                    "color": "#12c412",
                                    "show": true
                                },
                                "Seconds": {
                                    "text": "Seconds",
                                    "color": "#acff99",
                                    "show": true
                                }
                            }
                        });
                    }
                    if(data[0]["Record"]["ability3"] == "h6l1")
                        pp = 250;
                    if(data[0]["Record"]["ability3"] == "h6l2")
                        pp = 275;
                    if(data[0]["Record"]["ability3"] == "h6l3")
                        pp = 300;
                }
            }); 
        });

        /***************Inicio Dificultad Easy****************/
        var easy = []; 
        var cp = 0;
        for(var i=0;i<12;i++){
            if(i>5){
                easy[i]="tar"+(i-6);
            }
            else
                easy[i]="tar"+i;
        }

        var a = new Array(3); 
        for (var i = 0; i < 3; i++) {
            a[i] = new Array(4); 
            for (var j = 0; j < 4; j++) {
                var c = 0;
                do{
                    var x = Math.floor(Math.random()*12);
                    if(easy[x]!="vacio"){
                        a[i][j] = easy[x];
                        easy[x] = "vacio";
                        c++;
                    }
                }while(c==0);
            }
        }
        var prob = 0;
        var i1;
        var j1;
        $('#easy li').click(function(e){
            if($(this).hasClass("lala")){}
            else{
                if(f<2){
                    $(this).addClass('lala');
                    f = f+1;    
                }
                if(g<2){
                    g++;
                    if (prob == 0){
                            var comp = $('.front', this).attr("alt");   
                            i1 = comp.substr(0,1);
                            j1 = comp.substr(1);
                            prob = 1;
                            $('.front', this).css("background", "url('/img/easy/"+a[i1][j1]+".jpg')");
                            $(this).attr("id", "li1");
                    }
                    else{
                        if (prob == 1){
                                var comp = $('.front', this).attr("alt");   
                                var i2 = comp.substr(0,1);
                                var j2 = comp.substr(1);
                                $('.front', this).css("background", "url('/img/easy/"+a[i2][j2]+".jpg')");
                                $(this).attr("id", "li2");
                                if(a[i1][j1]==a[i2][j2]){
                                    console.log("ES UN PAR!!!!");
                                    $('#li1').css('cursor', 'auto');
                                    $('#li2').css('cursor', 'auto');
                                    $("#li1").attr("id", "");
                                    $("#li2").attr("id", "");
                                    f = 0;
                                    g = 0;
                                    psf = psf + pp;
                                    $(".pts").html(psf+" pts");
                                    cp++;
                                    if(cp==6){
                                        $("#clock").TimeCircles().stop();
                                        var bonust = $("#clock").TimeCircles().getTime(); 
                                        if(prueba["ability2"]=="h2l1")
                                            bonust=bonust*10;
                                        if(prueba["ability2"]=="h2l2")
                                            bonust=bonust*15;
                                        if(prueba["ability2"]=="h2l3")
                                            bonust=bonust*20;
                                        if(prueba["ability2"].substr(0,1)!="h2")
                                            bonust=bonust*5;
                                        if(prueba["ability3"]=="h3l1")
                                            bonust = bonust+bonust*0.1;
                                        if(prueba["ability3"]=="h3l2")
                                            bonust = bonust+bonust*0.2;
                                        if(prueba["ability3"]=="h3l3")
                                            bonust = bonust+bonust*0.3;
                                        psf=psf+bonust;
                                        if(prueba["ability2"]=="h5l1")
                                            psf=psf+psf*0.1;
                                        if(prueba["ability2"]=="h5l2")
                                            psf=psf+psf*0.25;
                                        if(prueba["ability2"]=="h5l3")
                                            psf=psf+psf*0.5;
                                        coinsf = coinsf + psf/10;

                                        if(prueba["ability1"]=="h7l1")
                                            coinsf = coinsf+coinsf*0.1;
                                        if(prueba["ability1"]=="h7l2")
                                            coinsf = coinsf+coinsf*0.3;
                                        if(prueba["ability1"]=="h7l3")
                                            coinsf = coinsf+coinsf*0.5;

                                        if(prueba["ability2"]=="h8l1")
                                            psf = psf+1000;
                                        if(prueba["ability2"]=="h8l2")
                                            psf = psf+2500;
                                        if(prueba["ability2"]=="h8l3")
                                            psf = psf+4000;

                                        if(prueba["ability3"]=="h9l1")
                                            pointf = psf/3500;
                                        if(prueba["ability3"]=="h9l2")
                                            pointf = psf/3300;
                                        if(prueba["ability3"]=="h9l3")
                                            pointf = psf/3000;
                                        if(prueba["ability3"].substr(0,1)!="h9")
                                            pointf = psf/3700;

                                        if(prueba["ability1"]=="h4l1"){
                                            if(0.2<Math.random())
                                                pointf = pointf+1;
                                        }
                                        if(prueba["ability1"]=="h4l2"){
                                            if(0.4<Math.random())
                                                pointf = pointf+1;
                                        }
                                        if(prueba["ability1"]=="h4l3"){
                                            if(0.6<Math.random())
                                                pointf = pointf+1;
                                        }

                                        var Record = {id:fin,puntaje:psf};
                                        $.ajax({
                                            type: 'POST',
                                            url: "/records/fin",
                                            data: {Record},
                                            success: function(data) {
                                                alert(data);
                                            } 
                                        });

                                        pointf = pointf+Number(caca["point"]);
                                        if(pointf<=0)
                                            pointf = 0;
                                        else
                                            pointf = Math.floor(pointf);

                                        coinsf = Math.floor(coinsf+Number(caca["coin"]));
                                        var User = {id:caca["id"],point:pointf,coin:coinsf};
                                        $.ajax({
                                            type: 'POST',
                                            url: "/users/finp",
                                            data: User,
                                            success: function(data) {
                                                alert(data);
                                                location.reload();
                                            } 
                                        });
                                    }
                                }
                                else{
                                    setTimeout("$('#li1').removeClass('lala')", 1000);
                                    setTimeout("$('#li2').removeClass('lala')", 1000);
                                    setTimeout('$("#li1 .front").css("background", "blue")', 1501);
                                    setTimeout('$("#li2 .front").css("background", "blue")', 1501);
                                    setTimeout('$("#li1").attr("id", "")', 1502);
                                    setTimeout('$("#li2").attr("id", "")', 1502);
                                    setTimeout(function(){f=0;}, 1503);
                                    setTimeout(function(){g=0;}, 1504);

                                }
                                prob = 0;
                        }
                    }
                }
            }
        });
        /***************Fin Dificultad Easy****************/

        /***************Inicio Dificultad medium****************/
        var medium = []; 
        var cp = 0;
        for(var i=0;i<20;i++){
            if(i>9){
                medium[i]="tar"+(i-10);
            }
            else
                medium[i]="tar"+i;
        }

        var b = new Array(4); 
        for (var i = 0; i < 4; i++) {
            b[i] = new Array(5); 
            for (var j = 0; j < 5; j++) {
                var c = 0;
                do{
                    var x = Math.floor(Math.random()*20);
                    if(medium[x]!="vacio"){
                        b[i][j] = medium[x];
                        medium[x] = "vacio";
                        c++;
                    }
                }while(c==0);
            }
        }
        var prob = 0;
        var i1;
        var j1;
        $('#medium li').click(function(){
            if($(this).hasClass("lala")){}
            else{
                if(f<2){
                    $(this).addClass('lala');
                    f = f+1;    
                }
                if(g<2){
                    g++;
                    if (prob == 0){
                            var comp = $('.front', this).attr("alt");   
                            i1 = comp.substr(0,1);
                            j1 = comp.substr(1);
                            prob = 1;
                            $('.front', this).css("background", "url('/img/medium/"+b[i1][j1]+".jpg')");
                            $(this).attr("id", "li1");
                    }
                    else{
                        if (prob == 1){
                                var comp = $('.front', this).attr("alt");   
                                var i2 = comp.substr(0,1);
                                var j2 = comp.substr(1);
                                $('.front', this).css("background", "url('/img/medium/"+b[i2][j2]+".jpg')");
                                $(this).attr("id", "li2");
                                if(b[i1][j1]==b[i2][j2]){
                                    console.log("ES UN PAR!!!!");
                                    $('#li1').css('cursor', 'auto');
                                    $('#li2').css('cursor', 'auto');
                                    $("#li1").attr("id", "");
                                    $("#li2").attr("id", "");
                                    f=0;
                                    g=0;
                                    psf = psf + pp;
                                    $(".pts").html(psf+" pts");
                                    cp++;
                                    if(cp==10){
                                        $("#clock").TimeCircles().stop();
                                        var bonust = $("#clock").TimeCircles().getTime(); 
                                        if(prueba["ability2"]=="h2l1")
                                            bonust=bonust*10;
                                        if(prueba["ability2"]=="h2l2")
                                            bonust=bonust*15;
                                        if(prueba["ability2"]=="h2l3")
                                            bonust=bonust*20;
                                        if(prueba["ability2"].substr(0,1)!="h2")
                                            bonust=bonust*5;
                                        if(prueba["ability3"]=="h3l1")
                                            bonust = bonust+bonust*0.1;
                                        if(prueba["ability3"]=="h3l2")
                                            bonust = bonust+bonust*0.2;
                                        if(prueba["ability3"]=="h3l3")
                                            bonust = bonust+bonust*0.3;
                                        psf=psf+bonust;
                                        if(prueba["ability2"]=="h5l1")
                                            psf=psf+psf*0.1;
                                        if(prueba["ability2"]=="h5l2")
                                            psf=psf+psf*0.25;
                                        if(prueba["ability2"]=="h5l3")
                                            psf=psf+psf*0.5;
                                        coinsf = coinsf + psf/10;

                                        if(prueba["ability1"]=="h7l1")
                                            coinsf = coinsf+coinsf*0.1;
                                        if(prueba["ability1"]=="h7l2")
                                            coinsf = coinsf+coinsf*0.3;
                                        if(prueba["ability1"]=="h7l3")
                                            coinsf = coinsf+coinsf*0.5;

                                        if(prueba["ability2"]=="h8l1")
                                            psf = psf+1000;
                                        if(prueba["ability2"]=="h8l2")
                                            psf = psf+2500;
                                        if(prueba["ability2"]=="h8l3")
                                            psf = psf+4000;

                                        if(prueba["ability3"]=="h9l1")
                                            pointf = psf/3500;
                                        if(prueba["ability3"]=="h9l2")
                                            pointf = psf/3300;
                                        if(prueba["ability3"]=="h9l3")
                                            pointf = psf/3000;
                                        if(prueba["ability3"].substr(0,1)!="h9")
                                            pointf = psf/3700;

                                        if(prueba["ability1"]=="h4l1"){
                                            if(0.2<Math.random())
                                                pointf = pointf+1;
                                        }
                                        if(prueba["ability1"]=="h4l2"){
                                            if(0.4<Math.random())
                                                pointf = pointf+1;
                                        }
                                        if(prueba["ability1"]=="h4l3"){
                                            if(0.6<Math.random())
                                                pointf = pointf+1;
                                        }

                                        var Record = {id:fin,puntaje:psf};
                                        $.ajax({
                                            type: 'POST',
                                            url: "/records/fin",
                                            data: {Record},
                                            success: function(data) {
                                                alert(data);
                                            } 
                                        });

                                        pointf = pointf+Number(caca["point"]);
                                        if(pointf<=0)
                                            pointf = 0;
                                        else
                                            pointf = Math.floor(pointf);

                                        coinsf = Math.floor(coinsf+Number(caca["coin"]));
                                        var User = {id:caca["id"],point:pointf,coin:coinsf};
                                        $.ajax({
                                            type: 'POST',
                                            url: "/users/finp",
                                            data: User,
                                            success: function(data) {
                                                alert(data);
                                                location.reload();
                                            } 
                                        });
                                    }
                                }
                                else{
                                    setTimeout("$('#li1').removeClass('lala')", 1000);
                                    setTimeout("$('#li2').removeClass('lala')", 1000);
                                    setTimeout('$("#li1 .front").css("background", "blue")', 1501);
                                    setTimeout('$("#li2 .front").css("background", "blue")', 1501);
                                    setTimeout('$("#li1").attr("id", "")', 1502);
                                    setTimeout('$("#li2").attr("id", "")', 1502);
                                    setTimeout(function(){f=0;}, 1503);
                                    setTimeout(function(){g=0;}, 1504);
                                }
                                prob = 0;
                        }
                    }
                }
            }
        });
        /***************Fin Dificultad medium****************/

        /***************Inicio Dificultad hard****************/
        var hard = []; 
        var cp = 0;
        for(var i=0;i<30;i++){
            if(i>14){
                hard[i]="tar"+(i-15);
            }
            else
                hard[i]="tar"+i;
        }

        var h = new Array(5); 
        for (var i = 0; i < 5; i++) {
            h[i] = new Array(6); 
            for (var j = 0; j < 6; j++) {
                var c = 0;
                do{
                    var x = Math.floor(Math.random()*30);
                    if(hard[x]!="vacio"){
                        h[i][j] = hard[x];
                        hard[x] = "vacio";
                        c++;
                    }
                }while(c==0);
            }
        }
        var prob = 0;
        var i1;
        var j1;
        $('#hard li').click(function(){
            if($(this).hasClass("lala")){}
            else{
                if(f<2){
                    $(this).addClass('lala');
                    f = f+1;    
                }
                if(g<2){
                    g++;
                    if (prob == 0){
                            var comp = $('.front', this).attr("alt");   
                            i1 = comp.substr(0,1);
                            j1 = comp.substr(1);
                            prob = 1;
                            $('.front', this).css("background", "url('/img/hard/"+h[i1][j1]+".jpg')");
                            $(this).attr("id", "li1");
                    }
                    else{
                        if (prob == 1){
                                var comp = $('.front', this).attr("alt");   
                                var i2 = comp.substr(0,1);
                                var j2 = comp.substr(1);
                                $('.front', this).css("background", "url('/img/hard/"+h[i2][j2]+".jpg')");
                                $(this).attr("id", "li2");
                                if(h[i1][j1]==h[i2][j2]){
                                    console.log("ES UN PAR!!!!");
                                    $('#li1').css('cursor', 'auto');
                                    $('#li2').css('cursor', 'auto');
                                    $("#li1").attr("id", "");
                                    $("#li2").attr("id", "");
                                    f=0;
                                    g=0;
                                    psf = psf + pp;
                                    $(".pts").html(psf+" pts");
                                    cp++;
                                    if(cp==15){
                                        $("#clock").TimeCircles().stop();
                                        var bonust = $("#clock").TimeCircles().getTime(); 
                                        if(prueba["ability2"]=="h2l1")
                                            bonust=bonust*10;
                                        if(prueba["ability2"]=="h2l2")
                                            bonust=bonust*15;
                                        if(prueba["ability2"]=="h2l3")
                                            bonust=bonust*20;
                                        if(prueba["ability2"].substr(0,1)!="h2")
                                            bonust=bonust*5;
                                        if(prueba["ability3"]=="h3l1")
                                            bonust = bonust+bonust*0.1;
                                        if(prueba["ability3"]=="h3l2")
                                            bonust = bonust+bonust*0.2;
                                        if(prueba["ability3"]=="h3l3")
                                            bonust = bonust+bonust*0.3;
                                        psf=psf+bonust;
                                        if(prueba["ability2"]=="h5l1")
                                            psf=psf+psf*0.1;
                                        if(prueba["ability2"]=="h5l2")
                                            psf=psf+psf*0.25;
                                        if(prueba["ability2"]=="h5l3")
                                            psf=psf+psf*0.5;
                                        coinsf = coinsf + psf/10;

                                        if(prueba["ability1"]=="h7l1")
                                            coinsf = coinsf+coinsf*0.1;
                                        if(prueba["ability1"]=="h7l2")
                                            coinsf = coinsf+coinsf*0.3;
                                        if(prueba["ability1"]=="h7l3")
                                            coinsf = coinsf+coinsf*0.5;

                                        if(prueba["ability2"]=="h8l1")
                                            psf = psf+1000;
                                        if(prueba["ability2"]=="h8l2")
                                            psf = psf+2500;
                                        if(prueba["ability2"]=="h8l3")
                                            psf = psf+4000;

                                        if(prueba["ability3"]=="h9l1")
                                            pointf = psf/3500;
                                        if(prueba["ability3"]=="h9l1")
                                            pointf = psf/3300;
                                        if(prueba["ability3"]=="h9l1")
                                            pointf = psf/3000;
                                        if(prueba["ability3"].substr(0,1)!="h9")
                                            pointf = psf/3700;

                                        if(prueba["ability1"]=="h4l1"){
                                            if(0.2<Math.random())
                                                pointf = pointf+1;
                                        }
                                        if(prueba["ability1"]=="h4l2"){
                                            if(0.4<Math.random())
                                                pointf = pointf+1;
                                        }
                                        if(prueba["ability1"]=="h4l3"){
                                            if(0.6<Math.random())
                                                pointf = pointf+1;
                                        }

                                        var Record = {id:fin,puntaje:psf};
                                        $.ajax({
                                            type: 'POST',
                                            url: "/records/fin",
                                            data: {Record},
                                            success: function(data) {
                                                alert(data);
                                            } 
                                        });

                                        pointf = pointf+Number(caca["point"]);
                                        if(pointf<=0)
                                            pointf = 0;
                                        else
                                            pointf = Math.floor(pointf);

                                        coinsf = Math.floor(coinsf+Number(caca["coin"]));
                                        var User = {id:caca["id"],point:pointf,coin:coinsf};
                                        $.ajax({
                                            type: 'POST',
                                            url: "/users/finp",
                                            data: User,
                                            success: function(data) {
                                                alert(data);
                                                location.reload();
                                            } 
                                        });
                                    }
                                }
                                else{
                                    setTimeout("$('#li1').removeClass('lala')", 1000);
                                    setTimeout("$('#li2').removeClass('lala')", 1000);
                                    setTimeout('$("#li1 .front").css("background", "blue")', 1501);
                                    setTimeout('$("#li2 .front").css("background", "blue")', 1501);
                                    setTimeout('$("#li1").attr("id", "")', 1502);
                                    setTimeout('$("#li2").attr("id", "")', 1502);
                                    setTimeout(function(){f=0;}, 1503);
                                    setTimeout(function(){g=0;}, 1504);
                                }
                                prob = 0;
                        }
                    }
                }
            }
        });
        /***************Fin Dificultad hard****************/

        /***************Inicio Dificultad veryhard****************/
        var veryhard = []; 
        var cp = 0;
        for(var i=0;i<42;i++){
            if(i>20){
                veryhard[i]="tar"+(i-21);
            }
            else
                veryhard[i]="tar"+i;
        }

        var vh = new Array(6); 
        for (var i = 0; i < 6; i++) {
            vh[i] = new Array(7); 
            for (var j = 0; j < 7; j++) {
                var c = 0;
                do{
                    var x = Math.floor(Math.random()*42);
                    if(veryhard[x]!="vacio"){
                        vh[i][j] = veryhard[x];
                        veryhard[x] = "vacio";
                        c++;
                    }
                }while(c==0);
            }
        }
        var prob = 0;
        var i1;
        var j1;
        $('#veryhard li').click(function(){
            if($(this).hasClass("lala")){}
            else{
                if(f<2){
                    $(this).addClass('lala');
                    f = f+1;    
                }
                if(g<2){
                    g++;
                    if (prob == 0){
                            var comp = $('.front', this).attr("alt");   
                            i1 = comp.substr(0,1);
                            j1 = comp.substr(1);
                            prob = 1;
                            $('.front', this).css("background", "url('/img/veryhard/"+vh[i1][j1]+".jpg')");
                            $(this).attr("id", "li1");
                    }
                    else{
                        if (prob == 1){
                                var comp = $('.front', this).attr("alt");   
                                var i2 = comp.substr(0,1);
                                var j2 = comp.substr(1);
                                $('.front', this).css("background", "url('/img/veryhard/"+vh[i2][j2]+".jpg')");
                                $(this).attr("id", "li2");
                                if(vh[i1][j1]==vh[i2][j2]){
                                    console.log("ES UN PAR!!!!");
                                    $('#li1').css('cursor', 'auto');
                                    $('#li2').css('cursor', 'auto');
                                    $("#li1").attr("id", "");
                                    $("#li2").attr("id", "");
                                    f=0;
                                    g=0;
                                    psf = psf + pp;
                                    $(".pts").html(psf+" pts");
                                    cp++;
                                    if(cp==21){
                                        $("#clock").TimeCircles().stop();
                                        var bonust = $("#clock").TimeCircles().getTime(); 
                                        if(prueba["ability2"]=="h2l1")
                                            bonust=bonust*10;
                                        if(prueba["ability2"]=="h2l2")
                                            bonust=bonust*15;
                                        if(prueba["ability2"]=="h2l3")
                                            bonust=bonust*20;
                                        if(prueba["ability2"].substr(0,1)!="h2")
                                            bonust=bonust*5;
                                        if(prueba["ability3"]=="h3l1")
                                            bonust = bonust+bonust*0.1;
                                        if(prueba["ability3"]=="h3l2")
                                            bonust = bonust+bonust*0.2;
                                        if(prueba["ability3"]=="h3l3")
                                            bonust = bonust+bonust*0.3;
                                        psf=psf+bonust;
                                        if(prueba["ability2"]=="h5l1")
                                            psf=psf+psf*0.1;
                                        if(prueba["ability2"]=="h5l2")
                                            psf=psf+psf*0.25;
                                        if(prueba["ability2"]=="h5l3")
                                            psf=psf+psf*0.5;
                                        coinsf = coinsf + psf/10;

                                        if(prueba["ability1"]=="h7l1")
                                            coinsf = coinsf+coinsf*0.1;
                                        if(prueba["ability1"]=="h7l2")
                                            coinsf = coinsf+coinsf*0.3;
                                        if(prueba["ability1"]=="h7l3")
                                            coinsf = coinsf+coinsf*0.5;

                                        if(prueba["ability2"]=="h8l1")
                                            psf = psf+1000;
                                        if(prueba["ability2"]=="h8l2")
                                            psf = psf+2500;
                                        if(prueba["ability2"]=="h8l3")
                                            psf = psf+4000;

                                        if(prueba["ability3"]=="h9l1")
                                            pointf = psf/3500;
                                        if(prueba["ability3"]=="h9l1")
                                            pointf = psf/3300;
                                        if(prueba["ability3"]=="h9l1")
                                            pointf = psf/3000;
                                        if(prueba["ability3"].substr(0,1)!="h9")
                                            pointf = psf/3700;

                                        if(prueba["ability1"]=="h4l1"){
                                            if(0.2<Math.random())
                                                pointf = pointf+1;
                                        }
                                        if(prueba["ability1"]=="h4l2"){
                                            if(0.4<Math.random())
                                                pointf = pointf+1;
                                        }
                                        if(prueba["ability1"]=="h4l3"){
                                            if(0.6<Math.random())
                                                pointf = pointf+1;
                                        }

                                        var Record = {id:fin,puntaje:psf};
                                        $.ajax({
                                            type: 'POST',
                                            url: "/records/fin",
                                            data: {Record},
                                            success: function(data) {
                                                alert(data);
                                            } 
                                        });

                                        pointf = pointf+Number(caca["point"]);
                                        if(pointf<=0)
                                            pointf = 0;
                                        else
                                            pointf = Math.floor(pointf);

                                        coinsf = Math.floor(coinsf+Number(caca["coin"]));
                                        var User = {id:caca["id"],point:pointf,coin:coinsf};
                                        $.ajax({
                                            type: 'POST',
                                            url: "/users/finp",
                                            data: User,
                                            success: function(data) {
                                                alert(data);
                                                location.reload();
                                            } 
                                        });
                                    }
                                }
                                else{
                                    setTimeout("$('#li1').removeClass('lala')", 1000);
                                    setTimeout("$('#li2').removeClass('lala')", 1000);
                                    setTimeout('$("#li1 .front").css("background", "blue")', 1501);
                                    setTimeout('$("#li2 .front").css("background", "blue")', 1501);
                                    setTimeout('$("#li1").attr("id", "")', 1502);
                                    setTimeout('$("#li2").attr("id", "")', 1502);
                                    setTimeout(function(){f=0;}, 1503);
                                    setTimeout(function(){g=0;}, 1504);
                                }
                                prob = 0;
                        }
                    }
                }
            }
        });
        /***************Fin Dificultad veryhard****************/
    });
</script>
<div class="containerb">
    <button class="gamestart">START</button>
    <div class="selecthab1">
        <div class="selectnav">
            <ul>
                <li class="activesanta">Santa</li>
                <li class="activerudolf">Rudolf</li>
                <li class="activegnome">Gnome</li>
            </ul>
        </div>
        <?php echo $this->Form->create("Record",array("action"=>"register","class"=>"conthab")); ?>
            <div class="radio">
            <h2>Habilidad 1</h2>
                <?php
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h1l1" || $abs["Ability"]["id"]=="h1l2" || $abs["Ability"]["id"]=="h1l3")
                        echo $this->Form->radio("ability1",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false,));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 2</h2>
                <?php 
                    foreach($ab as $abs):
                    if($abs["Ability"]["id"]=="h2l1" || $abs["Ability"]["id"]=="h2l2" || $abs["Ability"]["id"]=="h2l3")
                        echo $this->Form->radio("ability2",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false,));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 3</h2>
                <?php 
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h3l1" || $abs["Ability"]["id"]=="h3l2" || $abs["Ability"]["id"]=="h3l3")
                        echo $this->Form->radio("ability3",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false,));
                    endforeach; ?>
            </div>
                <?php echo $this->Form->submit("A dificultades",array("class"=>"dificpass"));?>
                <?php echo $this->Form->end(); ?>
            <img src="/img/flecha2.jpg">
    </div>
    
    <div class="selecthab2">
        <div class="selectnav">
            <ul>
                <li class="activesanta">Santa</li>
                <li class="activerudolf">Rudolf</li>
                <li class="activegnome">Gnome</li>
            </ul>
        </div>
        <?php echo $this->Form->create("Record",array("action"=>"register","class"=>"conthab")); ?>
            <div class="radio">
            <h2>Habilidad 1</h2>
                <?php
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h4l1" || $abs["Ability"]["id"]=="h4l2" || $abs["Ability"]["id"]=="h4l3")
                        echo $this->Form->radio("ability1",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 2</h2>
                <?php 
                    foreach($ab as $abs):
                    if($abs["Ability"]["id"]=="h5l1" || $abs["Ability"]["id"]=="h5l2" || $abs["Ability"]["id"]=="h5l3")
                        echo $this->Form->radio("ability2",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 3</h2>
                <?php 
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h6l1" || $abs["Ability"]["id"]=="h6l2" || $abs["Ability"]["id"]=="h6l3")
                        echo $this->Form->radio("ability3",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false,));
                    endforeach; ?>
            </div>
                <?php echo $this->Form->submit("A dificultades",array("class"=>"dificpass"));?>
                <?php echo $this->Form->end(); ?>
                <img src="/img/flecha2.jpg">
    </div>

    <div class="selecthab3">
        <div class="selectnav">
            <ul>
                <li class="activesanta">Santa</li>
                <li class="activerudolf">Rudolf</li>
                <li class="activegnome">Gnome</li>
            </ul>
        </div>
        <?php echo $this->Form->create("Record",array("action"=>"register","class"=>"conthab")); ?>
            <div class="radio">
            <h2>Habilidad 1</h2>
                <?php
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h7l1" || $abs["Ability"]["id"]=="h7l2" || $abs["Ability"]["id"]=="h7l3")
                        echo $this->Form->radio("ability1",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 2</h2>
                <?php 
                    foreach($ab as $abs):
                    if($abs["Ability"]["id"]=="h8l1" || $abs["Ability"]["id"]=="h8l2" || $abs["Ability"]["id"]=="h8l3")
                        echo $this->Form->radio("ability2",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 3</h2>
                <?php 
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h9l1" || $abs["Ability"]["id"]=="h9l2" || $abs["Ability"]["id"]=="h9l3")
                        echo $this->Form->radio("ability3",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach; ?>
            </div>
                <?php echo $this->Form->submit("A dificultades",array("class"=>"dificpass"));?>
                <?php echo $this->Form->end(); ?>
                <img src="/img/flecha2.jpg">
    </div>

    <div class="dific">
        <button class="dificulty" id="beasy" value="1">Easy</button>
        <button class="dificulty" id="bmedium" value="2">Medium</button>
        <button class="dificulty" id="bhard" value="3">Hard</button>
        <button class="dificulty" id="bveryhard" value="4">Very Hard</button>
    </div>
</div>
<div class="container">
        <ul class="bar">
            <li><h1 id="difif">Overkill</h1>
                <embed src="/sound/juego.mp3" hidden="true" loop="99" id="backmusic">
            </li>
            <li>
                <div class="ptj">
                    <img src="/img/part3.png" class="part3">
                    <ul class="regist">
                        <li>
                            <img id="img1" src="/img/circ.png">
                            <img id="img2" src="/img/circ.png">
                            <img id="img3" src="/img/circ.png">
                        </li>
                    </ul>
                    <div class="pts">
                        0
                    </div>
                    <img src="/img/part4.png" class="part4">
                </div>
            </li>
            <li><div id="clock"></div><br></li>
        </ul>
        <ul class="game" id="easy">
        <?php for($i=0;$i<3;$i++): 
                for($j=0;$j<4;$j++):
        ?>
            <li>
                <div class="front" alt="<?php echo $i.''.$j?>">
                </div>
                <div class="back">
                </div>
            </li>
        <?php   endfor; 
            endfor; ?>
        </ul>
        <ul class="game" id="medium">
        <?php for($i=0;$i<4;$i++): 
                for($j=0;$j<5;$j++):
        ?>
            <li>
                <div class="front" alt="<?php echo $i.''.$j?>">
                </div>
                <div class="back">
                </div>
            </li>
        <?php   endfor; 
            endfor; ?>
        </ul>
        <ul class="game" id="hard"> 
        <?php for($i=0;$i<5;$i++): 
                for($j=0;$j<6;$j++):
        ?>
            <li>
                <div class="front" alt="<?php echo $i.''.$j?>">
                </div>
                <div class="back">
                </div>
            </li>
        <?php   endfor; 
            endfor; ?>
        </ul>
        <ul class="game" id="veryhard">
        <?php for($i=0;$i<6;$i++): 
                for($j=0;$j<7;$j++):
        ?>
            <li>
                <div class="front" alt="<?php echo $i.''.$j?>">
                </div>
                <div class="back">
                </div>
            </li>
        <?php   endfor; 
            endfor; ?>
        </ul>
</div> 