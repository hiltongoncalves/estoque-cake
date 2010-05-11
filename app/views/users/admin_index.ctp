<div id="sidebar">
	
	<div class="sidebox">
		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Usuário', true)), array('action' => 'add')); ?></li>
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
		
		<h1><?php __('Usuários');?></h1>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<th><?php echo $this->Paginator->sort('ID', 'id');?></th>
				<th><?php echo $this->Paginator->sort('Nome', 'name');?></th>
				<th><?php echo $this->Paginator->sort('Tipo', 'admin');?></th>
				<th><?php echo $this->Paginator->sort('Status', 'status');?></th>
				<th class="actions"><?php __('Actions');?></th>
			</tr>
		<?php
		$i = 0;
		foreach ($users as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr<?php echo $class;?>>
				<td><?php echo $user['User']['id']; ?>&nbsp;</td>
				<td><?php echo $user['User']['name']; ?>&nbsp;</td>
				<td>
					<?php
					if($user['User']['admin']) {
						echo 'Administrador';
					} else {
						echo 'Funcionário';
					}
					?>
				</td>
				<td>
					<?php
					if($user['User']['status']) {
						echo 'Ativo';
					} else {
						echo 'Inativo';
					}
					?>
				</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
					<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
					<?php
					if ($user['User']['status']) {
						echo $this->Html->link(__('Desativar', true), array('action' => 'desativar', $this->Form->value('User.id')), null, sprintf(__('Você tem certeza que deseja desativar #%s?', true), $user['User']['name']));
					} else {
						echo $this->Html->link(sprintf(__('Ativar', true)), array('action' => 'ativar', $user['User']['id']), null, sprintf(__('Você tem certeza que deseja ativar #%s', true), $user['User']['name']));
					}?>
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
