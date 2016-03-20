<?php namespace Modules\Quotes\Repositories;
use \Modules\Quotes\Repositories\GlobalSettingInterface;
use Modules\Quotes\Entities\QuoteGlobalSettings;

class GlobalSettingRepo implements GlobalSettingInterface{
    public function getAllSettings() {
        return QuoteGlobalSettings::all();
    }

    public function getSingleSetting($settingID) {
        return QuoteGlobalSettings::find($settingID);
    }

}

