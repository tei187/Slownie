<?
namespace tei187\Resources\ISO4217;

class Xref{
    const Specifics = [
        'aed' => [ ],
        'afn' => [ ],
        'all' => [ ],
        'amd' => [ ],
        'ang' => [ ],
        'aoa' => [ ],
        'ars' => [ ],
        'aud' => [ ],
        'awg' => [ ],
        'azm' => [ ],
        'bam' => [ ],
        'bbd' => [ ],
        'bdt' => [ ],
        'bgn' => [ ],
        'bhd' => [ 'minor' => [ 'd' => 3 ] ],
        'bif' => [ 'minor' => [ 'u' => false ] ],
        'bmd' => [ ],
        'bnd' => [ ],
        'bob' => [ ],
        'brl' => [ ],
        'bsd' => [ ],
        'btn' => [ ],
        'bwp' => [ ],
        'byn' => [ ],
        'bzd' => [ ],
        'cad' => [ ],
        'cdf' => [ ],
        'chf' => [ ],
        'clp' => [ 'minor' => [ 'u' => false ] ],
        'cny' => [ ],
        'cop' => [ ],
        'crc' => [ ],
        'cuc' => [ ],
        'cup' => [ ],
        'cve' => [ ],
        'czk' => [ ],
        'djf' => [ 'minor' => [ 'u' => false ] ],
        'dkk' => [ ],
        'dzd' => [ ],
        'dop' => [ ],
        'egp' => [ ],
        'eur' => [ ],
        'ern' => [ ],
        'etb' => [ ],
        'fjd' => [ ],
        'fkp' => [ ],
        'gbp' => [ ],
        'gel' => [ ],
        'ghs' => [ ],
        'gip' => [ ],
        'gmd' => [ ],
        'gnf' => [ 'minor' => [ 'u' => false ] ],
        'gtq' => [ ],
        'gyd' => [ ],
        'hnl' => [ ],
        'hkd' => [ ],
        'hrk' => [ ],
        'htg' => [ ],
        'huf' => [ ],
        'idr' => [ ],
        'ils' => [ ],
        'inr' => [ ],
        'iqd' => [ 'minor' => [ 'd' => 3 ] ],
        'irr' => [ ],
        'isk' => [ 'minor' => [ 'u' => false ] ],
        'jmd' => [ ],
        'jod' => [ 'minor' => [ 'd' => 3 ] ],
        'jpy' => [ 'minor' => [ 'u' => false ] ],
        'kes' => [ ],
        'kgs' => [ ],
        'khr' => [ ],
        'kmf' => [ 'minor' => [ 'u' => false ] ],
        'kpw' => [ ],
        'krw' => [ 'minor' => [ 'u' => false ] ],
        'kwd' => [ 'minor' => [ 'd' => 3 ] ],
        'kyd' => [ ],
        'kzt' => [ ],
        'lak' => [ ],
        'lbp' => [ ],
        'lkr' => [ ],
        'lrd' => [ ],
        'lsl' => [ ],
        'lyd' => [ 'minor' => [ 'd' => 3 ] ],
        'mad' => [ ],
        'mdl' => [ ],
        'mga' => [ ],
        'mkd' => [ 'minor' => [ 'u' => false ] ],
        'mmk' => [ ],
        'mnt' => [ ],
        'mop' => [ ],
        'mru' => [ ],
        'mur' => [ ],
        'mvr' => [ ],
        'mxn' => [ ],
        'myr' => [ ],
        'mwk' => [ ],
        'mzn' => [ ],
        'nad' => [ ],
        'nio' => [ ],
        'ngn' => [ ],
        'npr' => [ ],
        'nok' => [ ],
        'nzd' => [ ],
        'omr' => [ 'minor' => [ 'd' => 3 ] ],
        'pab' => [ ],
        'pen' => [ ],
        'pgk' => [ ],
        'php' => [ ],
        'pkr' => [ ],
        'pln' => [ ],
        'pyg' => [ 'minor' => [ 'u' => false ] ],
        'qar' => [ ],
        'ron' => [ ],
        'rsd' => [ ],
        'rub' => [ ],
        'rwf' => [ 'minor' => [ 'u' => false ] ],
        'sar' => [ ],
        'sbd' => [ ],
        'scr' => [ ],
        'sdg' => [ ],
        'sek' => [ ],
        'sgd' => [ ],
        'shp' => [ ],
        'sll' => [ ],
        'sos' => [ ],
        'srd' => [ ],
        'ssp' => [ ],
        'stn' => [ ],
        'svc' => [ ],
        'syp' => [ ],
        'szl' => [ ],
        'thb' => [ ],
        'tjs' => [ ],
        'tmt' => [ ],
        'tnd' => [ 'minor' => [ 'd' => 3, ] ],
        'top' => [ ],
        'try' => [ ],
        'ttd' => [ ],
        'twd' => [ ],
        'tzs' => [ ],
        'uah' => [ ],
        'ugx' => [ 'minor' => [ 'u' => false ] ],
        'usd' => [ ],
        'uyu' => [ ],
        'uzs' => [ ],
        'ves' => [ ],
        'vnd' => [ 'minor' => [ 'u' => false ] ],
        'vuv' => [ 'minor' => [ 'u' => false ] ],
        'wst' => [ ],
        'xaf' => [ 'minor' => [ 'u' => false ] ],
        'xcd' => [ ],
        'xof' => [ 'minor' => [ 'u' => false ] ],
        'xpf' => [ 'minor' => [ 'u' => false ] ],
        'yer' => [ ],
        'zar' => [ ],
        'zmw' => [ ],
        'zwl' => [ ],
    ];

    /**
     * @var string[] Cross-reference table between ISO 4217 Numbers and currency pickers.
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
}