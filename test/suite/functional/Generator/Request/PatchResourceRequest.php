<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Test\Request;

use Test\Schema\PatchResourceRequestBody;

class PatchResourceRequest implements RequestInterface
{
    /** @var PatchResourceRequestBody */
    private $patchResourceRequestBody;

    /**
     * @param PatchResourceRequestBody $patchResourceRequestBody
     */
    public function __construct(PatchResourceRequestBody $patchResourceRequestBody)
    {
        $this->patchResourceRequestBody = $patchResourceRequestBody;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return 'application/json';
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return 'PATCH';
    }

    /**
     * @return string
     */
    public function getRoute(): string
    {
        return 'v1/resources/{resourceId}';
    }

    /**
     * @return array
     */
    public function getQueryParameters(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getRawQueryParameters(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getCookies(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return ['Content-Type' => 'application/json'];
    }

    /**
     * @return PatchResourceRequestBody
     */
    public function getBody()
    {
        return $this->patchResourceRequestBody;
    }
}
