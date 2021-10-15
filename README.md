# Slownie
Class used to transcribe float values into words in Polish language, usefull when word transcription is necessary (amount verification). Supports amounts up to 999.999.999.999,99 in most european currencies.

## Example
```php
    $t = new tei187\Slownie(12345.31, 'pln');
    echo $t->output();                    // dwanaście tysięcy trzysta czterdzieści pięć złotych, trzydzieści jeden groszy
    echo $t->output(999999999.99, 'usd'); // dziewięćset dziewięćdziesiąt dziewięć milionów dziewięćset dziewięćdziesiąt dziewięć tysięcy dziewięćset dziewięćdziesiąt dziewięć dolarów, dziewięćdziesiąt dziewięć centów
```

## Supported currencies
| Code | ISO 4217 No. | Currency                                                  |
|------|:------------:|-----------------------------------------------------------|
| ALL  | 008          | Albanian lek                                              |
| AMD  | 051          | Armenian dram                                             |
| AZN  | 944          | Azerbaijani manat                                         |
| BAM  | 977          | Bosnia and Herzegovina convertible mark                   |
| BGN  | 975          | Bulgarian lev                                             |
| BYN  | 933          | Belarusian ruble                                          |
| CAD  | 124          | Canadian dollar                                           |
| CHF  | 756          | Swiss franc                                               |
| CZK  | 203          | Czech koruna                                              |
| DKK  | 208          | Danish krone                                              |
| EUR  | 978          | Euro                                                      |
| GBP  | 826          | Pound sterling                                            |
| GEL  | 981          | Georgian lari                                             |
| HRK  | 191          | Croatian kuna                                             |
| HUF  | 348          | Hungarian forint                                          |
| ISK  | 352          | Icelandic króna                                           |
| JPY  | 392          | Yen                                                       |
| MDL  | 498          | Moldovan leu                                              |
| MKD  | 807          | Macedonian denar                                          |
| NOK  | 578          | Norwegian krone                                           |
| PLN  | 985          | Polish złoty                                              |
| RON  | 946          | Romanian leu                                              |
| RSD  | 941          | Serbian dinar                                             |
| RUB  | 643          | Russian ruble                                             |
| SEK  | 752          | Swedish krona                                             |
| TRY  | 949          | Turkish lira                                              |
| UAH  | 980          | Ukrainian hryvnia                                         |
| USD  | 840          | United States dollar                                      |
| none | -            | `(default)` no currency, *does not support decimal point* |

## TODO
- [x] fix some lingual issue
- [ ] check for exponents
- [ ] option to use ISO 4217 number instead of code.
- [x] incorporate european currencies
- [ ] incorporate american currencies
- [ ] incorporate asian currencies
- [ ] incorporate african currencies
- [ ] are there any more currencies?

## Requirements
- PHP >= 7.3

## Author
- [tei187](mailto:bonk.piotr@gmail.com)
