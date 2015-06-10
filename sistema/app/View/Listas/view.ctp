<div class="listas view">
<h2><?php echo __('Lista'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['Apellido Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Matero'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['Apellido Matero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['Actividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['Create']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lista'), array('action' => 'edit', $lista['Lista']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lista'), array('action' => 'delete', $lista['Lista']['id']), array(), __('Are you sure you want to delete # %s?', $lista['Lista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Listas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lista'), array('action' => 'add')); ?> </li>
	</ul>
</div>
