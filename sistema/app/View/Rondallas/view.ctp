<div class="rondallas view">
<h2><?php echo __('Rondalla'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matrcula'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rondalla['Rondalla']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rondalla'), array('action' => 'edit', $rondalla['Rondalla']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rondalla'), array('action' => 'delete', $rondalla['Rondalla']['id']), array(), __('Are you sure you want to delete # %s?', $rondalla['Rondalla']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rondallas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rondalla'), array('action' => 'add')); ?> </li>
	</ul>
</div>
