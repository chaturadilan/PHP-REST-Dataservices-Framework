<fieldset>	
		<?php echo $this->Html->link('<i class="icon-plus"></i> ' . __('Data Service'), array('action' => 'add'),  array('class' => 'btn pull-right', 'escape' => false)); ?>		<h3><?php echo __('Data Services'); ?></h3>
</fieldset>
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('alias'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('host'); ?></th>
			<th><?php echo $this->Paginator->sort('port'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('data_service_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_app_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dataServices as $dataService): ?>
	<tr>
		<td><?php echo h($dataService['DataService']['id']); ?>&nbsp;</td>
		<td><?php echo h($dataService['DataService']['name']); ?>&nbsp;</td>
		<td><?php echo h($dataService['DataService']['alias']); ?>&nbsp;</td>
		<td><?php echo h($dataService['DataService']['description']); ?>&nbsp;</td>
		<td><?php echo h($dataService['DataService']['host']); ?>&nbsp;</td>
		<td><?php echo h($dataService['DataService']['port']); ?>&nbsp;</td>
		<td><?php echo h($dataService['DataService']['username']); ?>&nbsp;</td>
		<td><?php echo h($dataService['DataService']['password']); ?>&nbsp;</td>
		<td><?php echo h($dataService['DataService']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dataService['DataServiceType']['name'], array('controller' => 'data_service_types', 'action' => 'view', $dataService['DataServiceType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dataService['DataApp']['name'], array('controller' => 'data_apps', 'action' => 'view', $dataService['DataApp']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'edit', $dataService['DataService']['id']),  array('title'=>__('Edit'), 'class' => 'icon-pencil')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $dataService['DataService']['id']), array('title'=>__('Delete'), 'class' => 'icon-remove'), __('Are you sure you want to delete # %s?', $dataService['DataService']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="pagination">	
	    <?php
		echo '<ul>';
		echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'active','disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
		echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'active','disabledTag' => 'a'));
		echo '</ul>';
	?>
	
	
	</div>
