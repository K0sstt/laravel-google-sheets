<?php

namespace App\Entities;

use App\Interfaces\Entitie;

final class Row implements Entitie
{
    /**
     * @var string
     */
    public $first;

    /**
     * @var string
     */
    public $second;

    /**
     * Row constructor.
     * @param string $first
     * @param string $second
     */
    public function __construct(
        string $first,
        string $second
    ) {
        $this->first = $first;
        $this->second = $second;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'first' => $this->first,
            'second' => $this->second,
        ];
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}
