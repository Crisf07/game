<script type="text/javascript">
$(document).ready(function(){
	$(":password").each(function(){	
			$($(this)).val('');
	});
});

</script>

<h2>Resetear contrase&ntilde;a</h2>
<div style="padding-bottom: 40%">
<?php 
	echo $this->Form->create('User',array('name'=>'form1')) ;
	echo $this->Form->input('password');
	echo $this->Form->end('Guardar cambios');
?>
</div>