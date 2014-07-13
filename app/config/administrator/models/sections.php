<?php
	return array(

	'title' => 'Разделы',

	'single' => 'Раздел',

	'model' => 'Section',

	
	'columns' => array(
		'id',
		'title' => array(
			'title' => 'Название',			
		),
		'order' => array(
			'title' => 'Порядковый номер',			
		),		
	),
	
	'filters' => array(
		'title' => array(
				'title' => 'Название',						
			),
	),

	'edit_fields' => array(
		'title' => array(
			'title' => 'Название',
			'type' => 'text',
		),

		'order' => array(
			'title' => 'Порядковый номер',
			'type' => 'number',
		),		
		
	),
)


?>