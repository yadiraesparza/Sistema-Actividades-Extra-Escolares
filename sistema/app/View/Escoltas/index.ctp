<div class="page-header">
	<h2><?php echo __('Banda de Guerra'); ?></h2>
</div>



 <div class="col-md-16">

	<table class="table table-striped"
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('No_Control'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('Semestre_y_Carrera'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified'); ?></th>
			<th><?php echo $this->Paginator->sort('Created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($escoltas as $escolta): ?>
	<tr>
		<td><?php echo h($escolta['Escolta']['id']); ?>&nbsp;</td>
		<td><?php echo h($escolta['Escolta']['No_Control']); ?>&nbsp;</td>
		<td><?php echo h($escolta['Escolta']['Nombre']); ?>&nbsp;</td>
		<td><?php echo h($escolta['Escolta']['Sexo']); ?>&nbsp;</td>
		<td><?php echo h($escolta['Escolta']['Semestre_y_Carrera']); ?>&nbsp;</td>
		<td><?php echo h($escolta['Escolta']['Modified']); ?>&nbsp;</td>
		<td><?php echo h($escolta['Escolta']['Created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $escolta['Escolta']['id']), array('class'=>' btn btn-success ')); ?>


			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $escolta['Escolta']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $escolta['Escolta']['id']), array('class'=>' btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $escolta['Escolta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Escolta'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
