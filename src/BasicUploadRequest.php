<?php

namespace Nelwhix\VetacloudLaravel;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class BasicUploadRequest
{
    protected Method $method = Method::POST;

    public function __construct(private string $routeName) {}

    protected function defaultHeaders(): array {
        return [
            "X_ROUTE_NAME" => $this->routeName
        ];
    }

}