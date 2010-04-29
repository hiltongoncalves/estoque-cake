<div id="content-wrap"><div id="content">
<?php echo $this->Session->flash('auth'); ?>
	<div id="sidebar">
	
		<div class="sidebox">
		
			<h1 id="clear"><?php __('Actions'); ?></h1>
			<ul class="sidemenu">
				<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Venda', true)), array('action' => 'edit', $sale['Sale']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Venda', true)), array('action' => 'delete', $sale['Sale']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sale['Sale']['id'])); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Vendas', true)), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('Nova %s', true), __('Venda', true)), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Usuários', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Usuário', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Produtos', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Produto', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
			
		</div>
	
	</div>

	<div id="main">
		
		<div class="post">

		<blockquote>
		<h1><?php  __('Venda');?></h1>
			<dl><?php $i = 0; $class = ' class="altrow"';?>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $sale['Sale']['id']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuário'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $this->Html->link($sale['User']['name'], array('controller' => 'users', 'action' => 'view', $sale['User']['id'])); ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado em'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $time->niceShort($sale['Sale']['created']); ?>
					&nbsp;
				</dd>
			</dl>
			</blockquote>
			<br />
			<div class="related">
				<h3><?php printf(__('%s Relacionados', true), __('Produtos', true));?></h3>
				<?php if (!empty($sale['Product'])):?>
				<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php __('ID'); ?></th>
					<th><?php __('Descrição'); ?></th>
					<th><?php __('Preço'); ?></th>
					<th><?php __('ID do Usuário'); ?></th>
					<th class="actions"><?php __('Actions');?></th>
				</tr>
				<?php
					$i = 0;
					$total = 0;
					foreach ($sale['Product'] as $product):
						$total += $product['price'];
						$class = null;
						if ($i++ % 2 == 0) {
							$class = ' class="altrow"';
						}
					?>
					<tr<?php echo $class;?>>
						<td><?php echo $product['id'];?></td>
						<td><?php echo $product['description'];?></td>
						<td><?php echo $product['price'];?></td>
						<td><?php echo $product['user_id'];?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View', true), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
							<?php echo $this->Html->link(__('Edit', true), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
							<?php echo $this->Html->link(__('Delete', true), array('controller' => 'products', 'action' => 'delete', $product['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				<th colspan="2"><?php __('Total'); ?></th>
				<th><?php echo $total;?></th>
				</table>
			<?php endif; ?>

				<div class="actions">
					<ul>
						<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Produto', true)), array('controller' => 'products', 'action' => 'add'));?> </li>
					</ul>
				</div>
			</div>
		</div>
			
	</div>
	
</div></div>
