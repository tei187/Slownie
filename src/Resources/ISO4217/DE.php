<?php
namespace tei187\Resources\ISO4217;

/**
 * Currency-specific literals for German language.
 */
class DE {
    /** @var array[] Regular extension - cents. (DE) */
    const CENTS = [
        's' => "Cent",
        'p' => "Cent",
    ];
   
    /** @var array[] Regular extension - centimos. (DE) */
    const CENTIMOS = [
        's' => "Cêntimo",
        'p' => "Cêntimos",
    ];
   
    /** @var array[] Regular extension - centesimos. (DE) */
    const CENTESIMOS = [
        's' => "Centésimo",
        'p' => "Centésimos",
    ];
   
    /** @var array[] Regular extension - centimes. (DE) */
    const CENTIMES = [
        's' => "Centime",
        'p' => "Centimes",
    ];
   
    /** @var array[] Regular extension - centavos. (DE) */
    const CENTAVOS = [
        's' => "Centavo",
        'p' => "Centavos",
    ];
   
    /** @var array[] Regular extension - fils. (DE) */
    const FILS = [
        's' => "Fils",
        'p' => "Fils",
    ];
   
    /** @var array[] Regular extension - pence. (DE) */
    const PENCE = [
        's' => "Penny",
        'p' => "Pence",
    ];
   
    /** @var array[] Regular extension - piastres. (DE) */
    const PIASTRES = [
        's' => "Piaster",
        'p' => "Piaster",
    ];
   
    /** @var array[] Regular extension - paisa. (DE) */
    const PAISA = [
        's' => "Paisa",
        'p' => "Paisa",
    ];
   
    /** @var array[] Regular extension - sen. (DE) */
    const SEN = [
        's' => "Sen",
        'p' => "Sen",
    ];
   
    /** @var array[] Regular extension - tyiyn. (DE) */
    const TYIYN = [
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
    const CURRENCIES = [
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
            'p' => "niederländische Antillen-Gulden",
            'minor' => self::CENTS
        ],
        'aoa' => [
            's' => "angolanischer Kwanza",
            'p' => "angolanische Kwanza",
            'minor' => self::CENTIMOS
        ],
        'ars' => [
            's' => "argentinischer Peso",
            'p' => "argentinische Pesos",
            'minor' => self::CENTAVOS
        ],
        'aud' => [
            's' => "australischer Dollar",
            'p' => "australische Dollar",
            'minor' => self::CENTS
        ],
        'awg' => [
            's' => "Aruba-Florin",
            'p' => "Aruba-Florin",
            'minor' => self::CENTS
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
            'minor' => self::CENTS
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
            'minor' => self::FILS
        ],
        'bif' => [
            's' => "burundischer Franc",
            'p' => "burundische Francs",
            'minor' => self::CENTIMES
        ],
        'bmd' => [
            's' => "Bermuda-Dollar",
            'p' => "Bermuda-Dollar",
            'minor' => self::CENTS
        ],
        'bnd' => [
            's' => "Brunei-Dollar",
            'p' => "Brunei-Dollar",
            'minor' => self::CENTS
        ],
        'bob' => [
            's' => "bolivianischer Boliviano",
            'p' => "bolivianische Boliviano",
            'minor' => self::CENTAVOS
        ],
        'brl' => [
            's' => "brasilianischer Real",
            'p' => "brasilianische Reales",
            'minor' => self::CENTAVOS
        ],
        'bsd' => [
            's' => "Bahama-Dollar",
            'p' => "Bahama-Dollar",
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
        'cad' => [
            's' => "kanadischer Dollar",
            'p' => "kanadische Dollar",
            'minor' => self::CENTS
        ],
        'cdf' => [
            's' => "Kongo-Franc",
            'p' => "Kongo-Francs",
            'minor' => self::CENTIMES
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
            'minor' => self::CENTAVOS
        ],
        'cny' => [
            's' => "Renminbi Yuan",
            'p' => "Renminbi Yuan",
            'minor' => [
                's' => "Jiǎo",
                'p' => "Jiǎo",
                'd' => 2,
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
            'minor' => self::CENTAVOS
        ],
        'crc' => [
            's' => "Costa-Rica-Colón",
            'p' => "Costa-Rica-Colón",
            'minor' => self::CENTIMOS
        ],
        'cuc' => [
            's' => "kubanischer konvertierbarer Peso",
            'p' => "kubanische konvertierbare Pesos",
            'minor' => self::CENTAVOS
        ],
        'cup' => [
            's' => "kubanischer Peso",
            'p' => "kubanische Pesos",
            'minor' => self::CENTAVOS
        ],
        'cve' => [
            's' => "Kap-Verde-Escudo",
            'p' => "Kap-Verde-Escudo",
            'minor' => self::CENTAVOS
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
            'minor' => self::CENTIMES
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
            'minor' => self::CENTAVOS
        ],
        'dzd' => [
            's' => "algerischer Dinar",
            'p' => "algerische Dinare",
            'minor' => self::CENTIMES
        ],
        'egp' => [
            's' => "ägyptisches Pfund",
            'p' => "ägyptische Pfunde",
            'minor' => self::PIASTRES
        ],
        'eur' => [
            's' => "Euro",
            'p' => "Euro",
            'minor' => self::CENTS
        ],
        'ern' => [
            's' => "eritreischer Nakfa",
            'p' => "eritreische Nakfa",
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
        'fkp' => [
            's' => "Falkland-Pfund",
            'p' => "Falkland-Pfunde",
            'minor' => self::PENCE
        ],
        'gbp' => [
            's' => "Pfund Sterling",
            'p' => "Pfunde Sterling",
            'minor' => self::PENCE
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
            'minor' => self::PENCE
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
            'minor' => self::CENTIMES
        ],
        'gtq' => [
            's' => "guatemaltekischer Quetzal",
            'p' => "guatemaltekische Quetzal",
            'minor' => self::CENTAVOS
        ],
        'gyd' => [
            's' => "Guyana-Dollar",
            'p' => "Guyana-Dollar",
            'minor' => self::CENTS
        ],
        'hnl' => [
            's' => "honduranische Lempira",
            'p' => "honduranische Lempira",
            'f' => true,
            'minor' => self::CENTAVOS
        ],
        'hkd' => [
            's' => "Hongkong-Dollar",
            'p' => "Hongkong-Dollar",
            'minor' => self::CENTS
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
            'minor' => self::CENTIMES
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
            'minor' => self::SEN
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
            'minor' => self::PAISA
        ],
        'iqd' => [
            's' => "irakischer Dinar",
            'p' => "irakische Dinare",
            'minor' => self::FILS
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
            'minor' => self::CENTS
        ],
        'jod' => [
            's' => "jordanischer Dinar",
            'p' => "jordanische Dinare",
            'minor' => self::PIASTRES
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
            'minor' => self::CENTS
        ],
        'kgs' => [
            's' => "kirgistanischer Som",
            'p' => "kirgistanische Som",
            'minor' => self::TYIYN
        ],
        'khr' => [
            's' => "kambodschanischer Riel",
            'p' => "kambodschanische Riel",
            'minor' => self::SEN
        ],
        'kmf' => [
            's' => "Komoren-Franc",
            'p' => "Komoren-Francs",
            'minor' => self::CENTIMES
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
            'minor' => self::FILS
        ],
        'kyd' => [
            's' => "Kaiman-Dollar",
            'p' => "Kaiman-Dollar",
            'minor' => self::CENTS
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
            'minor' => self::PIASTRES
        ],
        'lkr' => [
            's' => "Sri-Lanka-Rupie",
            'p' => "Sri-Lanka-Rupien",
            'f' => true,
            'minor' => self::CENTS
        ],
        'lrd' => [
            's' => "liberianischer Dollar",
            'p' => "liberianische Dollar",
            'minor' => self::CENTS
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
            ]
        ],
        'mad' => [
            's' => "marokkanischer Dirham",
            'p' => "marokkanische Dirham",
            'minor' => self::CENTIMES
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
            'minor' => self::CENTS
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
            'minor' => self::CENTAVOS
        ],
        'myr' => [
            's' => "malaysischer Ringgit",
            'p' => "malaysische Ringgit",
            'minor' => self::SEN
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
            'minor' => self::CENTAVOS
        ],
        'nad' => [
            's' => "Namibia-Dollar",
            'p' => "Namibia-Dollar",
            'minor' => self::CENTS
        ],
        'nio' => [
            's' => "nicaraguanischer Córdoba",
            'p' => "nicaraguanischer Córdoba",
            'minor' => self::CENTAVOS
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
            'minor' => self::PAISA,
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
            'minor' => self::CENTS
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
            'minor' => self::CENTESIMOS
        ],
        'pen' => [
            's' => "peruanischer Sol",
            'p' => "peruanische Sol",
            'minor' => self::CENTIMOS
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
            'minor' => self::CENTAVOS
        ],
        'pkr' => [
            's' => "pakistanische Rupie",
            'p' => "pakistanische Rupien",
            'f' => true,
            'minor' => self::PAISA
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
            'minor' => self::CENTIMES
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
            'minor' => self::CENTIMES
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
            'minor' => self::CENTS
        ],
        'scr' => [
            's' => "Seychellen-Rupie",
            'p' => "Seychellen-Rupien",
            'f' => true,
            'minor' => self::CENTS
        ],
        'sdg' => [
            's' => "sudanesisches Pfund",
            'p' => "sudanesische Pfunde",
            'minor' => self::PIASTRES
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
            'minor' => self::CENTS
        ],
        'shp' => [
            's' => "St.-Helena-Pfund",
            'p' => "St.-Helena-Pfunde",
            'minor' => self::PENCE
        ],
        'sll' => [
            's' => "sierra-leonischer Leone",
            'p' => "sierra-leonische Leones",
            'minor' => self::CENTS
        ],
        'sos' => [
            's' => "Somalia-Schilling",
            'p' => "Somalia-Schilling",
            'minor' => self::CENTS
        ],
        'srd' => [
            's' => "Suriname-Dollar",
            'p' => "Suriname-Dollar",
            'minor' => self::CENTS
        ],
        'ssp' => [
            's' => "südsudanesisches Pfund",
            'p' => "südsudanesische Pfunde",
            'minor' => self::PIASTRES
        ],
        'stn' => [
            's' => "são-toméischer Dobra",
            'p' => "são-toméische Dobra",
            'minor' => self::CENTIMOS
        ],
        'svc' => [
            's' => "El-Salvador-Colón",
            'p' => "El-Salvador-Colones",
            'minor' => self::CENTAVOS
        ],
        'syp' => [
            's' => "syrische Lira",
            'p' => "syrische Lira",
            'f' => true,
            'minor' => self::PIASTRES
        ],
        'szl' => [
            's' => "Swasi-Lilangeni",
            'p' => "Swasi-Emalangeni",
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
        'twd' => [
            's' => "neuer Taiwan-Dollar",
            'p' => "neue Taiwan-Dollar",
            'minor' => self::CENTS
        ],
        'tzs' => [
            's' => "Tansania-Schilling",
            'p' => "Tansania-Schilling",
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
        'usd' => [
            's' => "US-Dollar",
            'p' => "US-Dollar",
            'minor' => self::CENTS
        ],
        'uyu' => [
            's' => "uruguayischer Peso",
            'p' => "uruguayische Pesos",
            'minor' => self::CENTESIMOS
        ],
        'uzs' => [
            's' => "usbekischer Soʻm",
            'p' => "usbekische Soʻm",
            'minor' => self::TYIYN
        ],
        'ves' => [
            's' => "venezolanischer Bolívar Soberano",
            'p' => "venezolanische Bolívar Soberano",
            'minor' => self::CENTIMOS
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
            'minor' => self::CENTIMES
        ],
        'xcd' => [
            's' => "ostkaribischer Dollar",
            'p' => "ostkaribische Dollar",
            'minor' => self::CENTS
        ],
        'xof' => [
            's' => "westafrikanischer CFA-Franc",
            'p' => "westafrikanische CFA-Francs",
            'minor' => self::CENTIMES
        ],
        'xpf' => [
            's' => "CFP-Franc",
            'p' => "CFP-Francs",
            'minor' => self::CENTIMES
        ],
        'yer' => [
            's' => "Jemen-Rial",
            'p' => "Jemen-Rial",
            'minor' => self::FILS
        ],
        'zar' => [
            's' => "südafrikanischer Rand",
            'p' => "südafrikanische Rand",
            'minor' => self::CENTS
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
            'minor' => self::CENTS
        ],
    ];
}
