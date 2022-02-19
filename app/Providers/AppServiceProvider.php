<?php

namespace App\Providers;

use App\Models\User;
use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
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
         * this for return for creating MailchimpNewsletter object without initiate it from NewsletterController
         */

        app()->bind( Newsletter::class,function (){
            $client=(new ApiClient())->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us14'
            ]);
            return new MailchimpNewsletter($client);
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
        Gate::define('admin',function (User $user){
            return $user->username=="ELIEk";
        });
        Blade::if('admin',function (){
            if(request()->user() !== null) {
                return request()->user()->can('admin');
            }
        });
    }
}
