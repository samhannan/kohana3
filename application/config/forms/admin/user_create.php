<?php

return array(
	'conf' => array(
		'attributes' => array(
			'name' => 'createuser'
		),
		'fields' => array(
			array(
				'label' => 'Email Address',
				'required' => true,
				'attributes' => array(
					'name' => 'emaill',
					'type' => 'text',
				)
			),
			array(
				'label' => 'Firstname',
				'required' => true,
				'attributes' => array(
					'name' => 'firstname',
					'type' => 'text',
				)
			),
			array(
				'label' => 'Surname',
				'required' => true,
				'attributes' => array(
					'name' => 'surname',
					'type' => 'text',
				)
			),
			array(
				'label' => 'Role',
				'required' => true,
				'options' => FormBuilder::getSelectOptions('Role', array('key'=>'id', 'label'=>'name')),
				'attributes' => array(
					'name' => 'role',
					'type' => 'select',
				)
			),
			array(
				'label' => 'Password',
				'required' => true,
				'tooltip' => array(
					'update' => false,
					'message' => 'Leave blank if you do not wish to update your password'
				),
				'attributes' => array(
					'name' => 'password',
					'type' => 'text',
				)
			),
			array(
				'label' => 'Confirm Password',
				'required' => true,
				'attributes' => array(
					'name' => 'password_confirm',
					'type' => 'text',
				)
			)
		),
		'submit' => array(
			'attributes' => array(
				'value' => 'Add User'
			)
		)
	)
);