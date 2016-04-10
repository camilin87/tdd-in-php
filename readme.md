# TDD in PHP  

## Setup  
1- Install [Composer](https://getcomposer.org/) following [these steps](https://getcomposer.org/download/). Or if you're on a mac simply run:

```
brew install homebrew/php/composer
```

2- Install [PHPUnit](https://phpunit.de/). Download the [PHPUnit Packagist package](https://packagist.org/packages/phpunit/phpunit) by running:  

    composer require phpunit/phpunit

3- Create sample test  
Create the file `tests\demoCalculatorTest.php` with the following contents  

```php
<?php
    class DemoCalculatorTest extends PHPUnit_Framework_TestCase{
        public function testComparisson(){
            $this->assertEquals(15, 15);
        }
    }
?>
```

4- Configure PHPUnit runner with default options  

```
vendor/bin/phpunit --generate-configuration
```

5- Run the tests  

```
vendor/bin/phpunit
```

For more information on setup follow [this tutorial](http://code.tutsplus.com/tutorials/test-driven-development-in-php-first-steps--net-25796)

