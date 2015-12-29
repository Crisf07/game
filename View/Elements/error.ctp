<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function(){
			$('.txterror').fadeOut("fast");
		}, 3000)
	});
</script>
<div class="txterror">
    <b><?php echo h($message) ?></b>
</div>
