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
    

<?php 
echo $this->Html->link( "Logout",   array('action'=>'logout'), array('class'=>' btn btn btn-success ') ); 
?>    

      <li> <button type="button" class=" btn btn-success  active"><span class="glyphicon "></span>A.E.E</button></li>

  <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown"> usuarios <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">usuarios</a></li>
    <li><?php echo $this->html->link('lista ', array('controller'=>'users','action'=>'index')) ?></li>
    <li><?php echo $this->html->link('nuevo', array('controller'=>'users','action'=>'add')) ?></li>
      </ul>
     </li> 
  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Actividades Culturales <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">DANZA</a></li>
                <li><?php echo $this->html->link('lista ', array('controller'=>'danzas','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'danzas','action'=>'add')) ?></li>
                <li><a href="#">DIBUJO</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'dibujos','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'dibujos','action'=>'add')) ?></li>
                 <li><a href="#">RONDALLA</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'rondallas','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'rondallas','action'=>'add')) ?></li>
                 <li><a href="#">EDECANES</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'edecanes','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'edecanes','action'=>'add')) ?></li>
                 <li><a href="#">TALLER DE LECTURA </a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'tallerdelecturas','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'tallerdelecturas','action'=>'add')) ?></li>
                 <li><a href="#">AMIGOS ECOLOGICOS</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'amigosecologicos','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'amigosecologicos','action'=>'add')) ?></li>
              </ul>
            </li>        
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Actividades Civicas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">BANDA DE GUERRA</a></li>
                <li><?php echo $this->html->link('lista ', array('controller'=>'bandadeguerras','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'bandadeguerras','action'=>'add')) ?></li>
                <li><a href="#">ESCOLTA</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'escoltas','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'escoltas','action'=>'add')) ?></li>
             </ul>
            </li> 
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Actividades Deportivas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">BASQUETBOL</a></li>
                <li><?php echo $this->html->link('lista ', array('controller'=>'basquetbols','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'basquetbols','action'=>'add')) ?></li>
                <li><a href="#">FUTBOL</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'futbols','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'futbols','action'=>'add')) ?></li>
                <li><a href="#">VOLEYBOL</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'volibols','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'volibols','action'=>'add')) ?></li>
                <li><a href="#">KICKBOXING</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'kickboxings','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'kickboxings','action'=>'add')) ?></li>
                <li><a href="#">ZUMBA</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'zumbas','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'zumbas','action'=>'add')) ?></li>
                <li><a href="#">BEISBOL</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'beisbols','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'beisbols','action'=>'add')) ?></li>
                <li><a href="#">SPINING</a></li>
                 <li><?php echo $this->html->link('lista ', array('controller'=>'Spinnings','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'spinnings','action'=>'add')) ?></li>
                <div class="jumbotron">
                            </div>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Horario de Actividades <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">HORARIOS</a></li>
                <li><?php echo $this->html->link('lista ', array('controller'=>'horariosdeactividades','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'horariosdeactividades','action'=>'add')) ?></li>
             </ul>
            </li> 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Instructores <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">INSTRUCTORES</a></li>
                <li><?php echo $this->html->link('lista ', array('controller'=>'instructores','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'instructores','action'=>'add')) ?></li>
             </ul>
            </li> 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Listas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">LISTAS</a></li>
                <li><?php echo $this->html->link('lista', array('controller'=>'listas','action'=>'index')) ?></li>
                <li><?php echo $this->html->link('nuevo', array('controller'=>'listas','action'=>'add')) ?></li>
               </ul>
               </li>   
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Constancias <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">constancias</a></li>
             </ul>
            </li>       
          </ul>
        </div>
      </div>
    </nav>



