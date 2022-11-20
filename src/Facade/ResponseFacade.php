<?php

namespace Iqdm\IqResponse\Facade;

use Illuminate\Support\Facades\Facade;

class ResponseFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'iq-response';
    }
}
