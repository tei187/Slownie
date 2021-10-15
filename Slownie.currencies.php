<?php
namespace Slownie;
/**
 *   's1' - 1 unit
 *   's2' - 2 units, 22 units
 *   's3' - 5 units, 55 units
 *   'f'  - false if m, true if f
 *   'u'  - in use for minor, false if not, otherwise doesn't matter
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
    'bgn' => [
        's1' => "lew",
        "s2" => "lewy",
        "s3" => "lewów",
        'minor' => [
            's1' => "stotinka",
            's2' => "stotinki",
            's3' => "stotinek",
            'f' => true,
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
    'cad' => [
        's1' => "dolar kanadyjski",
        "s2" => "dolary kanadyjskie",
        "s3" => "dolarów kanadyjskich",
        'f' => false,
        'minor' => [
            's1' => "cent",
            's2' => "centy",
            's3' => "centów",
            'f' => false,
        ]
    ],
    'chf' => [
        's1' => "frank szwajcarski",
        "s2" => "franki szwajcarske",
        "s3" => "franków szwajcarskich",
        'f' => false,
        'minor' => [
            's1' => "centym",
            's2' => "centymy",
            's3' => "centymów",
            'f' => false,
        ]
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
    'eur' => [
        's1' => "euro",
        "s2" => "euro",
        "s3" => "euro",
        'f' => false,
        'minor' => [
            's1' => "cent",
            's2' => "centy",
            's3' => "centów",
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
    'jpy' => [
        's1' => "jen",
        "s2" => "jeny",
        "s3" => "jenów",
        'minor' => [
            's1' => "sen",
            's2' => "seny",
            's3' => "senów",
            'f' => false,
            'u' => false
        ]
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
        'minor' => [
            's1' => "cent",
            's2' => "centy",
            's3' => "centów",
            'f' => false,
        ]
    ],
];

?>