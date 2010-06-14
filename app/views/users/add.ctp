<div id="sidebar">

	<div class="sidebox">

		<h1 class="clear"><?php __('Ações'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index')); ?> </li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">
	<h1><?php printf(__('Add %s', true), __('User', true)); ?></h1>
	<?php echo $this->Form->create('User');?>
		<?php
			echo $this->Form->input('username', array('label' => __('Login')));
			echo $this->Form->input('password', array('label' => __('Password')));
			echo $this->Form->input('group_id', array('label' => __('Group')));
		?>
		<br />
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>
</div>