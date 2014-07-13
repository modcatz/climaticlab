<?php
	return array(

	'title' => 'Статьи',

	'single' => 'Статья',

	'model' => 'Text',

	
	'columns' => array(
		'id',
		'title' => array(
			'title' => 'Название',				
		),
		'content' => array(
			'title' => 'Контент',
			'output' => function( $model )
						{
							$text = Text::whereContent( $model )->first();
							
							return '<a href="/text/edit/' . $text->id . '">Редактировать</a>';
						} 	
			),
		'section' => array(
			'title' => 'Раздел',
			'output' => function( $model )
						{
							switch( $model )
							{
								case '1':
									return 'Нет категории';
									break;
								case '2':
									return 'Главная 2';
									break;
								case '3':
									return 'Главная 3';
									break;
								case '4':
									return 'Главная 4';
									break;
								case '11':
									return 'Услуги';
									break;
								case '12':
									return 'Объекты';
									break;
								default:
									return '0';
									break;
							}
						} 	
		),
		'image' => array(
			'title' => 'Изображение',						
			'output' => function( $model )
						{
							$text = Text::whereImage( $model )->first();
							
							if( $text->section == '11' )
							{
								return '<a target="_blank" href="/images/articles/' . $text->image . '"><img src="/images/articles/' . $text->image . '" style="width:200px" /></a>';	
							}
								
						} 	
		),
	),
	
	/*'filters' => array(
		'title' => array(
				'title' => 'Название',						
			),
	),*/

	'edit_fields' => array(
		'title' => array(
			'title' => 'Заголовок',
			'type' => 'text',
		),
		'section' => array(
			'title' => 'Раздел',
			'type' => 'enum',
			'options' => array( /*'1' => 'Главная1', '2' => 'Главная2', '3' => 'Главная3', '4' => 'Главная4',*/ '11' => 'Услуги', '12' => 'Объекты' )
		),
		'image' => array(
			'title' => 'Изображение',
			'type' => 'image',
			'location' => public_path() . '/images/articles/',
			'naming' => 'random',
			'length' => 10,
			'size' => 2
			
		),
		/*'order' => array(
			'title' => 'Порядковый номер',
			'type' => 'number',
		),		*/
		
	),
)


?>