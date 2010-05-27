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
				echo $this->Form->input('cpf', array('label' => 'CPF', 'after' => ' apenas numeros'));
				echo $this->Form->input('phone', array('label' => 'Telefone', 'after' => ' Ex.: (99) 9999-9999'));
				echo $this->Form->input('address', array('label' => 'Endereço'));
				echo $this->Form->input('email', array('label' => 'Email', 'after' => ' Ex.: exemplo@exemplo.com'));
				echo $this->Form->input('username', array('label' => 'Login'));
				echo $this->Form->input('password', array('label' => 'Senha'));
				echo $this->Form->input('password_confirm', array('label' => 'Confirmar Senha', 'type' => 'password'));
				echo $this->Html->tag('br');
				echo $this->Form->input('admin', array('type' => 'checkbox', 'label' => false, 'after' => ' Administrador'));
				echo $this->Html->tag('br');
			?>
		<?php echo $this->Form->end(__('Adicionar', true));?>
		
	</div>

</div>
