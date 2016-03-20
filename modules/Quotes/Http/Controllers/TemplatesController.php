<?php namespace Modules\Quotes\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Http\Requests\Request;
use Modules\Quotes\Repositories\TemplatesInterface;
class TemplatesController extends Controller {
    protected $templatesRepo;
    public function __construct(TemplatesInterface $templatesInterface) {
        $this->templatesRepo=$templatesInterface;
    }
    public function get()
    {
            $allTemplates=$this->templatesRepo->getAllTemplates();
            return response()->json($allTemplates);
    }
        
    public function getById($id) {    
        $template=$this->templatesRepo->getSingleTemplate($id);
        return response()->json($template);
    }
    
    public function add(Request $request) {    
        $template=$this->templatesRepo->getSingleTemplate($id);
        return response()->json($template);
    }
}