<?php namespace Modules\Quotes\Repositories;
use \Modules\Quotes\Repositories\QuoteStatusInterface;
use Modules\Quotes\Entities\QuoteStatus;

class QuoteStatusRepo implements QuoteStatusInterface{
    public function getAllStatuses() {
        return QuoteStatus::all();
    }

    public function getSingleStatus($statusID) {
        return QuoteStatus::find($statusID);
    }

}

