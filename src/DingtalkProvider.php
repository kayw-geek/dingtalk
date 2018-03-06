<?php

namespace Weikaiii\DingtalkP;

use Illuminate\Support\ServiceProvider;
use Weikaiii\Dingtalk\DingTalkClient;
class DingtalkProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dingtalk',function (){
            return new DingTalkClient();
        });
    }
}
