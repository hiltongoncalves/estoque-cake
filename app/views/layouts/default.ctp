<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta name="Description" content="Information architecture, Web Design, Web Standards." />
<meta name="Keywords" content="your, keywords" />
<?php echo $html->charset(); ?> 
<meta name="Distribution" content="Global" />
<meta name="Author" content="Erwin Aligam - ealigam@gmail.com" />
<meta name="Robots" content="index,follow" />

<?php
echo $html->css('PixelGreen', array(), array('media' => 'screen'));
echo $javascript->link(array('prototype'));
?>

<title>SCE - Sistema de Controle de Estoque</title>
	
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">

	<div id="header"><div id="header-content">	
		
		<h1 id="logo">
		<a title="">Estoque<span class="gray">LOJA X</span></a></h1>
		<h2 id="slogan">
		<?php
		if (($this->Session->read('Auth'))) {
			echo 'Bem vindo <i>'.$this->Session->read('Auth.User.username').'</i><br /> ';
		}
		?>
		</h2>
		
		<!-- Menu Tabs -->
		<ul>
			<li><?php echo $this->Html->link('Usuários', array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Grupos', array('controller' => 'groups', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Produtos', array('controller' => 'products', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Vendas', array('controller' => 'sales', 'action' => 'index')); ?></li>
			<li>
				<?php
				if (!$this->Session->read('Auth')) {
					echo $this->Html->link('Entrar', array('controller' => 'users', 'action' => 'login'), array('id' => 'current'));
				} else {
					echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout'), array('id' => 'current'));
				}
				?>
			</li>
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
