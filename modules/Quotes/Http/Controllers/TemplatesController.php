<?php namespace Modules\Quotes\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Quotes\Entities\Template;

class TemplatesController extends Controller {
	
	public function get()
	{
		$templates=Template::all();
		return response()->json($templates);
	}
	
}