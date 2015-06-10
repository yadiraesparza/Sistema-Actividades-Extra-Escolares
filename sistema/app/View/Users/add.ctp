<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top role="navigation"">
     
        <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
     

      <li> <button type="button" class=" btn btn-success  active"><span class="glyphicon "></span>A.E.E</button></li>
  </nav>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Nuevo Usuario'); ?></h2>
				<?php
					echo $this->Form->input('fullname', array('class' => 'form-control', 'label' => 'Fullname'));
					echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'username'));
					echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Password'));
					 echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'rol', 'type' => 'select', 'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), array('class' => 'form-control')));
				?>
				</fieldset>

				<p>
				<?php echo $this->Form->end(array('label' => 'Crear Usuario', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
			  </ul>
			</div>
		</div>
	</div>
</div>