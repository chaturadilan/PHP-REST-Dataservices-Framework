<div class="span8">
		<div class="well">	
		<?php echo __('Welcome to PHP REST JSON Dataservices')?>
		</div>
</div>

<div class="span4 pull-right">	
		<div class="well">			
			<h3>Please sign in</h3>	
			<?php echo $this->Form->create('User'); ?>		
			<?php echo $this->Form->input('username', array( 'div' => false, 'label'=> false, 'class' => 'input-block-level', 'placeholder'=> __("Username"))); ?>
			<?php echo $this->Form->input('password', array( 'div' => false, 'label'=> false, 'class' => 'input-block-level', 'placeholder'=> __("Password"))); ?>
			<?php echo $this->Form->end(array( 'div' => false, 'label' => 'Sign In', 'class' => 'btn btn-large btn-primary')); ?>
		</div>	
</div>
