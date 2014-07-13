<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Product extends Eloquent {

	
	protected $table = 'products';

	public function category()
	{
		return $this->belongsTo('Category');
	}

	public function images()
	{
		return $this->hasMany('ProductImage');
	}

	public function brand()
	{
		return $this->belongsTo('Brand');
	}

	public static function getProducts( $category_id, $page_n, $by )
	{
		$skip = $page_n * 12 - 12; // Пропускаем 12 продуктов за каждую предыдущую страницу

		$by = $by . '_id';		

		$pages = (integer)(Product::where( $by, '=', $category_id )->count() / 12) + 1; // Считаем, сколько страниц требуется для размещения оставшихся продуктов

		$products = Product::where( $by, '=', $category_id )->skip( $skip )->take(12)->get( [ 'id', 'title', 'image' ] );			

		return [ 'products' => $products, 'pages' => $pages ];
	}	

	/*public static function seed()
	{
		$seeds = Product::get();

		for( $i = 0 ; $i < 100; $i++ )
		{
			$r = rand(1,4);

			$item = Product::findOrFail($r);
			$newItem = $item->replicate();	
			$newItem->save();			
		}

		return $seeds;
	}*/
}