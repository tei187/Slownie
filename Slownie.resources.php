<?php
namespace Slownie\Resources;

// round half even

/**
 * Transcription parts in Polish for numbers.
 * 
 * @var array
 */
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

 /**
  * Regular extension - cents.
  * 
  * @var array
  */
const Cents = [
    's1' => "cent",
    's2' => "centy",
    's3' => "centów",
    'f' => false,
];

 /**
  * Regular extension - cents (not used).
  * 
  * @var array
  */
  const Cents_NotUsed = [
    's1' => "cent",
    's2' => "centy",
    's3' => "centów",
    'f' => false,
    'u' => false
];

 /**
  * Regular extension - centavo.
  *
  * @var array
  */
const Centavo = [
    's1' => "centavo",
    's2' => "centavo",
    's3' => "centavo",
    'f' => false,
];

 /**
  * Regular extension - centavo (not used).
  *
  * @var array
  */
  const Centavo_NotUsed = [
    's1' => "centavo",
    's2' => "centavo",
    's3' => "centavo",
    'f' => false,
    'u' => false
];

 /**
  * Regular extension - centesimo.
  *
  * @var array
  */
const Centesimo = [
    's1' => "centesimo",
    's2' => "centesimo",
    's3' => "centesimo",
    'f' => false,
];

 /**
  * Regular extension - centims.
  *
  * @var array
  */
const Centims = [
    's1' => "centym",
    's2' => "centymy",
    's3' => "centymów",
    'f' => false,
];

 /**
  * Regular extension - centims (not used).
  *
  * @var array
  */
  const Centims_NotUsed = [
    's1' => "centym",
    's2' => "centymy",
    's3' => "centymów",
    'f' => false,
    'u' => false,
];

 /**
  * Regular extension - fils, 3 decimal points.
  *
  * @var array
  */
const Fils_3dec = [
    's1' => "fils",
    's2' => "filsy",
    's3' => "filsów",
    'f' => false,
    'd' => 3,
];

 /**
  * Regular extension - fils.
  *
  * @var array
  */
const Fils = [
    's1' => "fils",
    's2' => "filsy",
    's3' => "filsów",
    'f' => false,
];

 /**
  * Regular extension - piastres.
  *
  * @var array
  */
const Piastres = [
    's1' => "piastr",
    's2' => "piastry",
    's3' => "piastrów",
    'f' => false,
    'd' => 2,
];

 /**
  * Regular extension - piastres, 3 decimal points.
  *
  * @var array
  */
  const Piastres_3dec = [
    's1' => "piastr",
    's2' => "piastry",
    's3' => "piastrów",
    'f' => false,
    'd' => 2,
];

 /**
  * Regular extension - sen.
  *
  * @var array
  */
const Sen = [
    's1' => "sen",
    's2' => "seny",
    's3' => "senów",
    'f' => false,
];

 /**
  * Regular extension - pais.
  *
  * @var array
  */
const Pais = [
    's1' => "pajsa",
    's2' => "pajsy",
    's3' => "pajs",
    'f' => true,
];

 /**
  * Regular extension - tiyin.
  *
  * @var array
  */
const Tiyin = [
    's1' => "tyin",
    's2' => "tyiny",
    's3' => "tyinów",
    'f' => false,
];

 /**
  * Regular extension - pens.
  *
  * @var array
  */
const Pens = [
    's1' => "pens",
    's2' => "pensy",
    's3' => "pensów",
    'f' => false,
];

 /**
  * Supported currencies by ISO 4217.
  *
  * 's1' - 1 unit
  * 's2' - 2 units, 22 units
  * 's3' - 5 units, 55 units
  * 'f'  - false if m, true if f
  * 'u'  - in use for minor, false if not, otherwise doesn't matter
  * 'd'  - in minor units, describes how many decimal points are in use, if none set defaults to 2
  *
  * @var array
  */
const Currencies = [
    'aed' => [
        's1' => "dirham Zjednoczonych Emiratów Arabskich",
        "s2" => "dirhamy Zjednoczonych Emiratów Arabskich",
        "s3" => "dirhamów Zjednoczonych Emiratów Arabskich",
        'f' => false,
        'minor' => Fils
    ],
    'afn' => [
        's1' => "afgani",
        "s2" => "afgani",
        "s3" => "afgani",
        'f' => false,
        'minor' => [
            's1' => "pul",
            's2' => "pul",
            's3' => "pul",
            'f' => false,
        ]
    ],'all' => [
        's1' => "lek",
        "s2" => "leki",
        "s3" => "leków",
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
        "s2" => "dramy armeńskie",
        "s3" => "dramów armeńskich",
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
        "s2" => "guldeny Antyli Holenderskich",
        "s3" => "guldenów Antyli Holenderskich",
        'f' => false,
        'minor' => Cents
    ],
    'aoa' => [
        's1' => "kwanza angolska",
        "s2" => "kwanzy angolskie",
        "s3" => "kwanz angolskich",
        'f' => true,
        'minor' => Centims
    ],
    'ars' => [
        's1' => "peso argentyńskie",
        "s2" => "peso argentyńskie",
        "s3" => "peso argentyńskich",
        'f' => false,
        'minor' => Centavo
    ],
    'aud' => [
        's1' => "dolar australijski",
        "s2" => "dolary australijskie",
        "s3" => "dolarów australijskich",
        'f' => false,
        'minor' => Cents
    ],
    'awg' => [
        's1' => "florin arubański",
        "s2" => "floriny arubańskie",
        "s3" => "florinów arubańskich",
        'f' => false,
        'minor' => Cents
    ],
    'azm' => [
        's1' => "manat azerbejdżański",
        "s2" => "manaty azerbejdżańskie",
        "s3" => "manatów azerbejdżańskich",
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
        "s2" => "marki zamienne",
        "s3" => "marek zamiennych",
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
        "s2" => "dolary barbardoskie",
        "s3" => "dolarów barbardoskich",
        'f' => false,
        'minor' => Cents
    ],
    'bdt' => [
        's1' => "taka",
        "s2" => "taka",
        "s3" => "taka",
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
        "s2" => "lewy",
        "s3" => "lewów",
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
        "s2" => "dinary bahrajskie",
        "s3" => "dinarów bahrajskich",
        'f' => false,
        'minor' => Fils_3dec
    ],
    'bif' => [
        's1' => "frank burundyjski",
        "s2" => "franki burundyjskie",
        "s3" => "franków burundyjskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'bmd' => [
        's1' => "dolar bermudzki",
        "s2" => "dolary bermudzkie",
        "s3" => "dolarów bermudzkich",
        'f' => false,
        'minor' => Cents
    ],
    'bnd' => [
        's1' => "dolar brunejski",
        "s2" => "dolary brunejskie",
        "s3" => "dolarów brunejskich",
        'f' => false,
        'minor' => Cents
    ],
    'bob' => [
        's1' => "boliviano",
        "s2" => "boliviano",
        "s3" => "boliviano",
        'f' => false,
        'minor' => Centavo
    ],
    'brl' => [
        's1' => "real brazylijski",
        "s2" => "reale brazylijskie",
        "s3" => "reali brazylijskich",
        'f' => false,
        'minor' => Centavo
    ],
    'bsd' => [
        's1' => "dolar bahamski",
        "s2" => "dolary bahamskie",
        "s3" => "dolarów bahamskich",
        'f' => false,
        'minor' => Cents
    ],
    'btn' => [
        's1' => "ngultrum butański",
        "s2" => "ngultrum butańskie",
        "s3" => "ngultrum butańskich",
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
        "s2" => "pula botswańskie",
        "s3" => "pula botswańskich",
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
        "s2" => "ruble białoruskie",
        "s3" => "rubli białoruskich",
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
        "s2" => "dolary belizeńskie",
        "s3" => "dolarów belizeńskich",
        'f' => false,
        'minor' => Cents
    ],
    'cad' => [
        's1' => "dolar kanadyjski",
        "s2" => "dolary kanadyjskie",
        "s3" => "dolarów kanadyjskich",
        'f' => false,
        'minor' => Cents
    ],
    'cdf' => [
        's1' => "frank kongijski",
        "s2" => "franki kongijskie",
        "s3" => "franków kongijskich",
        'f' => false,
        'minor' => Centims
    ],
    'chf' => [
        's1' => "frank szwajcarski",
        "s2" => "franki szwajcarske",
        "s3" => "franków szwajcarskich",
        'f' => false,
        'minor' => Centims
    ],
    'clp' => [
        's1' => "peso chillijski",
        "s2" => "peso chillijskie",
        "s3" => "peso chillijskich",
        'f' => false,
        'minor' => Centavo_NotUsed
    ],
    'cny' => [
        's1' => "yuan",
        "s2" => "yuany",
        "s3" => "yuanów",
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
        "s2" => "peso kolumbijskie",
        "s3" => "peso kolumbijskich",
        'f' => false,
        'minor' => Centavo
    ],
    'crc' => [
        's1' => "colon kostarykański",
        "s2" => "colon kostarykańskie",
        "s3" => "colon kostarykańskich",
        'f' => false,
        'minor' => Centims
    ],
    'cuc' => [
        's1' => "peso kubańskie wymienialne",
        "s2" => "peso kubańskie wymienialne",
        "s3" => "peso kubańskich wymienialnych",
        'f' => false,
        'minor' => Centavo
    ],
    'cup' => [
        's1' => "peso kubańskie",
        "s2" => "peso kubańskie",
        "s3" => "peso kubańskich",
        'f' => false,
        'minor' => Centavo
    ],
    'cve' => [
        's1' => "escudo Zielonego Przylądka",
        "s2" => "escudo Zielonego Przylądka",
        "s3" => "escudo Zielonego Przylądka",
        'f' => false,
        'minor' => Centavo
    ],
    'czk' => [
        's1' => "korona czeska",
        "s2" => "korony czeskie",
        "s3" => "koron czeskich",
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
        "s2" => "franki dżibutyjskie",
        "s3" => "franków dżibutyjskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'dkk' => [
        's1' => "korona duńska",
        "s2" => "korony duńskie",
        "s3" => "koron duńskich",
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
        "s2" => "dinary algierskie",
        "s3" => "dinarów algierskich",
        'f' => true,
        'minor' => Centims
    ],
    'dop' => [
        's1' => "peso dominikańskie",
        "s2" => "peso dominikańskie",
        "s3" => "peso dominikańskich",
        'f' => false,
        'minor' => Centavo
    ],
    'egp' => [
        's1' => "funt egipski",
        "s2" => "funty egipskie",
        "s3" => "funtów egipskich",
        'f' => false,
        'minor' => Piastres
    ],
    'eur' => [
        's1' => "euro",
        "s2" => "euro",
        "s3" => "euro",
        'f' => false,
        'minor' => Cents
    ],
    'ern' => [
        's1' => "nakfa erytrejska",
        "s2" => "nakfy erytrejskie",
        "s3" => "nakf erytrejskich",
        'f' => true,
        'minor' => Cents
    ],
    'etb' => [
        's1' => "birr etiopski",
        "s2" => "birry etiopskie",
        "s3" => "birrów etiopskich",
        'f' => false,
        'minor' => Centims
    ],
    'fjd' => [
        's1' => "dolar fidżi",
        "s2" => "dolary fidżi",
        "s3" => "dolarów fidżi",
        'f' => false,
        'minor' => Cents
    ],
    'fkp' => [
        's1' => "funt falklandzki",
        "s2" => "funty falklandzkie",
        "s3" => "funtów falklandzkich",
        'f' => false,
        'minor' => Pens
    ],
    'gbp' => [
        's1' => "funt brytyjski",
        "s2" => "funty brytyjskie",
        "s3" => "funtów brytyjskich",
        'f' => false,
        'minor' => Pens
    ],
    'gel' => [
        's1' => "lari",
        "s2" => "lari",
        "s3" => "lari",
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
        "s2" => "cedi ghańskie",
        "s3" => "cedi ghańskich",
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
        "s2" => "funty gibraltarskie",
        "s3" => "funtów gibraltarskich",
        'f' => false,
        'minor' => Pens
    ],
    'gmd' => [
        's1' => "dalasi gambijski",
        "s2" => "dalasi gambijskie",
        "s3" => "dalasi gambijskich",
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
        "s2" => "franki gwinejskie",
        "s3" => "franków gwinejskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'gtq' => [
        's1' => "quetzal",
        "s2" => "quetzal",
        "s3" => "quetzal",
        'f' => false,
        'minor' => Centavo
    ],
    'gyd' => [
        's1' => "dolar gujański",
        "s2" => "dolary gujańskie",
        "s3" => "dolarów gujańskich",
        'f' => false,
        'minor' => Cents
    ],
    'hnl' => [
        's1' => "lempira honduraska",
        "s2" => "lempiry honduraskie",
        "s3" => "lempir honduraskich",
        'f' => false,
        'minor' => Centavo
    ],
    'hkd' => [
        's1' => "dolar hongkoński",
        "s2" => "dolary hongkońskie",
        "s3" => "dolarów hongkońskich",
        'f' => false,
        'minor' => Cents
    ],
    'hrk' => [
        's1' => "kuna",
        "s2" => "kuny",
        "s3" => "kun",
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
        "s2" => "gourde",
        "s3" => "gourde",
        'f' => false,
        'minor' => Centims
    ],
    'huf' => [
        's1' => "forint",
        "s2" => "forinty",
        "s3" => "forintów",
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
        "s2" => "rupie indonezyjskie",
        "s3" => "rupii indonezyjskich",
        'f' => true,
        'minor' => Sen
    ],
    'ils' => [
        's1' => "nowy izraelski szekel",
        "s2" => "nowe izraelskie szekle",
        "s3" => "nowych izraelskich szekli",
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
        "s2" => "rupie indyjskie",
        "s3" => "rupii indyjskich",
        'f' => true,
        'minor' => Pais
    ],
    'iqd' => [
        's1' => "dinar irakijski",
        "s2" => "dinary irakijskie",
        "s3" => "dinarów irakijskich",
        'f' => false,
        'minor' => Fils_3dec
    ],
    'irr' => [
        's1' => "rial irański",
        "s2" => "riale irańskie",
        "s3" => "riali irańskich",
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
        "s2" => "korony islandzkie",
        "s3" => "koron islandzkich",
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
        "s2" => "dolary jamajskie",
        "s3" => "dolarów jamajskich",
        'f' => false,
        'minor' => Cents
    ],
    'jod' => [
        's1' => "dinar jordański",
        "s2" => "dinary jordańskie",
        "s3" => "dinarów jordańskich",
        'f' => false,
        'minor' => Piastres_3dec
    ],
    'jpy' => [
        's1' => "jen",
        "s2" => "jeny",
        "s3" => "jenów",
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
        "s2" => "szylingi kenijskie",
        "s3" => "szylingów kenijskch",
        'f' => false,
        'minor' => Cents
    ],
    'kgs' => [
        's1' => "som kirgiski",
        "s2" => "somy kirgiskie",
        "s3" => "somów kirgiskich",
        'f' => false,
        'minor' => Tiyin
    ],
    'khr' => [
        's1' => "riel kambodżański",
        "s2" => "riel kambodżańskie",
        "s3" => "riel kambodżańskich",
        'f' => false,
        'minor' => Sen
    ],
    'kmf' => [
        's1' => "frank komoryjski",
        "s2" => "franki komoryjskie",
        "s3" => "franków komoryjskich",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'kpw' => [
        's1' => "won północnokoreański",
        "s2" => "wony północnokoreańskie",
        "s3" => "wonów północnokoreańskich",
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
        "s2" => "wony południowokoreańskie",
        "s3" => "wonów południowokoreańskich",
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
        "s2" => "dinary kuwejckie",
        "s3" => "dinarów kuwejckich",
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
        "s2" => "funty libańskie",
        "s3" => "funtów libańskich",
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
        "s2" => "peso meksykańskie",
        "s3" => "peso meksykańskich",
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
        "s2" => "dolary namibijskie",
        "s3" => "dolarów namibijskich",
        'f' => false,
        'minor' => Cents
    ],
    'nio' => [
        's1' => "cordoba oro",
        "s2" => "cordoby oro",
        "s3" => "cordób oro",
        'f' => false,
        'minor' => Centavo
    ],
    'ngn' => [
        's1' => "naira nigeryjska",
        "s2" => "nairy nigeryjskie",
        "s3" => "nair nigeryjskich",
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
        "s2" => "dolary nowozelandzkie",
        "s3" => "dolarów nowozelandzkich",
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
        "s2" => "funty sudańskie",
        "s3" => "funtów sudańskich",
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
        "s2" => "dolary singapurskie",
        "s3" => "dolarów singapurskich",
        'f' => false,
        'minor' => Cents
    ],
    'shp' => [
        's1' => "funt Świętej Heleny",
        "s2" => "funty Świętej Heleny",
        "s3" => "funtów Świętej Heleny",
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
        "s2" => "dolary surinamskie",
        "s3" => "dolarów surinamskich",
        'f' => false,
        'minor' => Cents
    ],
    'ssp' => [
        's1' => "funt południowosudański",
        "s2" => "funty południowosudańskie",
        "s3" => "funtów południowosudańskich",
        'f' => false,
        'minor' => Piastres
    ],
    'stn' => [
        's1' => "dobra Tomasza/Książęca",
        "s2" => "dobry Tomasza/Książęce",
        "s3" => "dóbr Tomasza/Książęcych",
        'f' => false,
        'minor' => Centims
    ],
    'svc' => [
        's1' => "colón salwadorski",
        "s2" => "colón salwadorskie",
        "s3" => "colón salwadorskich",
        'f' => false,
        'minor' => Centavo
    ],
    'syp' => [
        's1' => "funt syryjski",
        "s2" => "funty syryjskie",
        "s3" => "funtów syryjskich",
        'f' => false,
        'minor' => Piastres
    ],
    'szl' => [
        's1' => "lilangeni suazyjski",
        "s2" => "lilangeni suazyjskie",
        "s3" => "lilangeni suazyjskich",
        'f' => false,
        'minor' => Cents
    ],
    'thb' => [
        's1' => "baht tajski",
        "s2" => "bahty tajskie",
        "s3" => "bahtów tajskich",
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
        "s2" => "somoni tadżykistańskie",
        "s3" => "somoni tadżykistańskich",
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
        "s2" => "manaty turkmeńskie",
        "s3" => "manatów turkmeńskich",
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
        "s2" => "dinary tunezyjskie",
        "s3" => "dinarów tunezyjskich",
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
        "s2" => "pa'angi tongijskie",
        "s3" => "pa'ang tongijskich",
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
        "s2" => "liry tureckie",
        "s3" => "lir tureckich",
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
        "s2" => "dolary Trynidadu i Tobago",
        "s3" => "dolarów Trynidadu i Tobago",
        'f' => false,
        'minor' => Cents
    ],
    'twd' => [
        's1' => "dolar tajwański",
        "s2" => "dolary tajwańskie",
        "s3" => "dolarów tajwańskich",
        'f' => false,
        'minor' => Cents
    ],
    'tzs' => [
        's1' => "szyling tanzański",
        "s2" => "szylingi tanzańskie",
        "s3" => "szylingów tanzańskich",
        'f' => false,
        'minor' => Cents
    ],
    'uah' => [
        's1' => "hrywna",
        "s2" => "hrywny",
        "s3" => "hrywien",
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
        "s2" => "szylingi ugandyjskie",
        "s3" => "szylingów ugandyjskich",
        'f' => false,
        'minor' => Cents_NotUsed
    ],
    'usd' => [
        's1' => "dolar amerykański",
        "s2" => "dolary amerykańskie",
        "s3" => "dolarów amerykańskich",
        'f' => false,
        'minor' => Cents
    ],
    'uzs' => [
        's1' => "sum uzbecki",
        "s2" => "sumy uzbecki",
        "s3" => "sumów uzbecki",
        'f' => false,
        'minor' => Tiyin
    ],
    'ves' => [
        's1' => "boliwar wenezuelski soberano",
        "s2" => "boliwary wenezuelskie soberano",
        "s3" => "boliwarów wenezuelskich soberano",
        'f' => false,
        'minor' => Centims
    ],
    'vnd' => [
        's1' => "dong wietnamski",
        "s2" => "dongi wietnamskie",
        "s3" => "dongów wietnamskich",
        'f' => false,
        'minor' => [
            's1' => "xu",
            "s2" => "xu",
            "s3" => "xu",
            'f' => false,
            'u' => false,
        ]
    ],
    'vuv' => [
        's1' => "vatu vanuatuańskie",
        "s2" => "vatu vanuatuańskie",
        "s3" => "vatu vanuatuańskich",
        'f' => false,
        'minor' => [
            's1' => "",
            "s2" => "",
            "s3" => "",
            'f' => false,
            'u' => false,
        ]
    ],
    'wst' => [
        's1' => "tala samoańska",
        "s2" => "tala samoańskie",
        "s3" => "tala samoańskich",
        'f' => true,
        'minor' => [
            's1' => "sene",
            "s2" => "sene",
            "s3" => "sene",
            'f' => false,
        ]
    ],
    'xaf' => [
        's1' => "środkowoafrykański frank CFA",
        "s2" => "środkowoafrykańskie franki CFA",
        "s3" => "środkowoafrykańskich franków CFA",
        'f' => false,
        'minor' => Cents_NotUsed
    ],
    'xcd' => [
        's1' => "dolar wschodniokaraibski",
        "s2" => "dolary wschodniokaraibskie",
        "s3" => "dolarów wschodniokaraibskich",
        'f' => false,
        'minor' => Cents
    ],
    'xof' => [
        's1' => "zachodnioafrykański frank CFA",
        "s2" => "zachodnioafrykańskie franki CFA",
        "s3" => "zachodnioafrykańskich franków CFA",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'xpf' => [
        's1' => "frank CFP",
        "s2" => "franki CFP",
        "s3" => "franków CFP",
        'f' => false,
        'minor' => Centims_NotUsed
    ],
    'yer' => [
        's1' => "rial jemeński",
        "s2" => "riale jemeńskie",
        "s3" => "riali jemeńskich",
        'f' => false,
        'minor' => Fils
    ],
    'zar' => [
        's1' => "rand południowoafrykański",
        "s2" => "randy południowoafrykańskie",
        "s3" => "randów południowoafrykańskich",
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
        "s2" => "dolary Zimbabwe",
        "s3" => "dolarów Zimbabwe",
        'f' => false,
        'minor' => Cents
    ],
];

/**
 * Cross-reference table between ISO 4217 Numbers and currency pickers.
 * 
 * @var array
 */
const Xref = [
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

?>