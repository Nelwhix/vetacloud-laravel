<?php

namespace Nelwhix\VetacloudPhp;


use Saloon\Contracts\Body\HasBody as HasBodyContract;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasBody;

class BasicUploadRequest extends Request implements HasBodyContract
{
    use HasBody;
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