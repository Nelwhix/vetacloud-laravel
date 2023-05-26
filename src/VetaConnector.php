<?php

namespace Nelwhix\VetacloudLaravel;

class VetaConnector extends \Saloon\Http\Connector
{
    public function __construct(private string $apiKey, private int $timeout = 60) {

    }
    public function resolveBaseUrl(): string
    {
        return "https://cloud.vetacloud.com/node";
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