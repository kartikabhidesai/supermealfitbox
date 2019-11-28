<?php

namespace App\Http\Controllers\frontend\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

class DashboardController extends Controller {

    function __construct() {
        
    }

    public function createpassword(Request $request) {

        print_r(Hash::make('123'));
    }
    
    public function createadmin(Request $request) {

        print_r('hello');die();
    }
    
    public function home(Request $request) {

        return view('frontend/pages/dashboard');
    }

}
