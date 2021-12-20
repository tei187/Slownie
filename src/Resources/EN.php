<?php
namespace tei187\Resources\EN;

/** @var array[] Transcription parts in English for numbers. */
const Numbers = [
    'oox' => [
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
    ],
    'oxo' => [
        10 => "ten", 
        11 => "eleven", 
        12 => "twelve", 
        13 => "thirteen", 
        14 => "fourteen", 
        15 => "fifteen", 
        16 => "sixteen", 
        17 => "seventeen", 
        18 => "eighteen", 
        19 => "nineteen", 
        20 => "twenty",
        30 => "thirty",
        40 => "forty", 
        50 => "fifty", 
        60 => "sixty", 
        70 => "seventy", 
        80 => "eighty", 
        90 => "ninety",
    ],
    'xoo' => [
        100 => "one hundred",
        200 => "two hundred",
        300 => "three hundred",
        400 => "four hundred",
        500 => "five hundred",
        600 => "six hundred",
        700 => "seven hundred",
        800 => "eight hundred",
        900 => "nine hundred",
    ],
];

/** @var array[] Transcription parts in English for large numbers. */
const LargeNumbers = [
     3 => [
         's' => "thousand",
         'p' => "thousands",
     ],
     6 => [
        's' => "million",
        'p' => "millions",
     ],
     9 => [
        's' => "billion",
        'p' => "billions",
     ],
    12 => [
        's' => "trillion",
        'p' => "trillions",
    ],
    15 => [
        's' => "quadrillion",
        'p' => "quadrillions",
    ],
    18 => [
        's' => "quintillion",
        'p' => "quintillions",
    ],
    21 => [
        's' => "sextillion",
        'p' => "sextillions",
    ],
    24 => [
        's' => "septillion",
        'p' => "septillions",
    ],
    27 => [
        's' => "octillion",
        'p' => "octillions",
    ],
];