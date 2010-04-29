<div id="content-wrap"><div id="content">
<?php echo $this->Session->flash('auth'); ?>
	<div id="sidebar">
		
		<div class="sidebox">
		
			<h1 id="clear"><?php __('Actions'); ?></h1>
			<ul class="sidemenu">
				<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Sale.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Sale.id'))); ?></li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Vendas', true)), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Usuários', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Usuário', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Produtos', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Produto', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
	
		</div>

	</div>
	
	<div id="main">
	
		<div class="post">

			<h1><?php printf(__('Edit %s', true), __('Venda', true)); ?></h1>
			<?php echo $this->Form->create('Sale');?>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('created', array('disabled' => true, 'label' => 'Criado em'));
					echo $this->Form->input('user_id', array('label' => 'Usuário'));
					echo $this->Form->input('Product', array('label' => 'Produtos'));
				?>
				<br />
			<?php echo $this->Form->end(__('Editar', true));?>

		</div>
		
	</div>

</div></div>
