<?php namespace Modules\Quotes\Repositories;
use \Modules\Quotes\Repositories\TemplatesInterface;
use Modules\Quotes\Entities\Template;
use Modules\Quotes\Entities\TemplateSettings;
class TemplatesRepo implements TemplatesInterface{
    public function getAllTemplates() {
        return Template::all();
    }

    public function getSingleTemplate($templateID) {
        return Template::with('settings')->find($templateID);
    }

}

