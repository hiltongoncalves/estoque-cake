<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Módulos'); ?></h1>
		<ul class="sidemenu">
			<?php
			if (isset($usuario)) : 
			?>
				<li><?php echo $this->Html->link('Usuários', array('controller' => 'users', 'action' => 'index')); ?></li>		
				<li><?php echo $this->Html->link('Produtos', array('controller' => 'products', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Vendas', array('controller' => 'sales', 'action' => 'index')); ?></li>
			<?php
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
