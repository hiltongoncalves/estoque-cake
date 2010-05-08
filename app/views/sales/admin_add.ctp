<div id="sidebar">

	<div class="sidebox">
		
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Vendas', true)), array('action' => 'index'));?></li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">
 		<h1><?php printf(__('Adicionar %s', true), __('Venda', true)); ?></h1>
		<?php echo $this->Form->create('Sale');?>
			<?php
				echo $this->Form->input('user_id', array('label' => 'Usuário', 'default' => $usuario['User']['id']));
				echo $this->Form->input('Product', array('label' => 'Produtos'));
			?>
		<br />
		<?php echo $this->Form->end(__('Adicionar', true));?>
	
	</div>
	
</div>
