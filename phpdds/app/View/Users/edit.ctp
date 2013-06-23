<div class="users form">
	<fieldset>
		<legend>
			<?php echo __( ucwords($this->action) . ' User');?>
		</legend>

		<div>
			<?php echo $this->Form->create('User'); ?>
			<?php
			echo $this->Form->input('id', array('type' => 'hidden'));
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('role');
			?>
			<hr />
			<?php echo $this->Form->end(array( 'div' => false, 'label' => __(ucwords($this->action)), 'class' => 'btn btn-info')); ?>
		</div>
	</fieldset>
</div>
