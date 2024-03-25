<?php

declare(strict_types=1);

namespace App\Generators;

class MultipleRandomStringGenerator
{
    private RandomStringGenerator $randomStringGenerator;

    public function __construct(
        private readonly int $arraySize = 2,
        readonly int $stringLength = 5
    ) {
        $this->randomStringGenerator = new RandomStringGenerator($stringLength);
    }

    public function generate(): array
    {
        $result = [];

        for ($i = 0; $i < $this->arraySize; $i++) {
            $result[] = $this->randomStringGenerator->generate();
        }

        return $result;
    }
}
