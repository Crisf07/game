<title>Powers | Oxus</title>
<script type="text/javascript">
    $(document).ready(function(){
        var santa = <?php echo json_encode($santa); ?>;
        var gnome = <?php echo json_encode($gnome); ?>;
        var rudolf = <?php echo json_encode($rudolf); ?>;
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
                <p>
                    <?php 
                    foreach($santa as $nombre):
                        if($nombre["Ability"]["id"]=="h{$j}l{$i}")
                            echo $nombre["Ability"]["nombre"]; 
                    endforeach;
                    ?>
                </p>
            </li>
            <?php 
                    endfor; 
                endfor; 
                ?>

            <li >
                <div class="hp"></div>
                <p>Habilidad</p>
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
            <h2>Inserte aqui nombre de la habilidad</h2>
            <h4>Nv1</h4>
            <div class="desc1">
                Inserte aqui la descripcion de la habilidad:<br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut tortor tincidunt massa fringilla ullamcorper a ut lorem. Sed dignissim convallis nunc, quis                 facilisis lectus condimentum ac. Maecenas pellentesque leo in tellus euismod aliquet. Fusce consectetur odio fringilla, scelerisque arcu vitae, blandit                     justo. Curabitur eu 
            </div>
            <p>Coins: 1500</p>
            <p>Points: 1</p>
            <h4>Nv2</h4>
            <div class="desc2">
                Inserte aqui la descripcion de la habilidad nivel 2:<br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut tortor tincidunt massa fringilla ullamcorper a ut lorem. Sed dignissim convallis nunc, quis                 facilisis lectus condimentum ac. Maecenas pellentesque leo in tellus euismod aliquet. Fusce consectetur odio fringilla, scelerisque arcu vitae, blandit                     justo. Curabitur eu 
            </div>
            <p>Coins: 6500</p>
            <p>Points: 3</p>
           <h4>Nv3</h4>
            <div class="desc3">
                Inserte aqui la descripcion de la habilidad nivel 2:<br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut tortor tincidunt massa fringilla ullamcorper a ut lorem. Sed dignissim convallis nunc, quis                 facilisis lectus condimentum ac. Maecenas pellentesque leo in tellus euismod aliquet. Fusce consectetur odio fringilla, scelerisque arcu vitae, blandit                     justo. Curabitur eu 
            </div>
            <p>Coins: 6500</p>
            <p>Points: 3</p>
        </div>
        
    </div>
</div>