
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset();?>

	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->css(array("style","animate","TimeCircles"));
        echo $this->Html->script(array("jquery-2.1.4.min","animate","snowfall.min","snowfall.jquery.min","TimeCircles","validacion"));
	?>
</head>
<body>

	
			<?php echo $this->Element('header'); ?>

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

			<?php echo $this->Element('footer'); ?>

</body>
</html>
