<div class="page-header">
	<h2><?php echo __('Edecanes'); ?></h2>
</div>



 <div class="col-md-16">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Ap_Paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('Ap_Materno'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('Activdad'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($instructores as $instructore): ?>
	<tr>
		<td><?php echo h($instructore['Instructore']['id']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['Ap_Paterno']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['Ap_Materno']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['Telefono']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['Actividad']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['Modified']); ?>&nbsp;</td>
		<td><?php echo h($instructore['Instructore']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $instructore['Instructore']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $instructore['Instructore']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $instructore['Instructore']['id']), array('class'=>' btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $instructore['Instructore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuev Instructor'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
