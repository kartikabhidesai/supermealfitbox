<?php

namespace App\Http\Controllers\frontend\contactus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactusController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        return view('frontend/pages/contactus');
    }

}
