<?php

return array(
	'attributes' => array(
		'action' => Request::current()->url(),
		'method' => 'post',
		'enctype' => 'multipart/form-data',
		'class' => 'admin',
		'name' => 'adminforrm'
	),
	'field' => array(
		'required' => false,
		'label' => 'Field Name',
		'tooltip' => array(
			'update' => true,
			'add' => true,
			'message' => false
		),
		'attributes' => array(
			'type' => 'text',
			'name' => 'fieldname',
			'value' => ''
		)
	),
	'submit' => array(
		'attributes' => array(
			'value' => 'Submit',
			'class' => 'submit-btn'
		)
	)
)

?>