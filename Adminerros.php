<?php if (count($Adminerrors) > 0): ?>
<div class="error">
	<?php foreach ($Adminerrors as $Adminerror): ?>
	<p><?php echo $Adminerror; ?> </p>
	<?php endforeach ?>
</div>
<?php endif ?>
