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
  * Regular extension - fils.
  */
const Fils = [
    's1' => "fils",
    's2' => "filsy",
    's3' => "filsów",
    'f' => false,
    'd' => 3,
];

 /**
  * Regular extension - piastres.
  */
const Piastres = [
    's1' => "piastr",
    's2' => "piastry",
    's3' => "piastrów",
    'f' => false,
    'd' => 2,
];

 /**
  * Regular extension - sen.
  */
const Sen = [
    's1' => "sen",
    's2' => "seny",
    's3' => "senów",
    'f' => false,
];

 /**
  * Regular extension - pais.
  */
const Pais = [
    's1' => "pajsa",
    's2' => "pajsy",
    's3' => "pajs",
    'f' => true,
];

 /**
  * Regular extension - tiyin.
  */
const Tiyin = [
    's1' => "tyin",
    's2' => "tyiny",
    's3' => "tyinów",
    'f' => false,
];


/**
  * Supported currencies by ISO 4217.
  */
const Currencies = [
    'aed' => [
        's1' => "dirham Zjednoczonych Emiratów Arabskich",
        "s2" => "dirhamy Zjednoczonych Emiratów Arabskich",
        "s3" => "dirhamów Zjednoczonych Emiratów Arabskich",
        'f' => false,
        'minor' => Fils
    ],
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
        'minor' => Fils
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
        'minor' => Fils
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
        'minor' => Piastres
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
            'd' => 2,
        ]
    ],
    'kyd' => [
        's1' => "dolar kajmański",
        's2' => 'dolary kajmańskie',
        's3' => "dolarów kajmańskich",
        'f' => false,
        'minor' => Cents
    ],
    'kwd' => [
        's1' => "dinar kuwejcki",
        "s2" => "dinary kuwejckie",
        "s3" => "dinarów kuwejckich",
        'f' => false,
        'minor' => Fils
    ],
    'kzt' => [
        's1' => "tenge kazachski",
        's2' => 'tenge kazachskie',
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
        's2' => 'kipy laotańskie',
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
        's2' => 'pataca Macau',
        's3' => "pataca Macau",
        'f' => false,
        'minor' => [
            's1' => "avos",
            's2' => "avos",
            's3' => "avos",
            'f' => false,
        ]
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
        's2' => 'ringgity malezyjskie',
        's3' => "ringgitów malezyjskich",
        'f' => false,
        'minor' => Sen
    ],
    'nio' => [
        's1' => "cordoba oro",
        "s2" => "cordoby oro",
        "s3" => "cordób oro",
        'f' => false,
        'minor' => Centavo
    ],
    'npr' => [
        's1' => "rupia nepalska",
        's2' => 'rupie nepalskie',
        's3' => "rupii nepalskich",
        'f' => true,
        'minor' => Pais,
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
    'omr' => [
        's1' => "rial omański",
        's2' => 'riale omańskie',
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
    'php' => [
        's1' => "peso filipiński",
        's2' => 'peso filipińskie',
        's3' => "peso filipińskich",
        'f' => false,
        'minor' => Centavo
    ],
    'pkr' => [
        's1' => "rupia pakistańska",
        's2' => 'rupie pakistańskie',
        's3' => "rupii pakistańskich",
        'f' => false,
        'minor' => Pais
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
    'qar' => [
        's1' => "rial katarski",
        's2' => 'riale katarskie',
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
    'sar' => [
        's1' => "rial saudyjski",
        's2' => 'riale saudyjskie',
        's3' => "riali saudyjskich",
        'f' => false,
        'minor' => [
            's1' => "halal",
            's2' => "halale",
            's3' => "halali",
            'f' => false,
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
    'sgd' => [
        's1' => "dolar singapurski",
        "s2" => "dolary singapurskie",
        "s3" => "dolarów singapurskich",
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
    'syp' => [
        's1' => "funt syryjski",
        "s2" => "funty syryjskie",
        "s3" => "funtów syryjskich",
        'f' => false,
        'minor' => Piastres
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
    'xcd' => [
        's1' => "dolar wschodniokaraibski",
        "s2" => "dolary wschodniokaraibskie",
        "s3" => "dolarów wschodniokaraibskich",
        'f' => false,
        'minor' => Cents
    ],
    'yer' => [
        's1' => "rial jemeński",
        "s2" => "riale jemeńskie",
        "s3" => "riali jemeńskich",
        'f' => false,
        'minor' => Fils
    ],
];

/**
 * Cross-reference table between ISO 4217 Numbers and currency pickers.
 */
const Xref = [
    '008' => 'all',
    '032' => 'ars',
    '044' => 'bsd',
    '048' => 'bhd',
    '050' => 'bdt',
    '051' => 'amd',
    '052' => 'bbd',
    '060' => 'bmd',
    '064' => 'btn',
    '068' => 'bob',
    '084' => 'bzd',
    '096' => 'bnd',
    '104' => 'mmk',
    '116' => 'khr',
    '124' => 'cad',
    '136' => 'kyd',
    '144' => 'lkr',
    '152' => 'clp',
    '156' => 'cny',
    '170' => 'cop',
    '188' => 'crc',
    '191' => 'hrk',
    '192' => 'cup',
    '203' => 'czk',
    '208' => 'dkk',
    '214' => 'dop',
    '238' => 'fkp',
    '320' => 'gtq',
    '328' => 'gyd',
    '332' => 'htg',
    '340' => 'hnl',
    '344' => 'hkd',
    '348' => 'huf',
    '352' => 'isk',
    '356' => 'inr',
    '360' => 'idr',
    '364' => 'irr',
    '368' => 'iqd',
    '376' => 'ils',
    '388' => 'jmd',
    '392' => 'jpy',
    '398' => 'kzt',
    '400' => 'jod',
    '408' => 'kpw',
    '410' => 'krw',
    '414' => 'kwd',
    '417' => 'kgs',
    '418' => 'lak',
    '422' => 'lbp',
    '446' => 'mop',
    '458' => 'myr',
    '496' => 'mnt',
    '462' => 'mvr',
    '484' => 'mxn',
    '498' => 'mdl',
    '512' => 'omr',
    '524' => 'npr',
    '532' => 'ang',
    '533' => 'awg',
    '558' => 'nio',
    '578' => 'nok',
    '586' => 'pkr',
    '590' => 'pab',
    '600' => 'pyg',
    '604' => 'pen',
    '608' => 'php',
    '634' => 'qar',
    '643' => 'rub',
    '682' => 'sar',
    '702' => 'sgd',
    '704' => 'vnd',
    '752' => 'sek',
    '756' => 'chf',
    '760' => 'syp',
    '764' => 'thb',
    '780' => 'ttd',
    '784' => 'aed',
    '807' => 'mkd',
    '826' => 'gbp',
    '840' => 'usd',
    '858' => 'uyu',
    '860' => 'uzs',
    '886' => 'yer',
    '901' => 'twd',
    '928' => 'ves',
    '931' => 'cuc',
    '933' => 'byn',
    '934' => 'tmt',
    '941' => 'rsd',
    '944' => 'azm',
    '946' => 'ron',
    '949' => 'try',
    '951' => 'xcd',
    '968' => 'srd',
    '971' => 'afn',
    '972' => 'tjs',
    '975' => 'bgn',
    '977' => 'bam',
    '978' => 'eur',
    '980' => 'uah',
    '981' => 'gel',
    '985' => 'pln',
    '986' => 'brl',
];

?>