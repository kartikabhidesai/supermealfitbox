<?php

namespace App\Http\Controllers\frontend\healthyjuice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class healthyjuiceController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        return view('frontend/pages/healthyjuice');
    }

}
