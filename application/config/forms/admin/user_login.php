<?php

return array(
	'conf' => array(
		'attributes' => array(
			'name' => 'login'
		),
		'fields' => array(
			array(
				'label' => 'Email Address',
				'required' => true,
				'attributes' => array(
					'name' => 'email',
					'type' => 'text',
				)
			),
			array(
				'label' => 'Password',
				'required' => true,
				'attributes' => array(
					'name' => 'password',
					'type' => 'text',
				)
			)
		),
		'submit' => array(
			'attributes' => array(
				'value' => 'Login'
			)
		)
	)
);