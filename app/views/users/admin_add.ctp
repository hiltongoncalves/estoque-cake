<div id="sidebar">
	
	<div class="sidebox">

		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Usuários', true)), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Produtos', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Produto', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
		
	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">

		<h1><?php printf(__('Adicionar %s', true), __('Usuário', true)); ?></h1>
			<?php echo $this->Form->create('User');?>
			<?php
				echo $this->Form->input('name', array('label' => 'Nome'));
				echo $this->Form->input('phone', array('label' => 'Telefone'));
				echo $this->Form->input('address', array('label' => 'Endereço'));
				echo $this->Form->input('username', array('label' => 'Login'));
				echo $this->Form->input('password', array('label' => 'Senha'));
				echo $this->Form->input('password_confirm', array('label' => 'Confirmar Senha', 'type' => 'password'));
				echo '<br />';
				echo $this->Form->input('admin', array('type' => 'checkbox', 'label' => 'Administrador'));
				echo '<br />';
			?>
		<?php echo $this->Form->end(__('Adicionar', true));?>
		
	</div>

</div>
