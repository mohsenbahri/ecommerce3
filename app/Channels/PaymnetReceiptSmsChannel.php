<?php

namespace App\Channels;

use Ghasedak\GhasedakApi;
use Illuminate\Notifications\Notification;

class PaymnetReceiptSmsChannel
{
    public function send($notifiable, Notification $notification)
    {


        $receptor = $notifiable->cellphone;
        $type = 1;
        $template = "paymentReceipt";
        $param1 = $notification->orderId;
        $param2 = $notification->amount;
        $param3 = $notification->refId;

        $api = new GhasedakApi(env('GHASEDAK_API_KEY'));
        $api->Verify($receptor, $type, $template, $param1, $param2, $param3);
    }
}
