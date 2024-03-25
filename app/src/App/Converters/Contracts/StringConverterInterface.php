<?php

declare(strict_types=1);

namespace App\Converters\Contracts;

interface StringConverterInterface
{
    public function convert(string $value): string;
}
