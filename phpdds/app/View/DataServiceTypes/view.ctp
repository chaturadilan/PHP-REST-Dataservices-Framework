<div class="dataServiceTypes view">
<h2><?php  echo __('Data Service Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dataServiceType['DataServiceType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dataServiceType['DataServiceType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias'); ?></dt>
		<dd>
			<?php echo h($dataServiceType['DataServiceType']['alias']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Data Service Type'), array('action' => 'edit', $dataServiceType['DataServiceType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Data Service Type'), array('action' => 'delete', $dataServiceType['DataServiceType']['id']), null, __('Are you sure you want to delete # %s?', $dataServiceType['DataServiceType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Service Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Service Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Services'), array('controller' => 'data_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Service'), array('controller' => 'data_services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Data Services'); ?></h3>
	<?php if (!empty($dataServiceType['DataService'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Alias'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Host'); ?></th>
		<th><?php echo __('Port'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Data Service Type Id'); ?></th>
		<th><?php echo __('Data App Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dataServiceType['DataService'] as $dataService): ?>
		<tr>
			<td><?php echo $dataService['id']; ?></td>
			<td><?php echo $dataService['name']; ?></td>
			<td><?php echo $dataService['alias']; ?></td>
			<td><?php echo $dataService['description']; ?></td>
			<td><?php echo $dataService['host']; ?></td>
			<td><?php echo $dataService['port']; ?></td>
			<td><?php echo $dataService['username']; ?></td>
			<td><?php echo $dataService['password']; ?></td>
			<td><?php echo $dataService['created']; ?></td>
			<td><?php echo $dataService['data_service_type_id']; ?></td>
			<td><?php echo $dataService['data_app_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'data_services', 'action' => 'view', $dataService['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'data_services', 'action' => 'edit', $dataService['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'data_services', 'action' => 'delete', $dataService['id']), null, __('Are you sure you want to delete # %s?', $dataService['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Data Service'), array('controller' => 'data_services', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
