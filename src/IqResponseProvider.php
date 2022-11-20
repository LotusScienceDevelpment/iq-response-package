<?php

namespace Iqdm\IqResponse;

use Illuminate\Support\ServiceProvider;
use Iqdm\IqResponse\Response\Response;

class IqResponseProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('iq-response', function() {
            return new Response();
        });
    }

    public function boot()
    {

    }
}
