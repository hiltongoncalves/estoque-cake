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
		<?php echo $this->Form->create('Product', array(
			'url' => array_merge(array('action' => 'find'), $this->params['pass'])
			)); ?>
		<?php
			echo $this->Form->input('username', array('div' => false));
			echo $this->Form->input(__('search', true), array('div' => false));
			// echo $this->Form->input('range', array('div' => false));
		?>
		<br />
		<br />
		<?php echo $this->Form->end(__('Find', true), array('div' => false)); ?>
	</div>
	<br />
	<div class="post">

		<h1><?php __('Produtos');?></h1>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('description');?></th>
				<th><?php echo $this->Paginator->sort('price');?></th>
				<th><?php echo $this->Paginator->sort('amount');?></th>
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
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['description'])); ?>
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