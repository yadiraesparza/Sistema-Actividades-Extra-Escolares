<div class="page-header">
	<h2><?php echo __('Horario de Actividades'); ?></h2>
</div>



 <div class="col-md-16">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('Hora'); ?></th>
			<th><?php echo $this->Paginator->sort('Instructor'); ?></th>
			<th><?php echo $this->Paginator->sort('Dias'); ?></th>
			<th><?php echo $this->Paginator->sort('Lugar'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($horariosdeactividades as $horariosdeactividade): ?>
	<tr>
		<td><?php echo h($horariosdeactividade['Horariosdeactividade']['id']); ?>&nbsp;</td>
		<td><?php echo h($horariosdeactividade['Horariosdeactividade']['Actividad']); ?>&nbsp;</td>
		<td><?php echo h($horariosdeactividade['Horariosdeactividade']['Hora']); ?>&nbsp;</td>
		<td><?php echo h($horariosdeactividade['Horariosdeactividade']['Instructor']); ?>&nbsp;</td>
		<td><?php echo h($horariosdeactividade['Horariosdeactividade']['Dias']); ?>&nbsp;</td>
		<td><?php echo h($horariosdeactividade['Horariosdeactividade']['Lugar']); ?>&nbsp;</td>
		<td><?php echo h($horariosdeactividade['Horariosdeactividade']['Modified']); ?>&nbsp;</td>
		<td><?php echo h($horariosdeactividade['Horariosdeactividade']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $horariosdeactividade['Horariosdeactividade']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $horariosdeactividade['Horariosdeactividade']['id']), array('class'=>' btn btn-success ')); ?>

			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $horariosdeactividade['Horariosdeactividade']['id']), array('class'=>' btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $horariosdeactividade['Horariosdeactividade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('nuevo Horarios de Actividade'), array('action' => 'add'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
