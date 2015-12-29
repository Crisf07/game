<h2>dfsknflkasnf</h2>
<div style="padding-bottom: 40%">
<?php

	echo $this->Form->create('Ability',array('type'=>'file')) ;
	echo $this->Form->input('nombre');
	echo $this->Form->input('descript');
	echo $this->Form->input('coin');
	echo $this->Form->input('point');
	echo $this->Form->input('tree_id',array('type'=>'hidden'));
	echo $this->Form->input('id');
	echo $this->Form->input('archivo',array('type'=>'file'));
	echo $this->Form->end('Guardar cambios');
?>