<?php

namespace Iqdm\IqResponse\Response;

use JetBrains\PhpStorm\Pure;

class Response
{
    #[Pure]
    public function error(): ErrorResponse
    {
        return new ErrorResponse();
    }

    #[Pure]
    public function success(): SuccessResponse
    {
        return new SuccessResponse();
    }
}
