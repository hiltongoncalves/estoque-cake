<div id="sidebar">

	<div class="sidebox">

		<h1 id="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Group.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Group.id'))); ?></li>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('action' => 'add'));?></li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index'));?></li>
		</ul>

	</div>

</div>

<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	
	<div class="post">
		<h1><?php printf(__('Edit %s', true), __('User', true)); ?></h1>
		<?php echo $this->Form->create('User');?>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username', array('label' => sprintf(__('Username', true))));
				echo $this->Form->input('password', array('label' => sprintf(__('Password', true))));
				echo $this->Form->input('group_id', array('label' => sprintf(__('Group', true))));
			?>
		<br />
		<?php echo $this->Form->end(__('Edit', true));?>
	</div>
</div>