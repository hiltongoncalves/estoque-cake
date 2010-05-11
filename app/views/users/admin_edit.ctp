<div id="sidebar">
	
	<div class="sidebox">
	
		<h1 id="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li>
			<?php
			if (!$this->Form->value('User.status')) {
				echo $this->Html->link(__('Desativar', true), array('action' => 'desativar', $this->Form->value('User.id')), null, sprintf(__('Você tem certeza que deseja desativar #%s?', true), $this->Form->value('User.name')));
			} else {
				echo $this->Html->link(__('Ativar', true), array('action' => 'ativar', $this->Form->value('User.id')), null, sprintf(__('Você tem certeza que deseja ativar #%s?', true), $this->Form->value('User.name')));
			}
			?>
			</li>
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

		<div class="users form">
		<h1><?php printf(__('Edit %s', true), __('Usuários', true)); ?></h1>
			<?php echo $this->Form->create('User');?>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name', array('label' => 'Nome'));
				echo $this->Form->input('phone', array('label' => 'Telefone'));
				echo $this->Form->input('address', array('label' => 'Endereço'));
				echo $this->Form->input('username', array('label' => 'Login'));
				echo '<br />';
				echo $this->Form->input('admin', array('type' => 'checkbox', 'label' => 'Administrador'));
				echo '<br />';
				echo $this->Form->input('status', array('type' => 'checkbox', 'label' => 'Status'));
				echo '<br />';
			?>
		<?php echo $this->Form->end(__('Editar', true));?>
		</div>

	</div>

</div>
