<?php

declare(strict_types=1);

namespace Tests\Unit\App\Generators;

use App\Generators\MultipleRandomStringGenerator;
use PHPUnit\Framework\TestCase;

class MultipleRandomStringGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $multipleRandomStringGenerator = new MultipleRandomStringGenerator(3, 6);
        $randomStrings = $multipleRandomStringGenerator->generate();

        $this->assertCount(3, $randomStrings);

        foreach ($randomStrings as $randomString) {
            $this->assertEquals(6, strlen($randomString));
        }
    }
}
