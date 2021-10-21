<?php
namespace tei187;
include_once("Slownie.resources.php");

/**
 * Class used to transcribe float value into words in Polish language. Support up to 999.999.999,99.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 */
class Slownie {
    /** @var array $amountFull Hold parts of amount (without minor parts), divided by hundreds mark. */
    private $amountFull = [];
    /** @var integer $amountPart Holds decimal parts of amount, only minors. */
    private $amountPart = 0;
    /** @var string $currency Chosen currency, "none" by default. */
    private $currency = "none";
    /** @var array $dictionary Dictionary for translation purposes and cross-reference tables. */
    protected $dictionary = [
        'currencies' => \Slownie\Resources\Currencies,
        'xref' => \Slownie\Resources\Xref,
        'numbers' => \Slownie\Resources\Numbers,
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
            "b" => [
                "s1" => "miliard",
                "s2" => "miliardy",
                "s3" => "miliardów",
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
     * @param string $currency Currency shortcode. Has to exist as index in \Slownie\Resources\Currencies, or as cross-referenced ISO 4217 number index of \Slownie\Resources\Xref, or 'none' (default).
     * @return boolean
     */
    public function setCurrency(String $currency) : bool {
        if(is_string($currency) and strlen($currency) == 3) {
            if(ctype_digit($currency) and key_exists($currency, $this->dictionary['xref'])) {
                $this->currency = $this->dictionary['xref'][$currency];
                return true;
            } elseif (key_exists(strtolower($currency), $this->dictionary['currencies'])) {
                $this->currency = strtolower($currency);
                return true;
            }
        } else {
            $this->currency = "none";
        }
        return false;
    }

    /**
     * Sets full in-words transcription of the amount. Handles $this->amountFull;
     *
     * @return string
     */
    private function relayString() : String {
        $c = count($this->amountFull);
        $full = [];
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
            $rest[] = $this->getHundreds(str_pad($this->amountPart, 2, 0, STR_PAD_RIGHT), true);
            $rest[] = $this->getCurrencyMinor(str_pad($this->amountPart, 2, 0, STR_PAD_RIGHT), true);
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
     * @param string $v Input millions part.
     * @return string|null
     */
    private function getBillions(String $v = null) : String {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix']['b']['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix']['b']['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix']['b']['s3'];
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
     * @param string $v Input thousands part.
     * @return string|null
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
            $vmod = $v % 10; // rename? has to be dependable on decimal points of minor unit ['minor']['d'], default 2 points so % 10
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