<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<fieldset>	
		<?php echo "<?php echo \$this->Html->link('<i class=\"icon-plus\"></i> ' . __('{$singularHumanName}'), array('action' => 'add'),  array('class' => 'btn pull-right', 'escape' => false)); ?>"; ?>
		<h3><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h3>
</fieldset>
	<table class="table table-striped">
	<tr>
	<?php foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
	</tr>
	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t<?php echo \$this->Html->link('', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),  array('title'=>__('Edit'), 'class' => 'icon-pencil')); ?>\n";
		echo "\t\t\t<?php echo \$this->Form->postLink('', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('title'=>__('Delete'), 'class' => 'icon-remove'), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</table>
	<p>
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>"; ?>
	</p>
	<div class="pagination">	
	    <?php
            	echo "<?php\n";
				echo "\t\techo '<ul>';\n";
                echo "\t\techo \$this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'active','disabledTag' => 'a'));\n";
                echo "\t\techo \$this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));\n";
                echo "\t\techo \$this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'active','disabledTag' => 'a'));\n";
                echo "\t\techo '</ul>';\n";
				echo "\t?>\n";
		?>
	
	
	</div>
