<div class="tallerdelecturas form">
<?php echo $this->Form->create('Tallerdelectura'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Taller de Lectura'); ?></legend>
	<?php
		echo $this->Form->input('Matricula');
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Ap_Paterno');
		echo $this->Form->input('Ap_Materno');
		echo $this->Form->input('Sexo');
		echo $this->Form->input('Semestre');
		echo $this->Form->input('Carrera');
		echo $this->Form->input('Modified');
		echo $this->Form->input('Created');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tallerdelecturas'), array('action' => 'index'), array('class'=>' btn btn-success')); ?></li>
	</ul>
</div>
