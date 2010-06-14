<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">

		<div class="users form" align="center">
		<h1><?php printf(__('Login', true)); ?></h1>
		<?php echo $this->Form->create('User', array('action' => 'login'));?>
			<?php
				echo $this->Form->input('username', array('label' => sprintf(__('Username', true))));
				echo $this->Form->input('password', array('label' => sprintf(__('Password', true))));
			?>
			<br />
		<?php echo $this->Form->end(__('Login', true));?>
		</div>
		
	</div>
	
</div>
