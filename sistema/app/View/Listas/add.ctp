<div class="listas form">
<?php echo $this->Form->create('Lista'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Lista'); ?></legend>
	<?php
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Ap_Paterno');
		echo $this->Form->input('Ap_Matero');
		echo $this->Form->input('Sexo');
		echo $this->Form->input('Semestre');
		echo $this->Form->input('Carrera');
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

		<li><?php echo $this->Html->link(__('List Listas'), array('action' => 'index')); ?></li>
	</ul>
</div>
