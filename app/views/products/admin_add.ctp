<div id="content-wrap"><div id="content">
<?php echo $this->Session->flash('auth'); ?>
	<div id="sidebar">

		<div class="sidebox">
			
			<h1 class="clear"><?php __('Ações'); ?></h1>
			<ul class="sidemenu">
				<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Produtos', true)), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Usuários', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Usuário', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Vendas', true)), array('controller' => 'sales', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Nova %s', true), __('Venda', true)), array('controller' => 'sales', 'action' => 'add')); ?> </li>
			</ul>
	
		</div>
	
	</div>

	<div id="main">
		
		<div class="post">
	 		<h1><?php printf(__('Adicionar %s', true), __('Produto', true)); ?></h1>
			<?php echo $this->Form->create('Product');?>
				<?php
					echo $this->Form->input('description', array('label' => 'Descrição'));
					echo $this->Form->input('price', array('label' => 'Preço'));
					echo $this->Form->input('amount', array('label' => 'Quantidade'));
					echo $this->Form->input('user_id', array('label' => 'Usuário'));
				?>
				<br />
			<?php echo $this->Form->end(__('Adicionar', true));?>
			
		</div>
	
	</div>

</div></div>
