<?php

declare(strict_types=1);

namespace App\Generators;

readonly class RandomStringGenerator
{
    public function __construct(private int $stringLength = 5)
    {
    }

    public function generate(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $this->stringLength; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
