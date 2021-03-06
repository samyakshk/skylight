<?php namespace Modules\Blog\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Blog\Repository\BlogRepository as BlogRepo;
class BlogController extends Controller {
	private $blog;
 
    public function __construct(BlogRepo $blog) {
 
        $this->blog = $blog;
    }
 
    public function index() {
        return \Response::json($this->blog->all());
        //return \Response::json(Blog::all());
    }    	
    
    public function find($id){
    	return \Response::json($this->blog->find($id));
    }
}