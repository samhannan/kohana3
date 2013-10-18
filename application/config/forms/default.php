<?php

return array(
	'attributes' => array(
		'action' => Request::current()->url(),
		'method' => 'post',
		'enctype' => 'multipart/form-data',
		'class' => 'standard',
		'name' => 'standard'
	),
	'field' => array(
		'required' => false,
		'label' => 'Field Name',
		'attributes' => array(
			'type' => 'text',
			'name' => 'fieldname'
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