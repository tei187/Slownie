# Slownie
Class used to transcribe float values into words in Polish language, usefull when word transcription is necessary. Supports amounts up to 999.999.999,99, in PLN, USD, EUR.

## Example
```php
    $t = new Slownie(12345.31, 'pln');
    echo $t->output();
    echo "<br>";
    echo $t->output(999999999.99, 'usd');
```
will produce 
```
    dwanaście tysięcy trzysta czterdzieści pięć złotych, trzydzieści jeden groszy
    dziewięćset dziewięćdziesiąt dziewięć milionów dziewięćset dziewięćdziesiąt dziewięć tysięcy dziewięćset dziewięćdziesiąt dziewięć dolarów, dziewięćdziesiąt dziewięć centów
```

## Requirements
- PHP >= 7.3

## Author
- [tei187](mailto:bonk.piotr@gmail.com)
