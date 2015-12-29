<title>Login</title>
<embed src="sound/soundback.mp3" hidden="true" loop="99" id="backmusic">
<div class="container6">
        <h1>REGISTRO</h1>
        <div class="regis">
        <?php echo $this->Form->create('User',array("action"=>"register","class"=>"outreg")); ?>
            <table>
            <tr><td>Nickname : </td><td><?php echo $this->Form->input("username",array("label"=>false)); ?></td></tr>
            <tr><td>Nombre : </td><td><?php echo $this->Form->input("nom",array("label"=>false)); ?></td></tr>
            <tr><td>Apellido : </td><td><?php echo $this->Form->input("ap",array("label"=>false)); ?></td></tr>
            <tr><td>Contrase&ntilde;a : </td><td><?php echo $this->Form->input("password",array("label"=>false)); ?></td></tr>
            <tr><td>Repetir Contrase&ntilde;a : </td><td><?php echo $this->Form->input("password2",array("type"=>"password","label"=>false)); //ver validacion de password?></td></tr>
            <tr><td>Email : </td><td><?php echo $this->Form->input("email",array("label"=>false)); ?></td></tr>
            </table>
            <?php echo $this->Form->submit("Registrarse"); ?>
        <?php echo $this->Form->End(); ?>
        </div>
</div>
<div class="container5">
    <div class="pause"><img src="/img/sound.png"></div>
    <?php echo $this->Session->flash('auth'); ?>
    <div class="login">
    <h1>LOG IN</h1>
    <?php echo $this->Form->create('User',array("class"=>"log"));?>
    <table>
        
        <tr><td>Usuario: </td><td><?php echo $this->Form->input("username",array("label"=>false)); ?></td></tr>
        <tr><td>Password: </td><td><?php echo $this->Form->input("password",array("label"=>false)); ?></td></tr>        
    </table>
    <?php echo $this->Form->submit(__('Log in')); 
        echo $this->Html->link("¿Aun no estas registrado?","javascript:void(0)",array("class"=>"showreg")); ?>
    <?php echo $this->Form->End();?>
    </div>
    <div class="desc">
        <div>
            <div class="vuel">
                <div class="frontlog">
                    <img src="/img/backcard.jpg">
                </div>
                <div class="backlog">
                    <img src="/img/backcard.jpg">
                </div>
            </div>
            <p>Information</p>
            <div class="vuel">
                <div class="frontlog">
                    <img src="/img/backcard.jpg">
                </div>
                <div class="backlog">
                    <img src="/img/backcard.jpg">
                </div>
            </div>
        </div>
        <div class="descrip">
            El primer juego de Oxus que se ha creado con el fin de entretener a los empleados de esta empresa. Este juego consta de un memorice, el cual contiene diversas dificultades que afectan en el tiempo y la cantidad de cartas que se ven por pantalla, además, hay diversos tipos de habilidades que afectan en distintos aspectos de la partida, estas habilidades constan de 3 niveles de efectividad y se dividen en tres clases distintas, que podran ser desbloqueadas a partir de un sistema de puntajes y monedas, la obtencion de estos, estara determinada tanto por la destreza como por la determinacion o constancia del jugador, estas ayudaran al usuario a desbloquear los distintos logros que ofrece este juewfdsoauhfsdabf asnf cas ckjasbca schbas camn fcafcacego. Por último el juego ofrece un ranking para ver los mejores puntajes obtenidos entre todos los jugadores, mostrando todos los detalles de la partida jugada, para mostrar toda la claridad posible en este. <br>
            Por ultimo, disfruten y diviértanse con el juego!.
        </div>
    </div>
</div>
