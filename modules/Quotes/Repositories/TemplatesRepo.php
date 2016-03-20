<?php namespace Modules\Quotes\Repositories;
use \Modules\Quotes\Repositories\TemplatesInterface;
use Modules\Quotes\Entities\Template;
use Modules\Quotes\Entities\TemplateSettings;
class TemplatesRepo implements TemplatesInterface{
    public function getAllTemplates() {
        return Template::all();
    }

    public function getSingleTemplate($templateID) {
        //return Template::with('settings','profiles.sections')->find($templateID);
        $data= Template::with('settings','profiles')
                ->with([
                    'profiles.sections' => function($q){
                        //$q->select('number','weight','notes');
                    //$q->where('weight','>',1);
                    $q->select('id','number','weight','notes');
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

}

