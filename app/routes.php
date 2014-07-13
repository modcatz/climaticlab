<?php

	Route::get( '/', array( 'uses' => 'HomeController@index', 'as' => 'home') );

	Route::get( '/article/{id}', array( 'uses' => 'HomeController@article', 'as' => 'home_article' ) );


	Route::any( '/text/edit/{id}', array( 'uses' => 'HomeController@textEdit' ) );

	Route::any( '/auth', array( 'uses' => 'AuthController@auth', 'as' => 'auth_login' ) );

	Route::get( '/logout', array( 'uses' => 'AuthController@logout', 'as' => 'auth_logout' ) );




	Route::get( '/catalogue', array( 'uses' => 'HomeController@catalogue', 'as' => 'home_catalogue' ) );

	Route::get( '/catalogue/brand', array( 'uses' => 'HomeController@brandCatalogue', 'as' => 'home_brandCatalogue' ) );

	Route::get( '/category/{id}/{page?}', array( 'uses' => 'HomeController@category', 'as' => 'home_category' ) )->where( 'page', '[0-9]+')->where( 'id', '[0-9]+' );

	Route::get( '/brand/{id}/{page?}', array( 'uses' => 'HomeController@brand', 'as' => 'home_brand' ) )->where( 'page', '[0-9]+')->where( 'id', '[0-9]+' );

	Route::get( '/product/{id}', array( 'uses' => 'HomeController@product', 'as' => 'home_product' ) )->where( 'id', '[0-9]+' );



	Route::get( '/objects/{id?}', array( 'uses' => 'HomeController@objects', 'as' => 'home_objects' ) );

	Route::get( '/services/{id?}', array( 'uses' => 'HomeController@services', 'as' => 'home_services' ) );



	Route::get( '/contacts', array( 'uses' => 'HomeController@contacts', 'as' => 'home_contacts' ) );

	Route::post( '/contacts', array( 'uses' => 'HomeController@contacts_post', 'as' => 'home_contacts-post' ) );





	Route::get( '/seed', array( 'uses' => 'HomeController@seed', 'as' => 'seed' ) );

	Brand::deleted(function($brand){

		Product::where( 'brand_id', $brand->id )->update( array( 'brand_id' => null ) );		
	});

	
	View::composer( [ 'contacts', 'index', 'catalogue', 'category', 'product', 'error', 'brandsCatalogue', 'article', 'objects', 'services' ], function( $view )
	{
	    $view->nest('footer', 'footer');
	    $view->nest('menu', 'menu');

	});
	
	Route::get('{model}/a/file', array(
	    'as' => 'admin_display_file',
	    'uses' => 'Frozennode\Administrator\AdminController@displayFile'
	));

?>