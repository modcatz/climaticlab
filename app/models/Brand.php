<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Brand extends Eloquent {

	
	protected $table = 'brands';	

	public function products()
	{
		return $this->hasMany('Product');
	}

	public static function getBrandName( $brand_id )
	{
		$brand_name = brand::find( $brand_id );
		
		$result = ( isset( $brand_name->title ) ) ? $brand_name->title : 0; 

		return $result;
	}

	public static function getBrands()
	{
		$raw = Brand::orderBy( 'order', 'ASC' )->get( [ 'id', 'title'/*, 'image'*/] );

		if( !isset( $raw[0] ) )
		{
			throw new Exception( 'No brands in database!' );
		}	
		

		return $raw;	
	}
}