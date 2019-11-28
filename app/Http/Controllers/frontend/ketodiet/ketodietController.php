<?php

namespace App\Http\Controllers\frontend\ketodiet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ketodietController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        return view('frontend/pages/ketodiet');
    }

}
