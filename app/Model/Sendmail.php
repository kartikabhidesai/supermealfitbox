<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Config;
use Auth;
use DB;
use Mail;

class Sendmail extends Model {

    public function sendSMTPMail($mailData) {

        $pathToFile = $mailData['attachment'];
        $frommail = env('MAIL_USERNAME');
        $mailsend = Mail::send($mailData['template'], ['data' => $mailData['data']], function ($m) use ($mailData, $pathToFile) {
                    $m->from($frommail, 'Supermealfitbox');

                    $m->to($mailData['mailto'], "Supermealfitbox")->subject($mailData['subject']);
                    if ($pathToFile != "") {
                        // $m->attach($pathToFile);
                    }

                    //  $m->cc($mailData['bcc']);
                });
        if ($mailsend) {
            return true;
        } else {
            return false;
        }
    }

}
