<?php

namespace App\Http\Controllers\frontend\contactus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SendSMS;

class contactusController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        if ($request->isMethod('post')) {

            $objSendSms = new SendSMS();
            $sendSMS = $objSendSms->sendMailltesting($request);
            $return['status'] = 'success';
            $return['message'] = 'Thank you we will contact you very soon...';
            $return['redirect'] = route('contactus');
             echo json_encode($return);
            exit;
        }

        $data['title'] = 'Mototive Websolution - Dashboard';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array('jquery.validate.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'contactus.js');
        $data['funinit'] = array('Contactus.init()');
        return view('frontend/pages/contactus', $data);
    }

}
