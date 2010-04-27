<div class="products view">
<h2><?php  __('Product');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($product['User']['name'], array('controller' => 'users', 'action' => 'view', $product['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Product', true)), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Product', true)), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Sales', true)), array('controller' => 'sales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Sale', true)), array('controller' => 'sales', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Sales', true));?></h3>
	<?php if (!empty($product['Sale'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Sale'] as $sale):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sale['id'];?></td>
			<td><?php echo $sale['user_id'];?></td>
			<td><?php echo $sale['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sales', 'action' => 'view', $sale['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sales', 'action' => 'edit', $sale['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sales', 'action' => 'delete', $sale['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Sale', true)), array('controller' => 'sales', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
