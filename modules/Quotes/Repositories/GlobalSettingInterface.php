<?php namespace Modules\Quotes\Repositories;

interface GlobalSettingInterface{
    public function getAllSettings();
    public function getSingleSetting($settingID);
   
}

