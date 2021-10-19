<?php
namespace Slownie\Resources;
/**
 *   's1' - 1 unit
 *   's2' - 2 units, 22 units
 *   's3' - 5 units, 55 units
 *   'f'  - false if m, true if f
 *   'u'  - in use for minor, false if not, otherwise doesn't matter
 */

 /**
  * Regular extension - cents.
  */
const Cents = [
    's1' => "cent",
    's2' => "centy",
    's3' => "centów",
    'f' => false,
];

 /**
  * Regular extension - centavo.
  */
const Centavo = [
    's1' => "centavo",
    's2' => "centavo",
    's3' => "centavo",
    'f' => false,
];

 /**
  * Regular extension - centesimo.
  */
const Centesimo = [
    's1' => "centesimo",
    's2' => "centesimo",
    's3' => "centesimo",
    'f' => false,
];

 /**
  * Regular extension - centims.
  */
const Centims = [
    's1' => "centym",
    's2' => "centymy",
    's3' => "centymów",
    'f' => false,
];

/**
  * Supported currencies by ISO 4217.
  */
const Currencies = [
    'all' => [
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
        's1' => "dram",
        "s2" => "dramy",
        "s3" => "dramów",
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
    'ars' => [
        's1' => "peso argentyńskie",
        "s2" => "peso argentyńskie",
        "s3" => "peso argentyńskich",
        'f' => false,
        'minor' => Centavo
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
    'bmd' => [
        's1' => "dolar bermudzki",
        "s2" => "dolary bermudzkie",
        "s3" => "dolarów bermudzkich",
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
        'minor' => Centavo
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
    'dop' => [
        's1' => "peso dominikańskie",
        "s2" => "peso dominikańskie",
        "s3" => "peso dominikańskich",
        'f' => false,
        'minor' => Centavo
    ],
    'eur' => [
        's1' => "euro",
        "s2" => "euro",
        "s3" => "euro",
        'f' => false,
        'minor' => Cents
    ],
    'fkp' => [
        's1' => "funt falklandzki",
        "s2" => "funty falklandzkie",
        "s3" => "funtów falklandzkich",
        'f' => false,
        'minor' => [
            's1' => "pens",
            's2' => "pensy",
            's3' => "pensów",
            'f' => false,
        ]
    ],
    'gbp' => [
        's1' => "funt brytyjski",
        "s2" => "funty brytyjskie",
        "s3" => "funtów brytyjskich",
        'f' => false,
        'minor' => [
            's1' => "pens",
            's2' => "pensy",
            's3' => "pensów",
            'f' => false,
        ]
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
            'u' => false
        ]
    ],
    'kyd' => [
        's1' => "dolar kajmański",
        's2' => 'dolary kajmańskie',
        's3' => "dolarów kajmańskich",
        'f' => false,
        'minor' => Cents
    ],
    'mdl' => [
        's1' => "lej mołdawski",
        's2' => 'leje mołdawskie',
        's3' => "lejów mołdawskich",
        'f' => false,
        'minor' => [
            's1' => "ban",
            's2' => "bany",
            's3' => "banów",
            'f' => false,
        ]
    ],
    'mkd' => [
        's1' => "denar macedoński",
        's2' => 'denary macedońskie',
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
    'mxn' => [
        's1' => "peso meksykańskie",
        "s2" => "peso meksykańskie",
        "s3" => "peso meksykańskich",
        'f' => false,
        'minor' => Centavo
    ],
    'nio' => [
        's1' => "cordoba oro",
        "s2" => "cordoby oro",
        "s3" => "cordób oro",
        'f' => false,
        'minor' => Centavo
    ],
    'nok' => [
        's1' => "korona norweska",
        's2' => 'korony norweskie',
        's3' => "koron norweskich",
        'f' => true,
        'minor' => [
            's1' => "øre",
            's2' => "øre",
            's3' => "øre",
            'f' => false,
        ]
    ],
    'pab' => [
        's1' => "balboa panamski",
        's2' => 'balboa panamskie',
        's3' => "balboa panamskich",
        'f' => false,
        'minor' => Centesimo
    ],
    'pen' => [
        's1' => "sol peruwiański",
        's2' => 'sole peruwiańskie',
        's3' => "soli peruwiańskich",
        'f' => false,
        'minor' => Centims
    ],
    'pln' => [
        's1' => "złoty",
        's2' => 'złote',
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
        's2' => 'guaraní paragwajskie',
        's3' => "guaraní paragwajskich",
        'f' => false,
        'minor' => Centims
    ],
    'ron' => [
        's1' => "lej rumuński",
        's2' => 'leje rumuńskie',
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
        's2' => 'dinary serbskie',
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
        's2' => 'ruble rosyjskie',
        's3' => "rubli rosyjskich",
        'f' => false,
        'minor' => [
            's1' => "kopiejka",
            's2' => "kopiejki",
            's3' => "kopiejek",
            'f' => true
        ]
    ],
    'sek' => [
        's1' => "korona szwedzka",
        's2' => 'korony szwedzkie',
        's3' => "koron szwedzkich",
        'f' => true,
        'minor' => [
            's1' => "öre",
            's2' => "öre",
            's3' => "öre",
            'f' => false,
        ]
    ],
    'srd' => [
        's1' => "dolar surinamski",
        "s2" => "dolary surinamskie",
        "s3" => "dolarów surinamskich",
        'f' => false,
        'minor' => Cents
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
    'usd' => [
        's1' => "dolar amerykański",
        "s2" => "dolary amerykańskie",
        "s3" => "dolarów amerykańskich",
        'f' => false,
        'minor' => Cents
    ],
    'ves' => [
        's1' => "boliwar wenezuelski soberano",
        "s2" => "boliwary wenezuelskie soberano",
        "s3" => "boliwarów wenezuelskich soberano",
        'f' => false,
        'minor' => Centims
    ],
    'xcd' => [
        's1' => "dolar wschodniokaraibski",
        "s2" => "dolary wschodniokaraibskie",
        "s3" => "dolarów wschodniokaraibskich",
        'f' => false,
        'minor' => Cents
    ],
];

const Xref = [
    '008' => 'all',
    '051' => 'amd',
    '532' => 'ang',
    '032' => 'ars',
    '533' => 'awg',
    '944' => 'azm',
    '977' => 'bam',
    '052' => 'bbd',
    '060' => 'bmd',
    '975' => 'bgn',
    '068' => 'bob',
    '986' => 'brl',
    '044' => 'bsd',
    '084' => 'bzd',
    '933' => 'byn',
    '124' => 'cad',
    '756' => 'chf',
    '152' => 'clp',
    '170' => 'cop',
    '188' => 'crc',
    '931' => 'cuc',
    '192' => 'cup',
    '203' => 'czk',
    '208' => 'dkk',
    '214' => 'dop',
    '978' => 'eur',
    '238' => 'fkp',
    '826' => 'gbp',
    '981' => 'gel',
    '320' => 'gtq',
    '328' => 'gyd',
    '340' => 'hnl',
    '191' => 'hrk',
    '332' => 'htg',
    '348' => 'huf',
    '352' => 'isk',
    '388' => 'jmd',
    '392' => 'jpy',
    '136' => 'kyd',
    '498' => 'mdl',
    '807' => 'mkd',
    '484' => 'mxn',
    '558' => 'nio',
    '578' => 'nok',
    '590' => 'pab',
    '604' => 'pen',
    '985' => 'pln',
    '600' => 'pyg',
    '946' => 'ron',
    '941' => 'rsd',
    '643' => 'rub',
    '752' => 'sek',
    '968' => 'srd',
    '949' => 'try',
    '780' => 'ttd',
    '980' => 'uah',
    '840' => 'usd',
    '858' => 'uyu',
    '951' => 'xcd',
    '928' => 'ves',
];

?>