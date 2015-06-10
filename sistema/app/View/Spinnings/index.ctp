<div class="spinnings index">
	<h2><?php echo __('Spinnings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Matricula'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Ap_Paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('Ap_Materno'); ?></th>
			<th><?php echo $this->Paginator->sort('Sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('Semestre'); ?></th>
			<th><?php echo $this->Paginator->sort('Carrera'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified'); ?></th>
			<th><?php echo $this->Paginator->sort('Create'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($spinnings as $spinning): ?>
	<tr>
		<td><?php echo h($spinning['Spinning']['id']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Matricula']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Ap_Paterno']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Ap_Materno']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Sexo']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Semestre']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Carrera']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Modified']); ?>&nbsp;</td>
		<td><?php echo h($spinning['Spinning']['Create']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $spinning['Spinning']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $spinning['Spinning']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $spinning['Spinning']['id']), array(), __('Are you sure you want to delete # %s?', $spinning['Spinning']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Spinning'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
