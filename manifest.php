<?php

return array(
	'name' => 'ai-controller-jobs',
	'depends' => array(
		'aimeos-core',
		'ai-client-html',
	),
	'include' => array(
		'controller/common/src',
		'controller/jobs/src',
	),
	'i18n' => array(
		'controller/jobs' => 'controller/jobs/i18n',
	),
	'custom' => array(
		'controller/jobs' => array(
			'controller/jobs/src',
		),
		'controller/jobs/templates' => array(
			'controller/jobs/templates',
		),
	),
);
