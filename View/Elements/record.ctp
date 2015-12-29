<?php
    if($vacio!=1):
        $i=1;

        foreach($record as $records): 
?>
<li>
    <img src="/img/greencirc.png">
    <p class="linea"><?php echo $records["User"]["username"]; ?></p>
    <p class="linea2"><?php echo $records["Dificult"]["nombre"]; ?></p>
    <p class="pun"><?php echo number_format($records["Record"]["puntaje"], 0, '', '.')." puntos"; ?></p>
    <div class="showtr" id="show<?php echo $i; ?>">Mostrar Logros</div>
    <div class="trophys" id="troph<?php echo $i; ?>">
        <img src="/img/triangulo.png">
        <img src="/img/barra.png">
        <img src="/img/sobrepos.png" class="sobreps">
        <p class="tlt">Habilidades</p>
        <p class="tlt">Logros</p>
        <ul>
            <?php if(!empty($records["Record"]["ability1"])): 
                    foreach($ab as $abs):
                        if($records["Record"]["ability1"]==$abs["abilities"]["id"]):
            ?>
                <li class="list">
                    <img src="/img/ability/profile/<?php echo $records['Record']['ability1']; ?>.jpg">
                    <span><?php echo $abs["abilities"]["nombre"]; ?></span>
                </li>
            <?php           break;
                        endif;
                    endforeach;
                else: 
            ?>
                <li class="list">
                    <img src="/img/showhab.png">
                </li>
            <?php endif; ?>

            <?php if(!empty($records["Record"]["ability2"])): 
                    foreach($ab as $abs):
                        if($records["Record"]["ability2"]==$abs["abilities"]["id"]):
            ?>
                <li class="list">
                    <img src="/img/ability/profile/<?php echo $records['Record']['ability2']; ?>.jpg">
                    <span><?php echo $abs["abilities"]["nombre"]; ?></span>
                </li>
            <?php           break;
                        endif;
                    endforeach;
                else: 
            ?>
                <li class="list">
                    <img src="/img/showhab.png">
                </li>
            <?php endif; ?>

            <?php if(!empty($records["Record"]["ability3"])): 
                    foreach($ab as $abs):
                        if($records["Record"]["ability3"]==$abs["abilities"]["id"]):
            ?>
                <li class="list">
                    <img src="/img/ability/profile/<?php echo $records['Record']['ability3']; ?>.jpg">
                    <span><?php echo $abs["abilities"]["nombre"]; ?></span>
                </li>
            <?php           break;
                        endif;
                    endforeach;
                else: 
            ?>
                <li class="list">
                    <img src="/img/showhab.png">
                </li>
            <?php endif; ?>

        </ul>
        <ul>
        <?php foreach($records["UserTrophy"] as $tro): ?>
            <li class="list">
                <img src="/img/trophy/<?php echo $tro["Trophy"]["id"] ?>.jpg">
                <span><?php echo $tro["Trophy"]["nombre"] ?></span>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</li>
<?php 
        $i++;
        endforeach; 
    endif;
?>