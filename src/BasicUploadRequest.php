<?php

namespace Nelwhix\VetacloudPhp;


use Saloon\Contracts\Body\BodyRepository;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class BasicUploadRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;

    public function __construct(private string $routeName) {}

    protected function defaultHeaders(): array {
        return [
            "X_ROUTE_NAME" => $this->routeName
        ];
    }

    public function resolveEndpoint(): string
    {
        return "";
    }
}