<div class="dataServices view">
<h2><?php  echo __('Data Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Host'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['host']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Port'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['port']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dataService['DataService']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Service Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dataService['DataServiceType']['name'], array('controller' => 'data_service_types', 'action' => 'view', $dataService['DataServiceType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data App'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dataService['DataApp']['name'], array('controller' => 'data_apps', 'action' => 'view', $dataService['DataApp']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Data Service'), array('action' => 'edit', $dataService['DataService']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Data Service'), array('action' => 'delete', $dataService['DataService']['id']), null, __('Are you sure you want to delete # %s?', $dataService['DataService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Service Types'), array('controller' => 'data_service_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Service Type'), array('controller' => 'data_service_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Apps'), array('controller' => 'data_apps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data App'), array('controller' => 'data_apps', 'action' => 'add')); ?> </li>
	</ul>
</div>
