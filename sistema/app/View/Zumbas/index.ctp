<div class="page-header">
	<h2><?php echo __('zumba'); ?></h2>
</div>



 <div class="col-md-16">

	<table class="table table-striped">
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
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($zumbas as $zumba): ?>
	<tr>
		<td><?php echo h($zumba['Zumba']['id']); ?>&nbsp;</td>
		<td><?php echo h($zumba['Zumba']['Matricula']); ?>&nbsp;</td>
		<td><?php echo h($zumba['Zumba']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($zumba['Zumba']['Ap_Paterno']); ?>&nbsp;</td>
		<td><?php echo h($zumba['Zumba']['Ap_Materno']); ?>&nbsp;</td>
		<td><?php echo h($zumba['Zumba']['Semestre']); ?>&nbsp;</td>
		<td><?php echo h($zumba['Zumba']['Carrera']); ?>&nbsp;</td>
		<td><?php echo h($zumba['Zumba']['created']); ?>&nbsp;</td>
		<td><?php echo h($zumba['Zumba']['Modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $zumba['Zumba']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $zumba['Zumba']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $zumba['Zumba']['id']), array(), __('Are you sure you want to delete # %s?', $zumba['Zumba']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Zumba'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
