<div class="dataApps form">
<?php echo $this->Form->create('DataApp'); ?>
	<fieldset>
		<legend><?php echo __( ucwords($this->action) . ' Data App'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('alias');
		echo $this->Form->input('description');
	?>
	</fieldset>
<hr /><?php echo $this->Form->end(array( 'div' => false, 'label' =>__(ucwords($this->action)), 'class' => 'btn btn-info')); ?></div>