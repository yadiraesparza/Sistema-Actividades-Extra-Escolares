<div class="dibujos view">
<h2><?php echo __('Dibujo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dibujo['Dibujo']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dibujo'), array('action' => 'edit', $dibujo['Dibujo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dibujo'), array('action' => 'delete', $dibujo['Dibujo']['id']), array(), __('Are you sure you want to delete # %s?', $dibujo['Dibujo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dibujos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dibujo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
