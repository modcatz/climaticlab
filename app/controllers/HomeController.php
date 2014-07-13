<?php

class HomeController extends BaseController {

	public function index()
	{	
		$articles = Text::getIndexArticles();

		View::share('page', 'index');	
		return View::make('index', [ 'articles' => $articles ] )->nest( 'headerView', 'header' );
	}

	public function catalogue()
	{
		$categories = Category::getCategories();

		View::share('page', 'catalogue');
		return View::make('catalogue', array( 'categories' => $categories ) )->nest( 'headerView', 'header' );
	}

	public function brandCatalogue()
	{	
		$brands = Brand::getBrands();

		View::share('page', 'catalogue');
		return View::make('brandsCatalogue', array( 'brands' => $brands ) )->nest( 'headerView', 'header' );
	}

	public function article()
	{
		$article_id = Route::input( 'id' );

		$article = Text::find( $article_id );

		if( !isset( $article ) || $article->section > 4 )
		{
			View::share('page', 'index');
			return View::make( 'error', [ 'message' => '404' ] )->nest( 'headerView', 'header' );
		}

		View::share('page', 'index');
		return View::make( 'article', [ 'article' => $article ] )->nest( 'headerView', 'header');
			
	}

	public function category()
	{
		$category_id = Route::input( 'id' );		

		$category = Category::getCategoryName( $category_id );

		if( !$category )
		{

			return View::make( 'error', [ 'message' => '404' ] )->nest( 'headerView', 'header' );
		}	

		$page_n = Route::input( 'page' );

		if( !$page_n )
		{
			$page_n = 1;
		}

		$data = Product::getProducts( $category_id, $page_n, 'category' );		
		
		View::share('page', 'category');
		return View::make('category', array( 'products' => $data['products'], 'category' => $category , 'page_n' => $page_n, 'pages' => $data['pages'] ) )->nest( 'headerView', 'header' );
	}

	public function brand()
	{
		$category_id = Route::input( 'id' );		

		$category = Brand::getBrandName( $category_id );

		if( !$category )
		{
			return View::make( 'error', [ 'message' => '404' ] )->nest( 'headerView', 'header' );
		}	

		$page_n = Route::input( 'page' );

		if( !$page_n )
		{
			$page_n = 1;
		}

		$data = Product::getProducts( $category_id, $page_n, 'brand' );		
		
		View::share('page', 'category');
		return View::make('category', array( 'products' => $data['products'], 'category' => $category , 'page_n' => $page_n, 'pages' => $data['pages'] ) )->nest( 'headerView', 'header' );
	}

	public function product()
	{
		$product_id = Route::input( 'id' );
		$product = Product::find( $product_id );

		if( !isset( $product ) )
		{
			return View::make( 'error', [ 'message' => '404' ] )->nest( 'headerView', 'header' );
		}	

		$category = $product->category;
		$images = ProductImage::getImages( $product_id );

		View::share('page', 'product');
		return View::make( 'product', [ 'product' => $product, 'category' => $category, 'images' => $images ] )->nest( 'headerView', 'header' );
	}

	public function contacts()
	{	
		View::share('page', 'contacts');
		return View::make( 'contacts', [] )->nest( 'headerView', 'header' );
	}


	public function contacts_post()
	{
		$data = Request::all();

		if( isset( $data ) && $data['name'] && $data['email'] && $data['message'] )
		{
			$report = Mail::send( 'mail', [ 'name' => $data['name'], 'email' => $data['email'], 'msg' => $data['message'] ], function( $message )
			{
				$message->to( 'clients@climaticlab.ru', 'Форма обратной связи' )->subject( 'Новое сообщение от клиента' )->from( 'clients@climaticlab.ru' );
			});

			$sent = 'Ваше сообщение отправлено.';
			$not_sent = 'К сожалению, нам не удалось отправить ваше сообщение.';

			$report = ( $report ) ? $sent : $not_sent;			
		}
		else
		{
			$report = 'Недостаточно данных';
		}

		View::share('page', 'contacts');
		return View::make( 'contacts', [ 'report' => $report ] )->nest( 'headerView', 'header' );
	}

	public function objects()
	{
		$object_id = Route::input( 'id' );
		
		if( isset( $object_id ) )
		{
			$object = Text::whereSection( 12 )->whereId( $object_id )->first();
		}
		else
		{
			$object = Text::whereSection( 12 )->first();
		}

		if( !isset( $object ) )
		{
			return View::make( 'error', [ 'message' => '404' ] )->nest( 'headerView', 'header' );
		}

		View::share('page', 'objects' );

		return View::make( 'article', [ 'article' => $object ] )->nest( 'headerView', 'header' );
		
		

	}

	public function services()
	{
		$service_id = Route::input( 'id' );

		if( isset( $service_id ) )
		{
			$service = Text::whereSection( 11 )->whereId( $service_id )->first();

			if( !isset( $service ) )
			{
				return View::make( 'error', [ 'message' => '404' ] )->nest( 'headerView', 'header' );
			}

			View::share('page', 'services');
			return View::make( 'article', [ 'article' => $service ] )->nest( 'headerView', 'header' );
		}
		else
		{
			$services = Text::getServices();			
			View::share('page', 'services');
			return View::make( 'services', [ 'services' => $services ] )->nest( 'headerView', 'header');
		}		
	}

	public function textEdit()
	{
		$text_id = Route::input( 'id' );

		if( Request::isMethod( 'post' ) )
		{
			$data = Request::all();

			if( $data['cancel'] )
			{
				if( $text_id == '0' )
				{
					$text = Text::create();
				}
				else
				{
					$text = Text::find( $text_id );
				}

				$text->content = $data['content'];
				$text->title = $data['title'];

				$text->save();
			}

			return Redirect::to( '/admin/texts' );
		}

		

		$text = Text::find( $text_id );

		return View::make ( 'textEdit', [ 'text' => $text ] );
	}
}	
