<?php

use App\Converters\AlphabetToNumberConverter;
use App\Generators\RandomStringGenerator;
use App\Generators\MultipleRandomStringGenerator;
use App\Converters\Rot13Converter;
use App\Converters\Contracts\StringConverterInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

require_once __DIR__ . '/../vendor/autoload.php';

//TODO: register of services must be moved to config file as services.yaml and injection of classes preferably in class __construct method
$container = new ContainerBuilder();
$container
    ->register('app_random_string_generator', RandomStringGenerator::class)
    ->addArgument(6);

$container
    ->register('app_multiple_random_string_generator', MultipleRandomStringGenerator::class)
    ->addArgument(3)
    ->addArgument(6);

$randomStringGenerators = [
    $container->get('app_random_string_generator'),
    $container->get('app_multiple_random_string_generator')
];

$converters = [
    new AlphabetToNumberConverter(),
    new Rot13Converter(),
];

foreach ($randomStringGenerators as $generator) {
    /** @var StringConverterInterface $randomConverter */
    $randomConverter = $converters[array_rand($converters)];

    /** @var string|array $result */
    $generatorResult = $generator->generate($randomConverter);

    // transformation of result could be any various depend on our goal

    if (is_array($generatorResult)) {
        var_dump(
            array_map(function(string $value) use ($randomConverter) {
                return $randomConverter->convert($value);
            }, $generatorResult)
        );
    } else {
        var_dump($randomConverter->convert($generatorResult));
    }
}
