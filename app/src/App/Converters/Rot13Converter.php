<?php

declare(strict_types=1);

namespace App\Converters;

use App\Converters\Contracts\StringConverterInterface;

class Rot13Converter implements StringConverterInterface
{
    public function convert(string $value): string
    {
        return str_rot13($value);
    }
}
