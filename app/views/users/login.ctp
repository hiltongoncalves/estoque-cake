<div id="content-wrap"><div id="content">

	<div id="main">
		
		<div class="post">

			<div class="users form">
			<?php echo $this->Form->create('User', array('action' => 'login'));?>
			 		<legend><?php printf(__('Login %s', true), __('User', true)); ?></legend>
				<?php
					echo $this->Form->input('username');
					echo $this->Form->input('password');
				?>
			<?php echo $this->Form->end(__('Submit', true));?>
			</div>
			
		</div>
		
	</div>
</div></div>
