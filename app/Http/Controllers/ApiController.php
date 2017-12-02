<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SMSReceiver;
use SMSServiceException;

ini_set('error_log', 'error.log');
include 'API/lib/SMSSender.php';
include 'API/lib/SMSReceiver.php';

class ApiController extends Controller
{
    public function receive() {

        $Happycount = 0;
        $Shapecount = 0;
        $Sadcount = 0;

        date_default_timezone_set("Asia/Colombo");
        $password = "a5b5d0f28d3afed4470b813e6e5273a2";
        $applicationId = "APP_041235";
        $serverurl = "http://104.236.198.23/receiver";

        try {

            $receiver = new SMSReceiver(file_get_contents('php://input'));
            $content = $receiver->getMessage();
            error_log('=================================================================');
            error_log($content);
            error_log('------------------------------------------------------------------');

//    $content = preg_replace('/\s{2,}/', ' ', $content);
//    $address = $receiver->getAddress();
//    $requestId = $receiver->getRequestID();
//    $applicationId = $receiver->getApplicationId();
//
//
//    $sender = new SMSSender($serverurl, $applicationId, $password);
//
//
//    list($key, $second) = explode(" ", $content);
//
//    if ($second == "hash") {
//
//        $boradmsg = substr($content, 9);
//
//        $url = "https://language.googleapis.com/v1/documents:analyzeSentiment?key=<key>";
//
//        $ch = curl_init($url);
//
//        $json = array("encodingType" => "UTF8", "document" => array("type" => "PLAIN_TEXT", "content" => $boradmsg));
//        $encode_data = json_encode($json, JSON_NUMERIC_CHECK | JSON_FORCE_OBJECT);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $encode_data);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
//
//        $response = curl_exec($ch);
//        $decode = json_decode($response, true);
//        curl_close($ch);
//
//        error_log("Broadcast Message " . $content);
//
//        $emotion = $decode['documentSentiment']['score'];
//
//
//        if ($emotion > 0.25) {
//            $Happycount++;
//            $sender->sendMessage("Please come again", $address);
//        } elseif ($emotion < 0.25 && $emotion > -0.25) {
//            $Shapecount++;
//            $sender->sendMessage("We are happy to have you", $address);
//        } elseif ($emotion < -0.25) {
//            $Sadcount++;
//            $sender->sendMessage("Oops! We will improve the quality of the food.", $address);
//        }
//
//
//        $response = $sender->broadcastMessage($boradmsg);
            //}
//    else {
//
//        error_log("Message received " . $content);
//        $sender->sendMessage("Oops! Check the format. It should be SHOP<space>food<space>and enter your feeling about the food." . $second, $address);
//    }


        } catch (SMSServiceException $e) {
            error_log("*******************************++++++++++++++++++**********************************");
            error_log("Passed Exception-not working " . $e);
        }
    }
}
