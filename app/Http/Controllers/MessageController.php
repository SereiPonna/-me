<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request) {

        $message = $request->input('messageText');

        $destination = ["tel:AZ1104k9foY3ZCpCcyRVzUXopzt1DA7KF6NfvCscTfqZe+ACqGgm3dkf/Xn1yEHdzDJwJ"];
        
        $client = new Client([
            'headers' => [ 'Content-Type' => 'application/json' ]
        ]);

        $response = $client->post('https://api.dialog.lk/sms/send',
            ['body' => json_encode(
                ["applicationId" => "APP_041235",
                    "password" => "a5b5d0f28d3afed4470b813e6e5273a2",
                    "message" => $message,
                    "destinationAddresses" => $destination
                ]
            )]
        );

    }
}
