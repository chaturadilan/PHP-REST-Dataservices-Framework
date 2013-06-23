<fieldset>	
		<?php echo $this->Html->link('<i class="icon-plus"></i> ' . __('Data Service Type'), array('action' => 'add'),  array('class' => 'btn pull-right', 'escape' => false)); ?>		<h3><?php echo __('Data Service Types'); ?></h3>
</fieldset>
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('alias'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dataServiceTypes as $dataServiceType): ?>
	<tr>
		<td><?php echo h($dataServiceType['DataServiceType']['id']); ?>&nbsp;</td>
		<td><?php echo h($dataServiceType['DataServiceType']['name']); ?>&nbsp;</td>
		<td><?php echo h($dataServiceType['DataServiceType']['alias']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('', array('action' => 'edit', $dataServiceType['DataServiceType']['id']),  array('title'=>__('Edit'), 'class' => 'icon-pencil')); ?>
			<?php echo $this->Form->postLink('', array('action' => 'delete', $dataServiceType['DataServiceType']['id']), array('title'=>__('Delete'), 'class' => 'icon-remove'), __('Are you sure you want to delete # %s?', $dataServiceType['DataServiceType']['id'])); ?>
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
