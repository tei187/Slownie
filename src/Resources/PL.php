<?php
namespace tei187\Resources;

/**
 * Class with transcription literals for Polish language.
 */
class PL {
    /** @var array[] Transcription parts in Polish for numbers. */
    const NUMBERS = [
        'oox' => [
            1 => "jeden",
            2 => "dwa",
            3 => "trzy",
            4 => "cztery",
            5 => "pięć",
            6 => "sześć",
            7 => "siedem",
            8 => "osiem",
            9 => "dziewięć",
        ],
        'oxo' => [
            10 => "dziesięć",
            11 => "jedenaście",
            12 => "dwanaście",
            13 => "trzynaście",
            14 => "czternaście",
            15 => "piętnaście",
            16 => "szesnaście",
            17 => "siedemnaście",
            18 => "osiemnaście",
            19 => "dziewiętnaście",
            20 => "dwadzieścia",
            30 => "trzydzieści",
            40 => "czterdzieści",
            50 => "pięćdziesiąt",
            60 => "sześćdziesiąt",
            70 => "siedemdziesiąt",
            80 => "osiemdziesiąt",
            90 => "dziewięćdziesiąt",
        ],
        'xoo' => [
            100 => "sto",
            200 => "dwieście",
            300 => "trzysta",
            400 => "czterysta",
            500 => "pięćset",
            600 => "sześćset",
            700 => "siedemset",
            800 => "osiemset",
            900 => "dziewięćset",
        ],
        'f-oox' => [
            1 => "jedna",
            2 => "dwie",
            3 => "trzy",
            4 => "cztery",
            5 => "pięć",
            6 => "sześć",
            7 => "siedem",
            8 => "osiem",
            9 => "dziewięć",
        ],
    ];
   
    /** @var array[] Transcription parts in Polish for large numbers. */
    const LARGE_NUMBERS = [
        3 => [
            "s1" => "tysiąc",
            "s2" => "tysiące",
            "s3" => "tysięcy",
        ],
        6 => [
            "s1" => "milion",
            "s2" => "miliony",
            "s3" => "milionów",
        ],
        9 => [
            "s1" => "miliard",
            "s2" => "miliardy",
            "s3" => "miliardów",
        ],
        12 => [
            "s1" => "bilion",
            "s2" => "biliony",
            "s3" => "bilionów",
        ],
        15 => [
            "s1" => "biliard",
            "s2" => "biliardy",
            "s3" => "biliardów",
        ],
        18 => [
            "s1" => "trylion",
            "s2" => "tryliony",
            "s3" => "trylionów",
        ],
        21 => [
            "s1" => "tryliard",
            "s2" => "tryliardy",
            "s3" => "tryliardów",
        ],
        24 => [
            "s1" => "kwadrylion",
            "s2" => "kwadryliony",
            "s3" => "kwadrylionów",
        ],
        27 => [
            "s1" => "kwintylion",
            "s2" => "kwintyliony",
            "s3" => "kwintylionów",
        ],
    ];
}
