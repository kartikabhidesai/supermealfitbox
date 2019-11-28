<?php

namespace App\Http\Controllers\frontend\musclegain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class musclegainController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        return view('frontend/pages/musclegain');
    }

}
