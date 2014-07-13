<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Text extends Eloquent {

	
	protected $table = 'texts';	

	/*

	Поле Section:

	1 - Главная1
	2 - Главная2
	3 - Главная3
	4 - Главная4

	11 - Услуги
	12 - Объекты

	*/

	public static function getServices()
	{
		$raw = Text::whereSection( '11' )->get();

		return $raw;
	}

	public static function getObjects()
	{
		$raw = Text::whereSection( '12' )->get();

		return $raw;
	}

	public static function getIndexArticles()
	{
		$articles = [];

		for( $i = 1; $i <= 4; $i++ )
		{
			$raw = Text::whereSection( $i )->first();
			$articles[] = $raw;
		}

		return $articles;
	}

	
	public function setSectionAttribute( $value )
	{
		switch( $value )
		{
			case 'Нет категории':

				$item = 1;
				break;

			case 'Главная2':

				$item = 2;
				break;

			case 'Главная3':

				$item = 3;
				break;

			case 'Главная4':

				$item = 4;
				break;

			case 'Услуги':

				$item = 11;
				break;

			case 'Объекты':

				$item = 12;
				break;
			default:
				$item = 0;
				break;
					
		}
		
		if( $item == 12 )
		{
			$current = Text::whereSection( $item )->first();

			if( isset($current) )
			{
				$current->section = 1;
				$current->save();
			}
			
		}

		if( $item )
		{
			$this->attributes[ 'section' ] = $item;
		}

		
	}

}