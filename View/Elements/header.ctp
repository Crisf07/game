<div class="header">
    <div class="oxus">
        <img src="/img/logo.png" class="logo">    
    </div>
    <img src="/img/dij.png" class="dibj">
    <?php if(isset($current_user))
            if($current_user['id']=='1'):
    ?>
    <ul class="nav">
            <li>
                <?php echo $this->Html->link('Usuario', array('controller'=>'Users', 'action'=>'lista'));?>
                <div></div>
            </li>
            <li>
                <?php echo $this->Html->link('Powers', array('controller'=>'abilities', 'action'=>'lista'));?>
                <div></div>
            </li>
            <li>
                <?php echo $this->Html->link('Trofeos', array('controller'=>'trophies', 'action'=>'lista'));?>
                <div></div>
            </li>
        </ul>
        <ul class="navb">
            <li><img src="/img/iconuser.png">
            <div class="exit"><?php echo $this->Html->link('salir', array('controller'=>'users', 'action'=>'logout'));?></div</li>
        </ul>
    <?php else: ?>
        <ul class="nav">
            <li>
                <?php echo $this->Html->link('Game', array('controller'=>'records', 'action'=>'game'));?>
                <div></div>
            </li>
            <li>
                <?php echo $this->Html->link('Ranking', array('controller'=>'records', 'action'=>'ranking'));?>
                <div></div>
            </li>
            <li>
                <?php echo $this->Html->link('Powers ', array('controller'=>'abilities', 'action'=>'powers'));?>
                <div></div>
            </li>
        </ul>
        <ul class="navb">
            <li>
                <?php echo $this->Html->link($current_user["username"], array('controller'=>'users', 'action'=>'profile')); ?>
                <p>Coins: <?php echo $current_user["coin"]; ?><br>Points: <?php echo $current_user["point"]; ?></p>
            </li>
            <li><img src="/img/iconuser.png">
            <div class="exit"><?php echo $this->Html->link('salir', array('controller'=>'users', 'action'=>'logout'));?></div</li>
        </ul>
    <?php endif; ?>
</div>