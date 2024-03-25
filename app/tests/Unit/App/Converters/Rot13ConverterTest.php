<?php

declare(strict_types=1);

namespace Tests\Unit\App\Converters;

use App\Converters\Rot13Converter;
use PHPUnit\Framework\TestCase;

class Rot13ConverterTest extends TestCase
{
    /**
     * @return array[]
     */
    public static function getConvertData(): array
    {
        return [
            [
                'abcde',
                'nopqr',
            ],
            [
                'nopqr',
                'abcde',
            ],
        ];
    }

    /**
     * @dataProvider getConvertData
     * @param string $stringToConvert
     * @param string $expectedConvertedString
     * @return void
     */
    public function testConvert(string $stringToConvert, string $expectedConvertedString): void
    {
       $converter = new Rot13Converter();

       $this->assertEquals($expectedConvertedString, $converter->convert($stringToConvert));
    }
}
