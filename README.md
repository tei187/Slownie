# Slownie
Class used to transcribe float values into words in Polish language, useful when word transcription is necessary (amount verification, genitive case use). Supports amounts up to 999.999.999.999,99 in many currencies (current list below). 

## Example
```php
    $t = new tei187\Slownie(12345.31, 'pln');
    echo $t->output();                    // dwanaście tysięcy trzysta czterdzieści pięć złotych, trzydzieści jeden groszy
    echo $t->output(999999999.99, 'usd'); // dziewięćset dziewięćdziesiąt dziewięć milionów dziewięćset dziewięćdziesiąt dziewięć tysięcy dziewięćset dziewięćdziesiąt dziewięć dolarów, dziewięćdziesiąt dziewięć centów
```

## Supported currencies
| Code | ISO 4217 No. | Currency                                                  |
|------|:------------:|-----------------------------------------------------------|
| AED  | 781          | United Arab Emirates dirham                               |
| AFN  | 971          | Afghan afghani                                            |
| ALL  | 008          | Albanian lek                                              |
| AMD  | 051          | Armenian dram                                             |
| ANG  | 532          | Netherlands Antillean guilder                             |
| ARS  | 032          | Argentine peso                                            |
| AWG  | 533          | Aruban florin                                             |
| AZN  | 944          | Azerbaijani manat                                         |
| BAM  | 977          | Bosnia and Herzegovina convertible mark                   |
| BBD  | 052          | Barbadian / Bajan dollar                                  |
| BDT  | 050          | Bangladeshi taka                                          |
| BGN  | 975          | Bulgarian lev                                             |
| BHD  | 048          | Bahraini dinar                                            |
| BMD  | 060          | Bermudian dollar                                          |
| BND  | 096          | Brunei dollar                                             |
| BOB  | 068          | Boliviano                                                 |
| BRL  | 986          | Brazilian real                                            |
| BSD  | 044          | Bahamian dollar                                           |
| BTN  | 064          | Bhutanese ngultrum                                        |
| BYN  | 933          | Belarusian ruble                                          |
| BZD  | 084          | Belize dollar                                             |
| CAD  | 124          | Canadian dollar                                           |
| CHF  | 756          | Swiss franc                                               |
| CLP  | 152          | Chilean peso                                              |
| CNY  | 156          | Chinese yuan                                              |
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
| HKD  | 344          | Hong Kong dollar                                          |
| HNL  | 340          | Honduran lempira                                          |
| HRK  | 191          | Croatian kuna                                             |
| HTG  | 332          | Haitian gourde                                            | 
| HUF  | 348          | Hungarian forint                                          |
| IDR  | 360          | Indonesian rupiah                                         |
| ILS  | 376          | Israeli new shekel                                        |
| INR  | 360          | Indian rupee                                              |
| IQD  | 368          | Iraqi dinar                                               |
| IRR  | 364          | Iranian rial                                              |
| ISK  | 352          | Icelandic króna                                           |
| JMD  | 388          | Jamaican dollar                                           |
| JOD  | 400          | Jordanian dinar                                           |
| JPY  | 392          | Yen                                                       |
| KGS  | 417          | Kyrgyzstani som                                           |
| KHR  | 116          | Cambodian riel                                            |
| KPW  | 408          | North Korean won                                          |
| KRW  | 410          | South Korean won                                          |
| KWD  | 414          | Kuwaiti dinar                                             |
| KYD  | 136          | Cayman Islands dollar                                     |
| KZT  | 398          | Kazakhstani tenge                                         |
| LAK  | 418          | Lao kip                                                   |
| LBP  | 422          | Lebanese pound                                            |
| LKR  | 144          | Sri Lankan rupee                                          |
| MDL  | 498          | Moldovan leu                                              |
| MKD  | 807          | Macedonian denar                                          |
| MMK  | 104          | Myanmar kyat                                              |
| MNT  | 496          | Mongolian tögrög                                          |
| MOP  | 446          | Macanese pataca                                           |
| MVR  | 462          | Maldivian rufiyaa                                         |
| MXN  | 484          | Mexican peso                                              |
| MYR  | 458          | Malaysian ringgit                                         |
| NIO  | 558          | Nicaraguan córdoba                                        |
| NOK  | 578          | Norwegian krone                                           |
| NPR  | 524          | Nepalese rupee                                            |
| OMR  | 512          | Omani rial                                                |
| PAB  | 590          | Panamanian balboa                                         |
| PEN  | 604          | Peruvian sol                                              |
| PHP  | 608          | Philippine peso                                           |
| PKR  | 586          | Pakistanie rupee                                          |
| PLN  | 985          | Polish złoty                                              |
| PYG  | 600          | Paraguayan guaraní                                        |
| QAR  | 634          | Qatari riyal                                              |
| RON  | 946          | Romanian leu                                              |
| RSD  | 941          | Serbian dinar                                             |
| RUB  | 643          | Russian ruble                                             |
| SAR  | 682          | Saudi riyal                                               |
| SGD  | 702          | Singapore dollar                                          |
| SEK  | 752          | Swedish krona                                             |
| SRD  | 968          | Surinamese dollar                                         |
| SYP  | 760          | Syrian pound                                              |
| THB  | 764          | Thai baht                                                 |
| TJS  | 972          | Tajikistani somoni                                        |
| TMT  | 934          | Turkmenistan manat                                        |
| TRY  | 949          | Turkish lira                                              |
| TTD  | 780          | Trinidad and Tobago dollar                                |
| TWD  | 901          | New Taiwan dollar                                         |
| UAH  | 980          | Ukrainian hryvnia                                         |
| USD  | 840          | United States dollar                                      |
| UYU  | 858          | Uruguayan peso                                            |
| UZS  | 860          | Uzbekistan som                                            |
| VES  | 928          | Venezuelan bolívar soberano                               |
| VND  | 704          | Vietnamese đồng                                           |
| XCD  | 951          | East Caribbean dollar                                     |
| YER  | 886          | Yemeni rial                                               |
| none | -            | `(default)` no currency, *does not support decimal point* |

## TODO
- [x] fix some lingual issues.
- [ ] check for exponents.
  - [ ] check rounding.
  - [ ] make as optional flag.
- [x] option to use ISO 4217 number instead of code.
- [x] incorporate European currencies.
- [x] incorporate American currencies.
- [x] incorporate Asian currencies.
- [ ] incorporate African currencies.
- [ ] incorporate Oceanian currencies.
- [ ] are there any more currencies? somewhere?
  - [ ] cryptocurrency
  - [ ] minerals by troy ounce (XAG, XAU, XPD, XPT)

## Requirements
- PHP >= 7.3

## Author
- [tei187](mailto:bonk.piotr@gmail.com)
