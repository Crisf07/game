<title>Profile | Oxus</title>
<div class="container4">
    <h1>Mi Perfil</h1>
    <div class="infpro">
        <p><?php echo $user[0]["User"]["username"]; ?><br><?php echo $user[0]["User"]["nom"]." ".$user[0]["User"]["ap"]; ?></p>
        <p>
            Mayor Puntaje<br>
            <?php 
            if(empty($user[0]["Record"][0]["puntaje"]))
                echo "No se han jugado partidas";
            else
                echo number_format($user[0]["Record"][0]["puntaje"], 0, '', '.')." puntos - ";  

            if(empty($user[0]["Record"][0]["Dificult"]["nombre"]))
                echo "";
            else
                echo $user[0]["Record"][0]["Dificult"]["nombre"];
             ?>
        </p>
        <p>Dificultad Preferida<br>
            <?php 
                if(!empty($diff))
                    while ($n = current($diff)) {
                        if ($n == max($diff)) {
                            echo key($diff);
                            break;
                        }
                        next($diff);
                    }    
                else
                    echo "No se han jugado partidas";
            ?>
        </p>
        <p>Coins: <?php echo $user[0]["User"]["coin"]; ?><br>Points: <?php echo $user[0]["User"]["point"]; ?></p>
    </div>
    <p>Logros Obtenidos</p>
    <ul class="ilust">     
        <?php foreach($user[0]["UserTrophy"] as $trophy): 
            $c=1;
            foreach($trophies as $prueba):
                if($prueba["trophies"]["id"]==$trophy["trophy_id"]){
                    unset($trophies[$c]);

                }
                $c++;
            endforeach;
        ?>
            <li>
                <img src="/img/trophy/<?php echo $trophy["trophy_id"]; ?>.jpg">
                <span><?php echo $trophy["Trophy"]["nombre"]; ?></span>
            </li>

        <?php endforeach; ?>

        <?php foreach($trophies as $trop): ?>
            <li>
                <img src="/img/blackcirc.png">
                <span><?php echo $trop["trophies"]["nombre"]; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    

    <p>Habilidades</p>
    <ul class="ilusthab">
    <?php foreach($user[0]["UserAbility"] as $ability): ?>
        <li>
            <img src="/img/ability/profile/<?php echo $ability['ability_id']; ?>.jpg">
            <span><?php echo $ability["Ability"]["nombre"]; ?></span>
        </li>
    <?php endforeach;  ?>
    </ul>
</div>