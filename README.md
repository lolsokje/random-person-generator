# Random Person Generator

This package allows you to generate people with random names, birthdays and country of birth. The country of birth can
either be completely random, or based on a provided language.

This package has been developed to fit a very specific use case, but since a list of random names can be useful for many
projects, I decided to publish it.

This package is heavily influenced/inspired by [FakerPHP](https://github.com/FakerPHP/Faker).

## Getting started

### Installation

This package requires PHP >= 8.1.

`composer require lil-pecky/random-person-generator`

### Usage

There's two ways to instantiate a Generator instance;

#### Providing a specific locale to the factory

```php
use LilPecky\RandomPersonGenerator\Factory;
use LilPecky\RandomPersonGenerator\Locale;

// the provided locale is required
$locale = Locale::create('nl_NL');
$generator = Factory::create($locale);
```

#### Randomising the locale, providing an optional language

```php
use LilPecky\RandomPersonGenerator\Factory;

// generator for a completely random locale (en_GB, fr_FR, pt_BR, ...)
$generator = Factory::createWithRandomLocale(); 

// generator for a random locale within a specific language (nl_BE or nl_NL)
$generator = Factory::createWithRandomLocale('nl'); 
```

In both cases, the provided language must be present in the

```php
LilPecky\RandomPersonGenerator\Languages::LANGUAGES
```

array, an exception will be thrown if an invalid language has been provided.

### Generating a person, or multiple people

```php
$locale = Locale::create('nl_NL');
$generator = Factory::create($locale);

$amount = new Amount(10);
$startDate = '2013-01-01';
$endDate = '2023-01-01';
$gender = Gender::FEMALE;

// generates a single Dutch person, with a male given name and date of birth between $startDate and $endDate
$person = $generator->person($startDate, $endDate, $gender);

// generates 10 Dutch people, each with a male given name and date of birth between $startDate and $endDate
$people = $generator->people($amount, $startDate, $endDate, $generator);
$people = $generator->persons($amount, $startDate, $endDate, $generator);
```

### Available methods

As this package has mainly been written to fit a very specific use case, the amount of available methods is limited;

```php
require_once 'vendor/autoload.php';

$locale = Locale::create('nl_NL');
$generator = Factory::create($locale);

// generates a random date between two bounds.
// if no start date is provided, it defaults to now - 30 years. Can also be a DateTimeImmutable object
// if no end date is provided, it defaults to now. Can also be a DateTimeImmutable object
$generator->dateBetween('2013-01-01', '2023-01-01');

// generates a random male Dutch given name
// if no gender is provided, it defaults to Gender::MALE 
$generator->givenName(Gender::MALE); 

// generates a random Dutch family name
$generator->familyName();
```

Some languages, like Icelandic, have gendered last names, so an optional gender can be provided to the `familyName`
method

```php
$locale = Locale::create('is_IS');
$generator = Factory::create($locale);

echo $generator->familyName(Gender::FEMALE);
// Eiðsdóttir

echo $generator->familyName(Gender::MALE);
// Þorfinnsson
```

## Source data

The names for each language/country have been generated using [ChatGPT](https://chat.openai.com/chat), and have been
supplemented by [FakerPHP](https://github.com/FakerPHP/Faker) names whenever possible.

## Contributing

### Adding names to locales

There are two ways of adding names;

1. adding them to a specific locale's JSON file
2. adding them to a specific locale's `Name.php` file

#### Adding names to a specific locale's JSON file

To add names to a locale's JSON file, open the locale's file in the `data` directory and add names to the appropriate
types (`male` & `female` for given names, `family`, `family_male` & `family_female` for given names, `middle` for middle
names).

Afterwards, run

```php
php scripts/generate-php-from-json.php
```

to add the newly added names to the appropriate PHP files.

#### Adding names to a specific locale's `Name.php` file

To add names to a locale's `Name.php` file, open that file in the `src/Providers/{locale}` directory and add the names
to the appropriate properties.

Afterwards, run

```php
php scripts/generate-json-from-php.php
```

to add the newly added names to the appropriate JSON files.

### Adding new locales

Adding a new locale is pretty simply. Create a new directory in the `src/Providers` directory in the correct
format (`ab_CD`), and in the new directory create a `Name.php` file.

The new `Name.php` file must extend

```php
LilPecky\RandomPersonGenerator\Providers\Name::class
```

#### Adding new languages

If the locale you've added a locale for which no language exists yet (for example, af_ZA for Afrikaans/South Africa), it
would be appreciated if you add the new language to the

```php
LilPecky\RandomPersonGenerator\Languages::LANGUAGES
```

array, with the [ISO 639-1](https://en.wikipedia.org/wiki/ISO_639-1) language code as key and the language name as
value (for example, `'af' => 'Afrikaans'`).
