<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Category extends Eloquent {

	
	protected $table = 'categories';	

	public function products()
	{
		return $this->hasMany('Product', 'category_id');
	}

	public function section()
	{
		return $this->belongsTo('Section');
	}

	public static function getCategoryName( $category_id )
	{
		$category_name = Category::find( $category_id );
		
		$result = ( isset( $category_name->title ) ) ? $category_name->title : 0; 

		return $result;
	}

	public static function getCategories()
	{
		$raw = Category::orderBy('title', 'DESC')->get();

		if( !$raw )
		{
			throw new Exception('Couldn\'t retrieve categories from database');
		}

		$categories = Section::getSections();	// Получаем массив доступных секций и сортируем категории по секциям.

		foreach( $raw as $item )
		{
			$section = $item->section;			

			$categories[ $section['title'] ][] = $item;
		}  

		
		return $categories;
	}

}