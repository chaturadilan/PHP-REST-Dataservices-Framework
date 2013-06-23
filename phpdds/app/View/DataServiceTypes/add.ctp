<div class="dataServiceTypes form">
<?php echo $this->Form->create('DataServiceType'); ?>
	<fieldset>
		<legend><?php echo __( ucwords($this->action) . ' Data Service Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('alias');
	?>
	</fieldset>
<hr /><?php echo $this->Form->end(array( 'div' => false, 'label' =>__(ucwords($this->action)), 'class' => 'btn btn-info')); ?></div>