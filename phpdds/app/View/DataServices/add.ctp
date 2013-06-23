<div class="dataServices form">
<?php echo $this->Form->create('DataService'); ?>
	<fieldset>
		<legend><?php echo __( ucwords($this->action) . ' Data Service'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('alias');
		echo $this->Form->input('description');
		echo $this->Form->input('host');
		echo $this->Form->input('port');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('data_service_type_id');
		echo $this->Form->input('data_app_id');
	?>
	</fieldset>
<hr /><?php echo $this->Form->end(array( 'div' => false, 'label' =>__(ucwords($this->action)), 'class' => 'btn btn-info')); ?></div>