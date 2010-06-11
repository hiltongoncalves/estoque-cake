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
				echo $this->Form->input('name', array('label' => 'Nome'));
				echo $this->Form->input('phone', array('label' => 'Telefone', 'after' => ' Ex.: (99) 9999-9999'));
				echo $this->Form->input('address', array('label' => 'Endereço'));
				echo $this->Form->input('email', array('label' => 'Email', 'after' => ' Ex.: exemplo@exemplo.com'));
				echo $this->Html->tag('br');
				echo $this->Form->input('admin', array('type' => 'checkbox', 'label' => false, 'after' => ' Administrador'));
				echo $this->Form->input('status', array('type' => 'checkbox', 'label' => false, 'after' => ' Status'));
				echo $this->Html->tag('br');
			?>
		<?php echo $this->Form->end(__('Editar', true));?>
		</div>

	</div>

</div>
