<?php

namespace App\Providers;

use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
         * this for return for creating Newsletter object without initiate it from NewsletterController
         */

        $this->app->bind( Newsletter::class,function (){
            $client=(new ApiClient())->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us14'
            ]);
            return new Newsletter($client);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Model::unguard();
        Paginator::useBootstrap();
    }
}
