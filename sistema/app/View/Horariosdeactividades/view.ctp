<div class="horariosdeactividades view">
<h2><?php echo __('Horariosdeactividade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($horariosdeactividade['Horariosdeactividade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo h($horariosdeactividade['Horariosdeactividade']['Actividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo h($horariosdeactividade['Horariosdeactividade']['Hora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instructor'); ?></dt>
		<dd>
			<?php echo h($horariosdeactividade['Horariosdeactividade']['Instructor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias'); ?></dt>
		<dd>
			<?php echo h($horariosdeactividade['Horariosdeactividade']['Dias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar'); ?></dt>
		<dd>
			<?php echo h($horariosdeactividade['Horariosdeactividade']['Lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($horariosdeactividade['Horariosdeactividade']['Modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($horariosdeactividade['Horariosdeactividade']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Horariosdeactividade'), array('action' => 'edit', $horariosdeactividade['Horariosdeactividade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Horariosdeactividade'), array('action' => 'delete', $horariosdeactividade['Horariosdeactividade']['id']), array(), __('Are you sure you want to delete # %s?', $horariosdeactividade['Horariosdeactividade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Horariosdeactividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horariosdeactividade'), array('action' => 'add')); ?> </li>
	</ul>
</div>
