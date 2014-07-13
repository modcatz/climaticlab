<?php

class AdminController extends BaseController {


	public function index()
	{
		echo User::find(1)->username.'<br/>Admin';
		
	}

	public function auth()
	{

	}

}