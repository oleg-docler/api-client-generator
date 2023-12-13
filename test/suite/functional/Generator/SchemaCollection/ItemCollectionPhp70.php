<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Test\Schema;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use JsonSerializable;

class ItemCollection implements IteratorAggregate, SerializableInterface, Countable, JsonSerializable
{
    /** @var Item[] */
    private $items;

    /**
     * @param Item[] $items
     */
    public function __construct(Item ...$items)
    {
        $this->items = $items;
    }

    public function toArray(): array
    {
        $return = [];
        foreach ($this->items as $item) {
            $return[] = $item->toArray();
        }

        return $return;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * @return Item[]
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }

    /**
     * @return Item|null
     */
    public function first()
    {
        $first = reset($this->items);
        if ($first === false) {
            return null;
        }

        return $first;
    }
}
