Helps to translate strings from date() function in php.

So for example, Friday becomes: Пятница, and vice-versa

### Instalation
```php
include 'vendor/autoload.php';
```

```php
$t = new Huglester\Translated\Date;

// $t->setFrom('en'); no need to change this if your language is english in php

// change the language we translate to
$t->setTo('ru'); // language we want translate to

// change the language we translate to
$t->tr(date('F'), 'ru'); // or pass as a second  parameter here

### Examples

$date = date('l, F d, Y h:i:s');

// Prints something like: Friday, March 29 2013 01:29:57
echo $date;

// Prints something like: Пятница, Март 29, 2013 01:29:57
echo $t->tr($date);

// Prints something like: Pentradienis, Kovas, 2013 01:29:57
echo $t->tr($date, 'lt');

#### Change mode:
$t->setMode('to');

// Prints something like: Пятница, Марта 29, 2013 01:29:57
echo $t->tr($date, 'ru');
```
