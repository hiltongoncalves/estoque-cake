<div id="sidebar">

	<div class="sidebox">
		<h1 class="clear"><?php __('Ações'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Produto', true)), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Usuários', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('Novo %s', true), __('Usuário', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	
	</div>
	
</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">
	
		<h1><?php __('Produtos');?></h1>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('ID', 'id');?></th>
				<th><?php echo $this->Paginator->sort('Descrição', 'description');?></th>
				<th><?php echo $this->Paginator->sort('Preço', 'price');?></th>
				<th><?php echo $this->Paginator->sort('Quantidade', 'amount');?></th>
				<th class="actions"><?php __('Ações');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($products as $product):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $product['Product']['id']; ?>&nbsp;</td>
			<td><?php echo $product['Product']['description']; ?>&nbsp;</td>
			<td><?php echo $product['Product']['price']; ?>&nbsp;</td>
			<td><?php echo $product['Product']['amount']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $product['Product']['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $product['Product']['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
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
