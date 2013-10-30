<?php

return array(
	'conf' => array(
		'attributes' => array(
			'name' => 'login',
			'class' => 'login'
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
					'type' => 'password',
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