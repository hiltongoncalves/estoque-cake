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
		
		<h1 id="logo"><a href="index.html" title="">Estoque<span class="gray">CakePHP</span></a></h1>	
		<h2 id="slogan"><?php if (isset($usuario)) : echo 'Bem vindo <i>'.$usuario.'</i><br /> '; endif;?></h2>		
		
		<!-- Menu Tabs -->
		<ul>
			<li><?php echo $this->Html->link('Vendas', array('admin' => true, 'controller' => 'sales', 'action' => 'index', 'id' => 'current')); ?></li>
			<li><?php echo $this->Html->link('Usuários', array('admin' => true, 'controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link('Produtos', array('admin' => true, 'controller' => 'products', 'action' => 'index')); ?></li>
			<li><a href="index.html">Sales</a></li>
			<li><?php
					if (!isset($usuario)) {
						echo $this->Html->link('Login', array('admin' => false, 'controller' => 'users', 'action' => 'login'));
					} else {
						echo $this->Html->link('Logout', array('admin' => false, 'controller' => 'users', 'action' => 'logout'));
					}
			?></li>			
		</ul>		
			
	
	</div></div>
	
		
	<?php echo $content_for_layout;?>
		
<!-- footer starts here -->	
<div id="footer"><div id="footer-content">
	
		<div class="col float-left">
			<h1>Site Partners</h1>
			<ul>				
				<li><a href="http://www.dreamhost.com/r.cgi?287326"><strong>Dreamhost</strong> - Affordable &amp; Reliable Webhosting</a></li>
				<li><a href="http://www.4templates.com/?aff=ealigam"><strong>4templates</strong> - Low Cost Hi-Quality Templates</a></li>
				<li><a href="http://store.templatemonster.com/?aff=ealigam"><strong>TemplateMonster</strong> - Best templates on the net!</a></li>	
				<li><a href="http://www.fotolia.com/partner/114283"><strong>Fotolia</strong> - Free stock images or from $1</a></li>						
				<li><a href="http://www.text-link-ads.com/?ref=40025"><strong>Text Link Ads</strong> - Easiest. Money. Ever.</a></li>
			</ul>			
		</div>
		
		<div class="col float-left">
			<h1>Links</h1>
			<ul>				
				<li><a href="http://www.openwebdesign.org/">openwebdesign.org</a></li>
				<li><a href="http://www.opendesigns.org/">Opendesigns.org</a></li>
				<li><a href="http://www.pdphoto.org/">PDPhoto.org</a></li>
				<li><a href="http://www.alistapart.com">Alistapart</a></li>					
				<li><a href="http://www.cssremix.com">CSS Remix</a></li>				
			</ul>			
		</div>		
	
		<div class="col2 float-right">
		<p>
		&copy; copyright 2006 <strong>Your Company Name</strong><br /> 
		Design by: <a href="index.html"><strong>styleshout</strong></a> &nbsp; &nbsp;
		Valid <a href="http://jigsaw.w3.org/css-validator/check/referer"><strong>CSS</strong></a> | 
		      <a href="http://validator.w3.org/check/referer"><strong>XHTML</strong></a>
		</p>
		
		<ul>						
			<li><a href="index.html"><strong>Home</strong></a></li>
			<li><a href="index.html"><strong>Sitemap</strong></a></li>
			<li><a href="index.html"><strong>RSS Feed</strong></a></li>								
		</ul>	
		</div>
	
</div></div>
<!-- footer ends here -->
	
<!-- wrap ends here -->
</div>


<div style="font-size: 0.8em; text-align: center; margin-top: 1.0em; margin-bottom: 1.0em;">
Design downloaded from <a href="http://www.freewebtemplates.com/">Free Templates</a> - your source for free web templates
</div>
</body>
</html>
