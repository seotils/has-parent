# HasParent

## Description

This trait assigns parent to a class.

## License

HasParent is open-sourced software licensed under the [GPL-3.0] (https://www.gnu.org/licenses/gpl-3.0.en.html).

## Requirements

Package depends on *__deferred-exceptions__* package.

1.  GitHub:
    * [seotils/deferred-exceptions] (https://github.com/seotils/deferred-exceptions)

2.  Composer (packagist.org):
    * [seotils/deferred-exceptions] (https://packagist.org/packages/seotils/deferred-exceptions)

3.  PHPClasses:
    * [Deferred Exceptions] (http://www.phpclasses.org/package/9854-PHP-Queue-exceptions-and-throws-them-afterwards.html)

## Install

```bash
composer require seotils/has-parent
```

## Usage

```php
<?php

namespace My;

use Seotils\Traits\HasParent;

/**
 * Parent class
 */
class A {
  public function time(){
    return date('Y-m-d H:i:s');
  }
}

/**
 * Class with HasParent trait
 */
class B {
  use HasParent;
}

// Usage

$a = new A();
$b = new B();

// Assign and use parent class
echo $b->parentClass( $a )->time();

// Or step by step

// Assign parent class
$b->parentClass( $a );

// Use parent class
echo $b->parentClass()->time();

```

That`s all!
