<?php

namespace tei187\Resources\PL;

/** @var array[] Transcription parts in Polish for numbers. */
const Numbers = [
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
const LargeNumbers = [
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

namespace tei187\Resources\ISO4217\PL;

/** @var array[] Regular extension - cents. (PL) */
const Cents = [
    's1' => "cent",
    's2' => "centy",
    's3' => "centów",
    'f' => false,
];

 /** @var array[] Regular extension - cents (not used). (PL) */
  const Cents_NotUsed = [
    's1' => "cent",
    's2' => "centy",
    's3' => "centów",
    'f' => false,
    'u' => false
];

 /** @var array[] Regular extension - centavo. (PL) */
const Centavo = [
    's1' => "centavo",
    's2' => "centavo",
    's3' => "centavo",
    'f' => false,
];

 /** @var array[] Regular extension - centavo (not used). (PL) */
  const Centavo_NotUsed = [
    's1' => "centavo",
    's2' => "centavo",
    's3' => "centavo",
    'f' => false,
    'u' => false
];

 /** @var array[] Regular extension - centesimo. (PL) */
const Centesimo = [
    's1' => "centesimo",
    's2' => "centesimo",
    's3' => "centesimo",
    'f' => false,
];

 /** @var array[] Regular extension - centims. (PL) */
const Centims = [
    's1' => "centym",
    's2' => "centymy",
    's3' => "centymów",
    'f' => false,
];

 /** @var array[] Regular extension - centims (not used). (PL) */
  const Centims_NotUsed = [
    's1' => "centym",
    's2' => "centymy",
    's3' => "centymów",
    'f' => false,
    'u' => false,
];

 /** @var array[] Regular extension - fils, 3 decimal points. (PL) */
const Fils_3dec = [
    's1' => "fils",
    's2' => "filsy",
    's3' => "filsów",
    'f' => false,
    'd' => 3,
];

 /** @var array[] Regular extension - fils. (PL) */
const Fils = [
    's1' => "fils",
    's2' => "filsy",
    's3' => "filsów",
    'f' => false,
];

 /** @var array[] Regular extension - piastres. (PL) */
const Piastres = [
    's1' => "piastr",
    's2' => "piastry",
    's3' => "piastrów",
    'f' => false,
    'd' => 2,
];

 /** @var array[] Regular extension - piastres, 3 decimal points. (PL) */
  const Piastres_3dec = [
    's1' => "piastr",
    's2' => "piastry",
    's3' => "piastrów",
    'f' => false,
    'd' => 2,
];

 /** @var array[] Regular extension - sen. (PL) */
const Sen = [
    's1' => "sen",
    's2' => "seny",
    's3' => "senów",
    'f' => false,
];

 /** @var array[] Regular extension - pais. (PL) */
const Pais = [
    's1' => "pajsa",
    's2' => "pajsy",
    's3' => "pajs",
    'f' => true,
];

 /** @var array[] Regular extension - tiyin. (PL) */
const Tiyin = [
    's1' => "tyin",
    's2' => "tyiny",
    's3' => "tyinów",
    'f' => false,
];

 /** @var array[] Regular extension - pens. (PL) */
const Pens = [
    's1' => "pens",
    's2' => "pensy",
    's3' => "pensów",
    'f' => false,
];

 /**
  * Supported currencies by ISO 4217. (PL)
  *
  * 's1' - 1 unit
  * 's2' - 2-4 units, x2-x4 units
  * 's3' - 5-21 units, x5-y1 units
  * 'f'  - false if m, true if f
  * 'u'  - in use for minor, false if not, otherwise doesn't matter
  * 'd'  - in minor units, describes how many decimal points are in use, if none set defaults to 2
  *
  * @var array[]
  */
const Currencies = [
    'aed' => [
        's1' => "dirham Zjednoczonych Emiratów Arabskich",
        's2' => "dirhamy Zjednoczonych Emiratów Arabskich",
        's3' => "dirhamów Zjednoczonych Emiratów Arabskich",
        'f' => false,
        'minor' => Fils
    ],
    'afn' => [
        's1' => "afgani",
        's2' => "afgani",
        's3' => "afgani",
        'f' => false,
        'minor' => [
            's1' => "pul",
            's2' => "pul",
            's3' => "pul",
            'f' => false,
        ]
    ],
    'all' => [
        's1' => "lek",
        's2' => "leki",
        's3' => "leków",
        'f' => false,
        'minor' => [
            's1' => "qindarka",
            's2' => "qindarki",
            's3' => "qindarek",
            'f' => true,
        ]
    ],
    'amd' => [
        's1' => "dram armeński",
        's2' => "dramy armeńskie",
        's3' => "dramów armeńskich",
        'f' => false,
        'minor' => [
            's1' => "lum",
            's2' => "lumy",
            's3' => "lumów",
            'f' => false,
        ]
    ],
    'ang' => [
        's1' => "gulden Antyli Holenderskich",
        's2' => "guldeny Antyli Holenderskich",
        's3' => "guldenów Antyli Holenderskich",
        'f' => false,
        'minor' => Cents
    ],
    'aoa' => [
        's1' => "kwanza angolska",
        's2' => "kwanzy angolskie",
        's3' => "kwanz angolskich",
        'f' => true,
        'minor' => Centims
    ],
    'ars' => [
        's1' => "peso argentyńskie",
        's2' => "peso argentyńskie",
        's3' => "peso argentyńskich",
        'f' => false,
        'minor' => Centavo
    ],
    'aud' => [
        's1' => "dolar australijski",
        's2' => "dolary australijskie",
        's3' => "dolarów australijskich",
        'f' => false,
        'minor' => Cents
    ],
    'awg' => [
        's1' => "florin arubański",
        's2' => "floriny arubańskie",
        's3' => "florinów arubańskich",
        'f' => false,
        'minor' => Cents
    ],
    'azm' => [
        's1' => "manat azerbejdżański",
        's2' => "manaty azerbejdżańskie",
        's3' => "manatów azerbejdżańskich",
        'f' => false,
        'minor' => [
            's1' => "gapik",
            's2' => "gapiki",
            's3' => "gapików",
            'f' => false,
        ]
    ],
    'bam' => [
        's1' => "marka zamienna",
        's2' => "marki zamienne",
        's3' => "marek zamiennych",
        'f' => true,
        'minor' => [
            's1' => "fenig",
            's2' => "fenigi",
            's3' => "fenigów",
            'f' => false,
        ]
    ],
    'bbd' => [
        's1' => "dolar barbardoski",
        's2' => "dolary barbardoskie",
        's3' => "dolarów barbardoskich",
        'f' => false,
        'minor' => Cents
    ],
    'bdt' => [
        's1' => "taka",
        's2' => "taka",
        's3' => "taka",
        'f' => false,
        'minor' => [
            's1' => "paisa",
            's2' => "paise",
            's3' => "paise",
            'f' => false,
        ]
    ],
    'bgn' => [
        's1' => "lew",
        's2' => "lewy",
        's3' => "lewów",
        'f' => false,
        'minor' => [
            's1' => "stotinka",
            's2' => "stotinki",
            's3' => "stotinek",
            'f' => true,
        ]
    ],
    'bhd' => [
        's1' => "dinar bahrajski",
        's2' => "dinary bahrajskie",
        's3' => "dinarów bahrajskich",
        'f' => false,
        'minor' => Fils_3dec
    ],
    'bif' => [
        's1' => "frank burundyjski",
        's2' => "franki burundyjskie",
        's3' => "franków burundyjskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'bmd' => [
        's1' => "dolar bermudzki",
        's2' => "dolary bermudzkie",
        's3' => "dolarów bermudzkich",
        'f' => false,
        'minor' => Cents
    ],
    'bnd' => [
        's1' => "dolar brunejski",
        's2' => "dolary brunejskie",
        's3' => "dolarów brunejskich",
        'f' => false,
        'minor' => Cents
    ],
    'bob' => [
        's1' => "boliviano",
        's2' => "boliviano",
        's3' => "boliviano",
        'f' => false,
        'minor' => Centavo
    ],
    'brl' => [
        's1' => "real brazylijski",
        's2' => "reale brazylijskie",
        's3' => "reali brazylijskich",
        'f' => false,
        'minor' => Centavo
    ],
    'bsd' => [
        's1' => "dolar bahamski",
        's2' => "dolary bahamskie",
        's3' => "dolarów bahamskich",
        'f' => false,
        'minor' => Cents
    ],
    'btn' => [
        's1' => "ngultrum butański",
        's2' => "ngultrum butańskie",
        's3' => "ngultrum butańskich",
        'f' => false,
        'minor' => [
            's1' => "czetrum",
            's2' => "czetrum",
            's3' => "czetrum",
            'f' => false,
        ]
    ],
    'bwp' => [
        's1' => "pula botswańska",
        's2' => "pula botswańskie",
        's3' => "pula botswańskich",
        'f' => true,
        'minor' => [
            's1' => "tebe",
            's2' => "tebe",
            's3' => "tebe",
            'f' => false,
        ]
    ],
    'byn' => [
        's1' => "rubel białoruski",
        's2' => "ruble białoruskie",
        's3' => "rubli białoruskich",
        'f' => false,
        'minor' => [
            's1' => "kopiejka",
            's2' => "kopiejki",
            's3' => "kopiejek",
            'f' => true,
        ]
    ],
    'bzd' => [
        's1' => "dolar belizeński",
        's2' => "dolary belizeńskie",
        's3' => "dolarów belizeńskich",
        'f' => false,
        'minor' => Cents
    ],
    'cad' => [
        's1' => "dolar kanadyjski",
        's2' => "dolary kanadyjskie",
        's3' => "dolarów kanadyjskich",
        'f' => false,
        'minor' => Cents
    ],
    'cdf' => [
        's1' => "frank kongijski",
        's2' => "franki kongijskie",
        's3' => "franków kongijskich",
        'f' => false,
        'minor' => Centims
    ],
    'chf' => [
        's1' => "frank szwajcarski",
        's2' => "franki szwajcarske",
        's3' => "franków szwajcarskich",
        'f' => false,
        'minor' => Centims
    ],
    'clp' => [
        's1' => "peso chillijski",
        's2' => "peso chillijskie",
        's3' => "peso chillijskich",
        'f' => false,
        'minor' => Centavo_NotUsed
    ],
    'cny' => [
        's1' => "yuan",
        's2' => "yuany",
        's3' => "yuanów",
        'f' => false,
        'minor' => [
            's1' => "jiao",
            's2' => "jiao",
            's3' => "jiao",
            'd' => 1,
            'f' => false,
            'minor' => [
                's1' => "fen",
                's2' => "feny",
                's3' => "fenów",
                'd' => 1,
                'f' => false,
            ]
        ]
    ],
    'cop' => [
        's1' => "peso kolumbijskie",
        's2' => "peso kolumbijskie",
        's3' => "peso kolumbijskich",
        'f' => false,
        'minor' => Centavo
    ],
    'crc' => [
        's1' => "colon kostarykański",
        's2' => "colon kostarykańskie",
        's3' => "colon kostarykańskich",
        'f' => false,
        'minor' => Centims
    ],
    'cuc' => [
        's1' => "peso kubańskie wymienialne",
        's2' => "peso kubańskie wymienialne",
        's3' => "peso kubańskich wymienialnych",
        'f' => false,
        'minor' => Centavo
    ],
    'cup' => [
        's1' => "peso kubańskie",
        's2' => "peso kubańskie",
        's3' => "peso kubańskich",
        'f' => false,
        'minor' => Centavo
    ],
    'cve' => [
        's1' => "escudo Zielonego Przylądka",
        's2' => "escudo Zielonego Przylądka",
        's3' => "escudo Zielonego Przylądka",
        'f' => false,
        'minor' => Centavo
    ],
    'czk' => [
        's1' => "korona czeska",
        's2' => "korony czeskie",
        's3' => "koron czeskich",
        'f' => true,
        'minor' => [
            's1' => "halerz",
            's2' => "halerze",
            's3' => "halerzy",
            'f' => false,
        ]
    ],
    'djf' => [
        's1' => "frank dżibutyjski",
        's2' => "franki dżibutyjskie",
        's3' => "franków dżibutyjskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'dkk' => [
        's1' => "korona duńska",
        's2' => "korony duńskie",
        's3' => "koron duńskich",
        'f' => true,
        'minor' => [
            's1' => "øre",
            's2' => "øre",
            's3' => "øre",
            'f' => false,
        ]
    ],
    'dzd' => [
        's1' => "dinar algierski",
        's2' => "dinary algierskie",
        's3' => "dinarów algierskich",
        'f' => true,
        'minor' => Centims
    ],
    'dop' => [
        's1' => "peso dominikańskie",
        's2' => "peso dominikańskie",
        's3' => "peso dominikańskich",
        'f' => false,
        'minor' => Centavo
    ],
    'egp' => [
        's1' => "funt egipski",
        's2' => "funty egipskie",
        's3' => "funtów egipskich",
        'f' => false,
        'minor' => Piastres
    ],
    'eur' => [
        's1' => "euro",
        's2' => "euro",
        's3' => "euro",
        'f' => false,
        'minor' => Cents
    ],
    'ern' => [
        's1' => "nakfa erytrejska",
        's2' => "nakfy erytrejskie",
        's3' => "nakf erytrejskich",
        'f' => true,
        'minor' => Cents
    ],
    'etb' => [
        's1' => "birr etiopski",
        's2' => "birry etiopskie",
        's3' => "birrów etiopskich",
        'f' => false,
        'minor' => Centims
    ],
    'fjd' => [
        's1' => "dolar fidżi",
        's2' => "dolary fidżi",
        's3' => "dolarów fidżi",
        'f' => false,
        'minor' => Cents
    ],
    'fkp' => [
        's1' => "funt falklandzki",
        's2' => "funty falklandzkie",
        's3' => "funtów falklandzkich",
        'f' => false,
        'minor' => Pens
    ],
    'gbp' => [
        's1' => "funt brytyjski",
        's2' => "funty brytyjskie",
        's3' => "funtów brytyjskich",
        'f' => false,
        'minor' => Pens
    ],
    'gel' => [
        's1' => "lari",
        's2' => "lari",
        's3' => "lari",
        'f' => false,
        'minor' => [
            's1' => "tetri",
            's2' => "tetri",
            's3' => "tetri",
            'f' => false,
        ]
    ],
    'ghs' => [
        's1' => "cedi ghańskie",
        's2' => "cedi ghańskie",
        's3' => "cedi ghańskich",
        'f' => false,
        'minor' => [
            's1' => "pesewa",
            's2' => "pesewa",
            's3' => "pesewa",
            'f' => false,
        ]
    ],
    'gip' => [
        's1' => "funt gibraltarski",
        's2' => "funty gibraltarskie",
        's3' => "funtów gibraltarskich",
        'f' => false,
        'minor' => Pens
    ],
    'gmd' => [
        's1' => "dalasi gambijski",
        's2' => "dalasi gambijskie",
        's3' => "dalasi gambijskich",
        'f' => false,
        'minor' => [
            's1' => "butut",
            's2' => "bututy",
            's3' => "bututów",
            'f' => false,
        ]
    ],
    'gnf' => [
        's1' => "frank gwinejski",
        's2' => "franki gwinejskie",
        's3' => "franków gwinejskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'gtq' => [
        's1' => "quetzal",
        's2' => "quetzal",
        's3' => "quetzal",
        'f' => false,
        'minor' => Centavo
    ],
    'gyd' => [
        's1' => "dolar gujański",
        's2' => "dolary gujańskie",
        's3' => "dolarów gujańskich",
        'f' => false,
        'minor' => Cents
    ],
    'hnl' => [
        's1' => "lempira honduraska",
        's2' => "lempiry honduraskie",
        's3' => "lempir honduraskich",
        'f' => false,
        'minor' => Centavo
    ],
    'hkd' => [
        's1' => "dolar hongkoński",
        's2' => "dolary hongkońskie",
        's3' => "dolarów hongkońskich",
        'f' => false,
        'minor' => Cents
    ],
    'hrk' => [
        's1' => "kuna",
        's2' => "kuny",
        's3' => "kun",
        'f' => true,
        'minor' => [
            's1' => "lipa",
            's2' => "lipy",
            's3' => "lip",
            'f' => true,
        ]
    ],
    'htg' => [
        's1' => "gourde",
        's2' => "gourde",
        's3' => "gourde",
        'f' => false,
        'minor' => Centims
    ],
    'huf' => [
        's1' => "forint",
        's2' => "forinty",
        's3' => "forintów",
        'f' => false,
        'minor' => [
            's1' => "filler",
            's2' => "fillery",
            's3' => "fillerów",
            'f' => false,
        ]
    ],
    'idr' => [
        's1' => "rupia indonezyjska",
        's2' => "rupie indonezyjskie",
        's3' => "rupii indonezyjskich",
        'f' => true,
        'minor' => Sen
    ],
    'ils' => [
        's1' => "nowy izraelski szekel",
        's2' => "nowe izraelskie szekle",
        's3' => "nowych izraelskich szekli",
        'f' => false,
        'minor' => [
            's1' => "agora",
            's2' => "agory",
            's3' => "agor",
            'f' => true,
        ]
    ],
    'inr' => [
        's1' => "rupia indyjska",
        's2' => "rupie indyjskie",
        's3' => "rupii indyjskich",
        'f' => true,
        'minor' => Pais
    ],
    'iqd' => [
        's1' => "dinar irakijski",
        's2' => "dinary irakijskie",
        's3' => "dinarów irakijskich",
        'f' => false,
        'minor' => Fils_3dec
    ],
    'irr' => [
        's1' => "rial irański",
        's2' => "riale irańskie",
        's3' => "riali irańskich",
        'f' => false,
        'minor' => [
            's1' => "dinar",
            's2' => "dinary",
            's3' => "dinarów",
            'f' => false,
        ]
    ],
    'isk' => [
        's1' => "korona islandzka",
        's2' => "korony islandzkie",
        's3' => "koron islandzkich",
        'f' => true,
        'minor' => [
            's1' => "eyrir",
            's2' => "aurar",
            's3' => "aurar",
            'f' => false,
            'u' => false,
        ]
    ],
    'jmd' => [
        's1' => "dolar jamajski",
        's2' => "dolary jamajskie",
        's3' => "dolarów jamajskich",
        'f' => false,
        'minor' => Cents
    ],
    'jod' => [
        's1' => "dinar jordański",
        's2' => "dinary jordańskie",
        's3' => "dinarów jordańskich",
        'f' => false,
        'minor' => Piastres_3dec
    ],
    'jpy' => [
        's1' => "jen",
        's2' => "jeny",
        's3' => "jenów",
        'f' => false,
        'minor' => [
            's1' => "sen",
            's2' => "seny",
            's3' => "senów",
            'f' => false,
            'u' => false,
        ]
    ],
    'kes' => [
        's1' => "szyling kenijski",
        's2' => "szylingi kenijskie",
        's3' => "szylingów kenijskch",
        'f' => false,
        'minor' => Cents
    ],
    'kgs' => [
        's1' => "som kirgiski",
        's2' => "somy kirgiskie",
        's3' => "somów kirgiskich",
        'f' => false,
        'minor' => Tiyin
    ],
    'khr' => [
        's1' => "riel kambodżański",
        's2' => "riel kambodżańskie",
        's3' => "riel kambodżańskich",
        'f' => false,
        'minor' => Sen
    ],
    'kmf' => [
        's1' => "frank komoryjski",
        's2' => "franki komoryjskie",
        's3' => "franków komoryjskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'kpw' => [
        's1' => "won północnokoreański",
        's2' => "wony północnokoreańskie",
        's3' => "wonów północnokoreańskich",
        'f' => false,
        'minor' => [
            's1' => "czon",
            's2' => "czony",
            's3' => "czonów",
            'f' => false,
        ]
    ],
    'krw' => [
        's1' => "won południowokoreański",
        's2' => "wony południowokoreańskie",
        's3' => "wonów południowokoreańskich",
        'f' => false,
        'minor' => [
            's1' => "czon",
            's2' => "czony",
            's3' => "czonów",
            'f' => false,
            'u' => false,
        ]
    ],
    'kwd' => [
        's1' => "dinar kuwejcki",
        's2' => "dinary kuwejckie",
        's3' => "dinarów kuwejckich",
        'f' => false,
        'minor' => Fils_3dec
    ],
    'kyd' => [
        's1' => "dolar kajmański",
        's2' => "dolary kajmańskie",
        's3' => "dolarów kajmańskich",
        'f' => false,
        'minor' => Cents
    ],
    'kzt' => [
        's1' => "tenge kazachski",
        's2' => "tenge kazachskie",
        's3' => "tenge kazachskich",
        'f' => false,
        'minor' => [
            's1' => "tiyn",
            's2' => "tiyny",
            's3' => "tiynów",
            'f' => false,
        ]
    ],
    'lak' => [
        's1' => "kip laotański",
        's2' => "kipy laotańskie",
        's3' => "kipów laotańskich",
        'f' => false,
        'minor' => [
            's1' => "at",
            's2' => "at",
            's3' => "at",
            'f' => false,
        ]
    ],
    'lbp' => [
        's1' => "funt libański",
        's2' => "funty libańskie",
        's3' => "funtów libańskich",
        'f' => false,
        'minor' => Piastres
    ],
    'lkr' => [
        's1' => "rupia lankijska",
        's2' => "rupie lankijskie",
        's3' => "rupii lankijskich",
        'f' => true,
        'minor' => Cents
    ],
    'lrd' => [
        's1' => "dolar liberyjski",
        's2' => "dolary liberyjskie",
        's3' => "dolarw liberyjskich",
        'f' => false,
        'minor' => Cents
    ],
    'lsl' => [
        's1' => "loti sotyjskie",
        's2' => "maloti sotyjskie",
        's3' => "maloti sotyjskich",
        'f' => false,
        'minor' => [
            's1' => "sente",
            's2' => "lisente",
            's3' => "lisente",
            'f' => false,
        ]
    ],
    'lyd' => [
        's1' => "dinar libijski",
        's2' => "dinary libijskie",
        's3' => "dinarów libijskich",
        'f' => false,
        'minor' => [
            's1' => "dirham",
            's2' => "dirhamy",
            's3' => "dirhamów",
            'f' => false,
            'd' => 3
        ]
    ],
    'mad' => [
        's1' => "dirham marokański",
        's2' => "dirhamy marokańskie",
        's3' => "dirhamów marokańskich",
        'f' => false,
        'minor' => Centims
    ],
    'mdl' => [
        's1' => "lej mołdawski",
        's2' => "leje mołdawskie",
        's3' => "lejów mołdawskich",
        'f' => false,
        'minor' => [
            's1' => "ban",
            's2' => "bany",
            's3' => "banów",
            'f' => false,
        ]
    ],
    'mga' => [
        's1' => "ariary malgaski",
        's2' => "ariary malgaskie",
        's3' => "ariary malgaskich",
        'f' => false,
        'minor' => [
            's1' => "iraimbilanja",
            's2' => "iraimbilanja",
            's3' => "iraimbilanja",
            'f' => false,
        ]
    ],
    'mkd' => [
        's1' => "denar macedoński",
        's2' => "denary macedońskie",
        's3' => "denarów macedońskich",
        'f' => false,
        'minor' => [
            's1' => "deni",
            's2' => "deni",
            's3' => "deni",
            'f' => false,
            'u' => false,
        ]
    ],
    'mmk' => [
        's1' => "kiat mjanmański",
        's2' => "kiaty mjanmańskie",
        's3' => "kiatów mjanmańskich",
        'f' => false,
        'minor' => [
            's1' => "pia",
            's2' => "pia",
            's3' => "pia",
            'f' => false,
        ]
    ],
    'mnt' => [
        's1' => "tugrik mongolski",
        's2' => "tugriki mongolskie",
        's3' => "tugrików mongolskich",
        'f' => false,
        'minor' => [
            's1' => "möngö",
            's2' => "möngö",
            's3' => "möngö",
            'f' => false,
        ]
    ],
    'mop' => [
        's1' => "pataca Macau",
        's2' => "pataca Macau",
        's3' => "pataca Macau",
        'f' => false,
        'minor' => [
            's1' => "avos",
            's2' => "avos",
            's3' => "avos",
            'f' => false,
        ]
    ],
    'mru' => [
        's1' => "ugija mauretańska",
        's2' => "ugija mauretańskie",
        's3' => "ugija mauretańskich",
        'f' => true,
        'minor' => [
            's1' => "chum",
            's2' => "chum",
            's3' => "chum",
            'f' => false,
        ]
    ],
    'mur' => [
        's1' => "rupia maurytyjska",
        's2' => "rupie maurytyjskie",
        's3' => "rupii maurytyjskich",
        'f' => true,
        'minor' => Cents
    ],
    'mvr' => [
        's1' => "rupia malediwska",
        's2' => "rupie malediwskie",
        's3' => "rupii malediwskich",
        'f' => true,
        'minor' => [
            's1' => "lari",
            's2' => "lari",
            's3' => "lari",
            'f' => false,
        ]
    ],
    'mxn' => [
        's1' => "peso meksykańskie",
        's2' => "peso meksykańskie",
        's3' => "peso meksykańskich",
        'f' => false,
        'minor' => Centavo
    ],
    'myr' => [
        's1' => "ringgit malezyjski",
        's2' => "ringgity malezyjskie",
        's3' => "ringgitów malezyjskich",
        'f' => false,
        'minor' => Sen
    ],
    'mwk' => [
        's1' => "kwacha malawijska",
        's2' => "kwacha malawijskie",
        's3' => "kwacha malawijskich",
        'f' => true,
        'minor' => [
            's1' => "tambala",
            's2' => "tambala",
            's3' => "tambala",
            'f' => true,
        ]
    ],
    'mzn' => [
        's1' => "nowy metical mozambijski",
        's2' => "nowe meticale mozambijskie",
        's3' => "nowych meticali mozambijskich",
        'f' => true,
        'minor' => Centavo
    ],
    'nad' => [
        's1' => "dolar namibijski",
        's2' => "dolary namibijskie",
        's3' => "dolarów namibijskich",
        'f' => false,
        'minor' => Cents
    ],
    'nio' => [
        's1' => "cordoba oro",
        's2' => "cordoby oro",
        's3' => "cordób oro",
        'f' => false,
        'minor' => Centavo
    ],
    'ngn' => [
        's1' => "naira nigeryjska",
        's2' => "nairy nigeryjskie",
        's3' => "nair nigeryjskich",
        'f' => true,
        'minor' => [
            's1' => "kobe",
            's2' => "kobo",
            's3' => "kobo",
            'f' => false,
        ]
    ],
    'npr' => [
        's1' => "rupia nepalska",
        's2' => "rupie nepalskie",
        's3' => "rupii nepalskich",
        'f' => true,
        'minor' => Pais,
    ],
    'nok' => [
        's1' => "korona norweska",
        's2' => "korony norweskie",
        's3' => "koron norweskich",
        'f' => true,
        'minor' => [
            's1' => "øre",
            's2' => "øre",
            's3' => "øre",
            'f' => false,
        ]
    ],
    'nzd' => [
        's1' => "dolar nowozelandzki",
        's2' => "dolary nowozelandzkie",
        's3' => "dolarów nowozelandzkich",
        'f' => false,
        'minor' => Cents
    ],
    'omr' => [
        's1' => "rial omański",
        's2' => "riale omańskie",
        's3' => "riali omańskich",
        'f' => true,
        'minor' => [
            's1' => "baisa",
            's2' => "baisa",
            's3' => "baisa",
            'f' => false,
            'd' => 3,
        ]
    ],
    'pab' => [
        's1' => "balboa panamski",
        's2' => "balboa panamskie",
        's3' => "balboa panamskich",
        'f' => false,
        'minor' => Centesimo
    ],
    'pen' => [
        's1' => "sol peruwiański",
        's2' => "sole peruwiańskie",
        's3' => "soli peruwiańskich",
        'f' => false,
        'minor' => Centims
    ],
    'pgk' => [
        's1' => "kina papuaska",
        's2' => "kina papuaskie",
        's3' => "kina papuaskich",
        'f' => true,
        'minor' => [
            's1' => "toea",
            's2' => "toea",
            's3' => "toea",
            'f' => false,
        ]
    ],
    'php' => [
        's1' => "peso filipiński",
        's2' => "peso filipińskie",
        's3' => "peso filipińskich",
        'f' => false,
        'minor' => Centavo
    ],
    'pkr' => [
        's1' => "rupia pakistańska",
        's2' => "rupie pakistańskie",
        's3' => "rupii pakistańskich",
        'f' => false,
        'minor' => Pais
    ],
    'pln' => [
        's1' => "złoty",
        's2' => "złote",
        's3' => "złotych",
        'f' => false,
        'minor' => [
            's1' => "grosz",
            's2' => "grosze",
            's3' => "groszy",
            'f' => false,
        ]
    ],
    'pyg' => [
        's1' => "guaraní paragwajski",
        's2' => "guaraní paragwajskie",
        's3' => "guaraní paragwajskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'qar' => [
        's1' => "rial katarski",
        's2' => "riale katarskie",
        's3' => "riali katarskich",
        'f' => false,
        'minor' => [
            's1' => "dirham",
            's2' => "dirhamy",
            's3' => "dirhamów",
            'f' => false,
        ]
    ],
    'ron' => [
        's1' => "lej rumuński",
        's2' => "leje rumuńskie",
        's3' => "lejów rumuńskich",
        'f' => false,
        'minor' => [
            's1' => "ban",
            's2' => "bany",
            's3' => "banów",
            'f' => false,
        ]
    ],
    'rsd' => [
        's1' => "dinar serbski",
        's2' => "dinary serbskie",
        's3' => "dinarów serbskich",
        'f' => false,
        'minor' => [
            's1' => "para",
            's2' => "para",
            's3' => "para",
            'f' => false
        ]
    ],
    'rub' => [
        's1' => "rubel rosyjski",
        's2' => "ruble rosyjskie",
        's3' => "rubli rosyjskich",
        'f' => false,
        'minor' => [
            's1' => "kopiejka",
            's2' => "kopiejki",
            's3' => "kopiejek",
            'f' => true
        ]
    ],
    'rwf' => [
        's1' => "frank rwandyjski",
        's2' => "franki rwandyjskie",
        's3' => "franków rwandyjskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'sar' => [
        's1' => "rial saudyjski",
        's2' => "riale saudyjskie",
        's3' => "riali saudyjskich",
        'f' => false,
        'minor' => [
            's1' => "halal",
            's2' => "halale",
            's3' => "halali",
            'f' => false,
        ]
    ],
    'sbd' => [
        's1' => "dolar Wysp Salomona",
        's2' => "dolary Wysp Salomona",
        's3' => "dolarów Wysp Salomona",
        'f' => false,
        'minor' => Cents
    ],
    'scr' => [
        's1' => "rupia seszelska",
        's2' => "rupie seszelskie",
        's3' => "rupii seszelskich",
        'f' => true,
        'minor' => Cents
    ],
    'sdg' => [
        's1' => "funt sudański",
        's2' => "funty sudańskie",
        's3' => "funtów sudańskich",
        'f' => false,
        'minor' => Piastres
    ],
    'sek' => [
        's1' => "korona szwedzka",
        's2' => "korony szwedzkie",
        's3' => "koron szwedzkich",
        'f' => true,
        'minor' => [
            's1' => "öre",
            's2' => "öre",
            's3' => "öre",
            'f' => false,
        ]
    ],
    'sgd' => [
        's1' => "dolar singapurski",
        's2' => "dolary singapurskie",
        's3' => "dolarów singapurskich",
        'f' => false,
        'minor' => Cents
    ],
    'shp' => [
        's1' => "funt Świętej Heleny",
        's2' => "funty Świętej Heleny",
        's3' => "funtów Świętej Heleny",
        'f' => false,
        'minor' => Pens
    ],
    'sll' => [
        's1' => "leone sierraleoński",
        's2' => "leone sierraleońskie",
        's3' => "leone sierraleońskich",
        'f' => false,
        'minor' => Cents
    ],
    'sos' => [
        's1' => "szyling somalijski",
        's2' => "szylingi somalijskie",
        's3' => "szylingów somalijskich",
        'f' => false,
        'minor' => Cents
    ],
    'srd' => [
        's1' => "dolar surinamski",
        's2' => "dolary surinamskie",
        's3' => "dolarów surinamskich",
        'f' => false,
        'minor' => Cents
    ],
    'ssp' => [
        's1' => "funt południowosudański",
        's2' => "funty południowosudańskie",
        's3' => "funtów południowosudańskich",
        'f' => false,
        'minor' => Piastres
    ],
    'stn' => [
        's1' => "dobra Tomasza/Książęca",
        's2' => "dobry Tomasza/Książęce",
        's3' => "dóbr Tomasza/Książęcych",
        'f' => false,
        'minor' => Centims
    ],
    'svc' => [
        's1' => "colón salwadorski",
        's2' => "colón salwadorskie",
        's3' => "colón salwadorskich",
        'f' => false,
        'minor' => Centavo
    ],
    'syp' => [
        's1' => "funt syryjski",
        's2' => "funty syryjskie",
        's3' => "funtów syryjskich",
        'f' => false,
        'minor' => Piastres
    ],
    'szl' => [
        's1' => "lilangeni suazyjski",
        's2' => "lilangeni suazyjskie",
        's3' => "lilangeni suazyjskich",
        'f' => false,
        'minor' => Cents
    ],
    'thb' => [
        's1' => "baht tajski",
        's2' => "bahty tajskie",
        's3' => "bahtów tajskich",
        'f' => true,
        'minor' => [
            's1' => "satang",
            's2' => "satangi",
            's3' => "satangów",
            'f' => false,
        ]
    ],
    'tjs' => [
        's1' => "somoni tadżykistański",
        's2' => "somoni tadżykistańskie",
        's3' => "somoni tadżykistańskich",
        'f' => true,
        'minor' => [
            's1' => "diram",
            's2' => "diramy",
            's3' => "diramów",
            'f' => false,
        ]
    ],
    'tmt' => [
        's1' => "manat turkmeński",
        's2' => "manaty turkmeńskie",
        's3' => "manatów turkmeńskich",
        'f' => false,
        'minor' => [
            's1' => "tenge",
            's2' => "tenge",
            's3' => "tenge",
            'f' => false,
        ]
    ],
    'tnd' => [
        's1' => "dinar tunezyjski",
        's2' => "dinary tunezyjskie",
        's3' => "dinarów tunezyjskich",
        'f' => false,
        'minor' => [
            's1' => "milim",
            's2' => "milimy",
            's3' => "milimów",
            'f' => false,
            'd' => 3,
        ]
    ],
    'top' => [
        's1' => "pa'anga tongijska",
        's2' => "pa'angi tongijskie",
        's3' => "pa'ang tongijskich",
        'f' => true,
        'minor' => [
            's1' => "seniti",
            's2' => "seniti",
            's3' => "seniti",
            'f' => false,
        ]
    ],
    'try' => [
        's1' => "lira turecka",
        's2' => "liry tureckie",
        's3' => "lir tureckich",
        'f' => true,
        'minor' => [
            's1' => "kurusz",
            's2' => "kurusze",
            's3' => "kuruszy",
            'f' => false,
        ]
    ],
    'ttd' => [
        's1' => "dolar Trynidadu i Tobago",
        's2' => "dolary Trynidadu i Tobago",
        's3' => "dolarów Trynidadu i Tobago",
        'f' => false,
        'minor' => Cents
    ],
    'twd' => [
        's1' => "dolar tajwański",
        's2' => "dolary tajwańskie",
        's3' => "dolarów tajwańskich",
        'f' => false,
        'minor' => Cents
    ],
    'tzs' => [
        's1' => "szyling tanzański",
        's2' => "szylingi tanzańskie",
        's3' => "szylingów tanzańskich",
        'f' => false,
        'minor' => Cents
    ],
    'uah' => [
        's1' => "hrywna",
        's2' => "hrywny",
        's3' => "hrywien",
        'f' => true,
        'minor' => [
            's1' => "kopiejka",
            's2' => "kopiejki",
            's3' => "kopiejek",
            'f' => true,
        ]
    ],
    'ugx' => [
        's1' => "szyling ugandyjski",
        's2' => "szylingi ugandyjskie",
        's3' => "szylingów ugandyjskich",
        'f' => false,
        'minor' => Cents_NotUsed
    ],
    'usd' => [
        's1' => "dolar amerykański",
        's2' => "dolary amerykańskie",
        's3' => "dolarów amerykańskich",
        'f' => false,
        'minor' => Cents
    ],
    'uyu' => [
        's1' => "peso urugwajski",
        's2' => "peso urugwajskie",
        's3' => "peso urugwajskich",
        'f' => false,
        'minor' => Centesimo
    ],
    'uzs' => [
        's1' => "sum uzbecki",
        's2' => "sumy uzbecki",
        's3' => "sumów uzbecki",
        'f' => false,
        'minor' => Tiyin
    ],
    'ves' => [
        's1' => "boliwar wenezuelski soberano",
        's2' => "boliwary wenezuelskie soberano",
        's3' => "boliwarów wenezuelskich soberano",
        'f' => false,
        'minor' => Centims
    ],
    'vnd' => [
        's1' => "dong wietnamski",
        's2' => "dongi wietnamskie",
        's3' => "dongów wietnamskich",
        'f' => false,
        'minor' => [
            's1' => "xu",
            's2' => "xu",
            's3' => "xu",
            'f' => false,
            'u' => false,
        ]
    ],
    'vuv' => [
        's1' => "vatu vanuatuańskie",
        's2' => "vatu vanuatuańskie",
        's3' => "vatu vanuatuańskich",
        'f' => false,
        'minor' => [
            's1' => "",
            's2' => "",
            's3' => "",
            'f' => false,
            'u' => false,
        ]
    ],
    'wst' => [
        's1' => "tala samoańska",
        's2' => "tala samoańskie",
        's3' => "tala samoańskich",
        'f' => true,
        'minor' => [
            's1' => "sene",
            's2' => "sene",
            's3' => "sene",
            'f' => false,
        ]
    ],
    'xaf' => [
        's1' => "środkowoafrykański frank CFA",
        's2' => "środkowoafrykańskie franki CFA",
        's3' => "środkowoafrykańskich franków CFA",
        'f' => false,
        'minor' => Cents_NotUsed
    ],
    'xcd' => [
        's1' => "dolar wschodniokaraibski",
        's2' => "dolary wschodniokaraibskie",
        's3' => "dolarów wschodniokaraibskich",
        'f' => false,
        'minor' => Cents
    ],
    'xof' => [
        's1' => "zachodnioafrykański frank CFA",
        's2' => "zachodnioafrykańskie franki CFA",
        's3' => "zachodnioafrykańskich franków CFA",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'xpf' => [
        's1' => "frank CFP",
        's2' => "franki CFP",
        's3' => "franków CFP",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'yer' => [
        's1' => "rial jemeński",
        's2' => "riale jemeńskie",
        's3' => "riali jemeńskich",
        'f' => false,
        'minor' => Fils
    ],
    'zar' => [
        's1' => "rand południowoafrykański",
        's2' => "randy południowoafrykańskie",
        's3' => "randów południowoafrykańskich",
        'f' => false,
        'minor' => Cents
    ],
    'zmw' => [
        's1' => "kwacha zambijska",
        's2' => "kwacha zambijskie",
        's3' => "kwacha zambijskich",
        'f' => true,
        'minor' => [
            's1' => "ngwee",
            's2' => "ngwee",
            's3' => "ngwee",
            'f' => true,
        ]
    ],
    'zwl' => [
        's1' => "dolar Zimbabwe",
        's2' => "dolary Zimbabwe",
        's3' => "dolarów Zimbabwe",
        'f' => false,
        'minor' => Cents
    ],
];

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

namespace tei187\Resources\ISO4217\EN;

 /** @var array[] Regular extension - cents. (EN) */
const Cents = [
    's' => "cent",
    'p' => "cents",
];

/** @var array[] Regular extension - cents (not used). (EN) */
const Cents_NotUsed = [
    's' => "cent",
    'p' => "cents",
    'u' => false,
];

/** @var array[] Regular extension - centimos. (EN) */
const Centimos = [
    's' => "cêntimo",
    'p' => "cêntimos",
];

/** @var array[] Regular extension - centesimos. (EN) */
const Centesimos = [
    's' => "centésimo",
    'p' => "centésimos",
];

/** @var array[] Regular extension - centimes. (EN) */
const Centimes = [
    's' => "centime",
    'p' => "centimes",
];

/** @var array[] Regular extension - centimes (not used). (EN) */
const Centimes_NotUsed = [
    's' => "centime",
    'p' => "centimes",
    'u' => false,
];

/** @var array[] Regular extension - centavos. (EN) */
const Centavos = [
    's' => "centavo",
    'p' => "centavos",
];

/** @var array[] Regular extension - centavos (not used). (EN) */
const Centavos_NotUsed = [
    's' => "centavo",
    'p' => "centavos",
    'u' => false,
];

/** @var array[] Regular extension - fils. (EN) */
const Fils = [
    's' => "fils",
    'p' => "fils",
];

/** @var array[] Regular extension - fils, 3 decimal points. (EN) */
const Fils_3dec = [
    's' => "fils",
    'p' => "fils",
    'd' => 3,
];

/** @var array[] Regular extension - pence. (EN) */
const Pence = [
    's' => "penny",
    'p' => "pence",
];

/** @var array[] Regular extension - piastres. (EN) */
const Piastres = [
    's' => "piastre",
    'p' => "piastres",
];

/** @var array[] Regular extension - piastres, 3 decimal points. (EN) */
const Piastres_3dec = [
    's' => "piastre",
    'p' => "piastres",
    'd' => 3,
];

/** @var array[] Regular extension - paisa. (EN) */
const Paisa = [
    's' => "paisa",
    'p' => "paisa",
];

/** @var array[] Regular extension - sen. (EN) */
const Sen = [
    's' => "sen",
    'p' => "sen",
];

/** @var array[] Regular extension - tyiyn. (EN) */
const Tyiyn = [
    's' => "tyiyn",
    'p' => "tyiyn",
];

 /**
  * Supported currencies by ISO 4217. (EN)
  *
  * 's' - 1 unit
  * 'p' - more than 1 unit (plural)
  * 'u' - in use for minor, false if not, otherwise doesn't matter
  * 'd' - in minor units, describes how many decimal points are in use, if none set defaults to 2
  *
  * @var array[]
  */
const Currencies = [
    'aed' => [
        's' => "United Arab Emirates dirham",
        'p' => "United Arab Emirates dirhams",
        'minor' => [
            's' => "fils",
            'p' => "fils",
        ]
    ],
    'afn' => [
        's' => "Afghan afghani",
        'p' => "Afghan afghanis",
        'minor' => [
            's' => "pul",
            'p' => "pul",
        ]
    ],
    'all' => [
        's' => "Albanian lek",
        'p' => "Albanian leke",
        'minor' => [
            's' => "qindarkë",
            'p' => "qindarka",
        ]
    ],
    'amd' => [
        's' => "Armenian dram",
        'p' => "Armenian dram",
        'minor' => [
            's' => "luma",
            'p' => "luma",
        ]
    ],
    'ang' => [
        's' => "Netherlands Antillean guilder",
        's' => "Netherlands Antillean guilders",
        'minor' => Cents
    ],
    'aoa' => [
        's' => "Angolan kwanza",
        'p' => "Angolan kwanzas",
        'minor' => Centimos
    ],
    'ars' => [
        's' => "Argentine peso",
        'P' => "Argentine pesos",
        'minor' => Centavos
    ],
    'aud' => [
        's' => "Australian dollar",
        'p' => "Australian dollars",
        'minor' => Cents
    ],
    'awg' => [
        's' => "Aruban florin",
        'p' => "Aruban florin",
        'minor' => Cents
    ],
    'azm' => [
        's' => "Azerbaijani manat",
        'p' => "Azerbaijani manat",
        'minor' => [
            's' => "qəpik",
            'p' => "qəpik",
        ]
    ],
    'bam' => [
        's' => "Bosnia and Herzegovina convertible mark",
        'p' => "Bosnia and Herzegovina convertible marks",
        'minor' => [
            's' => "fening",
            'p' => "fenings",
        ]
    ],
    'bbd' => [
        's' => "Barbadian dollar",
        'p' => "Barbadian dollars",
        'minor' => Cents
    ],
    'bdt' => [
        's' => "Bangladeshi taka",
        'p' => "Bangladeshi taka",
        'minor' => [
            's' => "poysha",
            'p' => "poysha",
        ]
    ],
    'bgn' => [
        's' => "Bulgarian lev",
        'p' => "Bulgarian leva",
        'minor' => [
            's' => "stotinka",
            'p' => "stotinki",
        ]
    ],
    'bhd' => [
        's' => "Bahraini dinar",
        'p' => "Bahraini dinars",
        'minor' => Fils_3dec
    ],
    'bif' => [
        's' => "Burundian franc",
        'p' => "Burundian francs",
        'minor' => Centimes_NotUsed
    ],
    'bmd' => [
        's' => "Bermudian dollar",
        'p' => "Bermudian dollars",
        'minor' => Cents
    ],
    'bnd' => [
        's' => "Brunei dollar",
        'p' => "Brunei dollars",
        'minor' => Cents
    ],
    'bob' => [
        's' => "boliviano",
        'p' => "bolivianos",
        'minor' => Centavos
    ],
    'brl' => [
        's' => "Brazilian real",
        'p' => "Brazilian reais",
        'minor' => Centavos
    ],
    'bsd' => [
        's' => "Bahamian dollar",
        'p' => "Bahamian dollars",
        'minor' => Cents
    ],
    'btn' => [
        's' => "Bhutanese ngultrum",
        'p' => "Bhutanese ngultrum",
        'minor' => [
            's' => "chhertum",
            'p' => "chhertum",
        ]
    ],
    'bwp' => [
        's' => "Botswana pula",
        'p' => "Botswana pula",
        'minor' => [
            's' => "thebe",
            'p' => "thebe",
        ]
    ],
    'byn' => [
        's' => "Belarusian ruble",
        'p' => "Belarusian rubles",
        'minor' => [
            's' => "kapiejka",
            'p' => "kapiejkas",
        ]
    ],
    'bzd' => [
        's' => "Belize dollar",
        'p' => "Belize dollars",
        'minor' => Cents
    ],
    'cad' => [
        's' => "Canadian dollar",
        'p' => "Canadian dollars",
        'minor' => Cents
    ],
    'cdf' => [
        's' => "Congolese franc",
        'p' => "Congolese francs",
        'minor' => Centimes
    ],
    'chf' => [
        's' => "Swiss franc",
        'p' => "Swiss francs",
        'minor' => Centimes
    ],
    'clp' => [
        's' => "Chilean peso",
        'p' => "Chilean pesos",
        'minor' => Centavos_NotUsed
    ],
    'cny' => [
        's' => "yuán",
        'p' => "yuán",
        'f' => false,
        'minor' => [
            's' => "jiǎo",
            'p' => "jiǎo",
            'd' => 1,
            'minor' => [
                's' => "fēn",
                'p' => "fēn",
                'd' => 1,
            ]
        ]
    ],
    'cop' => [
        's' => "Colombian peso",
        'p' => "Colombian pesos",
        'minor' => Centavos
    ],
    'crc' => [
        's' => "Costa Rican colón",
        'p' => "Costa Rican colones",
        'minor' => Centimos
    ],
    'cuc' => [
        's' => "Cuban convertible peso",
        'p' => "Cuban convertible pesos",
        'minor' => Centavos
    ],
    'cup' => [
        's' => "Cuban peso",
        'p' => "Cuban pesos",
        'minor' => Centavos
    ],
    'cve' => [
        's' => "Cape Verdean escudo",
        'p' => "Cape Verdean escudos",
        'minor' => Centavos
    ],
    'czk' => [
        's' => "Czech koruna",
        'p' => "Czech koruna",
        'minor' => [
            's' => "haléř",
            'p' => "haléř",
        ]
    ],
    'djf' => [
        's' => "Djiboutian franc",
        'p' => "Djiboutian francs",
        'minor' => Centimes_NotUsed
    ],
    'dkk' => [
        's' => "Danish krone",
        'p' => "Danish kroner",
        'minor' => [
            's' => "øre",
            'p' => "øre",
        ]
    ],
    'dop' => [
        's' => "Dominican peso",
        'p' => "Dominican pesos",
        'minor' => Centavos
    ],
    'dzd' => [
        's' => "Algerian dinar",
        'p' => "Algerian dinars",
        'minor' => Centimes
    ],
    'egp' => [
        's' => "Egyptian pound",
        'p' => "Egyptian pounds",
        'minor' => Piastres
    ],
    'eur' => [
        's' => "euro",
        'p' => "euros",
        'minor' => Cents
    ],
    'ern' => [
        's' => "Eritrean nakfa",
        'p' => "Eritrean nakfa",
        'minor' => Cents
    ],
    'etb' => [
        's' => "Ethiopian birr",
        'p' => "Ethiopian birr",
        'minor' => Centimes
    ],
    'fjd' => [
        's' => "Fiji dollar",
        'p' => "Fiji dollars",
        'minor' => Cents
    ],
    'fkp' => [
        's' => "Falkland Islands pound",
        'p' => "Falkland Islands pounds",
        'minor' => Pence
    ],
    'gbp' => [
        's' => "Pound sterling",
        'p' => "Pounds sterlings",
        'minor' => Pence
    ],
    'gel' => [
        's' => "Georgian lari",
        'p' => "Georgian lari",
        'minor' => [
            's' => "tetri",
            'p' => "tetri",
        ]
    ],
    'ghs' => [
        's' => "Ghanaian cedi",
        'p' => "Ghanaian cedis",
        'minor' => [
            's' => "pesewa",
            'p' => "pesewas",
        ]
    ],
    'gip' => [
        's' => "Gibraltar pound",
        'p' => "Gibraltar pounds",
        'minor' => Pence
    ],
    'gmd' => [
        's' => "Gambian dalasi",
        'p' => "Gambian dalasis",
        'minor' => [
            's' => "butut",
            'p' => "bututs",
        ]
    ],
    'gnf' => [
        's' => "Guinean franc",
        'p' => "Guinean francs",
        'minor' => Centimes_NotUsed
    ],
    'gtq' => [
        's' => "Guatemalan quetzal",
        'p' => "Guatemalan quetzales",
        'minor' => Centavos
    ],
    'gyd' => [
        's' => "Guyanese dollar",
        'p' => "Guyanese dollars",
        'minor' => Cents
    ],
    'hnl' => [
        's' => "Honduran lempira",
        'p' => "Honduran lempiras",
        'minor' => Centavos
    ],
    'hkd' => [
        's' => "Hong Kong dollar",
        'p' => "Hong Kong dollars",
        'minor' => Cents
    ],
    'hrk' => [
        's' => "Croatian kuna",
        'p' => "Croatian kuna",
        'minor' => [
            's' => "lipa",
            'p' => "lipa",
        ]
    ],
    'htg' => [
        's' => "Haitian gourde",
        'p' => "Haitian gourdes",
        'minor' => Centimes
    ],
    'huf' => [
        's' => "Hungarian forint",
        'p' => "Hungarian forintok",
        'minor' => [
            's' => "fillér",
            'p' => "fillérs",
        ]
    ],
    'idr' => [
        's' => "Indonesian rupiah",
        'p' => "Indonesian rupiah",
        'minor' => Sen
    ],
    'ils' => [
        's' => "Israeli new shekel",
        'p' => "Israeli new shekels",
        'minor' => [
            's' => "agora",
            'p' => "agoras",
        ]
    ],
    'inr' => [
        's' => "Indian rupee",
        'p' => "Indian rupee",
        'minor' => Paisa
    ],
    'iqd' => [
        's' => "Iraqi dinar",
        'p' => "Iraqi dinars",
        'minor' => Fils_3dec
    ],
    'irr' => [
        's' => "Iranian rial",
        'p' => "Iranian rials",
        'minor' => [
            's' => "dinar",
            'p' => "dinars",
        ]
    ],
    'isk' => [
        's' => "Icelandic króna",
        'p' => "Icelandic krónur",
        'minor' => [
            's' => "eyrir",
            'p' => "aurar",
            'u' => false,
        ]
    ],
    'jmd' => [
        's' => "Jamaican dollar",
        'p' => "Jamaican dollars",
        'minor' => Cents
    ],
    'jod' => [
        's' => "Jordanian dinar",
        'p' => "Jordanian dinars",
        'minor' => Piastres_3dec
    ],
    'jpy' => [
        's' => "Japanese yen",
        'p' => "Japanese yen",
        'minor' => [
            's' => "sen",
            'p' => "sen",
            'u' => false,
        ]
    ],
    'kes' => [
        's' => "Kenyan shilling",
        'p' => "Kenyan shillings",
        'minor' => Cents
    ],
    'kgs' => [
        's' => "Kyrgyzstani som",
        'p' => "Kyrgyzstani som",
        'minor' => Tyiyn
    ],
    'khr' => [
        's' => "Cambodian riel",
        'p' => "Cambodian riels",
        'minor' => Sen
    ],
    'kmf' => [
        's' => "Comoro franc",
        'p' => "Comoro francs",
        'minor' => Centimes_NotUsed
    ],
    'kpw' => [
        's' => "North Korean won",
        'p' => "North Korean won",
        'minor' => [
            's' => "chon",
            'p' => "chon",
        ]
    ],
    'krw' => [
        's' => "South Korean won",
        'p' => "South Korean won",
        'minor' => [
            's' => "chon",
            'p' => "chon",
            'u' => false,
        ]
    ],
    'kwd' => [
        's' => "Kuwaiti dinar",
        'p' => "Kuwaiti dinars",
        'minor' => Fils_3dec
    ],
    'kyd' => [
        's' => "Cayman Islands dollar",
        'p' => "Cayman Islands dollars",
        'minor' => Cents
    ],
    'kzt' => [
        's' => "Kazakhstani tenge",
        'p' => "Kazakhstani tenge",
        'minor' => [
            's' => "tiyn",
            'p' => "tiyn",
        ]
    ],
    'lak' => [
        's' => "Lao kip",
        'p' => "Lao kip",
        'minor' => [
            's' => "att",
            'p' => "att",
        ]
    ],
    'lbp' => [
        's' => "Lebanese pound",
        'p' => "Lebanese pounds",
        'minor' => Piastres
    ],
    'lkr' => [
        's' => "Sri Lankan rupee",
        'p' => "Sri Lankan rupee",
        'minor' => Cents
    ],
    'lrd' => [
        's' => "Liberian dollar",
        'p' => "Liberian dollars",
        'minor' => Cents
    ],
    'lsl' => [
        's' => "Lesotho loti",
        'p' => "Lesotho maloti",
        'minor' => [
            's' => "sente",
            'p' => "lisente",
        ]
    ],
    'lyd' => [
        's' => "Libyan dinar",
        'p' => "Libyan dinars",
        'minor' => [
            's' => "dirham",
            'p' => "dirhams",
            'd' => 3
        ]
    ],
    'mad' => [
        's' => "Moroccan dirham",
        'p' => "Moroccan dirhams",
        'minor' => Centimes
    ],
    'mdl' => [
        's' => "Moldovan leu",
        'p' => "Moldovan lei",
        'minor' => [
            's' => "ban",
            'p' => "bani",
        ]
    ],
    'mga' => [
        's' => "Malagasy ariary",
        'p' => "Malagasy ariary",
        'minor' => [
            's' => "iraimbilanja",
            'p' => "iraimbilanja",
        ]
    ],
    'mkd' => [
        's' => "Macedonian denar",
        'p' => "Macedonian denari",
        'minor' => [
            's' => "deni",
            'p' => "deni",
            'u' => false,
        ]
    ],
    'mmk' => [
        's' => "Myanmar kyat",
        'p' => "Myanmar kyats",
        'minor' => [
            's' => "pya",
            'p' => "pyas",
        ]
    ],
    'mnt' => [
        's' => "Mongolian tögrög",
        'p' => "Mongolian tögrög",
        'minor' => [
            's' => "möngö",
            'p' => "möngö",
        ]
    ],
    'mop' => [
        's' => "Macanese pataca",
        'p' => "Macanese pataca",
        'minor' => [
            's' => "avos",
            'p' => "avos",
        ]
    ],
    'mru' => [
        's' => "Mauritanian ouguiya",
        'p' => "Mauritanian ouguiya",
        'minor' => [
            's' => "khoums",
            'p' => "khoums",
        ]
    ],
    'mur' => [
        's' => "Mauritian rupee",
        'p' => "Mauritian rupee",
        'minor' => Cents
    ],
    'mvr' => [
        's' => "Maldivian rufiyaa",
        'p' => "Maldivian rufiyaa",
        'minor' => [
            's' => "laari",
            'p' => "laari",
        ]
    ],
    'mxn' => [
        's' => "Mexican peso",
        'p' => "Mexican pesos",
        'minor' => Centavos
    ],
    'myr' => [
        's' => "Malaysian ringgit",
        'p' => "Malaysian ringgit",
        'minor' => Sen
    ],
    'mwk' => [
        's' => "Malawian kwacha",
        'p' => "Malawian kwacha",
        'minor' => [
            's' => "tambala",
            'p' => "tambala",
        ]
    ],
    'mzn' => [
        's' => "Mozambican metical",
        'p' => "Mozambican meticais",
        'minor' => Centavos
    ],
    'nad' => [
        's' => "Namibian dollar",
        'p' => "Namibian dollars",
        'minor' => Cents
    ],
    'nio' => [
        's' => "Nicaraguan córdoba",
        'p' => "Nicaraguan córdoba",
        'minor' => Centavos
    ],
    'ngn' => [
        's' => "Nigerian naira",
        'p' => "Nigerian naira",
        'minor' => [
            's' => "kobe",
            'p' => "kobo",
        ]
    ],
    'npr' => [
        's' => "Nepalese rupee",
        'p' => "Nepalese rupee",
        'minor' => Paisa,
    ],
    'nok' => [
        's' => "Norwegian krone",
        'p' => "Norwegian kroner",
        'minor' => [
            's' => "øre",
            'p' => "øre",
        ]
    ],
    'nzd' => [
        's' => "New Zealand dollar",
        'p' => "New Zealand dollars",
        'minor' => Cents
    ],
    'omr' => [
        's' => "Omani rial",
        'p' => "Omani rials",
        'minor' => [
            's' => "baisa",
            'p' => "baisa",
            'd' => 3,
        ]
    ],
    'pab' => [
        's' => "Panamanian balboa",
        'p' => "Panamanian balboa",
        'minor' => Centesimos
    ],
    'pen' => [
        's' => "Peruvian sol",
        'p' => "Peruvian soles",
        'minor' => Centimos
    ],
    'pgk' => [
        's' => "Papua New Guinean kina",
        'p' => "Papua New Guinean kina",
        'minor' => [
            's' => "toea",
            'p' => "toea",
        ]
    ],
    'php' => [
        's' => "Philippine peso",
        'p' => "Philippine pesos",
        'minor' => Centavos
    ],
    'pkr' => [
        's' => "Pakistani rupee",
        'p' => "Pakistani rupee",
        'minor' => Paisa
    ],
    'pln' => [
        's' => "Polish zloty",
        'p' => "Polish zlotys",
        'minor' => [
            's' => "grosz",
            'p' => "grosze",
        ]
    ],
    'pyg' => [
        's' => "Paraguayan guaraní",
        'p' => "Paraguayan guaraní",
        'minor' => Centimes_NotUsed
    ],
    'qar' => [
        's' => "Qatari riyal",
        'p' => "Qatari riyals",
        'minor' => [
            's' => "dirham",
            'p' => "dirhams",
        ]
    ],
    'ron' => [
        's' => "Romanian leu",
        'p' => "Romanian lei",
        'minor' => [
            's' => "ban",
            'p' => "bani",
        ]
    ],
    'rsd' => [
        's' => "Serbian dinar",
        'p' => "Serbian dinari",
        'minor' => [
            's' => "para",
            'p' => "para",
        ]
    ],
    'rub' => [
        's' => "Russian ruble",
        'p' => "Russian rubles",
        'minor' => [
            's' => "kopeyka",
            'p' => "kopeyki",
        ]
    ],
    'rwf' => [
        's' => "Rwandan franc",
        'p' => "Rwandan francs",
        'minor' => Centimes_NotUsed
    ],
    'sar' => [
        's' => "Saudi riyal",
        'p' => "Saudi riyals",
        'minor' => [
            's' => "halalah",
            'p' => "halalas",
        ]
    ],
    'sbd' => [
        's' => "Solomon Islands dollar",
        'p' => "Solomon Islands dollars",
        'minor' => Cents
    ],
    'scr' => [
        's' => "Seychelles rupee",
        'p' => "Seychelles rupee",
        'minor' => Cents
    ],
    'sdg' => [
        's' => "Sudanese pound",
        'p' => "Sudanese pounds",
        'minor' => Piastres
    ],
    'sek' => [
        's' => "Swedish krona",
        'p' => "Swedish kronor",
        'minor' => [
            's' => "öre",
            'p' => "öre",
        ]
    ],
    'sgd' => [
        's' => "Singapore dollar",
        'p' => "Singapore dollars",
        'minor' => Cents
    ],
    'shp' => [
        's' => "Saint Helena pound",
        'p' => "Saint Helena pounds",
        'minor' => Pence
    ],
    'sll' => [
        's' => "Sierra Leonean leone",
        'p' => "Sierra Leonean leones",
        'minor' => Cents
    ],
    'sos' => [
        's' => "Somali shilling",
        'p' => "Somali shillings",
        'minor' => Cents
    ],
    'srd' => [
        's' => "Surinamese dollar",
        'p' => "Surinamese dollars",
        'minor' => Cents
    ],
    'ssp' => [
        's' => "South Sudanese pound",
        'p' => "South Sudanese pound",
        'minor' => Piastres
    ],
    'stn' => [
        's' => "São Tomé and Príncipe dobra",
        'p' => "São Tomé and Príncipe dobras",
        'minor' => Centimos
    ],
    'svc' => [
        's' => "Salvadoran colón",
        'p' => "Salvadoran colones",
        'minor' => Centavos
    ],
    'syp' => [
        's' => "Syrian pound",
        'p' => "Syrian pounds",
        'minor' => Piastres
    ],
    'szl' => [
        's' => "Swazi lilangeni",
        'p' => "Swazi emalangeni",
        'minor' => Cents
    ],
    'thb' => [
        's' => "Thai baht",
        'p' => "Thai baht",
        'minor' => [
            's' => "satang",
            'p' => "satang",
        ]
    ],
    'tjs' => [
        's' => "Tajikistani somoni",
        'p' => "Tajikistani somoni",
        'minor' => [
            's' => "diram",
            'p' => "diram",
        ]
    ],
    'tmt' => [
        's' => "Turkmenistani manat",
        'p' => "Turkmenistani manat",
        'minor' => [
            's' => "tenge",
            'p' => "tenge",
        ]
    ],
    'tnd' => [
        's' => "Tunisian dinar",
        'p' => "Tunisian dinars",
        'minor' => [
            's' => "milime",
            'p' => "milimes",
            'd' => 3,
        ]
    ],
    'top' => [
        's' => "Tongan paʻanga",
        'p' => "Tongan paʻanga",
        'minor' => [
            's' => "seniti",
            'p' => "seniti",
        ]
    ],
    'try' => [
        's' => "Turkish lira",
        'p' => "Turkish liralar",
        'minor' => [
            's' => "kuruş",
            'p' => "kuruş",
        ]
    ],
    'ttd' => [
        's' => "Trinidad and Tobago dollar",
        'p' => "Trinidad and Tobago dollars",
        'minor' => Cents
    ],
    'twd' => [
        's' => "New Taiwan dollar",
        'p' => "New Taiwan dollars",
        'minor' => Cents
    ],
    'tzs' => [
        's' => "Tanzanian shilling",
        'p' => "Tanzanian shillingi",
        'minor' => Cents
    ],
    'uah' => [
        's' => "Ukrainian hryvnia",
        'p' => "Ukrainian hryvni",
        'minor' => [
            's' => "kopiyka",
            'p' => "kopiyky",
        ]
    ],
    'ugx' => [
        's' => "Ugandan shilling",
        'p' => "Ugandan shillings",
        'minor' => Cents_NotUsed
    ],
    'usd' => [
        's' => "United States dollar",
        'p' => "United States dollars",
        'minor' => Cents
    ],
    'uyu' => [
        's' => "Uruguayan peso",
        'p' => "Uruguayan pesos",
        'minor' => Centesimos
    ],
    'uzs' => [
        's' => "Uzbekistan soʻm",
        'p' => "Uzbekistan soʻm",
        'minor' => Tyiyn
    ],
    'ves' => [
        's' => "Venezuelan bolívar soberano",
        'p' => "Venezuelan bolívares soberano",
        'minor' => Centimos
    ],
    'vnd' => [
        's' => "Vietnamese đồng",
        'p' => "Vietnamese đồng",
        'minor' => [
            's' => "xu",
            'p' => "xu",
            'u' => false,
        ]
    ],
    'vuv' => [
        's' => "Vanuatu vatu",
        'p' => "Vanuatu vatu",
        'minor' => [
            's' => "",
            'p' => "",
            'u' => false,
        ]
    ],
    'wst' => [
        's' => "Samoan tālā",
        'p' => "Samoan tālā",
        'minor' => [
            's' => "sene",
            'p' => "sene",
        ]
    ],
    'xaf' => [
        's' => "Central African CFA franc",
        'p' => "Central African CFA francs",
        'minor' => Centimes_NotUsed
    ],
    'xcd' => [
        's' => "East Caribbean dollar",
        'p' => "East Caribbean dollars",
        'minor' => Cents
    ],
    'xof' => [
        's' => "West African CFA franc",
        'p' => "West African CFA francs",
        'minor' => Centimes_NotUsed
    ],
    'xpf' => [
        's' => "CFP franc",
        'p' => "CFP francs",
        'minor' => Centimes_NotUsed
    ],
    'yer' => [
        's' => "Yemeni rial",
        'p' => "Yemeni rials",
        'minor' => Fils
    ],
    'zar' => [
        's' => "South African rand",
        'p' => "South African rand",
        'minor' => Cents
    ],
    'zmw' => [
        's' => "Zambian kwacha",
        'p' => "Zambian kwacha",
        'minor' => [
            's' => "ngwee",
            'p' => "ngwee",
        ]
    ],
    'zwl' => [
        's' => "Zimbabwean dollar",
        'p' => "Zimbabwean dollars",
        'minor' => Cents
    ],
];

namespace tei187\Resources\ISO4217\DE;

/** @var array[] Regular extension - cents. (DE) */
const Cents = [
    's' => "Cent",
    'p' => "Cent",
];

/** @var array[] Regular extension - cents (not used). (DE) */
const Cents_NotUsed = [
    's' => "Cent",
    'p' => "Cent",
    'u' => false,
];

/** @var array[] Regular extension - centimos. (DE) */
const Centimos = [
    's' => "Cêntimo",
    'p' => "Cêntimos",
];

/** @var array[] Regular extension - centesimos. (DE) */
const Centesimos = [
    's' => "Centésimo",
    'p' => "Centésimos",
];

/** @var array[] Regular extension - centimes. (DE) */
const Centimes = [
    's' => "Centime",
    'p' => "Centimes",
];

/** @var array[] Regular extension - centimes (not used). (DE) */
const Centimes_NotUsed = [
    's' => "Centime",
    'p' => "Centimes",
    'u' => false,
];

/** @var array[] Regular extension - centavos. (DE) */
const Centavos = [
    's' => "Centavo",
    'p' => "Centavos",
];

/** @var array[] Regular extension - centavos (not used). (DE) */
const Centavos_NotUsed = [
    's' => "Centavo",
    'p' => "Centavos",
    'u' => false,
];

/** @var array[] Regular extension - fils. (DE) */
const Fils = [
    's' => "Fils",
    'p' => "Fils",
];

/** @var array[] Regular extension - fils, 3 decimal points. (DE) */
const Fils_3dec = [
    's' => "Fils",
    'p' => "Fils",
    'd' => 3,
];

/** @var array[] Regular extension - pence. (DE) */
const Pence = [
    's' => "Penny",
    'p' => "Pence",
];

/** @var array[] Regular extension - piastres. (DE) */
const Piastres = [
    's' => "Piaster",
    'p' => "Piaster",
];

/** @var array[] Regular extension - piastres, 3 decimal points. (DE) */
const Piastres_3dec = [
    's' => "Piaster",
    'p' => "Piaster",
    'd' => 3,
];

/** @var array[] Regular extension - paisa. (DE) */
const Paisa = [
    's' => "Paisa",
    'p' => "Paisa",
];

/** @var array[] Regular extension - sen. (DE) */
const Sen = [
    's' => "Sen",
    'p' => "Sen",
];

/** @var array[] Regular extension - tyiyn. (DE) */
const Tyiyn = [
    's' => "Tyiyn",
    'p' => "Tyiyn",
];

 /**
  * Supported currencies by ISO 4217. (DE)
  *
  * 's' - 1 unit
  * 'p' - more than 1 unit (plural)
  * 'u' - in use for minor, false if not, otherwise doesn't matter
  * 'd' - in minor units, describes how many decimal points are in use, if none set defaults to 2
  *
  * @var array[]
  */
const Currencies = [
    'aed' => [
        's' => "VAE-Dirham",
        'p' => "VAE-Dirham",
        'minor' => [
            's' => "Fils",
            'p' => "Fils",
        ]
    ],
    'afn' => [
        's' => "afghanischer Afghani",
        'p' => "afghanische Afghani",
        'minor' => [
            's' => "Pul",
            'p' => "Pul",
        ]
    ],
    'all' => [
        's' => "albanischer Lek",
        'p' => "albanische Lekë",
        'minor' => [
            's' => "Qindarkë",
            'p' => "Qindarka",
        ]
    ],
    'amd' => [
        's' => "armenischer Dram",
        'p' => "armenische Dram",
        'minor' => [
            's' => "Luma",
            'p' => "Luma",
            'f' => true,
        ]
    ],
    'ang' => [
        's' => "niederländischer Antillen-Gulden",
        's' => "niederländische Antillen-Gulden",
        'minor' => Cents
    ],
    'aoa' => [
        's' => "angolanischer Kwanza",
        'p' => "angolanische Kwanza",
        'minor' => Centimos
    ],
    'ars' => [
        's' => "argentinischer Peso",
        'P' => "argentinische Pesos",
        'minor' => Centavos
    ],
    'aud' => [
        's' => "australischer Dollar",
        'p' => "australische Dollar",
        'minor' => Cents
    ],
    'awg' => [
        's' => "Aruba-Florin",
        'p' => "Aruba-Florin",
        'minor' => Cents
    ],
    'azm' => [
        's' => "aserbaidschanischer Manat",
        'p' => "aserbaidschanische Manat",
        'minor' => [
            's' => "Qəpik",
            'p' => "Qəpik",
        ]
    ],
    'bam' => [
        's' => "bosnisch-herzegowinischen konvertible Mark",
        'p' => "bosnisch-herzegowinischen konvertible Mark",
        'f' => true,
        'minor' => [
            's' => "Fening",
            'p' => "Fening",
        ]
    ],
    'bbd' => [
        's' => "barbadischer Dollar",
        'p' => "barbadische Dollar",
        'minor' => Cents
    ],
    'bdt' => [
        's' => "bangladeschischer Taka",
        'p' => "bangladeschische Taka",
        'minor' => [
            's' => "Poisha",
            'p' => "Poisha",
        ]
    ],
    'bgn' => [
        's' => "bulgarischer Lew",
        'p' => "bulgarische Lewa",
        'minor' => [
            's' => "Stotinka",
            'p' => "Stotinki",
            'f' => true,
        ]
    ],
    'bhd' => [
        's' => "Bahraini-Dinar",
        'p' => "Bahraini-Dinaren",
        'minor' => Fils_3dec
    ],
    'bif' => [
        's' => "burundischer Franc",
        'p' => "burundische Francs",
        'minor' => Centimes_NotUsed
    ],
    'bmd' => [
        's' => "Bermuda-Dollar",
        'p' => "Bermuda-Dollar",
        'minor' => Cents
    ],
    'bnd' => [
        's' => "Brunei-Dollar",
        'p' => "Brunei-Dollar",
        'minor' => Cents
    ],
    'bob' => [
        's' => "bolivianischer Boliviano",
        'p' => "bolivianische Boliviano",
        'minor' => Centavos
    ],
    'brl' => [
        's' => "brasilianischer Real",
        'p' => "brasilianische Reales",
        'minor' => Centavos
    ],
    'bsd' => [
        's' => "Bahama-Dollar",
        'p' => "Bahama-Dollar",
        'minor' => Cents
    ],
    'btn' => [
        's' => "bhutanischer Ngultrum",
        'p' => "bhutanische Ngultrum",
        'minor' => [
            's' => "Chhetrum",
            'p' => "Chhetrum",
        ]
    ],
    'bwp' => [
        's' => "botswanisches Pula",
        'p' => "botswanische Pula",
        'minor' => [
            's' => "Thebe",
            'p' => "Thebe",
        ]
    ],
    'byn' => [
        's' => "belarussischer Rubel",
        'p' => "belarussische Rubel",
        'minor' => [
            's' => "Kopeke",
            'p' => "Kopeken",
            'f' => true,
        ]
    ],
    'bzd' => [
        's' => "Belize-Dollar",
        'p' => "Belize-Dollar",
        'minor' => Cents
    ],
    'cad' => [
        's' => "kanadischer Dollar",
        'p' => "kanadische Dollar",
        'minor' => Cents
    ],
    'cdf' => [
        's' => "Kongo-Franc",
        'p' => "Kongo-Francs",
        'minor' => Centimes
    ],
    'chf' => [
        's' => "Schweizerfranken",
        'p' => "Schweizerfranken",
        'minor' => [
            's' => "Rappen",
            'p' => "Rappen",
        ],
    ],
    'clp' => [
        's' => "chilenischer Peso",
        'p' => "chilenische Pesos",
        'minor' => Centavos_NotUsed
    ],
    'cny' => [
        's' => "Renminbi Yuan",
        'p' => "Renminbi Yuan",
        'minor' => [
            's' => "Jiǎo",
            'p' => "Jiǎo",
            'd' => 1,
            'minor' => [
                's' => "Fēn",
                'p' => "Fēn",
                'd' => 1,
            ]
        ]
    ],
    'cop' => [
        's' => "kolumbianischer Peso",
        'p' => "kolumbianische Pesos",
        'minor' => Centavos
    ],
    'crc' => [
        's' => "Costa-Rica-Colón",
        'p' => "Costa-Rica-Colón",
        'minor' => Centimos
    ],
    'cuc' => [
        's' => "kubanischer konvertierbarer Peso",
        'p' => "kubanische konvertierbare Pesos",
        'minor' => Centavos
    ],
    'cup' => [
        's' => "kubanischer Peso",
        'p' => "kubanische Pesos",
        'minor' => Centavos
    ],
    'cve' => [
        's' => "Kap-Verde-Escudo",
        'p' => "Kap-Verde-Escudo",
        'minor' => Centavos
    ],
    'czk' => [
        's' => "tschechische Krone",
        'p' => "tschechische Kronen",
        'f' => true,
        'minor' => [
            's' => "Haléřů",
            'p' => "Haléřů",
        ]
    ],
    'djf' => [
        's' => "Dschibuti-Franc",
        'p' => "Dschibuti-Francs",
        'minor' => Centimes_NotUsed
    ],
    'dkk' => [
        's' => "dänische Krone",
        'p' => "dänische Kronen",
        'f' => true,
        'minor' => [
            's' => "Øre",
            'p' => "Øre",
        ]
    ],
    'dop' => [
        's' => "dominikanischer Peso",
        'p' => "dominikanische Pesos",
        'minor' => Centavos
    ],
    'dzd' => [
        's' => "algerischer Dinar",
        'p' => "algerische Dinare",
        'minor' => Centimes
    ],
    'egp' => [
        's' => "ägyptisches Pfund",
        'p' => "ägyptische Pfunde",
        'minor' => Piastres
    ],
    'eur' => [
        's' => "Euro",
        'p' => "Euro",
        'minor' => Cents
    ],
    'ern' => [
        's' => "eritreischer Nakfa",
        'p' => "eritreische Nakfa",
        'minor' => Cents
    ],
    'etb' => [
        's' => "äthiopischer Birr",
        'p' => "äthiopische Birr",
        'minor' => [
            's' => "Santim",
            'p' => "Santim",
        ]
    ],
    'fjd' => [
        's' => "Fidschi-Dollar",
        'p' => "Fidschi-Dollar",
        'minor' => Cents
    ],
    'fkp' => [
        's' => "Falkland-Pfund",
        'p' => "Falkland-Pfunde",
        'minor' => Pence
    ],
    'gbp' => [
        's' => "Pfund Sterling",
        'p' => "Pfunde Sterling",
        'minor' => Pence
    ],
    'gel' => [
        's' => "georgischer Lari",
        'p' => "georgische Lari",
        'minor' => [
            's' => "Tetri",
            'p' => "Tetri",
        ]
    ],
    'ghs' => [
        's' => "ghanaischer Cedi",
        'p' => "ghanaische Cedi",
        'minor' => [
            's' => "Pesewa",
            'p' => "Pesewas",
            'f' => true,
        ]
    ],
    'gip' => [
        's' => "gibraltarisches Pfund",
        'p' => "gibraltarische Pfunde",
        'minor' => Pence
    ],
    'gmd' => [
        's' => "gambischer Dalasi",
        'p' => "gambische Dalasi",
        'minor' => [
            's' => "Butut",
            'p' => "Bututs",
        ]
    ],
    'gnf' => [
        's' => "Franc Guinéen",
        'p' => "Franc Guinéen",
        'minor' => Centimes_NotUsed
    ],
    'gtq' => [
        's' => "guatemaltekischer Quetzal",
        'p' => "guatemaltekische Quetzal",
        'minor' => Centavos
    ],
    'gyd' => [
        's' => "Guyana-Dollar",
        'p' => "Guyana-Dollar",
        'minor' => Cents
    ],
    'hnl' => [
        's' => "honduranische Lempira",
        'p' => "honduranische Lempira",
        'f' => true,
        'minor' => Centavos
    ],
    'hkd' => [
        's' => "Hongkong-Dollar",
        'p' => "Hongkong-Dollar",
        'minor' => Cents
    ],
    'hrk' => [
        's' => "kroatische Kuna",
        'p' => "kroatische Kuna",
        'f' => true,
        'minor' => [
            's' => "lipa",
            'p' => "lipa",
        ]
    ],
    'htg' => [
        's' => "haitianischer Gourde",
        'p' => "haitianische Gourde",
        'f' => true,
        'minor' => Centimes
    ],
    'huf' => [
        's' => "ungarischer Forint",
        'p' => "ungarische Forint",
        'minor' => [
            's' => "Fillér",
            'p' => "Fillér",
        ]
    ],
    'idr' => [
        's' => "indonesische Rupiah",
        'p' => "indonesische Rupiah",
        'f' => true,
        'minor' => Sen
    ],
    'ils' => [
        's' => "israelischer neuer Schekel",
        'p' => "israelischen neuen Schekel",
        'minor' => [
            's' => "Agorot",
            'p' => "Agorot",
        ]
    ],
    'inr' => [
        's' => "indische Rupie",
        'p' => "indische Rupien",
        'f' => true,
        'minor' => Paisa
    ],
    'iqd' => [
        's' => "irakischer Dinar",
        'p' => "irakische Dinare",
        'minor' => Fils_3dec
    ],
    'irr' => [
        's' => "iranischer Rial",
        'p' => "Iranische Rial",
        'minor' => [
            's' => "Dinar",
            'p' => "Dinare",
        ]
    ],
    'isk' => [
        's' => "isländische Krone",
        'p' => "isländische Kronen",
        'f' => true,
        'minor' => [
            's' => "Eyrir",
            'p' => "Aurar",
            'u' => false,
        ]
    ],
    'jmd' => [
        's' => "Jamaika-Dollar",
        'p' => "Jamaika-Dollar",
        'minor' => Cents
    ],
    'jod' => [
        's' => "jordanischer Dinar",
        'p' => "jordanische Dinare",
        'minor' => Piastres_3dec
    ],
    'jpy' => [
        's' => "japanischer Yen",
        'p' => "japanische Yen",
        'minor' => [
            's' => "Sen",
            'p' => "Sen",
            'u' => false,
        ]
    ],
    'kes' => [
        's' => "Kenia-Schilling",
        'p' => "Kenia-Schilling",
        'minor' => Cents
    ],
    'kgs' => [
        's' => "kirgistanischer Som",
        'p' => "kirgistanische Som",
        'minor' => Tyiyn
    ],
    'khr' => [
        's' => "kambodschanischer Riel",
        'p' => "kambodschanische Riel",
        'minor' => Sen
    ],
    'kmf' => [
        's' => "Komoren-Franc",
        'p' => "Komoren-Francs",
        'minor' => Centimes_NotUsed
    ],
    'kpw' => [
        's' => "nordkoreanischer Won",
        'p' => "nordkoreanische Won",
        'minor' => [
            's' => "Chon",
            'p' => "Chon",
        ]
    ],
    'krw' => [
        's' => "südkoreanischer Won",
        'p' => "südkoreanische Won",
        'minor' => [
            's' => "Chon",
            'p' => "Chon",
            'u' => false,
        ]
    ],
    'kwd' => [
        's' => "Kuwait-Dinar",
        'p' => "Kuwait-Dinare",
        'minor' => Fils_3dec
    ],
    'kyd' => [
        's' => "Kaiman-Dollar",
        'p' => "Kaiman-Dollar",
        'minor' => Cents
    ],
    'kzt' => [
        's' => "kasachischer Tenge",
        'p' => "kasachische Tenge",
        'minor' => [
            's' => "Tiyn",
            'p' => "Tiyn",
        ]
    ],
    'lak' => [
        's' => "laotischer Kip",
        'p' => "laotische Kip",
        'minor' => [
            's' => "Att",
            'p' => "Att",
        ]
    ],
    'lbp' => [
        's' => "libanesisches Pfund",
        'p' => "libanesische Pfunde",
        'minor' => Piastres
    ],
    'lkr' => [
        's' => "Sri-Lanka-Rupie",
        'p' => "Sri-Lanka-Rupien",
        'f' => true,
        'minor' => Cents
    ],
    'lrd' => [
        's' => "liberianischer Dollar",
        'p' => "liberianische Dollar",
        'minor' => Cents
    ],
    'lsl' => [
        's' => "lesothischer Loti",
        'p' => "lesothischer Loti",
        'minor' => [
            's' => "Sente",
            'p' => "Lisente",
        ]
    ],
    'lyd' => [
        's' => "libyscher Dinar",
        'p' => "libysche Dinare",
        'minor' => [
            's' => "Dirham",
            'p' => "Dirham",
            'd' => 3
        ]
    ],
    'mad' => [
        's' => "marokkanischer Dirham",
        'p' => "marokkanische Dirham",
        'minor' => Centimes
    ],
    'mdl' => [
        's' => "moldauischer Leu",
        'p' => "moldauischer Lei",
        'minor' => [
            's' => "Bani",
            'p' => "Bani",
        ]
    ],
    'mga' => [
        's' => "madagassischer Ariary",
        'p' => "madagassische Ariary",
        'minor' => [
            's' => "Iraimbilanja",
            'p' => "Iraimbilanja",
            'f' => true,
        ]
    ],
    'mkd' => [
        's' => "mazedonischer Denar",
        'p' => "mazedonische Denare",
        'minor' => [
            's' => "Deni",
            'p' => "Deni",
            'u' => false,
        ]
    ],
    'mmk' => [
        's' => "Myanmar-Kyat",
        'p' => "Myanmar-Kyat",
        'minor' => [
            's' => "Pya",
            'p' => "Pya",
        ]
    ],
    'mnt' => [
        's' => "mongolischer Tögrög",
        'p' => "mongolische Tögrög",
        'minor' => [
            's' => "Möngö",
            'p' => "Möngö",
        ]
    ],
    'mop' => [
        's' => "Macau-Pataca",
        'p' => "Macau-Pataca",
        'f' => true,
        'minor' => [
            's' => "Avos",
            'p' => "Avos",
        ]
    ],
    'mru' => [
        's' => "mauretanischer Ouguiya",
        'p' => "mauretanische Ouguiya",
        'minor' => [
            's' => "Khoums",
            'p' => "Khoums",
        ]
    ],
    'mur' => [
        's' => "Mauritius-Rupie",
        'p' => "Mauritius-Rupien",
        'f' => true,
        'minor' => Cents
    ],
    'mvr' => [
        's' => "maledivische Rufiyaa",
        'p' => "maledivische Rufiyaa",
        'f' => true,
        'minor' => [
            's' => "Laari",
            'p' => "Laari",
        ]
    ],
    'mxn' => [
        's' => "mexikanischer Peso",
        'p' => "mexikanische Pesos",
        'minor' => Centavos
    ],
    'myr' => [
        's' => "malaysischer Ringgit",
        'p' => "malaysische Ringgit",
        'minor' => Sen
    ],
    'mwk' => [
        's' => "Malawi-Kwacha",
        'p' => "Malawi-Kwacha",
        'minor' => [
            's' => "Tambala",
            'p' => "Tambala",
        ]
    ],
    'mzn' => [
        's' => "mosambikanisches Metical",
        'p' => "mosambikanische Meticais",
        'minor' => Centavos
    ],
    'nad' => [
        's' => "Namibia-Dollar",
        'p' => "Namibia-Dollar",
        'minor' => Cents
    ],
    'nio' => [
        's' => "nicaraguanischer Córdoba",
        'p' => "nicaraguanischer Córdoba",
        'minor' => Centavos
    ],
    'ngn' => [
        's' => "nigerianischer Naira",
        'p' => "nigerianische Naira",
        'f' => true,
        'minor' => [
            's' => "Kobe",
            'p' => "Kobo",
        ]
    ],
    'npr' => [
        's' => "nepalesische Rupie",
        'p' => "nepalesische Rupien",
        'f' => true,
        'minor' => Paisa,
    ],
    'nok' => [
        's' => "norwegische Krone",
        'p' => "norwegische Kronen",
        'f' => true,
        'minor' => [
            's' => "Øre",
            'p' => "Øre",
        ]
    ],
    'nzd' => [
        's' => "Neuseeland-Dollar",
        'p' => "Neuseeland-Dollar",
        'minor' => Cents
    ],
    'omr' => [
        's' => "omanischer Rial",
        'p' => "omanische Rial",
        'minor' => [
            's' => "Baisa",
            'p' => "Baisa",
            'd' => 3,
            'f' => true,
        ]
    ],
    'pab' => [
        's' => "panamaischer Balboa",
        'p' => "panamaische Balboa",
        'minor' => Centesimos
    ],
    'pen' => [
        's' => "peruanischer Sol",
        'p' => "peruanische Sol",
        'minor' => Centimos
    ],
    'pgk' => [
        's' => "Papua-Kina",
        'p' => "Papua-Kina",
        'minor' => [
            's' => "Toea",
            'p' => "Toea",
        ]
    ],
    'php' => [
        's' => "philippinischer Peso",
        'p' => "philippinische Pesos",
        'minor' => Centavos
    ],
    'pkr' => [
        's' => "pakistanische Rupie",
        'p' => "pakistanische Rupien",
        'f' => true,
        'minor' => Paisa
    ],
    'pln' => [
        's' => "polnischer Zloty",
        'p' => "polnische Zloty",
        'minor' => [
            's' => "Grosz",
            'p' => "Grosze",
        ]
    ],
    'pyg' => [
        's' => "paraguayischer Guaraní",
        'p' => "paraguayische Guaraní",
        'minor' => Centimes_NotUsed
    ],
    'qar' => [
        's' => "Katar-Riyal",
        'p' => "Katar-Riyal",
        'minor' => [
            's' => "Dirham",
            'p' => "Dirham",
        ]
    ],
    'ron' => [
        's' => "rumänischer Leu",
        'p' => "rumänische Lei",
        'minor' => [
            's' => "Ban",
            'p' => "Bani",
        ]
    ],
    'rsd' => [
        's' => "serbischer Dinar",
        'p' => "serbische Dinare",
        'minor' => [
            's' => "Para",
            'p' => "Para",
        ]
    ],
    'rub' => [
        's' => "russischer Rubel",
        'p' => "russische Rubel",
        'minor' => [
            's' => "Kopeke",
            'p' => "Kopeken",
            'f' => true,
        ]
    ],
    'rwf' => [
        's' => "Ruanda-Franc",
        'p' => "Ruanda-Francs",
        'minor' => Centimes_NotUsed
    ],
    'sar' => [
        's' => "Saudi-Riyal",
        'p' => "Saudi-Riyal",
        'minor' => [
            's' => "Halala",
            'p' => "Halalas",
        ]
    ],
    'sbd' => [
        's' => "Salomonen-Dollar",
        'p' => "Salomonen-Dollar",
        'minor' => Cents
    ],
    'scr' => [
        's' => "Seychellen-Rupie",
        'p' => "Seychellen-Rupien",
        'f' => true,
        'minor' => Cents
    ],
    'sdg' => [
        's' => "sudanesisches Pfund",
        'p' => "sudanesische Pfunde",
        'minor' => Piastres
    ],
    'sek' => [
        's' => "swedische Krone",
        'p' => "swedische Kronen",
        'f' => true,
        'minor' => [
            's' => "Öre",
            'p' => "Öre",
        ]
    ],
    'sgd' => [
        's' => "Singapur-Dollar",
        'p' => "Singapur-Dollar",
        'minor' => Cents
    ],
    'shp' => [
        's' => "St.-Helena-Pfund",
        'p' => "St.-Helena-Pfunde",
        'minor' => Pence
    ],
    'sll' => [
        's' => "sierra-leonischer Leone",
        'p' => "sierra-leonische Leones",
        'minor' => Cents
    ],
    'sos' => [
        's' => "Somalia-Schilling",
        'p' => "Somalia-Schilling",
        'minor' => Cents
    ],
    'srd' => [
        's' => "Suriname-Dollar",
        'p' => "Suriname-Dollar",
        'minor' => Cents
    ],
    'ssp' => [
        's' => "südsudanesisches Pfund",
        'p' => "südsudanesische Pfunde",
        'minor' => Piastres
    ],
    'stn' => [
        's' => "são-toméischer Dobra",
        'p' => "são-toméische Dobra",
        'minor' => Centimos
    ],
    'svc' => [
        's' => "El-Salvador-Colón",
        'p' => "El-Salvador-Colones",
        'minor' => Centavos
    ],
    'syp' => [
        's' => "syrische Lira",
        'p' => "syrische Lira",
        'f' => true,
        'minor' => Piastres
    ],
    'szl' => [
        's' => "Swasi-Lilangeni",
        'p' => "Swasi-Emalangeni",
        'minor' => Cents
    ],
    'thb' => [
        's' => "thailändischer Baht",
        'p' => "thailändische Baht",
        'minor' => [
            's' => "Satang",
            'p' => "Satang",
        ]
    ],
    /// HERE JACKASS
    'tjs' => [
        's' => "tadschikischer Somoni",
        'p' => "tadschikische Somoni",
        'minor' => [
            's' => "Diram",
            'p' => "Diram",
        ]
    ],
    'tmt' => [
        's' => "Turkmenistan-Manat",
        'p' => "Turkmenistan-Manat",
        'minor' => [
            's' => "Teňňe",
            'p' => "Teňňe",
        ]
    ],
    'tnd' => [
        's' => "tunesischer Dinar",
        'p' => "tunesische Dinare",
        'minor' => [
            's' => "Milime",
            'p' => "Milimes",
            'd' => 3,
        ]
    ],
    'top' => [
        's' => "tongaischer Paʻanga",
        'p' => "tongaische Paʻanga",
        'minor' => [
            's' => "Seniti",
            'p' => "Seniti",
        ]
    ],
    'try' => [
        's' => "türkische Lira",
        'p' => "türkische Lira",
        'f' => true,
        'minor' => [
            's' => "Kuruş",
            'p' => "Kuruş",
        ]
    ],
    'ttd' => [
        's' => "Trinidad-und-Tobago-Dollar",
        'p' => "Trinidad-und-Tobago-Dollar",
        'minor' => Cents
    ],
    'twd' => [
        's' => "neuer Taiwan-Dollar",
        'p' => "neue Taiwan-Dollar",
        'minor' => Cents
    ],
    'tzs' => [
        's' => "Tansania-Schilling",
        'p' => "Tansania-Schilling",
        'minor' => Cents
    ],
    'uah' => [
        's' => "ukrainische Hryvnia",
        'p' => "ukrainische Hryvni",
        'f' => true,
        'minor' => [
            's' => "Kopijka",
            'p' => "Kopijki",
        ]
    ],
    'ugx' => [
        's' => "Uganda-Schilling",
        'p' => "Uganda-Schilling",
        'minor' => Cents_NotUsed
    ],
    'usd' => [
        's' => "US-Dollar",
        'p' => "US-Dollar",
        'minor' => Cents
    ],
    'uyu' => [
        's' => "uruguayischer Peso",
        'p' => "uruguayische Pesos",
        'minor' => Centesimos
    ],
    'uzs' => [
        's' => "usbekischer Soʻm",
        'p' => "usbekische Soʻm",
        'minor' => Tyiyn
    ],
    'ves' => [
        's' => "venezolanischer Bolívar Soberano",
        'p' => "venezolanische Bolívar Soberano",
        'minor' => Centimos
    ],
    'vnd' => [
        's' => "vietnamesischer Đồng",
        'p' => "vietnamesischee Đồng",
        'minor' => [
            's' => "Xu",
            'p' => "Xu",
            'u' => false,
        ]
    ],
    'vuv' => [
        's' => "Vatu",
        'p' => "Vatu",
        'minor' => [
            's' => "",
            'p' => "",
            'u' => false,
        ]
    ],
    'wst' => [
        's' => "samoanischer Tala",
        'p' => "samoanische Tala",
        'minor' => [
            's' => "Sene",
            'p' => "Sene",
        ]
    ],
    'xaf' => [
        's' => "zentralafrikanischer CFA-Franc",
        'p' => "zentralafrikanische CFA-Francs",
        'minor' => Centimes_NotUsed
    ],
    'xcd' => [
        's' => "ostkaribischer Dollar",
        'p' => "ostkaribische Dollar",
        'minor' => Cents
    ],
    'xof' => [
        's' => "westafrikanischer CFA-Franc",
        'p' => "westafrikanische CFA-Francs",
        'minor' => Centimes_NotUsed
    ],
    'xpf' => [
        's' => "CFP-Franc",
        'p' => "CFP-Francs",
        'minor' => Centimes_NotUsed
    ],
    'yer' => [
        's' => "Jemen-Rial",
        'p' => "Jemen-Rial",
        'minor' => Fils
    ],
    'zar' => [
        's' => "südafrikanischer Rand",
        'p' => "südafrikanische Rand",
        'minor' => Cents
    ],
    'zmw' => [
        's' => "sambischer Kwacha",
        'p' => "sambische Kwacha",
        'minor' => [
            's' => "Ngwee",
            'p' => "Ngwee",
        ]
    ],
    'zwl' => [
        's' => "Simbabwe-Dollar",
        'p' => "Simbabwe-Dollar",
        'minor' => Cents
    ],
];

namespace tei187\Resources\ISO4217;

/**
 * @var array[] Cross-reference table between ISO 4217 Numbers and currency pickers.
 */
const NumberToCode = [
    '008' => "all",
    '012' => 'dzd',
    '032' => "ars",
    '036' => "aud",
    '044' => "bsd",
    '048' => "bhd",
    '050' => "bdt",
    '051' => "amd",
    '052' => "bbd",
    '060' => "bmd",
    '064' => "btn",
    '068' => "bob",
    '072' => "bwp",
    '084' => "bzd",
    '090' => "sbd",
    '096' => "bnd",
    '104' => "mmk",
    '108' => "bif",
    '116' => "khr",
    '124' => "cad",
    '132' => "cve",
    '136' => "kyd",
    '144' => "lkr",
    '152' => "clp",
    '156' => "cny",
    '170' => "cop",
    '174' => "kmf",
    '188' => "crc",
    '191' => "hrk",
    '192' => "cup",
    '203' => "czk",
    '208' => "dkk",
    '214' => "dop",
    '222' => "svc",
    '230' => "etb",
    '232' => "ern",
    '238' => "fkp",
    '242' => "fjd",
    '262' => "djf",
    '270' => "gmd",
    '292' => "gip",
    '320' => "gtq",
    '324' => "gnf",
    '328' => "gyd",
    '332' => "htg",
    '340' => "hnl",
    '344' => "hkd",
    '348' => "huf",
    '352' => "isk",
    '356' => "inr",
    '360' => "idr",
    '364' => "irr",
    '368' => "iqd",
    '376' => "ils",
    '388' => "jmd",
    '392' => "jpy",
    '398' => "kzt",
    '400' => "jod",
    '404' => "kes",
    '408' => "kpw",
    '410' => "krw",
    '414' => "kwd",
    '417' => "kgs",
    '418' => "lak",
    '422' => "lbp",
    '426' => "lsl",
    '430' => "lrd",
    '434' => "lyd",
    '446' => "mop",
    '454' => "mwk",
    '458' => "myr",
    '496' => "mnt",
    '462' => "mvr",
    '480' => "mur",
    '484' => "mxn",
    '498' => "mdl",
    '504' => "mad",
    '512' => "omr",
    '516' => "nad",
    '524' => "npr",
    '532' => "ang",
    '533' => "awg",
    '548' => "vuv",
    '554' => "nzd",
    '558' => "nio",
    '566' => "ngn",
    '578' => "nok",
    '586' => "pkr",
    '590' => "pab",
    '598' => "pgk",
    '600' => "pyg",
    '604' => "pen",
    '608' => "php",
    '634' => "qar",
    '643' => "rub",
    '646' => "rwf",
    '654' => "shp",
    '682' => "sar",
    '690' => "scr",
    '694' => "sll",
    '702' => "sgd",
    '704' => "vnd",
    '706' => "sos",
    '710' => "zar",
    '728' => "ssp",
    '748' => "szl",
    '752' => "sek",
    '756' => "chf",
    '760' => "syp",
    '764' => "thb",
    '776' => "top",
    '780' => "ttd",
    '784' => "aed",
    '788' => "tnd",
    '800' => "ugx",
    '807' => "mkd",
    '818' => "egp",
    '826' => "gbp",
    '834' => "tzs",
    '840' => "usd",
    '858' => "uyu",
    '860' => "uzs",
    '882' => "wst",
    '886' => "yer",
    '901' => "twd",
    '928' => "ves",
    '929' => "mru",
    '930' => "stn",
    '931' => "cuc",
    '932' => "zwl",
    '933' => "byn",
    '934' => "tmt",
    '936' => "ghs",
    '938' => "sdg",
    '941' => "rsd",
    '943' => "mzn",
    '944' => "azm",
    '946' => "ron",
    '949' => "try",
    '950' => "xaf",
    '951' => "xcd",
    '952' => "xof",
    '953' => "xpf",
    '967' => "zmw",
    '968' => "srd",
    '969' => "mga",
    '971' => "afn",
    '972' => "tjs",
    '973' => "aoa",
    '975' => "bgn",
    '976' => "cdf",
    '977' => "bam",
    '978' => "eur",
    '980' => "uah",
    '981' => "gel",
    '985' => "pln",
    '986' => "brl",
];

namespace tei187\Resources\DE;

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

?>