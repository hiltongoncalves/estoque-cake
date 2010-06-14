<div id="sidebar">

	<div class="sidebox">
		
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Sale', true)), array('action' => 'add'));?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sales', true)), array('action' => 'index'));?></li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">
 		<h1><?php printf(__('Add %s', true), __('Sale', true)); ?></h1>
		<?php echo $this->Form->create('Sale');?>
			<?php
				echo $this->Form->input('user_id', array('label' => sprintf(__('User', true)), 'value' => $this->Session->read('Auth.User.id'), 'type' => 'hidden'));
				echo $this->Form->input('Product', array('label' => sprintf(__('Products', true))));
			?>
		<br />
		<?php echo $this->Form->end(__('Add', true));?>
	
	</div>
	
</div>
