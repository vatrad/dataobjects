<?php

declare(strict_types=1);

namespace VatRadar\DataObjects\Cache;

/**
 * Simple latitude/longitude coordinate point
 */
class Point implements CacheInterface
{
    public float $latitude;
    public float $longitude;

    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @inheritDoc
     */
    public function array(): array
    {
        return [
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }
}
