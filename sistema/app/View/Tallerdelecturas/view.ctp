<div class="tallerdelecturas view">
<h2><?php echo __('Tallerdelectura'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Paterno'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Ap_Paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap_Materno'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Ap_Materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Semestre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tallerdelectura['Tallerdelectura']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tallerdelectura'), array('action' => 'edit', $tallerdelectura['Tallerdelectura']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tallerdelectura'), array('action' => 'delete', $tallerdelectura['Tallerdelectura']['id']), array(), __('Are you sure you want to delete # %s?', $tallerdelectura['Tallerdelectura']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tallerdelecturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tallerdelectura'), array('action' => 'add')); ?> </li>
	</ul>
</div>
