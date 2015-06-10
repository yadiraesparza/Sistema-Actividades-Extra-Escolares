<div class="horariosdeactividades form">
<?php echo $this->Form->create('Horariosdeactividade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Horariosdeactividade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Actividad');
		echo $this->Form->input('Hora');
		echo $this->Form->input('Instructor');
		echo $this->Form->input('Dias');
		echo $this->Form->input('lugar');
		echo $this->Form->input('Modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Horariosdeactividade.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Horariosdeactividade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Horariosdeactividades'), array('action' => 'index')); ?></li>
	</ul>
</div>
