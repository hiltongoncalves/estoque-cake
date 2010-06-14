<div id="sidebar">

	<div class="sidebox">

		<h1 id="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Group.id')), null, sprintf(__('Tem certeza que deseja excluir # %s?', true), $this->Form->value('Group.id'))); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('action' => 'add'));?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Groups', true)), array('action' => 'index'));?></li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>

	<div class="post">
	<h1><?php printf(__('Edit %s', true), __('Group', true)); ?></h1>
	<?php echo $this->Form->create('Group');?>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
		?>
	<br />
	<?php echo $this->Form->end(__('Edit', true));?>
	</div>
</div>