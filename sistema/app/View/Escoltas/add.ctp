<div class="escoltas form">
<?php echo $this->Form->create('Escolta'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Escolta'); ?></legend>
	<?php
		echo $this->Form->input('No_Control');
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Sexo');
		echo $this->Form->input('Semestre_y_Carrera');
		echo $this->Form->input('Modified');
		echo $this->Form->input('Created');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Escoltas'), array('action' => 'index'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
