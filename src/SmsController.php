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
        $username   = "novazepson";
        $apiKey     = "4ebf997dc7a1f06ebeba5e05b7cb7af4c745528a47c5cf8af2410557996db5ad";

        // Initialize the SDK
        $AT         = new AfricasTalking($username, $apiKey);

        // Get the SMS service
        $sms        = $AT->sms();

        // Set the numbers you want to send to in international format
        $recipients = "+255654485755";

        // Set your message
        $message    = "novath";

        // Set your shortCode or senderId
        $from       = "18296";
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
