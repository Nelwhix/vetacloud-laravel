<?php

namespace Nelwhix\VetacloudLaravel;


use Saloon\Contracts\Body\BodyRepository;
use Saloon\Contracts\Body\HasBody;
use Saloon\Data\MultipartValue;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasMultipartBody;

class BasicUploadRequest extends Request implements HasBody
{
    use HasMultipartBody;
    protected Method $method = Method::POST;

    public function __construct(private string $routeName, private $file, private string $path) {}

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