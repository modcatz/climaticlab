<?php
	return array(

	'title' => 'Бренды',

	'single' => 'Бренд',

	'model' => 'Brand',

	
	'columns' => array(
		'id',
		'title' => array(
			'title' => 'Название',		
		),		
		'products' => array(
			'title' => 'Продукты',
			'relationship' => 'products',
			'select' => 'COUNT((:table).id)',
		),
		
		
	),

	'filters' => array(

		'title' => array(
				'title' => 'Название',
			/*	'type' => 'relationship',*/		
				
			)
	),	
	
	'edit_fields' => array(
		'title' => array(
			'title' => 'Название',
			'type' => 'text',
		),
		'products' => array(
			'title' => 'Категория',
			'type' => 'relationship',
			'editable' => true,
			'name_field' => 'title',
			
			'options_filter' => function(){},
			'sort_field' => 'title',
		)
	),
)


?>