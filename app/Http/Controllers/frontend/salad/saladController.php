<?php

namespace App\Http\Controllers\frontend\salad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class saladController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        return view('frontend/pages/salad');
    }

}
