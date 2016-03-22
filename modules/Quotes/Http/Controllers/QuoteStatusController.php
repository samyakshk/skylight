<?php

namespace Modules\Quotes\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Http\Requests\Request;
use Modules\Quotes\Repositories\GlobalSettingInterface;

class QuoteStatusController extends Controller {

    protected $quotestatusRepo;

    public function __construct(QuoteStatusInterface $quotestatusInterface) {
        $this->quotestatusRepo = $quotestatusInterface;
    }

    public function get() {
        $allStatuses = $this->quotestatusRepo->getAllStatuses();
        return response()->json($allStatuses);
    }

    public function getById($id) {
        $status = $this->quotestatusRepo->getSingleStatus($id);
        return response()->json($status);
    }

    public function add(Request $request) {
        $status = $this->quotestatusRepo->getSingleStatus($id);
        return response()->json($status);
    }

}
