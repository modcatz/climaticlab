<?php
	return array(

	'title' => 'Категории',

	'single' => 'Категория',

	'model' => 'Category',	
	
	'columns' => array(
		'id',
		'title' => array(
			'title' => 'Название',			
		),
		'description' => array(
			'title' => 'Описание',
		),		
		'section' => array(
			'title' => 'Раздел',
			'relationship' => 'section',
			'select' => '(:table).title'
			),
		'image' => array(
			'title' => 'Изображение',						
			'output' => '<a target="_blank" href="/images/products/(:value)"><img src="/images/products/(:value)" style="width:200px" /></a>'
		),
		'section' => array(
			'title' => 'Раздел',
			'relationship' => 'section',
			'select' => '(:table).title'
			)
		
	),

	'filters' => array(

		'section' => array(
				'title' => 'Раздел',
				'type' => 'relationship',
				'name_field' => 'title',
				
			)
	),
	
	'edit_fields' => array(
		'title' => array(
			'title' => 'Название',
			'type' => 'text',
		),
		'description' => array(
			'title' => 'Описание',
			'type' => 'text',
		),

		'section' => array(
			'title' => 'Категория',
			'type' => 'relationship',
			'editable' => true,
			'name_field' => 'title',
			
			'options_filter' => function(){},
			'sort_field' => 'title',
		),'image' => array(
			'title' => 'Изображение',
			'type' => 'image',
			'location' => public_path() . '/images/products/',
			'naming' => 'random',
			'length' => 10,
			'size' => 2,
			'sizes' => array( array( 200, 200, 'exact', public_path() . '/images/products/', 100 ) )
		),
	),
		
)


?>