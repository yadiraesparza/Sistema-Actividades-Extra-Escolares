<div class="danzas view">
<h2><?php echo __('Danza'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($danza['Danza']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Danza'), array('action' => 'edit', $danza['Danza']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Danza'), array('action' => 'delete', $danza['Danza']['id']), array(), __('Are you sure you want to delete # %s?', $danza['Danza']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Danzas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Danza'), array('action' => 'add')); ?> </li>
	</ul>
</div>
