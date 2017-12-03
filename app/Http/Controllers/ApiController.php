<?php

namespace App\Http\Controllers;

use App\Auth;
use App\lib\Logger;
use App\lib\SMSReceiver;
use App\lib\SMSSender;
use App\lib\SMSServiceException;
use Illuminate\Http\Request;
use function Sodium\add;
use GuzzleHttp\Client;

ini_set('error_log', 'sms-app-error.log');

class ApiController extends Controller
{
    public function receive()
    {
        define('SERVER_URL', 'https://api.dialog.lk/sms/send');
        define('APP_ID', 'APP_041235');
        define('APP_PASSWORD', 'a5b5d0f28d3afed4470b813e6e5273a2');

        $logger = new Logger();
        try {
            // Creating a receiver and intialze it with the incomming data
            $receiver = new SMSReceiver(file_get_contents('php://input'));
            //Creating a sender
            $sender = new SMSSender(SERVER_URL, APP_ID, APP_PASSWORD);

            $message = $receiver->getMessage(); // Get the message sent to the app
            $address = $receiver->getAddress();    // Get the phone no from which the message was sent
            error_log($address);
            error_log($address);
            $auth = new Auth;
            $auth->tel = $address;
            $auth->hashcode = $address;
            $auth->save();

            $logger->WriteLog($receiver->getAddress());

            if ($message == 'broadcast') {
                // Send a broadcast message to all the subcribed users
                $response = $sender->broadcast("This is a broadcast message to all the subcribers of the application");

            } else {
                // Send a SMS to a particular user
                $response = $sender->sms('This message is sent only to one user', $address);
            }
        } catch (SMSServiceException $e) {
            $logger->WriteLog($e->getErrorCode() . ' ' . $e->getErrorMessage());
        }

        return response('true');
    }

    public function send()
    {

        $body = ["applicationId" => "APP_041235",
            "password" => "a5b5d0f28d3afed4470b813e6e5273a2",
            "message" => "Message",
            "destinationAddresses" =>
                ["tel:AZ1104k9foY3ZCpCcyRVzUXopzt1DA7KF6NfvCscTfqZe+ACqGgm3dkf/Xn1yEHdzDJwJ"]
        ];

        $client = new Client();

        $response = $client->post('https://api.dialog.lk/sms/send',
            [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ],
                'body' => $body
            ]
        );
        error_log($response);
    }

}
