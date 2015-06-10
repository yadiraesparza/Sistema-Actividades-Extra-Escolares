<div class="instructores form">
<?php echo $this->Form->create('Instructore'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instructore'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Ap_Paterno');
		echo $this->Form->input('Ap_Materno');
		echo $this->Form->input('Telefono');
		echo $this->Form->input('Modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Instructore.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Instructore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Instructores'), array('action' => 'index')); ?></li>
	</ul>
</div>
