<?php
/**
 * File holding main classes for Slownie.
 */
namespace tei187\Slownie;

use tei187\Resources as Resources;

/**
 * Abstract class used to transcribe float value into words. Base for PL, EN, DE class extensions.
 * @abstract
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 * @version 1.0.0
 */
abstract class SlownieBase {
// holding
    /** @var string[] $amountFull Hold parts of amount (without minor parts), divided by hundreds mark. */
    protected $amountFull = [];
    /** @var integer $amountPart Holds decimal parts of amount, only minors. */
    protected $amountPart = 0;
    /** @var float|string $input Whatever was passed as amount. */
    protected $input = 0;
// config
    /** @var float $rounded Rounded input by set rounding method. */
    protected $rounded = 0;
    /** @var integer $exponent Chosen currencies decimal points, 2 by default. */
    protected $exponent = 2;
    /** @var string $currency Chosen currency, "none" by default. */
    protected $currency = "none";
    /** @var string $rounding Rounding method for exponents. "Bankers", "normal", or "none". */
    protected $rounding = "none";
// flags
    /** @var bool $exponent Chosen currencies decimal points, 2 by default. */
    protected $exponentUse = true;
    /** @var bool $pickerUse Flag to switch between translated currency name or currency picker. */
    protected $pickerUse = false;
    /** @var boolean $fractions Translate fully (with minors) or partially (with fractional notation). FALSE by default. */
    protected $fractions = false;
    /** @var bool $needsParsing Flag to accertain if amount needs reparsing due to changes. */
    protected $needsParsing = true;

    /**
     * Class constructor.
     *
     * @param float|string|null $amount Amount to process. Has to be well formed float or float-formed string.
     * @param string|null $currency ISO 4217 currency code or number (refer to tei187\Resources\ISO4217\{lang}\Currencies or tei187\Resources\ISO4217\NumberToCode). By default "none".
     * @param boolean $fractions If FALSE translates fully, if TRUE uses fractional notation for minor rest.
     * @param string $rounding Defines type of rounding: "bankers", "normal", "none". By default "none".
     * @param boolean|null $picker Sets flag to use or not use picker rather than full translation of currency.
     * @return void
     */
    function __construct($amount = null, string $currency = null, bool $fractions = false, string $rounding = "none", bool $picker = null) {
        if(is_string($currency)) {
            $this->setCurrency($currency);
        }
        if($picker !== null) { 
            $this->setPickerUse($picker);
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
     * @return string Translated from numeric.
     */
    protected function relayString() : string {
        $c = count($this->amountFull);
        $full = []; // will keep translated parts' strings
        $arrayByPower10 = []; // will be same as $this->amountFull, but have keys corresponding to N power of ten of the range they represent

        // revert and assign keys corresponding to power of ten
        foreach(array_reverse($this->amountFull) as $k => $v) { $arrayByPower10[$k * 3] = $v; }
        $arrayByPower10 = array_reverse($arrayByPower10, true);

        // deal with translation of full parts
        foreach($arrayByPower10 as $k => $v) { $full[] = $this->translateNumber($k, $v); }
        if($c > 0 and intval(implode("", $this->amountFull)) > 0) {
            if($this->pickerUse) {
                $full[] = $this->getCurrency();
            } else {
                $full[] = $this->getCurrencyFull($this->amountFull[$c-1]);
            }
        } else {
            $full = [];
        }

        // deal with translation of rest
        $rest = [];
        if($this->amountPart > 0) {
            if($this->fractions) {
                $rest[] = $this->relayFractionMinors();
            } else {
                $rest[] = $this->getHundreds(str_pad($this->amountPart, $this->exponent, 0, STR_PAD_RIGHT), true);
                $rest[] = $this->getCurrencyMinor(str_pad($this->amountPart, $this->exponent, 0, STR_PAD_RIGHT), true);
            }
        }

        // implode full and rest translations into one and return
        $whole = [ implode(" ", $full), implode(" ", $rest) ];
        
        if($this->fractions) {
            return implode(" ", array_filter($whole));
        } else {
            return implode(", ", array_filter($whole));
        }
    }

    /**
     * Switches between translations for given value multiplied by N-power of ten.
     *
     * @param integer|null $power N-th power of 10, corresponding with key in array.
     * @param integer|null $digits Full amount part (000-999) to translate.
     * @return string
     */
    protected function translateNumber(int $power = null, int $digits = null) : string {
        switch($power) {
            case 0:  $output = $this->getHundreds($digits);     break;
            case 3:  $output = $this->getThousands($digits);    break;
            case 6:  $output = $this->getMillions($digits);     break;
            case 9:  $output = $this->getBillions($digits);     break;
            case 12: $output = $this->getTrillions($digits);    break;
            case 15: $output = $this->getQuadrillions($digits); break;
            case 18: $output = $this->getQuintillions($digits); break;
            default: $output = "";
        }
        return $output;
    }

    /**
     * Sets flag for fractional notation true/false for minor rest.
     *
     * @param boolean $v
     * @return self
     */

    public function setFractions(bool $v = true) : self {
        $this->fractions = $v;
        return $this;
    }

    /**
     * Sets flag to switch between translated currency name or currency picker use.
     *
     * @param boolean $v
     * @return self
     */
    public function setPickerUse(bool $v = true) : self {
        $this->pickerUse = $v;
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
     * @param boolean|null $picker Sets flag to use or not use picker rather than full translation of currency.
     * @return string Output in words.
     */
    public function output($v = null, string $currency = null, bool $fractions = null, string $rounding = null, bool $picker = null) : string {
        if($v !== null)          { $this->input = $v; }
        if($currency !== null)   { $this->setCurrency($currency); }
        if($picker !== null)     { $this->setPickerUse($picker); }
        if($fractions !== null)  { $this->setFractions($fractions); }
        if($rounding !== null)   { $this->setRounding($rounding); }

        // if new value introduced and rounding was not changed, 
        // it still has to be rounded by currently met method
        if($v !== null and $rounding === null) {
            $this->roundByMethod();
        }

        if($this->needsParsing)  { $this->parse($this->rounded); }
        return $this->relayString();
    }

    /**
     * Returns quintillions in words.
     *
     * @param string $v Input quintillions part.
     * @return string Quintillions as string or empty.
     */
    protected function getQuintillions(string $v = null) : string {
        return $this->getLargeNumbers(18, $v);
    }

    /**
     * Returns quadrillions in words.
     *
     * @param string $v Input quadrillions part.
     * @return string Quadrillions as string or empty.
     */
    protected function getQuadrillions(string $v = null) : string {
        return $this->getLargeNumbers(15, $v);
    }

    /**
     * Returns trillions in words.
     *
     * @param string $v Input trillions part.
     * @return string Trillions as string or empty.
     */
    protected function getTrillions(string $v = null) : string {
        return $this->getLargeNumbers(12, $v);
    }

    /**
     * Returns billions in words.
     *
     * @param string $v Input billions part.
     * @return string Billions as string or empty.
     */
    protected function getBillions(string $v = null) : string {
        return $this->getLargeNumbers(9, $v);
    }

    /**
     * Returns millions in words.
     *
     * @param string $v Input millions part.
     * @return string Millions as string or empty.
     */
    protected function getMillions(string $v = null) : string {
        return $this->getLargeNumbers(6, $v);
    }

    /**
     * Returns thousands in words.
     *
     * @param string $v Input thousands part.
     * @return string Thousands as string or empty.
     */
    protected function getThousands(string $v = null) : string {
        return $this->getLargeNumbers(3, $v);
    }

    abstract protected function getCurrencyMinor(string $v = null) : string;
    abstract protected function getCurrencyFull() : string;
    abstract protected function getHundreds(string $v = null) : string;
    abstract protected function getLargeNumbers(int $power = 0, string $v = null) : string;
}

/**
 * Class used to transcribe float value into words in Polish language.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 */
class PL extends \tei187\Slownie\SlownieBase {
    /** @var array $dictionary Dictionary for translation purposes and cross-reference tables. */
    protected $dictionary = [
        'currencies' => Resources\ISO4217\PL\Currencies, 
           'numbers' => Resources\PL\Numbers,
              'xref' => Resources\ISO4217\NumberToCode,
            'suffix' => Resources\PL\LargeNumbers
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     *
     * @param integer $power N-th power of 10.
     * @param string|null $v Input value part.
     * @return string
     */
    protected function getLargeNumbers(int $power = 0, string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $vmod = $v % 10;
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][$power]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $w . " " . $this->dictionary['suffix'][$power]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $w . " " . $this->dictionary['suffix'][$power]['s3'];
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
class EN extends \tei187\Slownie\SlownieBase {
    /** @var array[] $dictionary Dictionary for translation purposes and cross-reference tables. */
    protected $dictionary = [
        'currencies' => Resources\ISO4217\EN\Currencies, 
           'numbers' => Resources\EN\Numbers,
              'xref' => Resources\ISO4217\NumberToCode,
            'suffix' => Resources\EN\LargeNumbers
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     *
     * @param integer $power N-th power of 10.
     * @param string|null $v Input value part.
     * @return string
     */
    protected function getLargeNumbers(int $power = 0, string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][$power]['s'];
            } elseif ($v > 1) {
                if($this->currency == "none") {
                    return $w . " " . $this->dictionary['suffix'][$power]['p'];
                } else {
                    return $w . " " . $this->dictionary['suffix'][$power]['s'];
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

/**
 * Class used to transcribe float value into words in German language.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 */
class DE extends \tei187\Slownie\SlownieBase {
    /** @var array[] $dictionary Dictionary for translation purposes and cross-reference tables. */
    protected $dictionary = [
        'currencies' => Resources\ISO4217\DE\Currencies, 
           'numbers' => Resources\DE\Numbers,
              'xref' => Resources\ISO4217\NumberToCode,
            'suffix' => Resources\DE\LargeNumbers
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     *
     * @param integer $power N-th power of 10.
     * @param string|null $v Input value part.
     * @return string
     */
    protected function getLargeNumbers(int $power = 0, string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $w = ((trim($w) == "eins" OR trim($w) == "ein") AND $power >= 6) ? "eine" : $w;

            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][$power]['s'];
            } elseif($v > 1) {
                return $w . " " . $this->dictionary['suffix'][$power]['p'];
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
        $vInt = intval($v);
        if($vInt > 0) {
            $mod3 = $vInt % 100;
            $mod2 = $mod3 % 10;
            $hundreds = $vInt - $mod3;
            $tens = floor($mod3 / 10) * 10;

            $parts = [];

            // check 10^2 position
            if($vInt >= 100) {
                $parts[] = $this->dictionary['numbers']['xoo'][$hundreds];
            }

            if($mod3 >= 10 AND $mod3 <= 20) { 
                // ranging 10...20
                $parts[] = $this->dictionary['numbers']['oxo'][$mod3];
            } elseif($mod3 > 0 AND $mod3 < 10) { 
                // ranging 01...09
                $parts[] = $this->dictionary['numbers']['oox'][$mod3];
            } elseif($mod3 > 20) { 
                // ranging 21...n
                if($mod2 == 0) { 
                    // if single equals 0
                    $parts[] = $this->dictionary['numbers']['oxo'][$mod3];
                } elseif($mod2 == 1) { 
                    // if single equals 1
                    $parts[] = $this->dictionary['numbers']['ooy'][1]['f'] . "und" . $this->dictionary['numbers']['oxo'][$tens];
                } else { 
                    // if single other than 0 or 1, so x2...x9
                    $parts[] = $this->dictionary['numbers']['oox'][$mod2] . "und" . $this->dictionary['numbers']['oxo'][$tens];
                }
            }

            if(count($parts) > 1) {
                return implode("", $parts);
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

    /**
     * Sets full in-words transcription of the amount. Handles $this->amountFull;
     * 
     * @return string Translated from numeric.
     */
    protected function relayString() : string {
        $c = count($this->amountFull);
        $full = [];
        $arrayByPower10 = [];

        foreach(array_reverse($this->amountFull) as $k => $v) { $arrayByPower10[$k * 3] = $v; }
        $arrayByPower10 = array_reverse($arrayByPower10, true);

        // deal with translation of full parts
        foreach($arrayByPower10 as $k => $v) {
            if($k == 0) {
                $w = $this->getHundreds($v,false);
                if($w == "eins" OR $w == "ein") {
                    if(@$this->dictionary['currencies'][$this->currency]['f']) {
                        $w = "eine";
                    } else {
                        $w = "ein";
                    }
                }
                $full[$k] = $w;
            } else {
                $full[$k] = $this->translateNumber($k, $v); 
            }
        }
        if($c > 0 and intval(implode("", $this->amountFull)) > 0) {
            if($this->pickerUse) {
                $full['currency'] = $this->getCurrency();
            } else {
                $full['currency'] = $this->getCurrencyFull($this->amountFull[$c-1]);
            }
        } else {
            $full = [];
        }

        // deal with translation of rest
        $rest = [];
        if($this->amountPart > 0) {
            if($this->fractions) {
                $rest[] = $this->relayFractionMinors();
            } else {
                $rest[] = $this->getHundreds(str_pad($this->amountPart, $this->exponent, 0, STR_PAD_RIGHT), true);
                $rest[] = $this->getCurrencyMinor(str_pad($this->amountPart, $this->exponent, 0, STR_PAD_RIGHT), true);
            }
        }
        
        // parse pow0 pow3
        if(isset($full[0])) {
            $full[0] = str_replace(" ", "", $full[0]);
        }
        if(isset($full[3])) {
            $full[3] = str_replace(" ", "", $full[3]);
        }
        if(isset($full[0]) AND isset($full[3])) {
            $full[3] = $full[3].$full[0];
            unset($full[0]);
        }

        $whole = [ implode(" ", $full), implode(" ", $rest) ];
        
        if($this->fractions) {
            return implode(" ", array_filter($whole));
        } else {
            return implode(", ", array_filter($whole));
        }
    }
}

?>