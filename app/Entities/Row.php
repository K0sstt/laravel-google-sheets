<?php

namespace App\Entities;

final class Row
{
    public $first;

    public $second;

    public function __construct(
        string $first,
        string $second
    ) {
        $this->first = $first;
        $this->second = $second;
    }

    public function toArray(): array
    {
        return [
            'first' => $this->first,
            'second' => $this->second,
        ];
    }
}
