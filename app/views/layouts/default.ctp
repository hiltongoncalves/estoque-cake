<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta name="Description" content="Information architecture, Web Design, Web Standards." />
<meta name="Keywords" content="your, keywords" />
<?php echo $html->charset(); ?> 
<meta name="Distribution" content="Global" />
<meta name="Author" content="Erwin Aligam - ealigam@gmail.com" />
<meta name="Robots" content="index,follow" />

<?php echo $html->css('PixelGreen', array(), array('media' => 'screen'));?>

<title>Estoque CakePHP</title>
	
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

	<div id="header"><div id="header-content">	
		
		<h1 id="logo"><a href="/users/index" title="">Estoque<span class="gray">CakePHP</span></a></h1>	
		<h2 id="slogan"><?php if (isset($usuario)) : echo 'Bem vindo <i>'.$usuario['User']['name'].'</i><br /> '; endif;?></h2>		
		
		<!-- Menu Tabs -->
		<ul>
			
			<?php
			if (isset($usuario)) : 
				if ($usuario['User']['admin']) : ?>
				<li><?php echo $this->Html->link('Usuários', array('admin' => true, 'controller' => 'users', 'action' => 'index')); ?></li>		
				<li><?php echo $this->Html->link('Produtos', array('admin' => true, 'controller' => 'products', 'action' => 'index')); ?></li>	
			<?php
				endif;
			endif;
			?>
			<?php
			if (isset($usuario)) : 
				if (!$usuario['User']['admin']) : ?>
					<li><?php echo $this->Html->link('Vendas', array('admin' => true, 'controller' => 'sales', 'action' => 'index')); ?></li>
			<?php
				endif;
			endif;
			?>
			<li><?php
					if (!isset($usuario)) {
						echo $this->Html->link('Entrar', array('admin' => false, 'controller' => 'users', 'action' => 'login'), array('id' => 'current'));
					} else {
						echo $this->Html->link('Sair', array('admin' => false, 'controller' => 'users', 'action' => 'logout'), array('id' => 'current'));
					}
			?></li>			
		</ul>		
			
	
	</div></div>
	<div id="content-wrap"><div id="content">
		<?php
		echo $content_for_layout;
		?>
	</div></div>		
<!-- footer starts here -->	
<!-- footer ends here -->
	
<!-- wrap ends here -->
</div>
</body>
</html>
