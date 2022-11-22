<?php

namespace Iqdm\IqResponse;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;
use Iqdm\IqResponse\Response\TypeResponseEnum;

abstract class AbstractResponse
{
    protected TypeResponseEnum $type;

    protected string $message;
    protected int $httpCode;
    protected mixed $payload;

    protected string $controller = '';

    public function __construct()
    {
        $controller = app('request')->route()->getAction();
        if(isset($controller['controller'])) {
            $this->controller = class_basename(app('request')->route()->getAction()['controller']);
        }
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function setHttpCode(int $httpCode): static
    {
        $this->httpCode = $httpCode;

        return $this;
    }

    public function setPayload(mixed $payload): static
    {
        $this->payload = $payload;

        return $this;
    }

    public function sendWithoutThrow(): JsonResponse
    {
        return Response::json([
            'success' => $this->type->name,
            'message' => $this->message,
            'payload' => $this->payload
        ], $this->httpCode);
    }

    abstract public function send(): void;
}
