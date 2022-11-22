<?php

namespace Iqdm\IqResponse\Response;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
use Iqdm\IqResponse\AbstractResponse;

class SuccessResponse extends AbstractResponse
{
    protected TypeResponseEnum $type = TypeResponseEnum::OK;

    protected string $message = '';
    protected int $httpCode = 200;
    protected mixed $payload = [];

    public function send(): void
    {
        Response::json([
            'success'    => $this->type->name,
            'message'    => $this->message,
            'payload'    => $this->payload,
            'controller' => $this->controller
        ], $this->httpCode)->throwResponse();
    }
}
