<?php
//when name is set
//make the timing field required
$dependencies['clg_Programs']['atd'] = array(
	'hooks' => array("edit"),
	'trigger' => 'true',
	'triggerFields' => array('name')),
	'onload' => true,
	'actions' => array(
		array(
			'name' => 'setRequired'
			'params' => array(
				'target' => 'timing_c',
				'label' => 'timing_label',
				'value' => 'equal($name,"closed")',
				),
			),
		),
	);