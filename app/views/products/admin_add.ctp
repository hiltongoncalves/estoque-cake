<div id="sidebar">

	<div class="sidebox">
		
		<h1 class="clear"><?php __('Ações'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Produtos', true)), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Usuários', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Usuário', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
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
