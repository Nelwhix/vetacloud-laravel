<?php

namespace Nelwhix\VetacloudPhp;

class VetaConnector extends \Saloon\Http\Connector
{
    public function __construct(private string $apiKey, private int $timeout = 60) {

    }
    public function resolveBaseUrl(): string
    {
        return "http://3.81.11.234:8000/php";
    }

    protected function defaultHeaders(): array
    {
        return [
          "X_API_KEY" => $this->apiKey
        ];
    }

    public function defaultConfig(): array
    {
        return [
            "timeout" => $this->timeout
        ];
    }
}