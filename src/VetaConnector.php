<?php

namespace Nelwhix\VetacloudPhp;

class VetaConnector extends \Saloon\Http\Connector
{
    public function __construct(private string $apiKey, private int $timeout = 60) {

    }
    public function resolveBaseUrl(): string
    {
        return "https://8abd-102-89-47-35.ngrok-free.app/php";
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