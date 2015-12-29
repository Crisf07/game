<h2>Habilidades</h2>
<div style="padding-bottom: 30%">
	<table>
		<tr>
			<td>Nombre</td>
			<td>Descripcion</td>
			<td></td>
			<td>Coin</td>
			<td></td>
			<td>Point</td>
		
		</tr>
		<?php $c=1; $j=1; $k=1; $l=1; $f=1; $g=1;?>	
		<?php foreach ($hal as $hals):?>
		<tr>
			<td><?php echo $hals['Ability']['nombre'] ?></td>
			<td><?php echo $hals['Ability']['descript'] ?></td>
			<?php $class=$hals['Ability']['tree_id'];
			if($class=='1')
			{
				echo "<td><img src=/img/ability/santa/h".$j."l".$c.".jpg height='100' width='100'></td>";
				$c=$c+1;
				if($c==4)
				{
					$c=1;
					$j=$j+1;
				}
			}	 
			else
				if($class=='2'){
					echo "<td><img src=/img/ability/rudolf/h".$l."l".$k.".jpg height='100' width='100'></td>";
				$k=$k+1;
				if($k==4)
				{
					$k=1;
					$l=$l+1;
				}

			
				}
					 
				else
					if($class=='3'){
					echo "<td><img src=/img/ability/gnome/h".$g."l".$f.".jpg height='100' width='100'></td>";
				$f=$f+1;
				if($f==4)
				{
					$f=1;
					$g=$g+1;
				}
			}
				else
					echo "<td> <img src=/img/ability/".$hals['Ability']['id'].".jpg height='100' width='100'></td>"; 		
			?>
			
			<td><?php echo $hals['Ability']['coin'] ?></td>
			<td></td>
			<td><?php echo $hals['Ability']['point'] ?></td>
	
			<td><?php echo $this->Html->link('Editar',array('controller'=>'Abilities','action'=>'edit',$hals['Ability']['id']));?></td>
			
		</tr>
		<?php endforeach;?>	
	</table>
</div> 
	