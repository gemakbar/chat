<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use pimax\FbBotApp;
use pimax\Messages\Message;

class MessengerController extends Controller
{
    public function webhook(Request $request){
        Log::info('receive');
        $local_verify_token = env('WEBHOOK_VERIFY_TOKEN');
        $hub_verify_token = $request->hub_verify_token;

        if($local_verify_token == $hub_verify_token){
            return $request->hub_challenge;
        }

        return 'gagal';
    }

    public function webhookPost(){
        Log::info('receive');
    }

}
