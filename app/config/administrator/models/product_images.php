<?php
	return array(

	'title' => 'Изображения',

	'single' => 'Изображение',

	'model' => 'ProductImage',

	
	'columns' => array(
		'id',
		/*'title' => array(
			'title' => 'Название',			
		),	*/	
		'product_id' => array(
			'title' => 'Продукт',
			'relationship' => 'product',
			'select' => '(:table).title',
		),
		'image' => array(
			'title' => 'Изображение',						
			'output' => '<a target="_blank" href="/images/products/full/(:value)"><img src="/images/products/full/(:value)" style="width:200px" /></a>'
		),
		
	),

	'filters' => array(

		'product' => array(
				'title' => 'Product',
				'type' => 'relationship',
				'name_field' => 'title',
				'options_filter' => function(){},
			)
	),
	
	'edit_fields' => array(		

		'image' => array(
			'title' => 'Изображение',
			'type' => 'image',
			'location' => public_path() . '/images/products/',
			'naming' => 'random',
			'length' => 10,
			'size' => 2,
			'sizes' => array( array( 500, 500, 'exact', public_path() . '/images/products/full/', 100 ),
							  array( 100, 100, 'fit', public_path() . '/images/products/thumb/', 100 ),
							)
		),
		'product' => array(
			'title' => 'Продукт',
			'type' => 'relationship',
			'editable' => true,
			'name_field' => 'title',
			'options_filter' => function(){},
		)
	),
)

?>