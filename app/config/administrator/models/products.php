<?php
	return array(

	'title' => 'Продукты',

	'single' => 'Продукт',

	'model' => 'Product',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'title' => array(
			'title' => 'Название',			
		),
		'description' => array(
			'title' => 'Описание',			
		),
		'category' => array(
			'title' => 'Категория',
			'relationship' => 'category',
			'select' => '(:table).title'
		),
		'brand' => array(
			'title' => 'Бренд',
			'relationship' => 'brand',
			'select' => '(:table).title'
		),
		'image' => array(
			'title' => 'Изображение',						
			'output' => '<a target="_blank" href="/images/products/(:value)"><img src="/images/products/(:value)" style="width:200px" /></a>'
		),
	),

	'filters' => array(

		'title' => array(
				'title' => 'Название',		
				
			),
		'brand' => array(
				'title' => 'Бренд',
				'type' => 'relationship',
				'name_field' => 'title',
				'options_filter' => function(){},
			),
		'category' => array(
				'title' => 'Категория',
				'type' => 'relationship',
				'name_field' => 'title',
				'options_filter' => function(){},
			)
	),
	
	'edit_fields' => array(
		'title' => array(
			'title' => 'Название',
			'type' => 'text',
		),

		'description' => array(
			'title' => 'Описание',
			'type' => 'textarea',
		),

		'category' => array(
			'title' => 'Категория',
			'type' => 'relationship',
			'editable' => true,
			'name_field' => 'title',
			'options_filter' => function(){},

		),

		'brand' => array(
			'title' => 'Бренд',
			'type' => 'relationship',
			'editable' => true,
			'name_field' => 'title',
			'options_filter' => function(){},

		),

		'image' => array(
			'title' => 'Изображение',
			'type' => 'image',
			'location' => public_path() . '/images/products/',
			'naming' => 'random',
			'length' => 10,
			'size' => 2,
			'sizes' =>  array( array( 500, 500, 'fit', public_path() . '/images/products/full/', 100 ), 
						 	   array( 200, 200, 'crop', public_path() . '/images/products/small/', 100 ),
						 	   array( 100, 100, 'crop', public_path() . '/images/products/thumb/', 100 )
							 )

		),

		/*'sort' => array(
	  		'field' => 'title',
	   		'direction' => 'asc',
		),*/
	),
)


?>