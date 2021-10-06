<?php

/**
 * Class used to transcribe float value into words in Polish language. Support up to 999.999.999,99.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 */
class Slownie {
    private $amountFull = [];
    private $amountPart = 0;
    private $currency = "none";
    protected $dictionary = [
        'currencies' => [
            'pln' => [
                's1' => "złoty",
                's2' => 'złote',
                's3' => "złotych",
                'rest' => [
                    's1' => "grosz",
                    's2' => "grosze",
                    's3' => "groszy",
                ]
            ],
            'usd' => [
                's1' => "dolar",
                "s2" => "dolary",
                "s3" => "dolarów",
                'rest' => [
                    's1' => "cent",
                    's2' => "centy",
                    's3' => "centów"
                ]
            ],
            'eur' => [
                's1' => "euro",
                "s2" => "euro",
                "s3" => "euro",
                'rest' => [
                    's1' => "eurocent",
                    's2' => "eurocenty",
                    's3' => "eurocentów"
                ]
            ],
        ],
        'numbers' => [
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
        ],
        'suffix' => [
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
        ]
    ];

    /**
     * Class constructor.
     *
     * @param Float|String|null $amount Amount to process. Has to be well formed float or float-formed string.
     * @param String $currency Currency shortcode. Has to exist in $this->dictionary->currencies as key or 'none' (default).
     */
    function __construct($amount = null, String $currency = null) {
        if(is_string($currency)) {
            $this->setCurrency($currency);
        }
        $this->parse($amount);
    }

    /**
     * Parses input amount.
     *
     * @param Float $v Input amount.
     * @return Bool
     */
    private function parse(Float $v) : Bool {
        $v = str_replace(" ", "", $v);
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
            return false;
        }
        return true;
    }

    /**
     * Assigns currency.
     *
     * @param String $currency Currency shortcode. Has to exist in $this->dictionary->currencies as key or 'none' (default).
     * @return boolean
     */
    private function setCurrency(String $currency) : bool {
        if(key_exists(strtolower($currency), $this->dictionary['currencies'])) {
            $this->currency = strtolower($currency);
            return true;
        } elseif ($currency == "none") {
            $this->currency = "none";
            return true;
        }
        return false;
    }

    /**
     * Sets full in-words transcription of the amount. Handles $this->amountFull;
     *
     * @return String
     */
    private function relayString() : String {
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
        }

        if($c > 0 and intval(implode("", $this->amountFull)) > 0) {
            $full[] = $this->getCurrencyFull($this->amountFull[$c-1]);
        } else {
            $full = [];
        }

        $rest = [];
        if($this->amountPart > 0) {
            $rest[] = $this->getHundreds(str_pad($this->amountPart, 2, 0, STR_PAD_RIGHT));
            $rest[] = $this->getCurrencyRest(str_pad($this->amountPart, 2, 0, STR_PAD_RIGHT));
        }

        $whole = [
            implode(" ", $full),
            implode(" ", $rest),
        ];

        return implode(", ", array_filter($whole));
    }

    /**
     * Returns millions in words.
     *
     * @param String $v Input millions part.
     * @return String|null
     */
    private function getMillions(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix']['m']['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix']['m']['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix']['m']['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns thousands in words.
     *
     * @param String $v Input thousands part.
     * @return String|null
     */
    private function getThousands(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix']['k']['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix']['k']['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix']['k']['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns hundreds part in words.
     *
     * @param String $v Input hundreds part.
     * @return String|null
     */
    private function getHundreds(String $v = null) : String {
        if(intval($v) > 0) {

            $teens = false;
            $vp = [
                'hundreds' => floor($v / 100),
                'tens'     => floor(($v % 100) / 10),
                'single'   => $v % 10,
            ];
                
            $parts = [];
            if($vp['hundreds'] > 0) {
                // hundreds
                $parts[] = $this->dictionary['numbers']['xoo'][$vp['hundreds'] * 100];
            }
            if($vp['tens'] > 0) {
                // tens
                if($vp['tens'] == 1) {
                    if($vp['single'] > 0) {
                        // teens
                        $teens = true;
                        $key = $vp['tens'].$vp['single'];
                        $parts[] = $this->dictionary['numbers']['oxo'][$key];
                    } else {
                        $parts[] = $this->dictionary['numbers']['oxo'][$vp['tens'] * 10];
                    }
                } elseif($vp['tens'] >= 2) {
                    $parts[] = $this->dictionary['numbers']['oxo'][$vp['tens'] * 10];
                }
            }
            if($teens === false AND $vp['single'] > 0) {
                $parts[] = $this->dictionary['numbers']['oox'][$vp['single']];
            }
    
            if(count($parts) > 1) {
                return implode(" ", $parts);
            } elseif (count($parts) == 1) {
                return $parts[0];
            } else {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns currency name.
     *
     * @param String $v Input last part of amount.
     * @return String|null
     */
    private function getCurrencyFull(String $v = null) : String {
        if($this->currency != "none") {
            $vmod = $v % 10;
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $this->dictionary['currencies'][$this->currency]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $this->dictionary['currencies'][$this->currency]['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns currency rest.
     *
     * @param String $v Input rest.
     * @return String|null
     */
    private function getCurrencyRest(String $v = null) : String {
        if($this->currency != "none") {
            $vmod = $v % 10;
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency]['rest']['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $this->dictionary['currencies'][$this->currency]['rest']['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $this->dictionary['currencies'][$this->currency]['rest']['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns amount in words.
     *
     * @param Float|String|null $v Input value. Has to be well formed float or float formed string.
     * @return String Output in words.
     */
    public function output($v = null, $currency = null) : String {
        if($v != null) {
            $this->parse($v);
        }
        if($currency != null) {
            $this->setCurrency($currency);
        }
        return $this->relayString();
    }

}

$t = new Slownie(999999999.99, 'usd');
print_r($t->output());

?>