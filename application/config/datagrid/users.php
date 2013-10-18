<?php

return array(
	'conf' => array(
		'model' => 'User',
		'delete' => false
	),
	'columns' => array(
		array(
			'fieldname' => 'id',
			'label' => 'ID'
		),
		array(
			'fieldname' => 'email',
			'label' => 'Email Address'
		),
		array(
			'fieldname' => 'firstname',
			'child' => 'detail'
		),
		array(
			'fieldname' => 'surname',
			'child' => 'detail',
			'responsive_col' => true
		)
	)
);

?>