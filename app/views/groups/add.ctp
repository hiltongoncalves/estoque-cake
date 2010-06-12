<div id="sidebar">

	<div class="sidebox">

		<h1 class="clear"><?php __('Ações'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Grupo', true)), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Grupos', true)), array('action' => 'index')); ?> </li>
		</ul>

	</div>

</div>

<div id="main">
	<div class="post">
	<h1><?php printf(__('Adicionar %s', true), __('Grupo', true)); ?></h1>
	<?php echo $this->Form->create('Group');?>
		<?php
			echo $this->Form->input('name');
		?>
	<br />
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>
</div>