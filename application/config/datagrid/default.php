<?php

return array(
	'conf' => array(
		'model' => false,
		'edit' => true,
		'editlink' => $_SERVER['PATH_INFO'].'/add/%d',
		'delete' => false,
		'deletelink' => $_SERVER['PATH_INFO'].'/delete/%d',
	),
	'column' => array(
		'fieldname' => '',
		'label' => false,
		'child' => false,
		'responsive_col' => false
	)
);

?>