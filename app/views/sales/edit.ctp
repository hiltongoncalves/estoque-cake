<div id="sidebar">
	
	<div class="sidebox">
	
		<h1 id="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Sale.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Sale.id'))); ?></li>
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

		<h1><?php printf(__('Edit %s', true), __('Sale', true)); ?></h1>
		<?php echo $this->Form->create('Sale');?>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('created', array('disabled' => true, 'label' => sprintf(__('Created', true))));
				echo $this->Form->input('user_id', array('label' => sprintf(__('User', true)), 'default' => $this->Session->read('Auth.User.id')));
				echo $this->Form->input('Product', array('label' => sprintf(__('Products', true))));
			?>
			<br />
		<?php echo $this->Form->end(__('Edit', true));?>

	</div>
	
</div>
