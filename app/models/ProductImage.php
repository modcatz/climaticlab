<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ProductImage extends Eloquent {

	
	protected $table = 'product_images';

	public function product()
	{
		return $this->belongsTo('Product');
	}

	public static function getImages( $product_id )
	{
		$images = ProductImage::whereProductId( $product_id )->orderBy('created_at', 'ASC')->get();
		

		if( !isset($images[0]) )
		{	
			$images = new ProductImage;
			$images->image = 'default.jpg';
			$images->product_id = $product_id;
		}

		return $images;
	}
}