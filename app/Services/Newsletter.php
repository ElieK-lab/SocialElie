<?php

namespace App\Services;

use function PHPUnit\Framework\returnArgument;
use MailchimpMarketing\ApiClient;
class Newsletter
{

    public function __construct(ApiClient $client)//this will success only if class ApiClient has a construct
    {
        //
    }

    public function subscribe(string $email, string $list= null){
        if($list==null){
            $list = config('services.mailchimp.lists.subscribers');

        }
        return $this->client->lists->addListMember($list,[
            'email_address'=>$email,
            'status'=>'subscribed'
        ]);
    }

}
