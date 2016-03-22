<?php namespace Modules\Quotes\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
//use App\Http\Requests\Request;
use Modules\Quotes\Repositories\TemplatesInterface;
use Modules\Quotes\Repositories\Models\TemplateModel;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
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
    public function getActive()
    {
            $allTemplates=$this->templatesRepo->getActiveTemplates();
            return response()->json($allTemplates);
    }        
    public function getById($id) {    
        $template=$this->templatesRepo->getSingleTemplate($id);
        return response()->json($template);
    }    
    public function getActiveById($id) {    
        $template=$this->templatesRepo->getSingleActiveTemplate($id);
        return response()->json($template);
    }
    public function getAllByIds(Request $request) {  
        $input=$request->all();
        $ids=$input["ids"];
        //dd($ids);
        $template=$this->templatesRepo->getActiveTemplatesByIDs($ids);
        return response()->json($template);
    }    
    public function add(Request $request) { 
        //if(! $request->body or ! $request->user_id){
        if(! $request){
            return JsonResponse::create([
                'error' => [
                    'message' => 'Please Provide Both body and user_id'
                ]
            ], 422);
        }
        //$all=\Input::all();
        //return $this->getJsonResponse($request->all());
        //$data=  json_decode(json_array($request->all()));
        $data=  $request->all();
        
        $template=new TemplateModel();
        $template->set($data);
        dd($template);
    }
    
    private function getJsonResponse($data)
    {
        return JsonResponse::create([
                'data' => [
                    'message' => $data
                ]
            ], 422);        
    }
}
