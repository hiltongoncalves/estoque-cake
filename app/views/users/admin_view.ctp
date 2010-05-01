<div id="sidebar">
	
	<div class="sidebox">
	
		<h1 id="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Usuário', true)), array('action' => 'edit', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Usuário', true)), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Usuários', true)), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Usuário', true)), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Produtos', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Produto', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Vendas', true)), array('controller' => 'sales', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('Nova %s', true), __('Venda', true)), array('controller' => 'sales', 'action' => 'add')); ?> </li>
		</ul>

	</div>

</div>

<div id="main">
	
	<div class="post">
		
		<blockquote>
		<h1><?php  __('User');?></h1>
			<dl><?php $i = 0; $class = ' class="altrow"';?>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $user['User']['id']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $user['User']['name']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $user['User']['phone']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php echo $user['User']['address']; ?>
					&nbsp;
				</dd>
				<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php
					if($user['User']['admin']) {
						echo 'Administrador';
					} else {
						echo 'Funcionário';
					}
					?>
					&nbsp;
				</dd>
			</dl>
		</blockquote>
		<br />
		<div class="related">
			<h3><?php printf(__('Related %s', true), __('Products', true));?></h3>
			<?php if (!empty($user['Product'])):?>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php __('Id'); ?></th>
				<th><?php __('Description'); ?></th>
				<th><?php __('Price'); ?></th>
				<th><?php __('User Id'); ?></th>
				<th class="actions"><?php __('Actions');?></th>
			</tr>
			<?php
				$i = 0;
				foreach ($user['Product'] as $product):
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
			</table>
		<?php endif; ?>

			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('controller' => 'products', 'action' => 'add'));?> </li>
				</ul>
			</div>
		</div>
		<br />
		<div class="related">
			<h3><?php printf(__('Related %s', true), __('Sales', true));?></h3>
			<?php if (!empty($user['Sale'])):?>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php __('Id'); ?></th>
				<th><?php __('User Id'); ?></th>
				<th><?php __('Created'); ?></th>
				<th class="actions"><?php __('Actions');?></th>
			</tr>
			<?php
				$i = 0;
				foreach ($user['Sale'] as $sale):
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

	</div>

</div>
