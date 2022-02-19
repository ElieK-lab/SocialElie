<?php

namespace App\Services;

use function PHPUnit\Framework\returnArgument;
use MailchimpMarketing\ApiClient;
class MailchimpNewsletter implements Newsletter
{
   // public  $client=null;
    //new MailchimpNewsletter(new ApiClient()); it equals here
    private $client;

    public function __construct(ApiClient $client)//this will success only if class ApiClient has a construct
    {
        $this->client=$client;
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

//    protected function client(){
//        return $this->client->setConfig([
//            'apiKey'=>config('services.mailchimp.key'),
//            'server'=>'us14'
//        ]);
//    }
}
