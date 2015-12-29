<title>Powers | Oxus</title>
<script type="text/javascript">
    $(document).ready(function(){
        var santa = <?php echo json_encode($santa); ?>;
        var gnome = <?php echo json_encode($gnome); ?>;
        var rudolf = <?php echo json_encode($rudolf); ?>;
        var user = <?php echo json_encode($current_user); ?>;
        var uab = <?php echo json_encode($uab); ?>;
        var padre=santa; 
        $(".diva").css('opacity', '0.3');
        $(".divb").css('opacity', '0.3');
        $(".divc").css('opacity', '0.3');
        $(".h3l3").css("background","url('/img/ability/santa/h3l3.jpg')");
        $(".h3l2").css("background","url('/img/ability/santa/h3l2.jpg')");
        $(".h3l1").css("background","url('/img/ability/santa/h3l1.jpg')");
        $(".h2l3").css("background","url('/img/ability/santa/h2l3.jpg')");
        $(".h2l2").css("background","url('/img/ability/santa/h2l2.jpg')");
        $(".h2l1").css("background","url('/img/ability/santa/h2l1.jpg')");
        $(".h1l3").css("background","url('/img/ability/santa/h1l3.jpg')");
        $(".h1l2").css("background","url('/img/ability/santa/h1l2.jpg')");
        $(".h1l1").css("background","url('/img/ability/santa/h1l1.jpg')");
        $("#h3l3").html(padre[0]["Ability"]["nombre"]);
        $("#h3l2").html(padre[1]["Ability"]["nombre"]);
        $("#h3l1").html(padre[2]["Ability"]["nombre"]);
        $("#h2l3").html(padre[3]["Ability"]["nombre"]);
        $("#h2l2").html(padre[4]["Ability"]["nombre"]);
        $("#h2l1").html(padre[5]["Ability"]["nombre"]);
        $("#h1l3").html(padre[6]["Ability"]["nombre"]);
        $("#h1l2").html(padre[7]["Ability"]["nombre"]);
        $("#h1l1").html(padre[8]["Ability"]["nombre"]);
        $(".santa").click(function(){
            padre=santa;
            $(".h3l3").css("background","url('/img/ability/santa/h3l3.jpg')");
            $(".h3l2").css("background","url('/img/ability/santa/h3l2.jpg')");
            $(".h3l1").css("background","url('/img/ability/santa/h3l1.jpg')");
            $(".h2l3").css("background","url('/img/ability/santa/h2l3.jpg')");
            $(".h2l2").css("background","url('/img/ability/santa/h2l2.jpg')");
            $(".h2l1").css("background","url('/img/ability/santa/h2l1.jpg')");
            $(".h1l3").css("background","url('/img/ability/santa/h1l3.jpg')");
            $(".h1l2").css("background","url('/img/ability/santa/h1l2.jpg')");
            $(".h1l1").css("background","url('/img/ability/santa/h1l1.jpg')");
            $("#h3l3").html(padre[0]["Ability"]["nombre"]);
            $("#h3l2").html(padre[1]["Ability"]["nombre"]);
            $("#h3l1").html(padre[2]["Ability"]["nombre"]);
            $("#h2l3").html(padre[3]["Ability"]["nombre"]);
            $("#h2l2").html(padre[4]["Ability"]["nombre"]);
            $("#h2l1").html(padre[5]["Ability"]["nombre"]);
            $("#h1l3").html(padre[6]["Ability"]["nombre"]);
            $("#h1l2").html(padre[7]["Ability"]["nombre"]);
            $("#h1l1").html(padre[8]["Ability"]["nombre"]);
        });
        $(".rudolf").click(function(){
            padre=rudolf;
            $(".h3l3").css("background","url('/img/ability/rudolf/h3l3.jpg')");
            $(".h3l2").css("background","url('/img/ability/rudolf/h3l2.jpg')");
            $(".h3l1").css("background","url('/img/ability/rudolf/h3l1.jpg')");
            $(".h2l3").css("background","url('/img/ability/rudolf/h2l3.jpg')");
            $(".h2l2").css("background","url('/img/ability/rudolf/h2l2.jpg')");
            $(".h2l1").css("background","url('/img/ability/rudolf/h2l1.jpg')");
            $(".h1l3").css("background","url('/img/ability/rudolf/h1l3.jpg')");
            $(".h1l2").css("background","url('/img/ability/rudolf/h1l2.jpg')");
            $(".h1l1").css("background","url('/img/ability/rudolf/h1l1.jpg')");
            $("#h3l3").html(padre[0]["Ability"]["nombre"]);
            $("#h3l2").html(padre[1]["Ability"]["nombre"]);
            $("#h3l1").html(padre[2]["Ability"]["nombre"]);
            $("#h2l3").html(padre[3]["Ability"]["nombre"]);
            $("#h2l2").html(padre[4]["Ability"]["nombre"]);
            $("#h2l1").html(padre[5]["Ability"]["nombre"]);
            $("#h1l3").html(padre[6]["Ability"]["nombre"]);
            $("#h1l2").html(padre[7]["Ability"]["nombre"]);
            $("#h1l1").html(padre[8]["Ability"]["nombre"]);
        });
        $(".gnome").click(function(){
            padre=gnome;
            $(".h3l3").css("background","url('/img/ability/gnome/h3l3.jpg')");
            $(".h3l2").css("background","url('/img/ability/gnome/h3l2.jpg')");
            $(".h3l1").css("background","url('/img/ability/gnome/h3l1.jpg')");
            $(".h2l3").css("background","url('/img/ability/gnome/h2l3.jpg')");
            $(".h2l2").css("background","url('/img/ability/gnome/h2l2.jpg')");
            $(".h2l1").css("background","url('/img/ability/gnome/h2l1.jpg')");
            $(".h1l3").css("background","url('/img/ability/gnome/h1l3.jpg')");
            $(".h1l2").css("background","url('/img/ability/gnome/h1l2.jpg')");
            $(".h1l1").css("background","url('/img/ability/gnome/h1l1.jpg')");
            $("#h3l3").html(padre[0]["Ability"]["nombre"]);
            $("#h3l2").html(padre[1]["Ability"]["nombre"]);
            $("#h3l1").html(padre[2]["Ability"]["nombre"]);
            $("#h2l3").html(padre[3]["Ability"]["nombre"]);
            $("#h2l2").html(padre[4]["Ability"]["nombre"]);
            $("#h2l1").html(padre[5]["Ability"]["nombre"]);
            $("#h1l3").html(padre[6]["Ability"]["nombre"]);
            $("#h1l2").html(padre[7]["Ability"]["nombre"]);
            $("#h1l1").html(padre[8]["Ability"]["nombre"]);
        });
        $(".h3l3").dblclick(function(){
            var valicn = 0;
            var vali=1;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[0]["Ability"]["coin"];
            var point = padre[0]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[1]["Ability"]["id"]){
                    vali=0;
                    break;
                }
            }
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[0]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }

            if(Number(padre[0]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");   
            else 
                if(Number(padre[0]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(vali==1)
                        alert("Debes comprar el nivel anterior de esta habilidad");
                    else
                        if(valicn==1)
                            alert("No puedes comprar una habilidad que ya posees");
                        else
                            $.ajax({
                                url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                                type: 'POST',
                                data: {ability_id,user_id,coin,point},
                                success:function(data){
                                    alert(data);
                                    location.reload();
                                }
                            });
        });
        $(".h3l2").dblclick(function(){
            var vali=1;
            var valicn = 0;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[1]["Ability"]["coin"];
            var point = padre[1]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[2]["Ability"]["id"]){
                    vali=0;
                    break;
                }
            }
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[1]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }
            if(Number(padre[1]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");
            else 
                if(Number(padre[1]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(vali==1)
                        alert("Debes comprar el nivel anterior de esta habilidad");
                    else
                        if(valicn==1)
                            alert("No puedes comprar una habilidad que ya posees");
                        else
                            $.ajax({
                                url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                                type: 'POST',
                                data: {ability_id,user_id,coin,point},
                                success:function(data){
                                    alert(data);
                                    location.reload();
                                }
                            });
        });
        $(".h3l1").dblclick(function(){
            var valicn=0;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[2]["Ability"]["coin"];
            var point = padre[2]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[2]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }

            if(Number(padre[2]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");
            else 
                if(Number(padre[2]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(valicn==1)
                        alert("No puedes comprar una habilidad que ya posees");
                    else
                        $.ajax({
                            url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                            type: 'POST',
                            data: {ability_id,user_id,coin,point},
                            success:function(data){
                                alert(data);
                                location.reload();
                            }
                        });
        });
        $(".h2l3").dblclick(function(){
            var vali=1;
            var valicn = 0;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[3]["Ability"]["coin"];
            var point = padre[3]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[4]["Ability"]["id"]){
                    vali=0;
                    break;
                }
            }
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[3]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }
            if(Number(padre[3]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");
            else 
                if(Number(padre[3]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(vali==1)
                        alert("Debes comprar el nivel anterior de esta habilidad");
                    else
                        if(valicn==1)
                            alert("No puedes comprar una habilidad que ya posees");
                        else
                            $.ajax({
                                url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                                type: 'POST',
                                data: {ability_id,user_id,coin,point},
                                success:function(data){
                                    alert(data);
                                   location.reload();
                                }
                           });
        });
        $(".h2l2").dblclick(function(){
            var vali=1;
            var valicn = 0;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[4]["Ability"]["coin"];
            var point = padre[4]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[5]["Ability"]["id"]){
                    vali=0;
                    break;
                }
            }
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[4]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }
            if(Number(padre[4]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");
            else 
                if(Number(padre[4]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(vali==1)
                        alert("Debes comprar el nivel anterior de esta habilidad");
                    else
                        if(valicn==1)
                            alert("No puedes comprar una habilidad que ya posees");
                        else
                            $.ajax({
                                url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                                type: 'POST',
                                data: {ability_id,user_id,coin,point},
                                success:function(data){
                                    alert(data);
                                   location.reload();
                                }
                           });
        });
        $(".h2l1").dblclick(function(){
            var valicn = 0;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[5]["Ability"]["coin"];
            var point = padre[5]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[5]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }
            if(Number(padre[5]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");
            else 
                if(Number(padre[5]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(valicn==1)
                        alert("No puedes comprar una habilidad que ya posees");
                    else
                        $.ajax({
                            url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                            type: 'POST',
                            data: {ability_id,user_id,coin,point},
                            success:function(data){
                                alert(data);
                                location.reload();
                            }
                        });
        });
        $(".h1l3").dblclick(function(){
            var vali=1;
            var valicn = 0;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[6]["Ability"]["coin"];
            var point = padre[6]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[7]["Ability"]["id"]){
                    vali=0;
                    break;
                }
            }
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[6]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }
            if(Number(padre[6]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");
            else 
                if(Number(padre[6]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(vali==1)
                        alert("Debes comprar el nivel anterior de esta habilidad");
                    else
                        if(valicn==1)
                            alert("No puesdes comprar una habilidad que ya posees");
                        else
                            $.ajax({
                                url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                                type: 'POST',
                                data: {ability_id,user_id,coin,point},
                                success:function(data){
                                    alert(data);
                                    location.reload();
                                }
                            });
        });
        $(".h1l2").dblclick(function(){
            var vali=1;
            var valicn = 0;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[7]["Ability"]["coin"];
            var point = padre[7]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[8]["Ability"]["id"]){
                    vali=0;
                    break;
                }
            }
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[7]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }
            if(Number(padre[7]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");
            else 
                if(Number(padre[7]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(vali==1)
                        alert("Debes comprar el nivel anterior de esta habilidad");
                    else
                        if(valicn==1)
                            alert("No puesdes comprar una habilidad que ya posees");
                        else
                            $.ajax({
                                url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                                type: 'POST',
                                data: {ability_id,user_id,coin,point},
                                success:function(data){
                                    alert(data);
                                    location.reload();
                                }
                            });
        });
        $(".h1l1").dblclick(function(){
            var valicn = 0;
            var ability_id = $("#comp").val();
            var user_id = $("#user").val();
            var coin = padre[8]["Ability"]["coin"];
            var point = padre[8]["Ability"]["point"];
            for(var i in uab){
                if(uab[i]["user_abilities"]["ability_id"]==padre[8]["Ability"]["id"]){
                    valicn=1;
                    break;
                }
            }
            if(Number(padre[8]["Ability"]["coin"])>Number(user["coin"]))
                alert("No tienes dinero suficiente");
            else 
                if(Number(padre[8]["Ability"]["point"])>Number(user["point"]))
                    alert("No tienes la cantidad de puntos necesarios");
                else
                    if(valicn==1)
                        alert("No puesdes comprar una habilidad que ya posees");
                    else
                        $.ajax({
                            url: "<?php echo Router::url(array('controller'=>'UserAbilities','action'=>'add'));?>",
                            type: 'POST',
                            data: {ability_id,user_id,coin,point},
                            success:function(data){
                                alert(data);
                                location.reload();
                            }
                        });
        });
        $(".h3l3").click(function(){
            $("#comp").val(padre[0]["Ability"]["id"]);
            $(".nom").html(padre[0]["Ability"]["nombre"]);
            $(".desc1").html(padre[2]["Ability"]["descript"]);
            $(".desc2").html(padre[1]["Ability"]["descript"]);
            $(".desc3").html(padre[0]["Ability"]["descript"]);
            $(".diva").css('opacity', '0.3');
            $(".divb").css('opacity', '0.3');
            $(".divc").css('opacity', '1');
            $(".coina").html("Coins: "+padre[2]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[1]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[0]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[2]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[1]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[0]["Ability"]["point"]);
        });
        $(".h3l2").click(function(){
            $("#comp").val(padre[1]["Ability"]["id"]);
            $(".nom").html(padre[1]["Ability"]["nombre"]);
            $(".desc1").html(padre[2]["Ability"]["descript"]);
            $(".desc2").html(padre[1]["Ability"]["descript"]);
            $(".desc3").html(padre[0]["Ability"]["descript"]);
            $(".diva").css('opacity', '0.3');
            $(".divb").css('opacity', '1');
            $(".divc").css('opacity', '0.3');
            $(".coina").html("Coins: "+padre[2]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[1]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[0]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[2]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[1]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[0]["Ability"]["point"]);
        });
        $(".h3l1").click(function(){
            $("#comp").val(padre[2]["Ability"]["id"]);
            $(".nom").html(padre[2]["Ability"]["nombre"]);
            $(".desc1").html(padre[2]["Ability"]["descript"]);
            $(".desc2").html(padre[1]["Ability"]["descript"]);
            $(".desc3").html(padre[0]["Ability"]["descript"]);
            $(".diva").css('opacity', '1');
            $(".divb").css('opacity', '0.3');
            $(".divc").css('opacity', '0.3');
            $(".coina").html("Coins: "+padre[2]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[1]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[0]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[2]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[1]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[0]["Ability"]["point"]);
        });
        $(".h2l3").click(function(){
            $("#comp").val(padre[3]["Ability"]["id"]);
            $(".nom").html(padre[3]["Ability"]["nombre"]);
            $(".desc1").html(padre[5]["Ability"]["descript"]);
            $(".desc2").html(padre[4]["Ability"]["descript"]);
            $(".desc3").html(padre[3]["Ability"]["descript"]);
            $(".diva").css('opacity', '0.3');
            $(".divb").css('opacity', '0.3');
            $(".divc").css('opacity', '1');
            $(".coina").html("Coins: "+padre[5]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[4]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[3]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[5]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[4]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[3]["Ability"]["point"]);
        });
        $(".h2l2").click(function(){
            $("#comp").val(padre[4]["Ability"]["id"]);
            $(".nom").html(padre[4]["Ability"]["nombre"]);
            $(".desc1").html(padre[5]["Ability"]["descript"]);
            $(".desc2").html(padre[4]["Ability"]["descript"]);
            $(".desc3").html(padre[3]["Ability"]["descript"]);
            $(".diva").css('opacity', '0.3');
            $(".divb").css('opacity', '1');
            $(".divc").css('opacity', '0.3');
            $(".coina").html("Coins: "+padre[5]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[4]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[3]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[5]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[4]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[3]["Ability"]["point"]);
        });
        $(".h2l1").click(function(){
            $("#comp").val(padre[5]["Ability"]["id"]);
            $(".nom").html(padre[5]["Ability"]["nombre"]);
            $(".desc1").html(padre[5]["Ability"]["descript"]);
            $(".desc2").html(padre[4]["Ability"]["descript"]);
            $(".desc3").html(padre[3]["Ability"]["descript"]);
            $(".diva").css('opacity', '1');
            $(".divb").css('opacity', '0.3');
            $(".divc").css('opacity', '0.3');
            $(".coina").html("Coins: "+padre[5]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[4]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[3]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[5]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[4]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[3]["Ability"]["point"]);
        });
        $(".h1l3").click(function(){
            $("#comp").val(padre[6]["Ability"]["id"]);
            $(".nom").html(padre[6]["Ability"]["nombre"]);
            $(".desc1").html(padre[8]["Ability"]["descript"]);
            $(".desc2").html(padre[7]["Ability"]["descript"]);
            $(".desc3").html(padre[6]["Ability"]["descript"]);
            $(".diva").css('opacity', '0.3');
            $(".divb").css('opacity', '0.3');
            $(".divc").css('opacity', '1');
            $(".coina").html("Coins: "+padre[8]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[7]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[6]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[8]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[7]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[6]["Ability"]["point"]);
        });
        $(".h1l2").click(function(){
            $("#comp").val(padre[7]["Ability"]["id"]);
            $(".nom").html(padre[7]["Ability"]["nombre"]);
            $(".desc1").html(padre[8]["Ability"]["descript"]);
            $(".desc2").html(padre[7]["Ability"]["descript"]);
            $(".desc3").html(padre[6]["Ability"]["descript"]);
            $(".diva").css('opacity', '0.3');
            $(".divb").css('opacity', '1');
            $(".divc").css('opacity', '0.3');
            $(".coina").html("Coins: "+padre[8]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[7]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[6]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[8]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[7]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[6]["Ability"]["point"]);
        });
        $(".h1l1").click(function(){
            $("#comp").val(padre[8]["Ability"]["id"]);
            $(".nom").html(padre[8]["Ability"]["nombre"]);
            $(".desc1").html(padre[8]["Ability"]["descript"]);
            $(".desc2").html(padre[7]["Ability"]["descript"]);
            $(".desc3").html(padre[6]["Ability"]["descript"]);
            $(".diva").css('opacity', '1');
            $(".divb").css('opacity', '0.3');
            $(".divc").css('opacity', '0.3');
            $(".coina").html("Coins: "+padre[8]["Ability"]["coin"]);
            $(".coinb").html("Coins: "+padre[7]["Ability"]["coin"]);
            $(".coinc").html("Coins: "+padre[6]["Ability"]["coin"]);
            $(".pointa").html("Points: "+padre[8]["Ability"]["point"]);
            $(".pointb").html("Points: "+padre[7]["Ability"]["point"]);
            $(".pointc").html("Points: "+padre[6]["Ability"]["point"]);
        });
    });
</script>
<div class="container3">
    <div class="prim">
        <h1>Arbol de Habilidades</h1>
        <ul class="tree">
            <?php 
                for($i=3;$i>=1;$i--): 
                    for($j=3;$j>=1;$j--):
            ?>
            <li>
                <div class="h<?php echo $j; ?>l<?php echo $i; ?>"></div>
                <p id="h<?php echo $j; ?>l<?php echo $i; ?>"></p>
            </li>
            <?php 
                    endfor; 
                endfor; 
                ?>

            <li >
                <div class="hp" title="Siempre hay que partir por algo (aunque no haga nada)"></div>
                <p >El inicio</p>
            </li>
        </ul>
    </div>
    <div class="seg">
        <ul class="clasnav">
            <li class="santa">
                <p class="env1">Santa Claus</p>
                <img src="/img/subnavh.png">
            </li>
            <li class="rudolf">
                <p class="env2">Rudolf</p>
                <img src="/img/subnavh.png">
            </li>
            <li class="gnome">
                <p class="env3">Gnome</p>
                <img src="/img/subnavh.png">
            </li>
        </ul>
        <div class="descbox">
            <h2 class="nom">Haz click en alguna habilidad para mostrar los niveles.</h2>
            <div class="diva">
            <h4>Nv1</h4>
           <div class="desc1"></div>
            <p class="coina">Coins: </p>
            <p class="pointa">Points: </p>
            </div>
            
            <div class="divb">
            <h4>Nv2</h4>
            <div class="desc2">
            </div>
            <p class="coinb">Coins: </p>
            <p class="pointb">Points: </p>
            </div>

            <div class="divc">
            <h4>Nv3</h4>
            <div class="desc3"></div>
            <p class="coinc">Coins: </p>
            <p class="pointc">Points: </p>
            </div>
            <h4>Haz doble click en la imagen para comprar!</h4>
            <input type="hidden" id="comp" value="asd">
            <input type="hidden" id="user" value="<?php echo $current_user['id']; ?>">
        </div>
    </div>
</div>