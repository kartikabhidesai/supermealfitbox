<?php

namespace App\Http\Controllers\frontend\aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutusController extends Controller
{
    function __construct() {
        
    }
    
    public function index(Request $request) {

        return view('frontend/pages/aboutus');
    }
}
