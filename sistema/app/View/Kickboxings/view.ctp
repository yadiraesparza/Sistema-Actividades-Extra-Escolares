<div class="kickboxings view">
<h2><?php echo __('Kickboxing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($kickboxing['Kickboxing']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Kickboxing'), array('action' => 'edit', $kickboxing['Kickboxing']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Kickboxing'), array('action' => 'delete', $kickboxing['Kickboxing']['id']), array(), __('Are you sure you want to delete # %s?', $kickboxing['Kickboxing']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Kickboxings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Kickboxing'), array('action' => 'add')); ?> </li>
	</ul>
</div>
