<?php

namespace zepson\africastalking;
use App\Http\Controllers\Controller;
use zepson\africastalking\AfricasTalking;
use Illuminate\Http\Request;
use App\Exceptions\Handler;
class SmsController extends Controller
{
    //

    public function done(){
      

        // Initialize the SDK
        $AT         = new AfricasTalking();

        // Get the SMS service
        $sms        = $AT->sms();

        // Set the numbers you want to send to in international format
        $recipients = "+255654485755";

        // Set your message
        $message    = "novath";

               // return "hi from sms";
                    // Thats it, hit send and we'll take care of the rest
                    try {
                        // Thats it, hit send and we'll take care of the rest
                        $result = $sms->send([
                            'to'      => $recipients,
                            'message' => $message,
                        ]);

                        print_r($result);
                    } catch (\Exception $e) {
                        echo "Error: ".$e->getMessage();
                    }
            }

}
