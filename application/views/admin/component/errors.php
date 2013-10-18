<?php if(isset($errors) && count($errors)): ?>
	<ul class="error"> <?php
		foreach($errors as $k => $v):
			if($k != '_external'): ?>
				<li><?php echo ucfirst($v); ?></li> <?php
			endif;
		endforeach;
		if(array_key_exists('_external', $errors)):
			foreach($errors['_external'] as $k => $v): ?>
				<li><?php echo ucfirst($v); ?></li> <?php
			endforeach;
		endif; ?>
	</ul>
<?php endif; ?>