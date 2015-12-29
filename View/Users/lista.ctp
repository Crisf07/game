<h2>Usuarios</h2>
<div style="padding-bottom: 30%">
	<table>
		<tr>
			<td>Username</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Email</td>
		</tr>	
		<?php foreach ($user as $users):?>
		<tr>
			<td><?php echo $users['users']['username'] ?></td>
			<td><?php echo $users['users']['nom'] ?></td>
			<td><?php echo $users['users']['ap'] ?></td>
			<td><?php echo $users['users']['email'] ?></td>
			<td><?php echo $this->Html->link('Resetear contraseña',array('controller'=>'Users','action'=>'edit',$users['users']['id']));?></td>
			<td><?php echo $this->Form->postLink('Eliminar', array('action'=>'delete', $users['users']['id']), array('confirm'=> 'Esta seguro de eliminar a '.$users['users']['nom'].'?')); ?></td>
		</tr>
		<?php endforeach;?>	
	</table>
</div> 
	