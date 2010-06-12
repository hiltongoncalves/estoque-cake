<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Módulos'); ?></h1>
		<ul class="sidemenu">
			<?php
			if (isset($usuario)) : 
				if ($usuario['User']['admin']) : ?>
				<li><?php echo $this->Html->link('Usuários', array('admin' => true, 'controller' => 'users', 'action' => 'index')); ?></li>		
				<li><?php echo $this->Html->link('Produtos', array('admin' => true, 'controller' => 'products', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Vendas', array('admin' => true, 'controller' => 'sales', 'action' => 'index')); ?></li>
			<?php
				endif;
			endif;
			?>
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
			<p>Bem vindo ao sistema administrativo do contole de estoque.
			<br />
			Selecione a opção desejada no menu.
			</p>
		</blockquote>
	</div>
	
</div>
