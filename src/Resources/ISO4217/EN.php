<?
namespace tei187\Resources\ISO4217;

class EN {

    /** @var array[] Regular extension - cents. (EN) */
    const Cents = [
       's' => "cent",
       'p' => "cents",
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
    
    /** @var array[] Regular extension - centavos. (EN) */
    const Centavos = [
       's' => "centavo",
       'p' => "centavos",
    ];
    
    /** @var array[] Regular extension - fils. (EN) */
    const Fils = [
       's' => "fils",
       'p' => "fils",
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
           'p' => "Netherlands Antillean guilders",
           'minor' => self::Cents
       ],
       'aoa' => [
           's' => "Angolan kwanza",
           'p' => "Angolan kwanzas",
           'minor' => self::Centimos
       ],
       'ars' => [
           's' => "Argentine peso",
           'p' => "Argentine pesos",
           'minor' => self::Centavos
       ],
       'aud' => [
           's' => "Australian dollar",
           'p' => "Australian dollars",
           'minor' => self::Cents
       ],
       'awg' => [
           's' => "Aruban florin",
           'p' => "Aruban florin",
           'minor' => self::Cents
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
           'minor' => self::Cents
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
           'minor' => self::Fils
       ],
       'bif' => [
           's' => "Burundian franc",
           'p' => "Burundian francs",
           'minor' => self::Centimes
       ],
       'bmd' => [
           's' => "Bermudian dollar",
           'p' => "Bermudian dollars",
           'minor' => self::Cents
       ],
       'bnd' => [
           's' => "Brunei dollar",
           'p' => "Brunei dollars",
           'minor' => self::Cents
       ],
       'bob' => [
           's' => "boliviano",
           'p' => "bolivianos",
           'minor' => self::Centavos
       ],
       'brl' => [
           's' => "Brazilian real",
           'p' => "Brazilian reais",
           'minor' => self::Centavos
       ],
       'bsd' => [
           's' => "Bahamian dollar",
           'p' => "Bahamian dollars",
           'minor' => self::Cents
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
           'minor' => self::Cents
       ],
       'cad' => [
           's' => "Canadian dollar",
           'p' => "Canadian dollars",
           'minor' => self::Cents
       ],
       'cdf' => [
           's' => "Congolese franc",
           'p' => "Congolese francs",
           'minor' => self::Centimes
       ],
       'chf' => [
           's' => "Swiss franc",
           'p' => "Swiss francs",
           'minor' => self::Centimes
       ],
       'clp' => [
           's' => "Chilean peso",
           'p' => "Chilean pesos",
           'minor' => self::Centavos
       ],
       'cny' => [
           's' => "Yuán",
           'p' => "Yuán",
           'f' => false,
           'minor' => [
               's' => "jiǎo",
               'p' => "jiǎo",
               'd' => 2,
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
           'minor' => self::Centavos
       ],
       'crc' => [
           's' => "Costa Rican colón",
           'p' => "Costa Rican colones",
           'minor' => self::Centimos
       ],
       'cuc' => [
           's' => "Cuban convertible peso",
           'p' => "Cuban convertible pesos",
           'minor' => self::Centavos
       ],
       'cup' => [
           's' => "Cuban peso",
           'p' => "Cuban pesos",
           'minor' => self::Centavos
       ],
       'cve' => [
           's' => "Cape Verdean escudo",
           'p' => "Cape Verdean escudos",
           'minor' => self::Centavos
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
           'minor' => self::Centimes
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
           'minor' => self::Centavos
       ],
       'dzd' => [
           's' => "Algerian dinar",
           'p' => "Algerian dinars",
           'minor' => self::Centimes
       ],
       'egp' => [
           's' => "Egyptian pound",
           'p' => "Egyptian pounds",
           'minor' => self::Piastres
       ],
       'eur' => [
           's' => "Euro",
           'p' => "Euros",
           'minor' => self::Cents
       ],
       'ern' => [
           's' => "Eritrean nakfa",
           'p' => "Eritrean nakfa",
           'minor' => self::Cents
       ],
       'etb' => [
           's' => "Ethiopian birr",
           'p' => "Ethiopian birr",
           'minor' => self::Centimes
       ],
       'fjd' => [
           's' => "Fiji dollar",
           'p' => "Fiji dollars",
           'minor' => self::Cents
       ],
       'fkp' => [
           's' => "Falkland Islands pound",
           'p' => "Falkland Islands pounds",
           'minor' => self::Pence
       ],
       'gbp' => [
           's' => "Pound sterling",
           'p' => "Pounds sterlings",
           'minor' => self::Pence
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
           'minor' => self::Pence
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
           'minor' => self::Centimes
       ],
       'gtq' => [
           's' => "Guatemalan quetzal",
           'p' => "Guatemalan quetzales",
           'minor' => self::Centavos
       ],
       'gyd' => [
           's' => "Guyanese dollar",
           'p' => "Guyanese dollars",
           'minor' => self::Cents
       ],
       'hnl' => [
           's' => "Honduran lempira",
           'p' => "Honduran lempiras",
           'minor' => self::Centavos
       ],
       'hkd' => [
           's' => "Hong Kong dollar",
           'p' => "Hong Kong dollars",
           'minor' => self::Cents
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
           'minor' => self::Centimes
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
           'minor' => self::Sen
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
           'minor' => self::Paisa
       ],
       'iqd' => [
           's' => "Iraqi dinar",
           'p' => "Iraqi dinars",
           'minor' => self::Fils
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
           'minor' => self::Cents
       ],
       'jod' => [
           's' => "Jordanian dinar",
           'p' => "Jordanian dinars",
           'minor' => self::Piastres
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
           'minor' => self::Cents
       ],
       'kgs' => [
           's' => "Kyrgyzstani som",
           'p' => "Kyrgyzstani som",
           'minor' => self::Tyiyn
       ],
       'khr' => [
           's' => "Cambodian riel",
           'p' => "Cambodian riels",
           'minor' => self::Sen
       ],
       'kmf' => [
           's' => "Comoro franc",
           'p' => "Comoro francs",
           'minor' => self::Centimes
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
           'minor' => self::Fils
       ],
       'kyd' => [
           's' => "Cayman Islands dollar",
           'p' => "Cayman Islands dollars",
           'minor' => self::Cents
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
           'minor' => self::Piastres
       ],
       'lkr' => [
           's' => "Sri Lankan rupee",
           'p' => "Sri Lankan rupee",
           'minor' => self::Cents
       ],
       'lrd' => [
           's' => "Liberian dollar",
           'p' => "Liberian dollars",
           'minor' => self::Cents
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
           'minor' => self::Centimes
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
           'minor' => self::Cents
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
           'minor' => self::Centavos
       ],
       'myr' => [
           's' => "Malaysian ringgit",
           'p' => "Malaysian ringgit",
           'minor' => self::Sen
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
           'minor' => self::Centavos
       ],
       'nad' => [
           's' => "Namibian dollar",
           'p' => "Namibian dollars",
           'minor' => self::Cents
       ],
       'nio' => [
           's' => "Nicaraguan córdoba",
           'p' => "Nicaraguan córdoba",
           'minor' => self::Centavos
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
           'minor' => self::Paisa,
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
           'minor' => self::Cents
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
           'minor' => self::Centesimos
       ],
       'pen' => [
           's' => "Peruvian sol",
           'p' => "Peruvian soles",
           'minor' => self::Centimos
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
           'minor' => self::Centavos
       ],
       'pkr' => [
           's' => "Pakistani rupee",
           'p' => "Pakistani rupee",
           'minor' => self::Paisa
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
           'minor' => self::Centimes
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
           'minor' => self::Centimes
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
           'minor' => self::Cents
       ],
       'scr' => [
           's' => "Seychelles rupee",
           'p' => "Seychelles rupee",
           'minor' => self::Cents
       ],
       'sdg' => [
           's' => "Sudanese pound",
           'p' => "Sudanese pounds",
           'minor' => self::Piastres
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
           'minor' => self::Cents
       ],
       'shp' => [
           's' => "Saint Helena pound",
           'p' => "Saint Helena pounds",
           'minor' => self::Pence
       ],
       'sll' => [
           's' => "Sierra Leonean leone",
           'p' => "Sierra Leonean leones",
           'minor' => self::Cents
       ],
       'sos' => [
           's' => "Somali shilling",
           'p' => "Somali shillings",
           'minor' => self::Cents
       ],
       'srd' => [
           's' => "Surinamese dollar",
           'p' => "Surinamese dollars",
           'minor' => self::Cents
       ],
       'ssp' => [
           's' => "South Sudanese pound",
           'p' => "South Sudanese pound",
           'minor' => self::Piastres
       ],
       'stn' => [
           's' => "São Tomé and Príncipe dobra",
           'p' => "São Tomé and Príncipe dobras",
           'minor' => self::Centimos
       ],
       'svc' => [
           's' => "Salvadoran colón",
           'p' => "Salvadoran colones",
           'minor' => self::Centavos
       ],
       'syp' => [
           's' => "Syrian pound",
           'p' => "Syrian pounds",
           'minor' => self::Piastres
       ],
       'szl' => [
           's' => "Swazi lilangeni",
           'p' => "Swazi emalangeni",
           'minor' => self::Cents
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
           'minor' => self::Cents
       ],
       'twd' => [
           's' => "New Taiwan dollar",
           'p' => "New Taiwan dollars",
           'minor' => self::Cents
       ],
       'tzs' => [
           's' => "Tanzanian shilling",
           'p' => "Tanzanian shillingi",
           'minor' => self::Cents
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
           'minor' => self::Cents
       ],
       'usd' => [
           's' => "United States dollar",
           'p' => "United States dollars",
           'minor' => self::Cents
       ],
       'uyu' => [
           's' => "Uruguayan peso",
           'p' => "Uruguayan pesos",
           'minor' => self::Centesimos
       ],
       'uzs' => [
           's' => "Uzbekistan soʻm",
           'p' => "Uzbekistan soʻm",
           'minor' => self::Tyiyn
       ],
       'ves' => [
           's' => "Venezuelan bolívar soberano",
           'p' => "Venezuelan bolívares soberano",
           'minor' => self::Centimos
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
           'minor' => self::Centimes
       ],
       'xcd' => [
           's' => "East Caribbean dollar",
           'p' => "East Caribbean dollars",
           'minor' => self::Cents
       ],
       'xof' => [
           's' => "West African CFA franc",
           'p' => "West African CFA francs",
           'minor' => self::Centimes
       ],
       'xpf' => [
           's' => "CFP franc",
           'p' => "CFP francs",
           'minor' => self::Centimes
       ],
       'yer' => [
           's' => "Yemeni rial",
           'p' => "Yemeni rials",
           'minor' => self::Fils
       ],
       'zar' => [
           's' => "South African rand",
           'p' => "South African rand",
           'minor' => self::Cents
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
           'minor' => self::Cents
       ],
    ];
}