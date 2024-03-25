<?php

declare(strict_types=1);

namespace Tests\Unit\App\Generators;

use App\Generators\RandomStringGenerator;
use PHPUnit\Framework\TestCase;

class RandomStringGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $randomStringGenerator = new RandomStringGenerator();

        // Test default random string length which is equal 5
        $randomString = $randomStringGenerator->generate();
        $this->assertEquals(5, strlen($randomStringGenerator->generate()));
        $this->assertMatchesRegularExpression('/[a-zA-Z0-9]/', $randomString);

        $randomStringGenerator = new RandomStringGenerator(10);

        // Test random string length which is equal 10
        $randomString = $randomStringGenerator->generate();
        $this->assertEquals(10, strlen($randomString));
        $this->assertMatchesRegularExpression('/[a-zA-Z0-9]/', $randomString);
    }
}
