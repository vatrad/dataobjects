<?php declare(strict_types=1);

namespace Vatradar\Dataobjects\DTO;

/**
 * Define the minimum required methods for a Data Transfer Object
 */
interface DTOInterface
{
    public function getTimestamp(): string;

    public function getMetadata(): array|object;

    public function getData(): mixed;
}
