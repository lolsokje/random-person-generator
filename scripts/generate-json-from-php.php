<?php

use LilPecky\DriverGenerator\Languages;
use LilPecky\DriverGenerator\Providers\Name;

require_once __DIR__ . '/../vendor/autoload.php';

$locales = Languages::getAvailableLocales();

$baseDataPath = __DIR__ . '/../data/';

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
    $className = "LilPecky\\DriverGenerator\\Providers\\$locale\\Name";
    if (! class_exists($className)) {
        continue;
    }

    /** @var Name $class */
    $class = new $className;

    $names = [];

    foreach ($requiredProperties as $property => $jsonKey) {
        $names[$jsonKey] = parseNames($class, $property);
    }

    foreach ($optionalProperties as $property => $jsonKey) {
        // family names don't exist in Icelandic
        if ($locale === 'is_IS' && $jsonKey === 'family') {
            continue;
        }

        if (property_exists(get_class($class), $property)) {
            $names[$jsonKey] = parseNames($class, $property);
        }
    }

    $jsonFilePath = $baseDataPath . $locale . '.json';

    file_put_contents($jsonFilePath, json_encode($names, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function parseNames(Name $class, string $property): array
{
    // for example, Name::givenNamesMale
    $propertyNames = array_unique($class::$$property);
    sort($propertyNames);

    return $propertyNames;
}
