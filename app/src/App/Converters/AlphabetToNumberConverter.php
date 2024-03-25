<?php

declare(strict_types=1);

namespace App\Converters;

use App\Converters\Contracts\StringConverterInterface;

class AlphabetToNumberConverter implements StringConverterInterface
{
    public function convert(string $value, string $delimiter = '/'): string
    {
        return ltrim(preg_replace_callback('/[a-z]/i', function($match) use ($delimiter) {
            return $delimiter . (ord($char = $match[0]) - (ctype_upper($char) ? 64 : 96)) ;
        }, $value), $delimiter);
    }
}