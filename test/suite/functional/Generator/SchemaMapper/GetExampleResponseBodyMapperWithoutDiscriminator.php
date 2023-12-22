<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Test\Schema\Mapper;

use DoclerLabs\ApiClientException\UnexpectedResponseBodyException;
use Test\Schema\GetExampleResponseBody;

class GetExampleResponseBodyMapper implements SchemaMapperInterface
{
    private AnimalMapper $animalMapper;

    private MachineMapper $machineMapper;

    public function __construct(AnimalMapper $animalMapper, MachineMapper $machineMapper)
    {
        $this->animalMapper  = $animalMapper;
        $this->machineMapper = $machineMapper;
    }

    /**
     * @throws UnexpectedResponseBodyException
     */
    public function toSchema(array $payload): GetExampleResponseBody
    {
        $schema = new GetExampleResponseBody();

        try {
            $schema->setAnimal($this->animalMapper->toSchema($payload));

            return $schema;
        } catch (UnexpectedResponseBodyException $exception) {
        }

        try {
            $schema->setMachine($this->machineMapper->toSchema($payload));

            return $schema;
        } catch (UnexpectedResponseBodyException $exception) {
        }
        if (empty($schema->toArray())) {
            throw new UnexpectedResponseBodyException();
        }

        return $schema;
    }
}
