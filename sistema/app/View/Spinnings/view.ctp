<div class="spinnings view">
<h2><?php echo __('Spinning'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($spinning['Spinning']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Spinning'), array('action' => 'edit', $spinning['Spinning']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Spinning'), array('action' => 'delete', $spinning['Spinning']['id']), array(), __('Are you sure you want to delete # %s?', $spinning['Spinning']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listas Spinnings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Spinning'), array('action' => 'add')); ?> </li>
	</ul>
</div>
