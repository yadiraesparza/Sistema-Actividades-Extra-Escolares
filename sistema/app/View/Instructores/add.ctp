<div class="instructores form">
<?php echo $this->Form->create('Instructore'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Instructor'); ?></legend>
	<?php
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Ap_Paterno');
		echo $this->Form->input('Ap_Materno');
		echo $this->Form->input('Telefono');
		echo $this->Form->input('Actividad');
		echo $this->Form->input('Modified');
		echo $this->Form->input('Create');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Instructores'), array('action' => 'index'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
