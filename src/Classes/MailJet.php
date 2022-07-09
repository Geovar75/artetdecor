<?php

namespace App\Classes;

use Mailjet\Client;
use Mailjet\Resources;

class MailJet{

    private $api_key = '6f5e039de59db6e5e6b9b642ee5d98a6';
    private $api_key_secret = '684511c6bc290e28f7cd0f2d5c1bbb65';

    public function send($to_email, $to_name, $subject, $content){

        $mj = new Client($this->api_key, $this->api_key_secret, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "poupa_60@hotmail.fr",
                        'Name' => "Geo"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ]
                    ],
                    'TemplateID' => 2922912,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables' => [
                        'content' => $content
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
    }
}