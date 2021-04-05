<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Request;

class DeleteOrderRequest implements RequestInterface
{
    private int $orderId;

    private string $contentType = '';

    public function __construct(int $orderId)
    {
        $this->orderId = $orderId;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getRoute(): string
    {
        return \strtr('store/order/{orderId}', ['{orderId}' => $this->orderId]);
    }

    public function getQueryParameters(): array
    {
        return [];
    }

    public function getRawQueryParameters(): array
    {
        return [];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getBody()
    {
        return null;
    }
}
