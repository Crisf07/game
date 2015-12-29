<h2>Trofeos</h2>
<div style="padding-bottom: 30%">

<table>
	<?php foreach ($trofeo as $trofeos):?>
	<tr>
		<td><?php echo $trofeos['trophies']['nombre']?></td>
		<td><?php echo '<img src=/img/trophy/'.$trofeos['trophies']['id'].'.jpg height="50" width="50">'; ?></td>
		<td><?php echo $this->Html->link('Editar', array('controller'=>'Trophies','action'=>'edit',$trofeos['trophies']['id']));?></td>
		

	</tr>
	<?php endforeach;?>

</table>

</div>
