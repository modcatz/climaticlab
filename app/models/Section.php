<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Section extends Eloquent {

	
	protected $table = 'sections';	
	
	public function categories()
	{
		return $this->hasMany('category');
	}		

	public static function getSections()
	{
		$raw = Section::orderBy( 'order', 'ASC' )->get();

		if( !isset( $raw[0] ) )
		{
			throw new Exception( 'No sections in database!' );
		}

		$result = [];

		foreach( $raw as $section )
		{
			$result[ $section->title ] = [];
		}

		return $result;	
	}

}