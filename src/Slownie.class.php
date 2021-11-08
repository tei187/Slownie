<?php
namespace tei187\Slownie;

use tei187\Resources as Resources;

/**
 * Class used to transcribe float value into words. Base for PL and EN class extensions.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 * @version 1.0.0
 */
class SlownieBase {
    /** @var float|string $input Whatever was passed as amount. */
    protected $input = 0;
    /** @var float $rounded Rounded input by set rounding method. */
    protected $rounded = 0;
    /** @var string[] $amountFull Hold parts of amount (without minor parts), divided by hundreds mark. */
    protected $amountFull = [];
    /** @var integer $amountPart Holds decimal parts of amount, only minors. */
    protected $amountPart = 0;
    /** @var string $currency Chosen currency, "none" by default. */
    protected $currency = "none";
    /** @var integer $exponent Chosen currencies decimal points, 2 by default. */
    protected $exponent = 2;
    /** @var bool $exponent Chosen currencies decimal points, 2 by default. */
    protected $exponentUse = true;
    /** @var boolean $fractions Translate fully (with minors) or partially (with fractional notation). FALSE by default. */
    protected $fractions = false;
    /** @var string $rounding Rounding method for exponents. "Bankers", "normal", or "none". */
    protected $rounding = "none";
    /** @var bool $needsParsing Flag to accertain if amount needs reparsing due to changes. */
    protected $needsParsing = true;

    /**
     * Class constructor.
     *
     * @param float|string|null $amount Amount to process. Has to be well formed float or float-formed string.
     * @param string|null $currency ISO 4217 currency code or number (refer to tei187\Resources\ISO4217\{lang}\Currencies or tei187\Resources\ISO4217\NumberToCode). By default "none".
     * @param boolean $fractions If FALSE translates fully, if TRUE uses fractional notation for minor rest.
     * @param string $rounding Defines type of rounding: "bankers", "normal", "none". By default "none".
     * @return void
     */
    function __construct($amount = null, string $currency = null, bool $fractions = false, string $rounding = "none") {
        if(is_string($currency)) {
            $this->setCurrency($currency);
        }
        $this->input = $amount;
        $this->setRounding($rounding);
        $this->setFractions($fractions);
        $this->parse($this->rounded);
    }

    /**
     * Returns exponent for set currency.
     *
     * @return integer Exponent assigned to current currency, otherwise default 2.
     */
    protected function findExponent() : int {
        if(isset($this->dictionary['currencies'][$this->currency]['minor']['d'])) {
            return $this->dictionary['currencies'][$this->currency]['minor']['d'];
        }
        return 2;
    }

    /**
     * Returns exponent use for set currency.
     *
     * @return boolean Use of exponent for current currency, otherwise FALSE.
     */
    protected function findExponentUse() : bool {
        if(isset($this->dictionary['currencies'][$this->currency]['minor']['u'])) {
            return $this->dictionary['currencies'][$this->currency]['minor']['u'];
        }
        return true;
    }

    /**
     * Sets rounding method.
     *
     * @param string|null $rounding Accepts "bankers", "normal". Defaults to null which sets rounding method to "none";
     * @return self
     */
    public function setRounding(string $rounding = null) : self {
        switch($rounding) {
            case "bankers": $this->rounding = "bankers"; break;
            case "normal":  $this->rounding = "normal"; break;
            default:        $this->rounding = "none"; break;
        }
        $this->roundByMethod();
        $this->needsParsing = true;
        return $this;
    }

    /**
     * Sets $this->rounded by specified $this->round method.
     *
     * @return void
     */
    protected function roundByMethod() : void {
        $temp = doubleval($this->input);
        if($this->exponent == 0 OR $this->exponentUse !== true) {
            $exponent = 0;
        } else {
            $exponent = $this->exponent;
        }
        switch(strtolower($this->rounding)) {
            case "bankers": 
                $this->rounded = round($temp, $exponent, PHP_ROUND_HALF_EVEN);
                break;
            case "normal":
                $this->rounded = round($temp, $exponent, PHP_ROUND_HALF_UP);
                break;
            default:
                $this->rounding = "none";
                $this->rounded = $temp;
                break;
        }
        unset($temp);
    }

    /**
     * Returns string x/y, where X is the minor rest and Y is power of 10 to the exponent length.
     *
     * @return string
     */
    protected function relayFractionMinors() : string {
        return str_pad($this->amountPart, $this->exponent, "0", STR_PAD_RIGHT) . "/" . (10 ** $this->exponent);
    }

    /**
     * Parses input amount. Assigns values to $this->amountPart and $this->amountFull.
     *
     * @param float $v Input amount.
     * @return boolean Returns TRUE is value is proper, FALSE if otherwise.
     */
    protected function parse(float $v = null) : bool {
        $v = str_replace(" ", "", $v); // clear spaces
        $v = doubleval($v); // convert to double
        if(is_double($v)) {
            $v = number_format($v, $this->exponent, ",", "."); // reformat to 123.456,78
            $v_explode = explode(",", $v);
            $this->amountPart = $v_explode[1]; // get minor
            $this->amountFull = array_map(
                fn($val): string => intval($val), 
                explode(".", $v_explode[0])
            ); // explode by separators and remap as integers to avoid leading zeroes for each thousandth part
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
     * @param string $currency Currency shortcode. Has to exist as index in tei187\Resources\ISO4217\{lang}\Currencies, or as cross-referenced ISO 4217 _STRING_ index of tei187\Resources\ISO4217\NumberToCode (with leading zeroes), or 'none' (default).
     * @return self
     */
    public function setCurrency(string $currency) : self {
        if(is_string($currency) and strlen($currency) == 3) {
            $check = false; // verifier, used to signify if currency has been found in any correlated array

            // 1st condition: if currency key is numeric and exists in cross-reference array (so passed as numeric code)
            // 2nd condition: if currency key isn't necessarily numeric and exists in short code array (passed as short code)
            if(ctype_digit($currency) and key_exists($currency, $this->dictionary['xref'])) {
                $this->currency = $this->dictionary['xref'][$currency];
                $check = true;
            } elseif (key_exists(strtolower($currency), $this->dictionary['currencies'])) {
                $this->currency = strtolower($currency);
                $check = true;
            }

            // if checks out, assigns exponent and exponent's use
            // if doesnt check out, assigns no currency and default exponent
            if($check === true) {
                $this->exponent = $this->findExponent();
                $this->exponentUse = $this->findExponentUse();
            } else {
                $this->exponent = 2;
                $this->exponentUse = true;
                $this->currency = "none";
            }
        } else {
            $this->exponent = 2;
            $this->exponentUse = true;
            $this->currency = "none";
        }
        return $this;
    }

    /**
     * Sets full in-words transcription of the amount. Handles $this->amountFull;
     *
     * @todo could use a rewrite, it's unnecessarily long this way...
     * 
     * @return string
     */
    protected function relayString() : string {
        $c = count($this->amountFull);
        $full = [];
        switch($c) {
            case 7: // quintillions
                $full[] = $this->getQuintillions($this->amountFull[0]);
                $full[] = $this->getQuadrillions($this->amountFull[1]);
                $full[] = $this->getTrillions($this->amountFull[2]);
                $full[] = $this->getBillions($this->amountFull[3]);
                $full[] = $this->getMillions($this->amountFull[4]);
                $full[] = $this->getThousands($this->amountFull[5]);
                $full[] = $this->getHundreds($this->amountFull[6]);
                break;
            case 6: // quadrillions
                $full[] = $this->getQuadrillions($this->amountFull[0]);
                $full[] = $this->getTrillions($this->amountFull[1]);
                $full[] = $this->getBillions($this->amountFull[2]);
                $full[] = $this->getMillions($this->amountFull[3]);
                $full[] = $this->getThousands($this->amountFull[4]);
                $full[] = $this->getHundreds($this->amountFull[5]);
                break;
            case 5: // trillions
                $full[] = $this->getTrillions($this->amountFull[0]);
                $full[] = $this->getBillions($this->amountFull[1]);
                $full[] = $this->getMillions($this->amountFull[2]);
                $full[] = $this->getThousands($this->amountFull[3]);
                $full[] = $this->getHundreds($this->amountFull[4]);
                break;
            case 4: // billions
                $full[] = $this->getBillions($this->amountFull[0]);
                $full[] = $this->getMillions($this->amountFull[1]);
                $full[] = $this->getThousands($this->amountFull[2]);
                $full[] = $this->getHundreds($this->amountFull[3]);
                break;
            case 3: // millions
                $full[] = $this->getMillions($this->amountFull[0]);
                $full[] = $this->getThousands($this->amountFull[1]);
                $full[] = $this->getHundreds($this->amountFull[2]);
                break;
            case 2: // thousands
                $full[] = $this->getThousands($this->amountFull[0]);
                $full[] = $this->getHundreds($this->amountFull[1]);
                break;
            case 1: // hundreds
                $full[] = $this->getHundreds($this->amountFull[0]);
                break;
        }

        if($c > 0 and intval(implode("", $this->amountFull)) > 0) {
            $full[] = $this->getCurrencyFull($this->amountFull[$c-1]);
        } else {
            $full = [];
        }

        $rest = [];
        if($this->amountPart > 0) {
            if($this->fractions) {
                $rest[] = $this->relayFractionMinors();
            } else {
                $rest[] = $this->getHundreds(str_pad($this->amountPart, $this->exponent, 0, STR_PAD_RIGHT), true);
                $rest[] = $this->getCurrencyMinor(str_pad($this->amountPart, $this->exponent, 0, STR_PAD_RIGHT), true);
            }
        }

        $whole = [
            implode(" ", $full),
            implode(" ", $rest),
        ];

        if($this->fractions) {
            return implode(" ", array_filter($whole));
        } else {
            return implode(", ", array_filter($whole));
        }
    }

    /**
     * Sets fractional notation true/false for minor rest.
     *
     * @param boolean $v
     * @return self
     */

    public function setFractions(bool $v = true) : self {
        $this->fractions = $v;
        return $this;
    }

    /**
     * Returns currently set currency... in uppercase. That's pretty much it...
     *
     * @return string
     */
    public function getCurrency() : string {
        return strtoupper($this->currency);
    }

    /**
     * Returns input amount rounded by set rounding method.
     *
     * @return float|int|string
     */
    public function getRounded(bool $padded = false) {
        if(!$padded) {
            return $this->rounded;
        }
        return number_format($this->rounded, $this->exponent);
    }

    /**
     * Returns amount in words.
     *
     * @param float|string|null $v Input value. Has to be well formed float or float formed string.
     * @param string $currency ISO 4217 currency code or number.
     * @param boolean|null $fractions If FALSE translates fully, if TRUE uses fractional notation for minor rest.
     * @param string|null $rounding Defines type of rounding: "bankers", "normal", "none". By default "none".
     * @return string Output in words.
     */
    public function output($v = null, string $currency = null, bool $fractions = null, string $rounding = null) : string {
        if($v !== null)          { $this->input = $v; }
        if($currency !== null)   { $this->setCurrency($currency); }
        if($fractions !== null)  { $this->setFractions($fractions); }
        if($rounding !== null)   { $this->setRounding($rounding); }
        if($v !== null and $rounding === null) {
            $this->roundByMethod();
        }
        if($this->needsParsing)  { $this->parse($this->rounded); }
        return $this->relayString();
    }

    // empty holders
    protected function getCurrencyMinor() {}
    protected function getQuintillions() {}
    protected function getQuadrillions() {}
    protected function getTrillions() {}
    protected function getBillions() {}
    protected function getMillions() {}
    protected function getThousands() {}
    protected function getHundreds() {}
    protected function getCurrencyFull() {}
}

/**
 * Class used to transcribe float value into words in Polish language.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 */
class PL extends SlownieBase {
    /** @var array $dictionary Dictionary for translation purposes and cross-reference tables. */
    protected $dictionary = [
        'currencies' => Resources\ISO4217\PL\Currencies, 
           'numbers' => Resources\PL\Numbers,
              'xref' => Resources\ISO4217\NumberToCode,
            'suffix' => Resources\PL\LargeNumbers
    ];

    /**
     * Returns quintillions in words.
     *
     * @param string $v Input quintillions part.
     * @return string Quintillions as string or empty.
     */
    protected function getQuintillions(string $v = null) : string {
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
     * Returns quadrillions in words.
     *
     * @param string $v Input quadrillions part.
     * @return string Quadrillions as string or empty.
     */
    protected function getQuadrillions(string $v = null) : string {
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
     * @return string Trillions as string or empty.
     */
    protected function getTrillions(string $v = null) : string {
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
     * @return string Billions as string or empty.
     */
    protected function getBillions(string $v = null) : string {
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
     * @return string Millions as string or empty.
     */
    protected function getMillions(string $v = null) : string {
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
     * @return string Thousands as string or empty.
     */
    protected function getThousands(string $v = null) : string {
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
     * @return string Hundreds as string or empty.
     */
    protected function getHundreds(string $v = null, bool $minor = false) : string {
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
            }
        }
        return "";
    }

    /**
     * Returns currency suffix.
     *
     * @param string $v Input last part of amount.
     * @return string Currency suffix or empty string if not found.
     */
    protected function getCurrencyFull(string $v = null) : string {
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
     * @return string Currency minor suffix or empty string if not found.
     */
    protected function getCurrencyMinor(string $v = null) : string {
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
}

/**
 * Class used to transcribe float value into words in English language.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 */
class EN extends SlownieBase {
    /** @var array[] $dictionary Dictionary for translation purposes and cross-reference tables. */
    protected $dictionary = [
        'currencies' => Resources\ISO4217\EN\Currencies, 
           'numbers' => Resources\EN\Numbers,
              'xref' => Resources\ISO4217\NumberToCode,
            'suffix' => Resources\EN\LargeNumbers
    ];

    /**
     * Returns quintillions in words.
     *
     * @param string $v Input quintillions part.
     * @return string Quintillions as string or empty.
     */
    protected function getQuintillions(string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][18]['s'];
            } elseif ($v > 1) {
                if($this->currency == "none") {
                    return $w . " " . $this->dictionary['suffix'][18]['p'];
                } else {
                    return $w . " " . $this->dictionary['suffix'][18]['s'];
                }
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns quadrillions in words.
     *
     * @param string $v Input quadrillions part.
     * @return string Quadrillions as string or empty.
     */
    protected function getQuadrillions(string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][15]['s'];
            } elseif ($v > 1) {
                if($this->currency == "none") {
                    return $w . " " . $this->dictionary['suffix'][15]['p'];
                } else {
                    return $w . " " . $this->dictionary['suffix'][15]['s'];
                }
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
     * @return string Trillions as string or empty.
     */
    protected function getTrillions(string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][12]['s'];
            } elseif ($v > 1) {
                if($this->currency == "none") {
                    return $w . " " . $this->dictionary['suffix'][12]['p'];
                } else {
                    return $w . " " . $this->dictionary['suffix'][12]['s'];
                }
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
     * @return string Billions as string or empty.
     */
    protected function getBillions(string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][9]['s'];
            } elseif ($v > 1) {
                if($this->currency == "none") {
                    return $w . " " . $this->dictionary['suffix'][9]['p'];
                } else {
                    return $w . " " . $this->dictionary['suffix'][9]['s'];
                }
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
     * @return string Millions as string or empty.
     */
    protected function getMillions(string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][6]['s'];
            } elseif ($v > 1) {
                if($this->currency == "none") {
                    return $w . " " . $this->dictionary['suffix'][6]['p'];
                } else {
                    return $w . " " . $this->dictionary['suffix'][6]['s'];
                }
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
     * @return string Thousands as string or empty.
     */
    protected function getThousands(string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][3]['s'];
            } elseif ($v > 1) {
                if($this->currency == "none") {
                    return $w . " " . $this->dictionary['suffix'][3]['p'];
                } else {
                    return $w . " " . $this->dictionary['suffix'][3]['s'];
                }
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
     * @return string Hundreds as string or empty.
     */
    protected function getHundreds(string $v = null, bool $minor = false) : string {
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
            }
        }
        return "";
    }

    /**
     * Returns currency suffix.
     *
     * @param string $v Input last part of amount.
     * @return string Currency suffix or empty string if not found.
     */
    protected function getCurrencyFull() : string {
        if($this->currency != "none") {
            $imploded = intval(implode("", $this->amountFull));
            if($imploded == 1) {
                return $this->dictionary['currencies'][$this->currency]['s'];
            } elseif ($imploded >= 2) {
                return $this->dictionary['currencies'][$this->currency]['p'];
            } elseif($imploded == 0) {
                return "";
            }
        }
        return "";
    }

    /**
     * Returns currency minors' suffix.
     *
     * @param string $v Input rest.
     * @return string Currency minor suffix or empty string if not found.
     */
    protected function getCurrencyMinor(string $v = null) : string {
        if($this->currency != "none") {
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency]['minor']['s'];
            } elseif ($v >= 2) {
                return $this->dictionary['currencies'][$this->currency]['minor']['p'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }
}

?>