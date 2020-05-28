<?php

namespace App\Interfaces;

interface Entitie
{
    public function toArray(): array;
    public function toJson(): string;
}
