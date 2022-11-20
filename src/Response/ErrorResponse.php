<?php

namespace Iqdm\IqResponse\Response;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;
use Iqdm\IqResponse\AbstractResponse;

class ErrorResponse extends AbstractResponse
{
    protected TypeResponseEnum $type = TypeResponseEnum::ERROR;

    protected string $message = '';
    protected int $httpCode = 400;
    protected mixed $payload = [];

    public function send(bool $withoutThrow = false): void
    {
        Response::json([
            'success' => $this->type->name,
            'message' => $this->message,
            'payload' => $this->payload
        ], $this->httpCode)->throwResponse();
    }
}
