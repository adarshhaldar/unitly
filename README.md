# Unitly - PHP Unit Conversion Library

Unitly is a PHP library for converting units of measurement, such as time and weight. This library provides a flexible and intuitive API for performing unit conversions with ease.

## Installation

To install Unitly, use Composer:

```sh
composer require adarshhaldar/unitly
```

Make sure that the autoload file from Composer is loaded.
```php
require 'vendor/autoload.php';
```
## Usage

Unitly allows multiple approaches to using its conversion functionalities. Below are examples of different ways you can use the library.

### Converting Time Units

#### Using an Instance of `Unitly`
```php
$unitly = new Unitly();
$unitlyTimeConvertor = $unitly->time();
echo $unitlyTimeConvertor->second(60)->minute()->unify(); // Outputs: 1
```

#### Using Static Method of `Unitly`
```php
$unitlyTimeConvertor = Unitly::time();
echo $unitlyTimeConvertor->day(1)->hour()->unify(); // Outputs: 24
```

#### Direct Instantiation of `TimeConvertor`
```php
$unitlyTimeConvertor = new TimeConvertor();
echo $unitlyTimeConvertor->month(24)->year()->unify(); // Outputs: 2
```

### Converting Weight Units
This is also an example of reuse of previously converted data
```php
$unitlyWeightConvertor = $unitly->weight();
$firstRound = $unitlyWeightConvertor->gram(10000)->kilogram();
echo "Grams to kilograms: " . $firstRound->unify(); // Outputs: 10

$secondRound = $firstRound->tonne();
echo "Kilograms to tonnes: " . $secondRound->unify(); // Outputs: 0.01
```

## Error Handling
Wrap your conversion code in a `try-catch` block to handle any exceptions that may arise.
```php
try {
    // Conversion code
} catch (Exception $e) {
    echo $e->getMessage();
}
```

## License
This library is open-source and available under the MIT License.

## Contributing
Feel free to contribute by submitting issues or pull requests on GitHub.

## Author
Developed by Adarsh Haldar


 
