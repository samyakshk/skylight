<?php namespace Modules\Quotes\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class TestController extends Controller {
	
	public function index()
	{
		return view('quotes::index');
	}
	
}