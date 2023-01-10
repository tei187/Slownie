<?php
namespace tei187\Resources\ISO4217;

/**
 * Currency-specific literals for Polish language.
 */
class PL {
    /** @var array[] Regular extension - cents. (PL) */
    const CENTS = [
        's1' => "cent",
        's2' => "centy",
        's3' => "centów",
        'f' => false,
    ];
   
     /** @var array[] Regular extension - centavo. (PL) */
    const CENTAVO = [
        's1' => "centavo",
        's2' => "centavo",
        's3' => "centavo",
        'f' => false,
    ];
   
     /** @var array[] Regular extension - centesimo. (PL) */
    const CENTESIMO = [
        's1' => "centesimo",
        's2' => "centesimo",
        's3' => "centesimo",
        'f' => false,
    ];
   
     /** @var array[] Regular extension - centims. (PL) */
    const CENTIMS = [
        's1' => "centym",
        's2' => "centymy",
        's3' => "centymów",
        'f' => false,
    ];
   
     /** @var array[] Regular extension - fils. (PL) */
    const FILS = [
        's1' => "fils",
        's2' => "filsy",
        's3' => "filsów",
        'f' => false,
    ];
   
     /** @var array[] Regular extension - piastres. (PL) */
    const PIASTRES = [
        's1' => "piastr",
        's2' => "piastry",
        's3' => "piastrów",
        'f' => false,
    ];
   
     /** @var array[] Regular extension - sen. (PL) */
    const SEN = [
        's1' => "sen",
        's2' => "seny",
        's3' => "senów",
        'f' => false,
    ];
   
     /** @var array[] Regular extension - pais. (PL) */
    const PAIS = [
        's1' => "pajsa",
        's2' => "pajsy",
        's3' => "pajs",
        'f' => true,
    ];
   
     /** @var array[] Regular extension - tyiyn. (PL) */
    const TYIYN = [
        's1' => "tyin",
        's2' => "tyiny",
        's3' => "tyinów",
        'f' => false,
    ];
   
     /** @var array[] Regular extension - pence. (PL) */
    const PENCE = [
        's1' => "pence",
        's2' => "pencey",
        's3' => "penceów",
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
    const CURRENCIES = [
        'aed' => [
            's1' => "dirham Zjednoczonych Emiratów Arabskich",
            's2' => "dirhamy Zjednoczonych Emiratów Arabskich",
            's3' => "dirhamów Zjednoczonych Emiratów Arabskich",
            'f' => false,
            'minor' => self::FILS
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
            'minor' => self::CENTS
        ],
        'aoa' => [
            's1' => "kwanza angolska",
            's2' => "kwanzy angolskie",
            's3' => "kwanz angolskich",
            'f' => true,
            'minor' => self::CENTIMS
        ],
        'ars' => [
            's1' => "peso argentyńskie",
            's2' => "peso argentyńskie",
            's3' => "peso argentyńskich",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'aud' => [
            's1' => "dolar australijski",
            's2' => "dolary australijskie",
            's3' => "dolarów australijskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'awg' => [
            's1' => "florin arubański",
            's2' => "floriny arubańskie",
            's3' => "florinów arubańskich",
            'f' => false,
            'minor' => self::CENTS
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
            'minor' => self::CENTS
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
            'minor' => self::FILS
        ],
        'bif' => [
            's1' => "frank burundyjski",
            's2' => "franki burundyjskie",
            's3' => "franków burundyjskich",
            'f' => false,
            'minor' => self::CENTIMS
        ],
        'bmd' => [
            's1' => "dolar bermudzki",
            's2' => "dolary bermudzkie",
            's3' => "dolarów bermudzkich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'bnd' => [
            's1' => "dolar brunejski",
            's2' => "dolary brunejskie",
            's3' => "dolarów brunejskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'bob' => [
            's1' => "boliviano",
            's2' => "boliviano",
            's3' => "boliviano",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'brl' => [
            's1' => "real brazylijski",
            's2' => "reale brazylijskie",
            's3' => "reali brazylijskich",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'bsd' => [
            's1' => "dolar bahamski",
            's2' => "dolary bahamskie",
            's3' => "dolarów bahamskich",
            'f' => false,
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
        'cad' => [
            's1' => "dolar kanadyjski",
            's2' => "dolary kanadyjskie",
            's3' => "dolarów kanadyjskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'cdf' => [
            's1' => "frank kongijski",
            's2' => "franki kongijskie",
            's3' => "franków kongijskich",
            'f' => false,
            'minor' => self::CENTIMS
        ],
        'chf' => [
            's1' => "frank szwajcarski",
            's2' => "franki szwajcarske",
            's3' => "franków szwajcarskich",
            'f' => false,
            'minor' => self::CENTIMS
        ],
        'clp' => [
            's1' => "peso chillijski",
            's2' => "peso chillijskie",
            's3' => "peso chillijskich",
            'f' => false,
            'minor' => self::CENTAVO
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
                'f' => false,
                'minor' => [
                    's1' => "fen",
                    's2' => "feny",
                    's3' => "fenów",
                    'f' => false,
                ]
            ]
        ],
        'cop' => [
            's1' => "peso kolumbijskie",
            's2' => "peso kolumbijskie",
            's3' => "peso kolumbijskich",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'crc' => [
            's1' => "colon kostarykański",
            's2' => "colon kostarykańskie",
            's3' => "colon kostarykańskich",
            'f' => false,
            'minor' => self::CENTIMS
        ],
        'cuc' => [
            's1' => "peso kubańskie wymienialne",
            's2' => "peso kubańskie wymienialne",
            's3' => "peso kubańskich wymienialnych",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'cup' => [
            's1' => "peso kubańskie",
            's2' => "peso kubańskie",
            's3' => "peso kubańskich",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'cve' => [
            's1' => "escudo Zielonego Przylądka",
            's2' => "escudo Zielonego Przylądka",
            's3' => "escudo Zielonego Przylądka",
            'f' => false,
            'minor' => self::CENTAVO
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
            'minor' => self::CENTIMS
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
            'minor' => self::CENTIMS
        ],
        'dop' => [
            's1' => "peso dominikańskie",
            's2' => "peso dominikańskie",
            's3' => "peso dominikańskich",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'egp' => [
            's1' => "funt egipski",
            's2' => "funty egipskie",
            's3' => "funtów egipskich",
            'f' => false,
            'minor' => self::PIASTRES
        ],
        'eur' => [
            's1' => "euro",
            's2' => "euro",
            's3' => "euro",
            'f' => false,
            'minor' => self::CENTS
        ],
        'ern' => [
            's1' => "nakfa erytrejska",
            's2' => "nakfy erytrejskie",
            's3' => "nakf erytrejskich",
            'f' => true,
            'minor' => self::CENTS
        ],
        'etb' => [
            's1' => "birr etiopski",
            's2' => "birry etiopskie",
            's3' => "birrów etiopskich",
            'f' => false,
            'minor' => self::CENTIMS
        ],
        'fjd' => [
            's1' => "dolar fidżi",
            's2' => "dolary fidżi",
            's3' => "dolarów fidżi",
            'f' => false,
            'minor' => self::CENTS
        ],
        'fkp' => [
            's1' => "funt falklandzki",
            's2' => "funty falklandzkie",
            's3' => "funtów falklandzkich",
            'f' => false,
            'minor' => self::PENCE
        ],
        'gbp' => [
            's1' => "funt brytyjski",
            's2' => "funty brytyjskie",
            's3' => "funtów brytyjskich",
            'f' => false,
            'minor' => self::PENCE
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
            'minor' => self::PENCE
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
            'minor' => self::CENTIMS
        ],
        'gtq' => [
            's1' => "quetzal",
            's2' => "quetzal",
            's3' => "quetzal",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'gyd' => [
            's1' => "dolar gujański",
            's2' => "dolary gujańskie",
            's3' => "dolarów gujańskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'hnl' => [
            's1' => "lempira honduraska",
            's2' => "lempiry honduraskie",
            's3' => "lempir honduraskich",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'hkd' => [
            's1' => "dolar hongkoński",
            's2' => "dolary hongkońskie",
            's3' => "dolarów hongkońskich",
            'f' => false,
            'minor' => self::CENTS
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
            'minor' => self::CENTIMS
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
            'minor' => self::SEN
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
            'minor' => self::PAIS
        ],
        'iqd' => [
            's1' => "dinar irakijski",
            's2' => "dinary irakijskie",
            's3' => "dinarów irakijskich",
            'f' => false,
            'minor' => self::FILS
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
            ]
        ],
        'jmd' => [
            's1' => "dolar jamajski",
            's2' => "dolary jamajskie",
            's3' => "dolarów jamajskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'jod' => [
            's1' => "dinar jordański",
            's2' => "dinary jordańskie",
            's3' => "dinarów jordańskich",
            'f' => false,
            'minor' => self::PIASTRES
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
            ]
        ],
        'kes' => [
            's1' => "szyling kenijski",
            's2' => "szylingi kenijskie",
            's3' => "szylingów kenijskch",
            'f' => false,
            'minor' => self::CENTS
        ],
        'kgs' => [
            's1' => "som kirgiski",
            's2' => "somy kirgiskie",
            's3' => "somów kirgiskich",
            'f' => false,
            'minor' => self::TYIYN
        ],
        'khr' => [
            's1' => "riel kambodżański",
            's2' => "riel kambodżańskie",
            's3' => "riel kambodżańskich",
            'f' => false,
            'minor' => self::SEN
        ],
        'kmf' => [
            's1' => "frank komoryjski",
            's2' => "franki komoryjskie",
            's3' => "franków komoryjskich",
            'f' => false,
            'minor' => self::CENTIMS
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
            ]
        ],
        'kwd' => [
            's1' => "dinar kuwejcki",
            's2' => "dinary kuwejckie",
            's3' => "dinarów kuwejckich",
            'f' => false,
            'minor' => self::FILS
        ],
        'kyd' => [
            's1' => "dolar kajmański",
            's2' => "dolary kajmańskie",
            's3' => "dolarów kajmańskich",
            'f' => false,
            'minor' => self::CENTS
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
            'minor' => self::PIASTRES
        ],
        'lkr' => [
            's1' => "rupia lankijska",
            's2' => "rupie lankijskie",
            's3' => "rupii lankijskich",
            'f' => true,
            'minor' => self::CENTS
        ],
        'lrd' => [
            's1' => "dolar liberyjski",
            's2' => "dolary liberyjskie",
            's3' => "dolarw liberyjskich",
            'f' => false,
            'minor' => self::CENTS
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
            ]
        ],
        'mad' => [
            's1' => "dirham marokański",
            's2' => "dirhamy marokańskie",
            's3' => "dirhamów marokańskich",
            'f' => false,
            'minor' => self::CENTIMS
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
            'minor' => self::CENTS
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
            'minor' => self::CENTAVO
        ],
        'myr' => [
            's1' => "ringgit malezyjski",
            's2' => "ringgity malezyjskie",
            's3' => "ringgitów malezyjskich",
            'f' => false,
            'minor' => self::SEN
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
            'minor' => self::CENTAVO
        ],
        'nad' => [
            's1' => "dolar namibijski",
            's2' => "dolary namibijskie",
            's3' => "dolarów namibijskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'nio' => [
            's1' => "cordoba oro",
            's2' => "cordoby oro",
            's3' => "cordób oro",
            'f' => false,
            'minor' => self::CENTAVO
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
            'minor' => self::PAIS,
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
            'minor' => self::CENTS
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
            'minor' => self::CENTESIMO
        ],
        'pen' => [
            's1' => "sol peruwiański",
            's2' => "sole peruwiańskie",
            's3' => "soli peruwiańskich",
            'f' => false,
            'minor' => self::CENTIMS
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
            'minor' => self::CENTAVO
        ],
        'pkr' => [
            's1' => "rupia pakistańska",
            's2' => "rupie pakistańskie",
            's3' => "rupii pakistańskich",
            'f' => false,
            'minor' => self::PAIS
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
            'minor' => self::CENTIMS
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
            'minor' => self::CENTIMS
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
            'minor' => self::CENTS
        ],
        'scr' => [
            's1' => "rupia seszelska",
            's2' => "rupie seszelskie",
            's3' => "rupii seszelskich",
            'f' => true,
            'minor' => self::CENTS
        ],
        'sdg' => [
            's1' => "funt sudański",
            's2' => "funty sudańskie",
            's3' => "funtów sudańskich",
            'f' => false,
            'minor' => self::PIASTRES
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
            'minor' => self::CENTS
        ],
        'shp' => [
            's1' => "funt Świętej Heleny",
            's2' => "funty Świętej Heleny",
            's3' => "funtów Świętej Heleny",
            'f' => false,
            'minor' => self::PENCE
        ],
        'sll' => [
            's1' => "leone sierraleoński",
            's2' => "leone sierraleońskie",
            's3' => "leone sierraleońskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'sos' => [
            's1' => "szyling somalijski",
            's2' => "szylingi somalijskie",
            's3' => "szylingów somalijskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'srd' => [
            's1' => "dolar surinamski",
            's2' => "dolary surinamskie",
            's3' => "dolarów surinamskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'ssp' => [
            's1' => "funt południowosudański",
            's2' => "funty południowosudańskie",
            's3' => "funtów południowosudańskich",
            'f' => false,
            'minor' => self::PIASTRES
        ],
        'stn' => [
            's1' => "dobra Tomasza/Książęca",
            's2' => "dobry Tomasza/Książęce",
            's3' => "dóbr Tomasza/Książęcych",
            'f' => false,
            'minor' => self::CENTIMS
        ],
        'svc' => [
            's1' => "colón salwadorski",
            's2' => "colón salwadorskie",
            's3' => "colón salwadorskich",
            'f' => false,
            'minor' => self::CENTAVO
        ],
        'syp' => [
            's1' => "funt syryjski",
            's2' => "funty syryjskie",
            's3' => "funtów syryjskich",
            'f' => false,
            'minor' => self::PIASTRES
        ],
        'szl' => [
            's1' => "lilangeni suazyjski",
            's2' => "lilangeni suazyjskie",
            's3' => "lilangeni suazyjskich",
            'f' => false,
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
        'twd' => [
            's1' => "dolar tajwański",
            's2' => "dolary tajwańskie",
            's3' => "dolarów tajwańskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'tzs' => [
            's1' => "szyling tanzański",
            's2' => "szylingi tanzańskie",
            's3' => "szylingów tanzańskich",
            'f' => false,
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
        'usd' => [
            's1' => "dolar amerykański",
            's2' => "dolary amerykańskie",
            's3' => "dolarów amerykańskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'uyu' => [
            's1' => "peso urugwajski",
            's2' => "peso urugwajskie",
            's3' => "peso urugwajskich",
            'f' => false,
            'minor' => self::CENTESIMO
        ],
        'uzs' => [
            's1' => "sum uzbecki",
            's2' => "sumy uzbecki",
            's3' => "sumów uzbecki",
            'f' => false,
            'minor' => self::TYIYN
        ],
        'ves' => [
            's1' => "boliwar wenezuelski soberano",
            's2' => "boliwary wenezuelskie soberano",
            's3' => "boliwarów wenezuelskich soberano",
            'f' => false,
            'minor' => self::CENTIMS
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
            'minor' => self::CENTS
        ],
        'xcd' => [
            's1' => "dolar wschodniokaraibski",
            's2' => "dolary wschodniokaraibskie",
            's3' => "dolarów wschodniokaraibskich",
            'f' => false,
            'minor' => self::CENTS
        ],
        'xof' => [
            's1' => "zachodnioafrykański frank CFA",
            's2' => "zachodnioafrykańskie franki CFA",
            's3' => "zachodnioafrykańskich franków CFA",
            'f' => false,
            'minor' => self::CENTIMS
        ],
        'xpf' => [
            's1' => "frank CFP",
            's2' => "franki CFP",
            's3' => "franków CFP",
            'f' => false,
            'minor' => self::CENTIMS
        ],
        'yer' => [
            's1' => "rial jemeński",
            's2' => "riale jemeńskie",
            's3' => "riali jemeńskich",
            'f' => false,
            'minor' => self::FILS
        ],
        'zar' => [
            's1' => "rand południowoafrykański",
            's2' => "randy południowoafrykańskie",
            's3' => "randów południowoafrykańskich",
            'f' => false,
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
    ];
}
