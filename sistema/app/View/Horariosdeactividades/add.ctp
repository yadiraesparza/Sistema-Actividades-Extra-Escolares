<div class="horariosdeactividades form">
<?php echo $this->Form->create('Horariosdeactividade'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Horaris de Actividade'); ?></legend>
	<?php
		echo $this->Form->input('Actividad');
		echo $this->Form->input('Hora');
		echo $this->Form->input('Instructor');
		echo $this->Form->input('Dias');
		echo $this->Form->input('Lugar');
		echo $this->Form->input('Modified');
		echo $this->Form->input('Created');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Horarios de Actividades'), array('action' => 'index'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
