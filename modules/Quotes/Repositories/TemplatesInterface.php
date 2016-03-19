<?php namespace Modules\Quotes\Repositories;

interface TemplatesInterface{
    public function getAllTemplates();
    public function getSingleTemplate($templateID);
    //public function addTemplate();
    //public function updateTemplate();
}

