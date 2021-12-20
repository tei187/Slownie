<?
namespace tei187\Resources;

class DE {
    /** @var array[] Transcription parts in German for numbers. */
    const Numbers = [
        'oox' => [
            1 => "eins",
            2 => "zwei",
            3 => "drei",
            4 => "vier",
            5 => "fünf",
            6 => "sechs",
            7 => "sieben",
            8 => "acht",
            9 => "neun",
        ],
        'oxo' => [
            10 => "zehn", 
            11 => "elf", 
            12 => "zwölf", 
            13 => "dreizehn", 
            14 => "vierzehn", 
            15 => "fünfzehn", 
            16 => "sechzehn", 
            17 => "siebzehn", 
            18 => "achtzehn", 
            19 => "neunzehn", 
            20 => "zwanzig",
            30 => "dreißig",
            40 => "vierzig", 
            50 => "fünfzig", 
            60 => "sechzig", 
            70 => "siebzig", 
            80 => "achtzig", 
            90 => "neunzig",
        ],
        'xoo' => [
            100 => "einhundert",
            200 => "zweihundert",
            300 => "dreihundert",
            400 => "vierhundert",
            500 => "fünfhundert",
            600 => "sechshundert",
            700 => "siebenhundert",
            800 => "achthundert",
            900 => "neunhundert",
        ],
        'ooy' => [ // for 10^x (x>=6)
            1 => [
                'm' => 'ein', 
                'f' => 'eine'
            ]
        ]
    ];
    
    /** @var array[] Transcription parts in German for large numbers. */
    const LargeNumbers = [
         3 => [
             's' => "tausend",
             'p' => "tausend", // not really correct, but for simplicity sake
         ],
         6 => [
            's' => "Million",
            'p' => "Millionen",
         ],
         9 => [
            's' => "Milliarde",
            'p' => "Milliarden",
         ],
        12 => [
            's' => "Billion",
            'p' => "Billionen",
        ],
        15 => [
            's' => "Billiarde",
            'p' => "Billiarden",
        ],
        18 => [
            's' => "Trillion",
            'p' => "Trillionen",
        ],
        21 => [
            's' => "Sextillion",
            'p' => "Sextillionen",
        ],
        24 => [
            's' => "Septillion",
            'p' => "Septillionen",
        ],
        27 => [
            's' => "Octillion",
            'p' => "Octillionen",
        ],
    ];
}