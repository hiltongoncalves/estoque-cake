<div id="sidebar">

	<div class="sidebox">

		<h1 class="clear"><?php __('Ações'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Usuário', true)), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Usuários', true)), array('action' => 'index')); ?> </li>
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
			echo $this->Form->input('username', array('label' => 'Login'));
			echo $this->Form->input('password', array('label' => 'Senha'));
			echo $this->Form->input('group_id', array('label' => 'Grupo'));
		?>
		<br />
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>
</div>