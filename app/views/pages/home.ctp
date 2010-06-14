<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Modules'); ?></h1>
		<ul class="sidemenu">
				<li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Groups', array('controller' => 'groups', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Sales', array('controller' => 'sales', 'action' => 'index')); ?></li>
		</ul>
	
	</div>
	
</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post" align="center">
		<blockquote>
			<p>Welcome to the administrative system of inventory control.</p>
			<p>Select the desired option from the menu.</p>
		</blockquote>
	</div>
	
</div>
