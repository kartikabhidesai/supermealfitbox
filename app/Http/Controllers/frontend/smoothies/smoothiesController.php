<?php

namespace App\Http\Controllers\frontend\smoothies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class smoothiesController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        return view('frontend/pages/smoothies');
    }

}
