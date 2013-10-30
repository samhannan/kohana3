<?php include Kohana::find_file('views', 'component/errors');
if($form_act):
	if($form_act == 'upd'): ?>
		<p>Your record was succesfully updated</p> <?php
	else: ?>
		<p>Your record was sucesfully added</p> <?php
	endif;
endif;
echo $grid;
?>
