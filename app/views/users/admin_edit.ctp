<div id="sidebar">
	
	<div class="sidebox">
	
		<h1 id="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
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
