<?php

namespace App\Http\Controllers\frontend\customizemeal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customizemealController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        return view('frontend/pages/customizemeal');
    }

}
