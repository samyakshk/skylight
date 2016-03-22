<?php namespace Modules\Quotes\Repositories;
use \Modules\Quotes\Repositories\TemplatesInterface;
use Modules\Quotes\Entities\Template;
//use Modules\Quotes\Entities\TemplateSettings;
class TemplatesRepo implements TemplatesInterface{
    public function getAllTemplates() {
        return Template::all();
    }
    public function getActiveTemplates() {
        return Template::where('is_active',1)->get();
    }
    public function getSingleTemplate($templateID) {
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
                ->with([
                    'accessories.details' => function($q){
                    $q->where('deleted','=',NULL);
                    $q->select('id','code','sl_detail');
                }])
                ->find($templateID);
        //return \DB::getQueryLog();
        return $data;
        /*$template=Template::with('settings')
                ->with([
                    'child' => function ($q) {
                    $q->where('someCol', 'someVa'); //constraint on child
                    },'child.grandchild' => function ($q) {
                    $q->where('someOtherCol', 'someOtherVal'); //constraint on grandchild
                    }
                ]);*/
    }
    
    public function getSingleActiveTemplate($templateID) {
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
                ->with([
                    'accessories.details' => function($q){
                    $q->where('deleted','=',NULL);
                    $q->select('id','code','sl_detail');
                }])
                ->where('is_active',1)->find($templateID);
        //return \DB::getQueryLog();
        return $data;
        /*$template=Template::with('settings')
                ->with([
                    'child' => function ($q) {
                    $q->where('someCol', 'someVa'); //constraint on child
                    },'child.grandchild' => function ($q) {
                    $q->where('someOtherCol', 'someOtherVal'); //constraint on grandchild
                    }
                ]);*/
    }

    public function createTemplate() {
        
    }

    public function updateTemplate() {
        
    }

    public function getActiveTemplatesByIDs($ids) {
        $ids_array=  explode(',',$ids);
        //$ids_array=  array($ids);
        //dd($ids_array);
        //dd($ids);
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
                ->with([
                    'accessories.details' => function($q){
                    $q->where('deleted','=',NULL);
                    $q->select('id','code','sl_detail');
                }])
                //->where('is_active',1)
                //->whereIn('id',$ids_array)->get();
                //->whereIn('id',[1,2,3])
                ->whereIn('id',$ids_array)
                        ->where('is_active',1)
                        ->get();
                return $data;
                        return \DB::getQueryLog();
    }

}

