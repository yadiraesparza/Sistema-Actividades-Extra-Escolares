<div class="zumbas view">
<h2><?php echo __('Zumba'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($zumba['Zumba']['Modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Zumba'), array('action' => 'edit', $zumba['Zumba']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Zumba'), array('action' => 'delete', $zumba['Zumba']['id']), array(), __('Are you sure you want to delete # %s?', $zumba['Zumba']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Zumbas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Zumba'), array('action' => 'add')); ?> </li>
	</ul>
</div>
