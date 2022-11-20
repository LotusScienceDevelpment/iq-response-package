<?php

namespace Iqdm\IqResponse\Facade;

use Illuminate\Support\Facades\Facade;

class Response extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'response';
    }
}
