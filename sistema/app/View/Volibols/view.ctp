<div class="volibols view">
<h2><?php echo __('Volibol'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($volibol['Volibol']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Volibol'), array('action' => 'edit', $volibol['Volibol']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Volibol'), array('action' => 'delete', $volibol['Volibol']['id']), array(), __('Are you sure you want to delete # %s?', $volibol['Volibol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Volibols'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Volibol'), array('action' => 'add')); ?> </li>
	</ul>
</div>
