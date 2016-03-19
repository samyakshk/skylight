<?php namespace Modules\Quotes\Repositories;
use \Modules\Quotes\Repositories\TemplatesInterface;
use Modules\Quotes\Entities\Template;
class TemplatesRepo implements TemplatesInterface{
    protected $templateModel;
    public function __construct(Template $templateModel) {
        $this->templateModel=$templateModel;
    }
    public function getAllTemplates() {
        return $this->templateModel->all();
    }

    public function getSingleTemplate($templateID) {
        return $this->templateModel->find($templateID);
    }

}

