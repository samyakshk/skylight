<?php namespace Modules\Quotes\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Http\Requests\Request;
use Modules\Quotes\Repositories\GlobalSettingInterface;
class QuoteGlobalSettingsController extends Controller {
	
	 protected $globalsettingRepo;
    public function __construct(GlobalSettingInterface $globalsettingInterface) {
        $this->globalsettingRepo=$globalsettingInterface;
    }
    public function get()
    {
            $allSettings=$this->globalsettingRepo->getAllSettings();
            return response()->json($allSettings);
    }
        
    public function getById($id) {    
        $settings=$this->globalsettingRepo->getSingleSetting($id);
        return response()->json($settings);
    }
    
    public function add(Request $request) {    
        $settings=$this->globalsettingRepo->getSingleSetting($id);
        return response()->json($settings);
	
}
}