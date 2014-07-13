<?php

class AuthController extends BaseController {


	public function auth()
	{				
		if( Auth::check() )
		{
			return Redirect::to('/admin');
		}		

		if( Request::isMethod('post') )
		{
			$data = Request::all();

			if( isset( $data['login'] ) && isset( $data['password'] ) )
			{
				$result = Auth::attempt( [ 'username' => $data['login'], 'password' => $data['password'] ] );

				if( $result )
				{
					return Redirect::intended( '/admin' );
				}
				else
				{
					return View::make( 'auth', [ 'message'  => 'Authentication failed' ] );
				}
			}
			
		}
		else
		{
			return View::make( 'auth', [] );
		}

		

		
	}



	public function logout()
	{
		Auth::logout();
	}

}