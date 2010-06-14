<div id="sidebar">

	<div class="sidebox">
		
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('action' => 'add'));?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(sprintf(__('Find %s', true), __('Products', true)), array('action' => 'find')); ?></li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">
 		<h1><?php printf(__('Add %s', true), __('Product', true)); ?></h1>
		<?php echo $this->Form->create('Product');?>
		<?php
			echo $this->Form->input('description', array('label' => sprintf(__('Description', true))));
			echo $this->Form->input('price', array('label' => sprintf(__('Price', true)), 'after' => ' Ex.: 35.00'));
			echo $this->Form->input('amount', array('label' => sprintf(__('Description', true))));
			echo $this->Form->input('user_id', array('label' => sprintf(__('User', true)), 'value' => $this->Session->read('Auth.User.id'), 'type' => 'hidden'));
		?>
		<br />
		<?php echo $this->Form->end(__('Add', true));?>
		
	</div>

</div>
