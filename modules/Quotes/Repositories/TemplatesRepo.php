<?php namespace Modules\Quotes\Repositories;
use \Modules\Quotes\Repositories\TemplatesInterface;
use Modules\Quotes\Entities\Template;
//use Modules\Quotes\Entities\TemplateSettings;
class TemplatesRepo implements TemplatesInterface{
    public function getAllTemplates() {
        return Template::all();
    }

    public function getSingleTemplate($templateID) {
        //return Template::with('settings','profiles.sections')->find($templateID);
        $data= Template::with('settings')
                ->with([
                    'profiles.sections' => function($q){
                    $q->select('id','number','weight','notes');
                }])
                ->with([
                    'accessories.price' => function($q){
                    $q->where('deleted','<>','NULL');
                    $q->select('id','revised_price');
                }])
                ->find($templateID);
        //return \DB::getQueryLog();
        return $data;
//        $template=Template::with('settings')
//                ->with([
//                    'child' => function ($q) {
//                    $q->where('someCol', 'someVa'); //constraint on child
//                    },'child.grandchild' => function ($q) {
//                    $q->where('someOtherCol', 'someOtherVal'); //constraint on grandchild
//                    }
//                ]);
    }

    public function createTemplate() {
        
    }

    public function updateTemplate() {
        
    }

}

