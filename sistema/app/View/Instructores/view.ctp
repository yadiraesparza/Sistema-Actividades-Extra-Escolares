<div class="instructores view">
<h2><?php echo __('Instructore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap Paterno'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap Materno'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['Telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($instructore['Instructore']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instructore'), array('action' => 'edit', $instructore['Instructore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instructore'), array('action' => 'delete', $instructore['Instructore']['id']), array(), __('Are you sure you want to delete # %s?', $instructore['Instructore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructore'), array('action' => 'add')); ?> </li>
	</ul>
</div>
