<div id="sidebar">

	<div class="sidebox">

		<h1 class="clear"><?php __('Actions'); ?></h1>
		<ul class="sidemenu">
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Groups', true)), array('action' => 'index')); ?> </li>
		</ul>

	</div>

</div>

<div id="main">
	<div class="post">
	<h1><?php printf(__('Add %s', true), __('Group', true)); ?></h1>
	<?php echo $this->Form->create('Group');?>
		<?php
			echo $this->Form->input('name');
		?>
	<br />
	<?php echo $this->Form->end(__('Add', true));?>
	</div>
</div>