# Slownie
Class used to transcribe float values into words in English, German or Polish language, useful when word transcription is necessary (amount verification, genitive case use). Supports amounts up to 999.999.999.999.999.999.999 in many currencies (current list below).
**(Work in progress... more of a proof of concept)**



## Examples

### Basic
```php
// EN EXTENSION
$en = new tei187\Slownie\EN("12345.31", 'pln');  // (EN)
echo $en->output();                            // outputs: twelve thousand three hundred forty five Polish zlotys, thirty one grosze
echo $en->output("999999999.99", 'usd');         // outputs: nine hundred ninety nine million nine hundred ninety nine thousand nine hundred ninety nine United States dollars, ninety nine cents

// PL EXTENSION
$pl = new tei187\Slownie\PL("12345.31", 'pln');  // (PL)
echo $pl->output();                            // outputs: dwanaście tysięcy trzysta czterdzieści pięć złotych, trzydzieści jeden groszy
echo $pl->output("999999999.99", 'usd');         // outputs: dziewięćset dziewięćdziesiąt dziewięć milionów dziewięćset dziewięćdziesiąt dziewięć tysięcy dziewięćset dziewięćdziesiąt dziewięć dolarów amerykańskich, dziewięćdziesiąt dziewięć centów
```



### Expanded

#### Fractional notation
Depending on use, sometimes it is not necessary to use a full-word notation of fractional currency but its' actual fractional transcription. In this case you could use `setFractions(true)`.
```php
// EN Extension
$en = new tei187\Slownie\EN("123.45", 'usd'); // meaning the amount of 123.45 USD (EN)
echo $en->output();                         // outputs: one hundred twenty three United States dollars, forty five cents
echo $en->setFractions(true)->output();     // outputs: one hundred twenty three United States dollars 45/100
```
```php
// PL Extension
$pl = new tei187\Slownie\PL("123.45", 'usd'); // meaning the amount of 123.45 USD (PL)
echo $pl->output();                         // outputs: sto dwadzieścia trzy dolary amerykańskie, czterdzieści pięć centów
echo $pl->setFractions(true)->output();     // outputs: sto dwadzieścia trzy dolary amerykańskie 45/100
```



#### Use of ISO 4217 numbers
Currencies can be passed as both IS0 4217 currency codes and ISO 4217 currency numbers.
```php
// EN EXTENSION
$en = new tei187\Slownie\EN("5.51");      // (EN)
echo $en->setCurrency("bob")->output(); // outputs: five bolivianos, fifty one centavos
echo $en->setCurrency("068")->output(); // outputs: five bolivianos, fifty one centavos
```
```php
// PL EXTENSION
$pl = new tei187\Slownie\PL("5.51");      // (PL)
echo $pl->setCurrency("bob")->output(); // outputs: pięć boliviano, pięćdziesiąt jeden centavo
echo $pl->setCurrency("068")->output(); // outputs: pięć boliviano, pięćdziesiąt jeden centavo
```



## Supported currencies
| Code | ISO 4217 No. | Currency                                                  |
|------|:------------:|-----------------------------------------------------------|
| AED  | 781          | United Arab Emirates dirham                               |
| AFN  | 971          | Afghan afghani                                            |
| ALL  | 008          | Albanian lek                                              |
| AMD  | 051          | Armenian dram                                             |
| ANG  | 532          | Netherlands Antillean guilder                             |
| AOA  | 973          | Angolan kwanza                                            |
| ARS  | 032          | Argentine peso                                            |
| AWG  | 533          | Aruban florin                                             |
| AZN  | 944          | Azerbaijani manat                                         |
| BAM  | 977          | Bosnia and Herzegovina convertible mark                   |
| BBD  | 052          | Barbadian / Bajan dollar                                  |
| BDT  | 050          | Bangladeshi taka                                          |
| BGN  | 975          | Bulgarian lev                                             |
| BHD  | 048          | Bahraini dinar                                            |
| BIF  | 108          | Burundian franc                                           |
| BMD  | 060          | Bermudian dollar                                          |
| BND  | 096          | Brunei dollar                                             |
| BOB  | 068          | Boliviano                                                 |
| BRL  | 986          | Brazilian real                                            |
| BSD  | 044          | Bahamian dollar                                           |
| BTN  | 064          | Bhutanese ngultrum                                        |
| BWP  | 072          | Botswana pula                                             |
| BYN  | 933          | Belarusian ruble                                          |
| BZD  | 084          | Belize dollar                                             |
| CAD  | 124          | Canadian dollar                                           |
| CDF  | 976          | Congolese franc                                           |
| CHF  | 756          | Swiss franc                                               |
| CLP  | 152          | Chilean peso                                              |
| CNY  | 156          | Chinese yuan                                              |
| COP  | 170          | Colombian peso                                            |
| CRC  | 188          | Costa Rican colón                                         |
| CUC  | 931          | Cuban convertible peso                                    |
| CUP  | 192          | Cuban peso                                                |
| CVE  | 132          | Cape Verdean escudo                                       |
| CZK  | 203          | Czech koruna                                              |
| DJF  | 262          | Djiboutian franc                                          |
| DKK  | 208          | Danish krone                                              |
| DOP  | 214          | Dominican peso                                            |
| DZD  | 012          | Algerian dinar                                            |
| EGP  | 818          | Egyptian pound                                            |
| ERN  | 232          | Eritrean nakfa                                            |
| ETB  | 230          | Ethiopian birr                                            |
| EUR  | 978          | Euro                                                      |
| FKP  | 238          | Falkland Islands pound                                    |
| GBP  | 826          | Pound sterling                                            |
| GEL  | 981          | Georgian lari                                             |
| GHS  | 936          | Ghanaian cedi                                             |
| GMD  | 270          | Gambian dalasi                                            |
| GNF  | 324          | Guinean franc                                             |
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
| KES  | 404          | Kenyan shilling                                           |
| KGS  | 417          | Kyrgyzstani som                                           |
| KHR  | 116          | Cambodian riel                                            |
| KMF  | 174          | Comoro franc                                              |
| KPW  | 408          | North Korean won                                          |
| KRW  | 410          | South Korean won                                          |
| KWD  | 414          | Kuwaiti dinar                                             |
| KYD  | 136          | Cayman Islands dollar                                     |
| KZT  | 398          | Kazakhstani tenge                                         |
| LAK  | 418          | Lao kip                                                   |
| LBP  | 422          | Lebanese pound                                            |
| LKR  | 144          | Sri Lankan rupee                                          |
| LRD  | 430          | Liberian dollar                                           |
| LSL  | 426          | Lesotho loti                                              |
| LYD  | 434          | Libyan dinar                                              |
| MAD  | 504          | Moroccan dirham                                           |
| MDL  | 498          | Moldovan leu                                              |
| MGA  | 969          | Malagasz ariary                                           |
| MKD  | 807          | Macedonian denar                                          |
| MMK  | 104          | Myanmar kyat                                              |
| MNT  | 496          | Mongolian tögrög                                          |
| MOP  | 446          | Macanese pataca                                           |
| MRU  | 929          | Mauritanian ouguiya                                       |
| MUR  | 480          | Mauritian rupee                                           |
| MVR  | 462          | Maldivian rufiyaa                                         |
| MWK  | 454          | Malawian kwacha                                           |
| MXN  | 484          | Mexican peso                                              |
| MYR  | 458          | Malaysian ringgit                                         |
| MZN  | 943          | Mozambican metical                                        |
| NAD  | 516          | Namibian dollar                                           |
| NGN  | 566          | Nigerian naira                                            |
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
| RWF  | 646          | Rwandan franc                                             |
| SAR  | 682          | Saudi riyal                                               |
| SCR  | 690          | Seychellois rupee                                         |
| SDG  | 938          | Sudanese pound                                            |
| SGD  | 702          | Singapore dollar                                          |
| SEK  | 752          | Swedish krona                                             |
| SLL  | 694          | Sierra Leonean leone                                      |
| SOS  | 706          | Somali shilling                                           |
| SRD  | 968          | Surinamese dollar                                         |
| SSP  | 728          | South Sudanese pound                                      |
| STN  | 930          | São Tomé and Príncipe dobra                               |
| SYP  | 760          | Syrian pound                                              |
| SZL  | 748          | Swazi lilangeni                                           |
| THB  | 764          | Thai baht                                                 |
| TJS  | 972          | Tajikistani somoni                                        |
| TMT  | 934          | Turkmenistan manat                                        |
| TRY  | 949          | Turkish lira                                              |
| TTD  | 780          | Trinidad and Tobago dollar                                |
| TWD  | 901          | New Taiwan dollar                                         |
| TZS  | 834          | Tanzanian shilling                                        |
| UAH  | 980          | Ukrainian hryvnia                                         |
| UGX  | 800          | Ugandan shilling                                          |
| USD  | 840          | United States dollar                                      |
| UYU  | 858          | Uruguayan peso                                            |
| UZS  | 860          | Uzbekistan som                                            |
| VES  | 928          | Venezuelan bolívar soberano                               |
| VND  | 704          | Vietnamese đồng                                           |
| XAF  | 950          | CFA franc BEAC                                            |
| XCD  | 951          | East Caribbean dollar                                     |
| XOF  | 952          | CFA franc BCEAO                                           |
| YER  | 886          | Yemeni rial                                               |
| ZAR  | 710          | South African rand                                        |
| ZMW  | 967          | Zambian kwacha                                            |
| ZWL  | 932          | Zimbabwean dollar (RTGS dollar)                           |
| none | -            | `(default)` no currency, *currently does not support decimal point* |



## TODO
- [x] base class:
  - [x] rewrite `relayString` method
- [x] Polish extension:
  - [x] fix some lingual issues.
- [x] English extension.
- [x] check for exponents:
  - [x] check rounding.
  - [x] make as optional flag.
- [x] option to use ISO 4217 number instead of code.
- [x] incorporate European currencies.
- [x] incorporate American currencies.
- [x] incorporate Asian currencies.
- [x] incorporate African currencies.
- [x] incorporate Oceanian currencies.
- [ ] are there any more currencies? somewhere?
  - [x] ~~cryptocurrency~~ *(what for? not worth it)*
  - [ ] minerals by troy ounce (XAG, XAU, XPD, XPT)



## Requirements
- PHP >= 7.3



## Author
- [tei187](mailto:bonk.piotr@gmail.com)
