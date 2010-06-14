<div id="sidebar">
	
	<div class="sidebox">
	
		<h1 id="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Product.id')), null, sprintf(__('Tem certeza que deseja excluir # %s?', true), $this->Form->value('Product.id'))); ?></li>
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
		 
		<h1><?php printf(__('Edit %s', true), __('Product', true)); ?></h1>
		<?php echo $this->Form->create('Product');?>
			<?php
				echo $this->Form->input('id');
				echo '<h2>'.$product['Product']['description'].'</h2>';
				echo $this->Form->input('price', array('label' => sprintf(__('Price', true))));
				echo $this->Form->input('amount', array('label' => sprintf(__('Amount', true))));
				echo $this->Form->input('user_id', array('default' => $this->Session->read('Auth.User.id'), 'type' => 'hidden'));
			?>
			<br />
		<?php echo $this->Form->end(__('Edit', true));?>

	</div>

</div>
