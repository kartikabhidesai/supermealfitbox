<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Config;
use Auth;
use DB; 

class SendSMS extends Model
{
    public function sendMailltesting($request){
        
        $mailData['data'] = $request;
        $mailData['subject'] = 'Email From Supermealfitbox!!';
        $mailData['attachment'] = array();
        $mailData['template'] ="frontend.pages.test";
        $mailData['mailto'] = 'mahendrajavandhra@gmail.com';
        $sendMail = new Sendmail;
        return $sendMail->sendSMTPMail($mailData);
        
    }
}
