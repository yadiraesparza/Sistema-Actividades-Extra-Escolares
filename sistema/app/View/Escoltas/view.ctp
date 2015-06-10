<div class="escoltas view">
<h2><?php echo __('Escolta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($escolta['Escolta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Control'); ?></dt>
		<dd>
			<?php echo h($escolta['Escolta']['No_Control']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($escolta['Escolta']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($escolta['Escolta']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestre Y Carrera'); ?></dt>
		<dd>
			<?php echo h($escolta['Escolta']['Semestre_y_Carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($escolta['Escolta']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($escolta['Escolta']['Created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Escolta'), array('action' => 'edit', $escolta['Escolta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Escolta'), array('action' => 'delete', $escolta['Escolta']['id']), array(), __('Are you sure you want to delete # %s?', $escolta['Escolta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Escoltas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escolta'), array('action' => 'add')); ?> </li>
	</ul>
</div>
