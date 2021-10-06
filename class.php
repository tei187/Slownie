<?php

class Slownie {
    private $amountFull = [];
    private $amountPart = 0;
    private $string = null;
    protected $currency = [
        'pln' => [],
        'usd' => [],
        'eur' => "euro"
    ];

    protected $numbers = [
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
            100 => 'sto',
            200 => 'dwieście',
            300 => 'trzysta',
            400 => 'czterysta',
            500 => 'pięćset',
            600 => 'sześćset',
            700 => 'siedemset',
            800 => 'osiemset',
            900 => 'dziewięćset',
        ]
    ];

    protected $suffix = [
        "k" => [
            "s1" => "tysiąc",
            "s2" => "tysiące",
            "s3" => "tysięcy",
        ],
        "m" => [
            "s1" => "milion",
            "s2" => "miliony",
            "s3" => "milionów",
        ],
    ];

    function __construct($v) {
        $this->parse($v);
    }

    private function parse($v) {
        // notation is 1.234.567,89 = 1 million 234 thousand 567 currency and 89 sub-currency
        $v = doubleval($v);
        if(is_double($v)) {
            $v = number_format($v, 2, ",", ".");
            $v_explode = explode(",", $v);
            $this->amountPart = $v_explode[1];
            $this->amountFull = array_map(
                fn($val): string => intval($val), 
                explode(".", $v_explode[0])
            ); // explode by separators and remap as integers
        } else {
            $this->amountFull = [];
            $this->amountPart = 0;
            return FALSE;
        }
        return TRUE;
    }

    private function relayString() {
        $c = count($this->amountFull);
        $full = [];
        if($c == 3) {
            // millions
            $full[] = $this->getMillions($this->amountFull[0]);
            $full[] = $this->getThousands($this->amountFull[1]);
            $full[] = $this->getHundreds($this->amountFull[2]);
        } elseif ($c == 2) {
            // thousands
            $full[] = $this->getThousands($this->amountFull[0]);
            $full[] = $this->getHundreds($this->amountFull[1]);
        } elseif ($c == 1) {
            // hundreds
            $full[] = $this->getHundreds($this->amountFull[0]);
        } else {
            return FALSE;
        }
        return implode(" ", $full);
    }

    private function getMillions($v) {
        $w = $this->getHundreds($v);
        $vmod = $v % 10;
        if($v == 1) {
            return $w . " " . $this->suffix['m']['s1'];
        } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
            return $w . " " . $this->suffix['m']['s2'];
        } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
            return $w . " " . $this->suffix['m']['s3'];
        } elseif($v == 0) {
            return;
        }
        return false;
    }

    private function getThousands($v) {
        $w = $this->getHundreds($v);
        $vmod = $v % 10;
        if($v == 1) {
            return $w . " " . $this->suffix['k']['s1'];
        } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
            return $w . " " . $this->suffix['k']['s2'];
        } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
            return $w . " " . $this->suffix['k']['s3'];
        } elseif($v == 0) {
            return;
        }
        return false;
    }

    private function getHundreds($v) {
        $teens = false;
        $vp = [
            'hundreds' => floor($v / 100),
            'tens'     => floor(($v % 100) / 10),
            'single'   => $v % 10,
        ];
            
        $parts = [];
        if($vp['hundreds'] > 0) {
            // hundreds
            $parts[] = $this->numbers['xoo'][$vp['hundreds'] * 100];
        }
        if($vp['tens'] > 0) {
            // tens
            if($vp['tens'] == 1) {
                if($vp['single'] > 0) {
                    // teens
                    $teens = true;
                    $key = $vp['tens'].$vp['single'];
                    $parts[] = $this->numbers['oxo'][$key];
                } else {
                    $parts[] = $this->numbers['oxo'][$vp['tens']];
                }
            } elseif($vp['tens'] >= 2) {
                $parts[] = $this->numbers['oxo'][$vp['tens'] * 10];
            }
        }
        if($teens === false AND $vp['single'] > 0) {
            $parts[] = $this->numbers['oox'][$vp['single']];
        }

        return implode(" ", $parts);
    }

    public function o($v) {
        $this->parse($v);
        return $this->relayString();
    }

}

$numbers = [
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
        100 => 'sto',
        200 => 'dwieście',
        300 => 'trzysta',
        400 => 'czterysta',
        500 => 'pięćset',
        600 => 'sześćset',
        700 => 'siedemset',
        800 => 'osiemset',
        900 => 'dziewięćset',
    ]
];

$test = new Slownie(3234567.89);
echo $test->o(999999999);

?>