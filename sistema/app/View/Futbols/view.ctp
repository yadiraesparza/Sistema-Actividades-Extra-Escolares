<div class="futbols view">
<h2><?php echo __('Futbol'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create'); ?></dt>
		<dd>
			<?php echo h($futbol['Futbol']['Create']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Futbol'), array('action' => 'edit', $futbol['Futbol']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Futbol'), array('action' => 'delete', $futbol['Futbol']['id']), array(), __('Are you sure you want to delete # %s?', $futbol['Futbol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Futbols'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Futbol'), array('action' => 'add')); ?> </li>
	</ul>
</div>
