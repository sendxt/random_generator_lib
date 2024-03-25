<?php

declare(strict_types=1);

namespace Tests\Unit\App\Converters;

use App\Converters\AlphabetToNumberConverter;
use PHPUnit\Framework\TestCase;

class AlphabetToNumberConverterTest extends TestCase
{
    /**
     * @return array[]
     */
    public static function getConvertData(): array
    {
        return [
            [
                '22aAcd',
                '22/1/1/3/4',
            ],
            [
                '33dDcC',
                '33/4/4/3/3',
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
       $converter = new AlphabetToNumberConverter();

       $this->assertEquals($expectedConvertedString, $converter->convert($stringToConvert));
    }
}
