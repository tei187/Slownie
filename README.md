# Slownie
Class used to transcribe float values into words in Polish language, useful when word transcription is necessary (amount verification). Supports amounts up to 999.999.999.999,99 in most european currencies.

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
| ANG  | 532          | Netherlands Antillean guilder                             |
| ARS  | 032          | Argentine peso                                            |
| AWG  | 533          | Aruban florin                                             |
| AZM  | 944          | Azerbaijani manat                                         |
| BAM  | 977          | Bosnia and Herzegovina convertible mark                   |
| BBD  | 052          | Barbadian / Bajan dollar                                  |
| BMD  | 060          | Bermudian dollar                                          |
| BGN  | 975          | Bulgarian lev                                             |
| BOB  | 068          | Boliviano                                                 |
| BRL  | 986          | Brazilian real                                            |
| BSD  | 044          | Bahamian dollar                                           |
| BZD  | 084          | Belize dollar                                             |
| BYN  | 933          | Belarusian ruble                                          |
| CAD  | 124          | Canadian dollar                                           |
| CHF  | 756          | Swiss franc                                               |
| CLP  | 152          | Chilean peso                                              |
| COP  | 170          | Colombian peso                                            |
| CRC  | 188          | Costa Rican colón                                         |
| CUC  | 931          | Cuban convertible peso                                    |
| CUP  | 192          | Cuban peso                                                |
| CZK  | 203          | Czech koruna                                              |
| DKK  | 208          | Danish krone                                              |
| DOP  | 214          | Dominican peso                                            |
| EUR  | 978          | Euro                                                      |
| FKP  | 238          | Falkland Islands pound                                    |
| GBP  | 826          | Pound sterling                                            |
| GEL  | 981          | Georgian lari                                             |
| GTQ  | 320          | Guatemalan quetzal                                        |
| GYD  | 328          | Guyanese dollar                                           |
| HNL  | 340          | Honduran lempira                                          |
| HRK  | 191          | Croatian kuna                                             |
| HTG  | 332          | Haitian gourde                                            | 
| HUF  | 348          | Hungarian forint                                          |
| ISK  | 352          | Icelandic króna                                           |
| JMD  | 388          | Jamaican dollar                                           |
| JPY  | 392          | Yen                                                       |
| KYD  | 136          | Cayman Islands dollar                                     |
| MDL  | 498          | Moldovan leu                                              |
| MKD  | 807          | Macedonian denar                                          |
| MXN  | 484          | Mexican peso                                              |
| NIO  | 558          | Nicaraguan córdoba                                        |
| NOK  | 578          | Norwegian krone                                           |
| PAB  | 590          | Panamanian balboa                                         |
| PEN  | 604          | Peruvian sol                                              |
| PLN  | 985          | Polish złoty                                              |
| PYG  | 600          | Paraguayan guaraní                                        |
| RON  | 946          | Romanian leu                                              |
| RSD  | 941          | Serbian dinar                                             |
| RUB  | 643          | Russian ruble                                             |
| SEK  | 752          | Swedish krona                                             |
| SRD  | 968          | Surinamese dollar                                         |
| TRY  | 949          | Turkish lira                                              |
| TTD  | 780          | Trinidad and Tobago dollar                                |
| UAH  | 980          | Ukrainian hryvnia                                         |
| USD  | 840          | United States dollar                                      |
| UYU  | 858          | Uruguayan peso                                            |
| XCD  | 951          | East Caribbean dollar                                     |
| VES  | 928          | Venezuelan bolívar soberano                               |
| none | -            | `(default)` no currency, *does not support decimal point* |

## TODO
- [x] fix some lingual issues.
- [ ] check for exponents.
  - [ ] check rounding.
  - [ ] make as optional flag.
- [x] option to use ISO 4217 number instead of code.
- [x] incorporate European currencies.
- [x] incorporate American currencies.
- [ ] incorporate Asian currencies.
- [ ] incorporate African currencies.
- [ ] are there any more currencies? somewhere?

## Requirements
- PHP >= 7.3

## Author
- [tei187](mailto:bonk.piotr@gmail.com)
