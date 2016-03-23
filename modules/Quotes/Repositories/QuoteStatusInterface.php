<?php namespace Modules\Quotes\Repositories;

interface QuoteStatusInterface{
    public function getAllStatuses();
    public function getSingleStatus($statusID);
    
}

