<?php

use LilPecky\DriverGenerator\Languages;

require_once __DIR__ . '/../vendor/autoload.php';

$locales = Languages::getAvailableLocales();

$requiredProperties = [
    'givenNamesMale' => 'male',
    'givenNamesFemale' => 'female',
];

$optionalProperties = [
    'middleNames' => 'middle',
    'familyNames' => 'family',
    'familyNamesMale' => 'family_male',
    'familyNamesFemale' => 'family_female',
];

foreach ($locales as $locale) {
    $providerFilePath = __DIR__ . "/../src/Providers/$locale/Name.php";
    $jsonDataPath = __DIR__ . "/../data/$locale.json";

    if (! file_exists($providerFilePath)) {
        continue;
    }

    if (! file_exists($jsonDataPath)) {
        continue;
    }

    $jsonData = json_decode(file_get_contents(__DIR__ . "/../data/$locale.json"), true);
    $providerFileContents = file_get_contents($providerFilePath);

    foreach ($requiredProperties as $property => $jsonKey) {
        $providerFileContents = parseProperty($property, $jsonKey, $providerFileContents, $jsonData);
    }

    foreach ($optionalProperties as $property => $jsonKey) {
        if (! array_key_exists($jsonKey, $jsonData)) {
            continue;
        }

        $providerFileContents = parseProperty($property, $jsonKey, $providerFileContents, $jsonData);
    }

    file_put_contents($providerFilePath, $providerFileContents);
}

function parseProperty(string $property, string $jsonKey, string $providerFileContents, array $data): string
{
    $names = prepareNames($data[$jsonKey]);
    $pattern = '/public static array \$' . $property . ' = \[[^]]*];/';
    $replace = "public static array \$" . $property . " = [\n        " . $names . "\n    ];";

    return preg_replace(
        $pattern,
        $replace,
        $providerFileContents,
    );
}

function prepareNames(array $names): string
{
    $names = array_unique($names);
    sort($names);

    $parts = array_chunk($names, 20);
    $preparedNames = [];

    foreach ($parts as $part) {
        $part = array_map(fn (string $name) => '"' . $name . '"', $part);

        $preparedNames[] = implode(', ', $part);
    }

    return implode(',' . PHP_EOL . '        ', $preparedNames);
}
