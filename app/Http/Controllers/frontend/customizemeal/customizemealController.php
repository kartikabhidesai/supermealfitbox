<?php

namespace App\Http\Controllers\frontend\customizemeal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SendSMS;

class customizemealController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        if ($request->isMethod('post')) {

            $objSendSms = new SendSMS();
            $sendSMS = $objSendSms->sendMailltesting($request);
            $return['status'] = 'success';
            $return['message'] = 'Thank you we will contact you very soon...';
            $return['redirect'] = route('customizemeal');
            echo json_encode($return);
            exit;
        }

        $data['title'] = 'Mototive Websolution - Customize Meal';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'customizemeal.js');
        $data['funinit'] = array('Customizemeal.init()');
        return view('frontend/pages/customizemeal', $data);
    }

}
