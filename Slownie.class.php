<?php
namespace tei187\Slownie;

//use tei187;
use tei187\Resources\PL\ISO4217 as Words;
use tei187\Resources\ISO4217 as Table;

/**
 * Class used to transcribe float value into words in Polish language. Support up to 999.999.999,99.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 */
class Polish {
    /** @var array $amountFull Hold parts of amount (without minor parts), divided by hundreds mark. */
    private $amountFull = [];
    /** @var integer $amountPart Holds decimal parts of amount, only minors. */
    private $amountPart = 0;
    /** @var string $currency Chosen currency, "none" by default. */
    private $currency = "none";
    /** @var integer $decimals Chosen currencies decimal points, 2 by default. */
    private $decimals = 2;
    /** @var boolean $full Translate fully (with minors) or partially (with fractional notation). */
    private $full = true;
    /** @var array $dictionary Dictionary for translation purposes and cross-reference tables. */
    protected $dictionary = [
        'currencies' => Words\Currencies,
           'numbers' => Words\Numbers,
              'xref' => Table\Xref,
        'suffix' => [
            3 => [
                "s1" => "tysiąc",
                "s2" => "tysiące",
                "s3" => "tysięcy",
            ],
            6 => [
                "s1" => "milion",
                "s2" => "miliony",
                "s3" => "milionów",
            ],
            9 => [
                "s1" => "miliard",
                "s2" => "miliardy",
                "s3" => "miliardów",
            ],
            12 => [
                "s1" => "bilion",
                "s2" => "biliony",
                "s3" => "bilionów",
            ],
            15 => [
                "s1" => "biliard",
                "s2" => "biliardy",
                "s3" => "biliardów",
            ],
            18 => [
                "s1" => "trylion",
                "s2" => "tryliony",
                "s3" => "trylionów",
            ],
            21 => [
                "s1" => "tryliard",
                "s2" => "tryliardy",
                "s3" => "tryliardów",
            ],
            24 => [
                "s1" => "kwadrylion",
                "s2" => "kwadryliony",
                "s3" => "kwadrylionów",
            ],
        ]
    ];

    /**
     * Class constructor.
     *
     * @param float|string|null $amount Amount to process. Has to be well formed float or float-formed string.
     * @param string $currency Currency shortcode. Has to exist in $this->dictionary->currencies as key or 'none' (default).
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
     * @param float $v Input amount.
     * @return boolean
     */
    private function parse(Float $v = null) : Bool {
        $v = str_replace(" ", "", $v);
        $v = doubleval($v);
        if(is_double($v)) {

            $v = number_format($v, $this->decimals, ",", ".");
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
     * @param string $currency Currency shortcode. Has to exist as index in \Slownie\Resources\Currencies, or as cross-referenced ISO 4217 number index of \Slownie\Resources\Xref, or 'none' (default).
     * @return boolean
     */
    public function setCurrency(String $currency) : bool {
        $check = false;
        if(is_string($currency) and strlen($currency) == 3) {
            if(ctype_digit($currency) and key_exists($currency, $this->dictionary['xref'])) {
                $this->currency = $this->dictionary['xref'][$currency];
                $check = true;
            } elseif (key_exists(strtolower($currency), $this->dictionary['currencies'])) {
                $this->currency = strtolower($currency);
                $check = true;
            }
            if($check === true) {
                $this->decimals = isset($this->dictionary['currencies'][$this->currency]['minor']['d']) ? $this->dictionary['currencies'][$this->currency]['minor']['d'] : 2;
                return true;
            } else {
                $this->decimals = 2;
                $this->currency = "none";
            }
        } else {
            $this->currency = "none";
        }
        return false;
    }

    /**
     * Sets full in-words transcription of the amount. Handles $this->amountFull;
     *
     * @todo could use a rewrite, it's unnecessarily long this way...
     * 
     * @return string
     */
    private function relayString() : String {
        $c = count($this->amountFull);
        $full = [];
        if($c == 7) {
            // quintillion
            $full[] = $this->getQuintillions($this->amountFull[0]);
            $full[] = $this->getQuadrillions($this->amountFull[1]);
            $full[] = $this->getTrillions($this->amountFull[2]);
            $full[] = $this->getBillions($this->amountFull[3]);
            $full[] = $this->getMillions($this->amountFull[4]);
            $full[] = $this->getThousands($this->amountFull[5]);
            $full[] = $this->getHundreds($this->amountFull[6]);
        }
        if($c == 6) {
            // quadrillion
            $full[] = $this->getQuadrillions($this->amountFull[0]);
            $full[] = $this->getTrillions($this->amountFull[1]);
            $full[] = $this->getBillions($this->amountFull[2]);
            $full[] = $this->getMillions($this->amountFull[3]);
            $full[] = $this->getThousands($this->amountFull[4]);
            $full[] = $this->getHundreds($this->amountFull[5]);
        }
        if($c == 5) {
            // trillions
            $full[] = $this->getTrillions($this->amountFull[0]);
            $full[] = $this->getBillions($this->amountFull[1]);
            $full[] = $this->getMillions($this->amountFull[2]);
            $full[] = $this->getThousands($this->amountFull[3]);
            $full[] = $this->getHundreds($this->amountFull[4]);
        }
        if($c == 4) {
            // billions
            $full[] = $this->getBillions($this->amountFull[0]);
            $full[] = $this->getMillions($this->amountFull[1]);
            $full[] = $this->getThousands($this->amountFull[2]);
            $full[] = $this->getHundreds($this->amountFull[3]);
        }
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
            $rest[] = $this->getHundreds(str_pad($this->amountPart, $this->decimals, 0, STR_PAD_RIGHT), true);
            $rest[] = $this->getCurrencyMinor(str_pad($this->amountPart, $this->decimals, 0, STR_PAD_RIGHT), true);
        }

        $whole = [
            implode(" ", $full),
            implode(" ", $rest),
        ];

        return implode(", ", array_filter($whole));
    }

    /**
     * Returns Quadrillions in words.
     *
     * @param string $v Input quadrillions part.
     * @return string|null
     */
    private function getQuintillions(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][18]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix'][18]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix'][18]['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns Quadrillions in words.
     *
     * @param string $v Input quadrillions part.
     * @return string|null
     */
    private function getQuadrillions(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][15]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix'][15]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix'][15]['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns trillions in words.
     *
     * @param string $v Input trillions part.
     * @return string|null
     */
    private function getTrillions(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][12]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix'][12]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix'][12]['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns billions in words.
     *
     * @param string $v Input billions part.
     * @return string|null
     */
    private function getBillions(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][9]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix'][9]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix'][9]['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns millions in words.
     *
     * @param string $v Input millions part.
     * @return string|null
     */
    private function getMillions(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][6]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix'][6]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix'][6]['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns thousands in words.
     *
     * @param string $v Input thousands part.
     * @return string|null
     */
    private function getThousands(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][3]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix'][3]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix'][3]['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns hundreds part in words.
     *
     * @param string $v Input hundreds part.
     * @param boolean $minor Switch if minor.
     * @return string|null
     */
    private function getHundreds(String $v = null, Bool $minor = false) : String {
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
                if($this->currency !== "none") {
                    // check for 'gender'
                    if($minor) {
                        $switch = $this->dictionary['currencies'][$this->currency]['minor']['f'];
                    } else {
                        $switch = $this->dictionary['currencies'][$this->currency]['f'];
                    }
    
                    if($switch) {
                        if($vp['single'] == intval(implode("", $this->amountFull))) {
                            $parts[] = $this->dictionary['numbers']['f-oox'][$vp['single']];
                        } elseif($vp['single'] > 1) {
                            $parts[] = $this->dictionary['numbers']['f-oox'][$vp['single']];
                        } else {
                            $parts[] = $this->dictionary['numbers']['oox'][$vp['single']];
                        }
                    } else {
                        $parts[] = $this->dictionary['numbers']['oox'][$vp['single']];
                    }
                } else {
                    $parts[] = $this->dictionary['numbers']['oox'][$vp['single']];
                }
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
     * Returns currency suffix.
     *
     * @param string $v Input last part of amount.
     * @return string|null
     */
    private function getCurrencyFull(String $v = null) : String {
        if($this->currency != "none") {
            $vmod = $v % 10; // rename?
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
     * Returns currency minors' suffix.
     *
     * @param string $v Input rest.
     * @return string|null
     */
    private function getCurrencyMinor(String $v = null) : String {
        if($this->currency != "none") {
            $vmod = $v % 10;
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency]['minor']['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $this->dictionary['currencies'][$this->currency]['minor']['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $this->dictionary['currencies'][$this->currency]['minor']['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns currently set currency :D
     * ...in uppercase. What else did you think it will do?
     *
     * @return string
     */
    public function getCurrency() : String {
        return strtoupper($this->currency);
    }

    /**
     * Returns amount in words.
     *
     * @param float|string|null $v Input value. Has to be well formed float or float formed string.
     * @return string Output in words.
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

?>