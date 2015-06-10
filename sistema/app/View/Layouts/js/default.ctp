<?
<!DOCTYPE html>
<html>
<head>
<? php echo $this->Html->charset(); ?>
<title>
	<? php echo $cakeDescription ?>:
	<? php echo $this->fetch('title'); ?>
</title>
<?php
echo $this->Html->meta('icon');
echo $this->Html->css(array('style.css','bootstrap.min','bootstrap-theme.min'));
echo $this->Html->Script(array('jquery.min','docs.min','bootstrap.min'));



echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>

</head>

<body>
	
    <?php echo $this->element('menu'); ?>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
      <? php echo $this->fetch('script'); ?>
      <? php echo $this->fetch('content'); ?>
  </div>



