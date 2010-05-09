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
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">
		
		<h1><?php  __('Usuário');?></h1>
		<blockquote>
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
				<dt<?php if ($i %2 == 0) echo $class;?>><?php __('Status'); ?></dt>
				<dd<?php if ($i++ % 2 == 0) echo $class;?>>
					<?php
					if($user['User']['status']) {
						echo 'Ativo';
					} else {
						echo 'Inativo';
					}
					?>
					&nbsp;
			</dl>
		</blockquote>
		<br />
		<div class="related">
			<h3><?php printf(__('Produtos %s', true), __('Relacionados', true));?></h3>
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
					<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Produto', true)), array('controller' => 'products', 'action' => 'add'));?> </li>
				</ul>
			</div>
		</div>