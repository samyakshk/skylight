<?php namespace Modules\Quotes\Repositories;

interface StatusInterface{
    public function getAllStatuses();
    public function getSingleStatus($statusID);
    
}

