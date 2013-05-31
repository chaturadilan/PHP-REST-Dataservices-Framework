<div class="users form">
	<fieldset>
		<legend>
			<?php echo __('Add User'); ?>
		</legend>

		<div>
			<?php echo $this->Form->create('User'); ?>

			<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('role');
			?>



			<hr />
			<?php echo $this->Form->end(array( 'div' => false, 'label' => 'Add User', 'class' => 'btn btn-large btn-primary')); ?>
		</div>
	</fieldset>
</div>
