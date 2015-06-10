<div class="edecanes view">
<h2><?php echo __('Edecane'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($edecane['Edecane']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Edecane'), array('action' => 'edit', $edecane['Edecane']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Edecane'), array('action' => 'delete', $edecane['Edecane']['id']), array(), __('Are you sure you want to delete # %s?', $edecane['Edecane']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Edecanes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edecane'), array('action' => 'add')); ?> </li>
	</ul>
</div>
