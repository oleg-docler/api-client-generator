<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Test\Request;

use Test\Schema\ResourceFilter;
use Test\Schema\SerializableInterface;

class GetResourcesRequest implements RequestInterface
{
    private ?int $filterById = null;

    private ?string $filterByName = null;

    private ?array $filterByIds = null;

    private ?ResourceFilter $filter = null;

    private string $contentType = '';

    private AuthenticationCredentials $credentials;

    public function __construct(AuthenticationCredentials $credentials)
    {
        $this->credentials = $credentials;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function setFilterById(int $filterById): self
    {
        $this->filterById = $filterById;

        return $this;
    }

    public function setFilterByName(string $filterByName): self
    {
        $this->filterByName = $filterByName;

        return $this;
    }

    /**
     * @param int[] $filterByIds
     */
    public function setFilterByIds(array $filterByIds): self
    {
        $this->filterByIds = $filterByIds;

        return $this;
    }

    public function setFilter(ResourceFilter $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getRoute(): string
    {
        return 'v1/resources';
    }

    public function getQueryParameters(): array
    {
        return array_map(static function ($value) {
            return $value instanceof SerializableInterface ? $value->toArray() : $value;
        }, array_filter(['filterById' => $this->filterById, 'filterByName' => $this->filterByName, 'filterByIds' => $this->filterByIds, 'filter' => $this->filter], static function ($value) {
            return null !== $value;
        }));
    }

    public function getRawQueryParameters(): array
    {
        return ['filterById' => $this->filterById, 'filterByName' => $this->filterByName, 'filterByIds' => $this->filterByIds, 'filter' => $this->filter];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getHeaders(): array
    {
        return ['Authorization' => sprintf('Basic %s', base64_encode(sprintf('%s:%s', $this->credentials->getUsername(), $this->credentials->getPassword())))];
    }

    public function getBody()
    {
        return null;
    }
}
