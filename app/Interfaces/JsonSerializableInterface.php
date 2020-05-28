<?php

namespace App\Interfaces;

use Illuminate\Contracts\Support\{Arrayable, Jsonable};
use JsonSerializable;

interface JsonSerializableInterface extends Arrayable, Jsonable, JsonSerializable
{
    //
}
