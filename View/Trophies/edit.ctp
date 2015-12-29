<h2>Editar Trofeod</h2>
<div style="padding-bottom: 40%">
<?php 
	echo $this->Form->create('Trophy',array('type'=>'file')) ;
	echo $this->Form->input('nombre');
	echo $this->Form->input('descript');
	echo $this->Form->input('archivo',array('type'=>'file'));
	echo $this->Form->end('Guardar cambios');
?>