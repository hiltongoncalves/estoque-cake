<div id="content-wrap"><div id="content">
<?php echo $this->Session->flash('auth'); ?>
	<div id="sidebar">

		<div class="sidebox">
			
			<h1 class="clear"><?php __('Actions'); ?></h1>
			<ul class="sidemenu">
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Vendas', true)), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>

		</div>

	</div>

	<div id="main">
		
		<div class="post">
	 		<h1><?php printf(__('Adicionar %s', true), __('Venda', true)); ?></h1>
			<?php echo $this->Form->create('Sale');?>
				<?php
					echo $this->Form->input('user_id', array('label' => 'Usuário'));
					echo $this->Form->input('Product', array('label' => 'Produtos'));
				?>
			<br />
			<?php echo $this->Form->end(__('Adicionar', true));?>
		
		</div>
		
	</div>
</div></div>
