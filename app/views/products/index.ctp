<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('action' => 'index')); ?></li>
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
	
		<h1><?php __('Products');?></h1>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort(sprintf(__('Description', true)), 'description');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Price', true)), 'price');?></th>
				<th><?php echo $this->Paginator->sort(sprintf(__('Amount', true)), 'amount');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($products as $product):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
			if ($product['Product']['amount'] < 10) {
				$class = ' class="altrowAlert"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $product['Product']['description']; ?>&nbsp;</td>
			<td><?php echo $product['Product']['price']; ?>&nbsp;</td>
			<td><?php echo $product['Product']['amount']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $product['Product']['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $product['Product']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Tem certeza de que deseja excluir # %s?', true), $product['Product']['description'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>

		<div class="paging">
			<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
		 | 	<?php echo $this->Paginator->numbers();?>
	 |
			<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
		</div>
		
	</div>
	
</div>