<div id="main">
	<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
	?>
	<div class="post">

		<div class="users form" align="center">
		<h1><?php printf(__('Logar', true)); ?></h1>
		<?php echo $this->Form->create('User', array('action' => 'login'));?>
			<?php
				echo $this->Form->input('username', array('label' => 'Login'));
				echo $this->Form->input('password', array('label' => 'Senha'));
			?>
			<br />
		<?php echo $this->Form->end(__('Entrar', true));?>
		</div>
		
	</div>
	
</div>
