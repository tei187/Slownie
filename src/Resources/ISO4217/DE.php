<?
namespace tei187\Resources\ISO4217;

class DE {
    /** @var array[] Regular extension - cents. (DE) */
    const Cents = [
        's' => "Cent",
        'p' => "Cent",
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
    
    /** @var array[] Regular extension - centavos. (DE) */
    const Centavos = [
        's' => "Centavo",
        'p' => "Centavos",
    ];
    
    /** @var array[] Regular extension - fils. (DE) */
    const Fils = [
        's' => "Fils",
        'p' => "Fils",
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
            'minor' => self::Cents
        ],
        'aoa' => [
            's' => "angolanischer Kwanza",
            'p' => "angolanische Kwanza",
            'minor' => self::Centimos
        ],
        'ars' => [
            's' => "argentinischer Peso",
            'P' => "argentinische Pesos",
            'minor' => self::Centavos
        ],
        'aud' => [
            's' => "australischer Dollar",
            'p' => "australische Dollar",
            'minor' => self::Cents
        ],
        'awg' => [
            's' => "Aruba-Florin",
            'p' => "Aruba-Florin",
            'minor' => self::Cents
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
            'minor' => self::Cents
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
            'minor' => self::Fils
        ],
        'bif' => [
            's' => "burundischer Franc",
            'p' => "burundische Francs",
            'minor' => self::Centimes
        ],
        'bmd' => [
            's' => "Bermuda-Dollar",
            'p' => "Bermuda-Dollar",
            'minor' => self::Cents
        ],
        'bnd' => [
            's' => "Brunei-Dollar",
            'p' => "Brunei-Dollar",
            'minor' => self::Cents
        ],
        'bob' => [
            's' => "bolivianischer Boliviano",
            'p' => "bolivianische Boliviano",
            'minor' => self::Centavos
        ],
        'brl' => [
            's' => "brasilianischer Real",
            'p' => "brasilianische Reales",
            'minor' => self::Centavos
        ],
        'bsd' => [
            's' => "Bahama-Dollar",
            'p' => "Bahama-Dollar",
            'minor' => self::Cents
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
            'minor' => self::Cents
        ],
        'cad' => [
            's' => "kanadischer Dollar",
            'p' => "kanadische Dollar",
            'minor' => self::Cents
        ],
        'cdf' => [
            's' => "Kongo-Franc",
            'p' => "Kongo-Francs",
            'minor' => self::Centimes
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
            'minor' => self::Centavos
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
            'minor' => self::Centavos
        ],
        'crc' => [
            's' => "Costa-Rica-Colón",
            'p' => "Costa-Rica-Colón",
            'minor' => self::Centimos
        ],
        'cuc' => [
            's' => "kubanischer konvertierbarer Peso",
            'p' => "kubanische konvertierbare Pesos",
            'minor' => self::Centavos
        ],
        'cup' => [
            's' => "kubanischer Peso",
            'p' => "kubanische Pesos",
            'minor' => self::Centavos
        ],
        'cve' => [
            's' => "Kap-Verde-Escudo",
            'p' => "Kap-Verde-Escudo",
            'minor' => self::Centavos
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
            'minor' => self::Centimes
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
            'minor' => self::Centavos
        ],
        'dzd' => [
            's' => "algerischer Dinar",
            'p' => "algerische Dinare",
            'minor' => self::Centimes
        ],
        'egp' => [
            's' => "ägyptisches Pfund",
            'p' => "ägyptische Pfunde",
            'minor' => self::Piastres
        ],
        'eur' => [
            's' => "Euro",
            'p' => "Euro",
            'minor' => self::Cents
        ],
        'ern' => [
            's' => "eritreischer Nakfa",
            'p' => "eritreische Nakfa",
            'minor' => self::Cents
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
            'minor' => self::Cents
        ],
        'fkp' => [
            's' => "Falkland-Pfund",
            'p' => "Falkland-Pfunde",
            'minor' => self::Pence
        ],
        'gbp' => [
            's' => "Pfund Sterling",
            'p' => "Pfunde Sterling",
            'minor' => self::Pence
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
            'minor' => self::Pence
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
            'minor' => self::Centimes
        ],
        'gtq' => [
            's' => "guatemaltekischer Quetzal",
            'p' => "guatemaltekische Quetzal",
            'minor' => self::Centavos
        ],
        'gyd' => [
            's' => "Guyana-Dollar",
            'p' => "Guyana-Dollar",
            'minor' => self::Cents
        ],
        'hnl' => [
            's' => "honduranische Lempira",
            'p' => "honduranische Lempira",
            'f' => true,
            'minor' => self::Centavos
        ],
        'hkd' => [
            's' => "Hongkong-Dollar",
            'p' => "Hongkong-Dollar",
            'minor' => self::Cents
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
            'minor' => self::Centimes
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
            'minor' => self::Sen
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
            'minor' => self::Paisa
        ],
        'iqd' => [
            's' => "irakischer Dinar",
            'p' => "irakische Dinare",
            'minor' => self::Fils
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
            'minor' => self::Cents
        ],
        'jod' => [
            's' => "jordanischer Dinar",
            'p' => "jordanische Dinare",
            'minor' => self::Piastres
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
            'minor' => self::Cents
        ],
        'kgs' => [
            's' => "kirgistanischer Som",
            'p' => "kirgistanische Som",
            'minor' => self::Tyiyn
        ],
        'khr' => [
            's' => "kambodschanischer Riel",
            'p' => "kambodschanische Riel",
            'minor' => self::Sen
        ],
        'kmf' => [
            's' => "Komoren-Franc",
            'p' => "Komoren-Francs",
            'minor' => self::Centimes
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
            'minor' => self::Fils
        ],
        'kyd' => [
            's' => "Kaiman-Dollar",
            'p' => "Kaiman-Dollar",
            'minor' => self::Cents
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
            'minor' => self::Piastres
        ],
        'lkr' => [
            's' => "Sri-Lanka-Rupie",
            'p' => "Sri-Lanka-Rupien",
            'f' => true,
            'minor' => self::Cents
        ],
        'lrd' => [
            's' => "liberianischer Dollar",
            'p' => "liberianische Dollar",
            'minor' => self::Cents
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
            'minor' => self::Centimes
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
            'minor' => self::Cents
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
            'minor' => self::Centavos
        ],
        'myr' => [
            's' => "malaysischer Ringgit",
            'p' => "malaysische Ringgit",
            'minor' => self::Sen
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
            'minor' => self::Centavos
        ],
        'nad' => [
            's' => "Namibia-Dollar",
            'p' => "Namibia-Dollar",
            'minor' => self::Cents
        ],
        'nio' => [
            's' => "nicaraguanischer Córdoba",
            'p' => "nicaraguanischer Córdoba",
            'minor' => self::Centavos
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
            'minor' => self::Paisa,
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
            'minor' => self::Cents
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
            'minor' => self::Centesimos
        ],
        'pen' => [
            's' => "peruanischer Sol",
            'p' => "peruanische Sol",
            'minor' => self::Centimos
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
            'minor' => self::Centavos
        ],
        'pkr' => [
            's' => "pakistanische Rupie",
            'p' => "pakistanische Rupien",
            'f' => true,
            'minor' => self::Paisa
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
            'minor' => self::Centimes
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
            'minor' => self::Centimes
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
            'minor' => self::Cents
        ],
        'scr' => [
            's' => "Seychellen-Rupie",
            'p' => "Seychellen-Rupien",
            'f' => true,
            'minor' => self::Cents
        ],
        'sdg' => [
            's' => "sudanesisches Pfund",
            'p' => "sudanesische Pfunde",
            'minor' => self::Piastres
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
            'minor' => self::Cents
        ],
        'shp' => [
            's' => "St.-Helena-Pfund",
            'p' => "St.-Helena-Pfunde",
            'minor' => self::Pence
        ],
        'sll' => [
            's' => "sierra-leonischer Leone",
            'p' => "sierra-leonische Leones",
            'minor' => self::Cents
        ],
        'sos' => [
            's' => "Somalia-Schilling",
            'p' => "Somalia-Schilling",
            'minor' => self::Cents
        ],
        'srd' => [
            's' => "Suriname-Dollar",
            'p' => "Suriname-Dollar",
            'minor' => self::Cents
        ],
        'ssp' => [
            's' => "südsudanesisches Pfund",
            'p' => "südsudanesische Pfunde",
            'minor' => self::Piastres
        ],
        'stn' => [
            's' => "são-toméischer Dobra",
            'p' => "são-toméische Dobra",
            'minor' => self::Centimos
        ],
        'svc' => [
            's' => "El-Salvador-Colón",
            'p' => "El-Salvador-Colones",
            'minor' => self::Centavos
        ],
        'syp' => [
            's' => "syrische Lira",
            'p' => "syrische Lira",
            'f' => true,
            'minor' => self::Piastres
        ],
        'szl' => [
            's' => "Swasi-Lilangeni",
            'p' => "Swasi-Emalangeni",
            'minor' => self::Cents
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
            'minor' => self::Cents
        ],
        'twd' => [
            's' => "neuer Taiwan-Dollar",
            'p' => "neue Taiwan-Dollar",
            'minor' => self::Cents
        ],
        'tzs' => [
            's' => "Tansania-Schilling",
            'p' => "Tansania-Schilling",
            'minor' => self::Cents
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
            'minor' => self::Cents
        ],
        'usd' => [
            's' => "US-Dollar",
            'p' => "US-Dollar",
            'minor' => self::Cents
        ],
        'uyu' => [
            's' => "uruguayischer Peso",
            'p' => "uruguayische Pesos",
            'minor' => self::Centesimos
        ],
        'uzs' => [
            's' => "usbekischer Soʻm",
            'p' => "usbekische Soʻm",
            'minor' => self::Tyiyn
        ],
        'ves' => [
            's' => "venezolanischer Bolívar Soberano",
            'p' => "venezolanische Bolívar Soberano",
            'minor' => self::Centimos
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
            'minor' => self::Centimes
        ],
        'xcd' => [
            's' => "ostkaribischer Dollar",
            'p' => "ostkaribische Dollar",
            'minor' => self::Cents
        ],
        'xof' => [
            's' => "westafrikanischer CFA-Franc",
            'p' => "westafrikanische CFA-Francs",
            'minor' => self::Centimes
        ],
        'xpf' => [
            's' => "CFP-Franc",
            'p' => "CFP-Francs",
            'minor' => self::Centimes
        ],
        'yer' => [
            's' => "Jemen-Rial",
            'p' => "Jemen-Rial",
            'minor' => self::Fils
        ],
        'zar' => [
            's' => "südafrikanischer Rand",
            'p' => "südafrikanische Rand",
            'minor' => self::Cents
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
            'minor' => self::Cents
        ],
    ];
}