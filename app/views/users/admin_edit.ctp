<div id="content-wrap"><div id="content">

	<div id="main">
		
		<div class="post">

			<div class="users form">
			<?php echo $this->Form->create('User');?>
			 		<legend><?php printf(__('Edit %s', true), __('User', true)); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
					echo $this->Form->input('phone');
					echo $this->Form->input('address');
					echo $this->Form->input('username');
					echo $this->Form->input('admin', array('type' => 'checkbox', 'label' => 'Administrador'));
				?>
			<?php echo $this->Form->end(__('Submit', true));?>
			</div>

		</div>

	</div>
	<div id="sidebar">
		
		<div class="sidebox">
		
			<h1 id="clear"><?php __('Actions'); ?></h1>
			<ul class="sidemenu">
				<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index'));?></li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sales', true)), array('controller' => 'sales', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Sale', true)), array('controller' => 'sales', 'action' => 'add')); ?> </li>
			</ul>
	
	</div>
	
	</div>
</div></div>
