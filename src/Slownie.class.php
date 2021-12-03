<?php
/**
 * File holding main classes for Slownie.
 */
namespace tei187\Slownie;

use       tei187\Resources                      as Resources;
use const tei187\Resources\ISO4217\Specifics    as CurrencySpecifics;
use const tei187\Resources\ISO4217\NumberToCode as CurrencyNumberToCode;

/**
 * Abstract class used to transcribe float value into words. Base for PL, EN, DE class extensions.
 * @abstract
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 * @version 1.0.0
 */
abstract class SlownieBase {
// input-specific
    /** @var string[] $amountFull Hold parts of amount (without minor parts), divided by hundreds mark. */
    protected $amountFull = [];
    /** @var integer $amountPart Holds decimal parts of amount, only minors. */
    protected $amountPart = 0;
    /** @var float|string $input Whatever was passed as amount. */
    protected $input = 0;
// currency-based
    /** @var object $currency Chosen currency, null by default. */
    protected Currency $currency;
// config
    /** @var string[] $formatting Settings for number formatting. */
    protected $formatting = [ 'thousands' => ",", "decimals" => "." ];
    /** @var bool $pickerUse Flag to switch between translated currency name or currency picker. */
    protected $pickerUse = false;
    /** @var boolean $fractions Translate fully (with minors) or partially (with fractional notation). FALSE by default. */
    protected $fractions = false;
    /** @var bool $needsParsing Flag to accertain if amount needs reparsing due to changes. */
    protected $needsParsing = true;
// methods
    /**
     * Class constructor.
     *
     * @param string|null $amount Amount to process. Has to be well formed float or float-formed string.
     * @param string|\tei187\Slownie\Currency|null $currency ISO 4217 currency code or number (refer to tei187\Resources\ISO4217\{lang}\Currencies or tei187\Resources\ISO4217\NumberToCode). By default null.
     * @param boolean $fractions If FALSE translates fully, if TRUE uses fractional notation for minor rest.
     * @param boolean $picker Sets flag to use or not use picker rather than full translation of currency.
     * @return void
     */
    function __construct(?string $amount = null, ?mixed $currency = null, bool $fractions = false, bool $picker = false) {
        if(is_string($currency)) {
            $this->currency = new \tei187\Slownie\Currency($currency);
        } elseif(is_object($currency) AND get_class($currency) === new \tei187\Slownie\Currency) {
            $this->currency = $currency;
        }
        if($picker !== null) { 
            $this->setPickerUse($picker);
        }
        $this->input = $amount;
        $this->setFractions($fractions);
        $this->parse($this->input);
    }

    /**
     * Returns string x/y, where X is the minor rest and Y is power of 10 to the exponent length.
     *
     * @return string
     */
    protected function relayFractionMinors() : string {
        return str_pad(
            $this->amountPart, 
            $this->currency->getExponent(), 
            "0", STR_PAD_RIGHT
        ) . "/" . (10 ** $this->currency->getExponent());
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
        if($this->amountPart > 0 AND $this->currency->getExponentUse() === true) {
            if($this->fractions) {
                $rest[] = $this->relayFractionMinors();
            } else {
                $rest[] = $this->getHundreds(str_pad($this->amountPart, $this->currency->getExponent(), 0, STR_PAD_RIGHT), true);
                $rest[] = $this->getCurrencyMinor(str_pad($this->amountPart, $this->currency->getExponent(), 0, STR_PAD_RIGHT), true);
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
    protected function translateNumber(?int $power = null, ?int $digits = null) : string {
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
     * Parses input amount. Assigns values to $this->amountPart and $this->amountFull.
     *
     * @param string|null $v Input amount.
     * @return boolean Returns TRUE is value is proper, FALSE if otherwise.
     */
    protected function parse(?string $v = null) : bool {
        $v = str_replace($this->formatting['thousands'], "", $v);
        if(strlen(trim($v)) !== 0 or !is_null($v)) {
            $exp = explode($this->formatting['decimals'], $v);
            $final = array_map(
                function($v) { return strrev($v); }, 
                array_reverse(str_split(strrev($exp[0]), 3))
            );
            $this->amountPart = 
                count($exp) == 2 
                    ? round(
                        $exp[1] / (10 ** strlen($exp[1])), 
                        $this->currency->getExponent()) * (10 ** $this->currency->getExponent() )
                    : 0;
            $this->amountFull = array_map( fn($val): string => intval($val), $final);
        } else {
            $this->amountPart = null;
            $this->amountFull = null;
            return false;
        }
        return true;
    }

    /**
     * Returns amount in words.
     *
     * @param float|string|null $v Input value. Has to be well formed float or float formed string.
     * @param string $currency ISO 4217 currency code or number.
     * @param boolean|null $fractions If FALSE translates fully, if TRUE uses fractional notation for minor rest.
     * @param boolean|null $picker Sets flag to use or not use picker rather than full translation of currency.
     * @return string Output in words.
     */

     /**
      * Undocumented function
      *
      * @param [type] $v
      * @param mixed|null $currency
      * @param boolean|null $fractions
      * @param boolean|null $picker
      * @return string
      */
    public function output(?mixed $v = null, ?mixed $currency = null, ?bool $fractions = false, ?bool $picker = false) : string {
        if($v !== null)          { $this->input = $v; }
        if($currency !== null)   { 
            
        }
        if($picker !== null)     { $this->setPickerUse($picker); }
        if($fractions !== null)  { $this->setFractions($fractions); }

        if($this->needsParsing)  { $this->parse($this->input); }
        return $this->relayString();
    }

    /**
     * Developer method. Verifies if all keys from tei187\Resources\ISO4217\NumberToCode exist in language pack.
     * 
     * @return bool TRUE on correct, FALSE otherwise.
     */
    public function verifyCodes() : bool {
        $i = 0;
        foreach(CurrencyNumberToCode as $v) {
            if(!key_exists($v, $this->dictionary['currencies'])) $i++;
        }
        if($i != 0) return false;
        return true;
    }
// - setters
    /**
     * Assigns currency.
     *
     * @param string|null $currency Currency shortcode. Has to exist as index in tei187\Resources\ISO4217\{lang}\Currencies, or as cross-referenced ISO 4217 _STRING_ index of tei187\Resources\ISO4217\NumberToCode (with leading zeroes), or 'none' (default).
     * @return self
     */
    public function setCurrency(?string $currency = null) : self {
        $this->currency = new \tei187\Slownie\Currency();
        if($this->currency->set($currency) === false) {
            $this->currency->reset();
            $this->currency->setExponent(0);
            $this->currency->setExponentUse(false);
        }
        return $this;
    }

    /**
     * Defines input string formatting.
     * 
     * @param string $thousands Thousands separator.
     * @param string $decimals Decimal separator.
     * @return void
     */
    public function setFormatting(string $thousands = ".", string $decimals = ",") : void {
        $this->formatting['thousands'] = $thousands != null ? $thousands : $this->formatting['thousands'];
        $this->formatting['decimals']  = $decimals != null  ? $decimals  : $this->formatting['decimals'];
        return;
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
// - getters
    /**
     * Returns currently set currency... in uppercase. That's pretty much it...
     *
     * @return string
     */
    public function getCurrency() : string { return strtoupper($this->currency->getPicker()); }

    /**
     * Returns quintillions in words.
     *
     * @param string $v Input quintillions part.
     * @return string Quintillions as string or empty.
     */
    protected function getQuintillions(?string $v = null) : string { return $this->getLargeNumbers(18, $v); }

    /**
     * Returns quadrillions in words.
     *
     * @param string $v Input quadrillions part.
     * @return string Quadrillions as string or empty.
     */
    protected function getQuadrillions(?string $v = null) : string { return $this->getLargeNumbers(15, $v);}

    /**
     * Returns trillions in words.
     *
     * @param string $v Input trillions part.
     * @return string Trillions as string or empty.
     */
    protected function getTrillions(?string $v = null) : string { return $this->getLargeNumbers(12, $v); }

    /**
     * Returns billions in words.
     *
     * @param string $v Input billions part.
     * @return string Billions as string or empty.
     */
    protected function getBillions(?string $v = null) : string { return $this->getLargeNumbers(9, $v); }

    /**
     * Returns millions in words.
     *
     * @param string $v Input millions part.
     * @return string Millions as string or empty.
     */
    protected function getMillions(?string $v = null) : string { return $this->getLargeNumbers(6, $v); }

    /**
     * Returns thousands in words.
     *
     * @param string $v Input thousands part.
     * @return string Thousands as string or empty.
     */
    protected function getThousands(?string $v = null) : string { return $this->getLargeNumbers(3, $v); }

    abstract protected function getCurrencyMinor(?string $v = null) : string;
    abstract protected function getCurrencyFull() : string;
    abstract protected function getHundreds(?string $v = null) : string;
    abstract protected function getLargeNumbers(int $power = 0, ?string $v = null) : string;
}

/**
 * Class designed to retrieve and handle basic currency-specific information.
 */
class Currency {
    /** @var string|integer|null Assigned currency picker. */
    private ?string $picker;
    /** @var integer|null Length of assigned currency exponent. */
    private ?int $exponent;
    /** @var bool|null Flag wether exponent is used/valid/available as a coin of banknote. */
    private ?bool $exponentUse;

    /**
     * Class constructor.
     * @param string|integer|null $c ISO 4217 applicable currency number (3-characters-long numeric or string) or currency code (3-characters-long string).
     */
    function __construct(?mixed $c = null) {
        $this->checkCurrency($c);
    }

    /**
     * Verifies input, including assigning attributes if verified.
     * @param string|integer|null $c ISO 4217 applicable currency number (3-characters-long numeric or string) or currency code (3-characters-long string).
     * @return boolean
     */
    private function checkCurrency(?mixed $c = null) : bool {
        $c = strval(preg_replace('/[^0-9A-Za-z]?/m', '', $c));
        
        if(!is_null(CurrencyNumberToCode) AND !is_null($c) AND strlen($c) != 0) {
            if(is_numeric($c)) {
                $c = str_pad(strval($c), 3, "0", STR_PAD_LEFT);
                if(key_exists($c, CurrencyNumberToCode))
                    $this->assignSpecifics((string) CurrencyNumberToCode[$c]);
                    return true;
            } elseif(ctype_alpha($c) and strlen($c) == 3) {
                if(key_exists(strtolower($c), CurrencySpecifics))
                    $this->assignSpecifics($c);
                    return true;
            } else {
                $this->reset();
                return false;
            }
        }
        // reset object, because input currency is not correct
        $this->reset();
        return false;
    }

    /**
     * Assigns specific attributes per recognized currency.
     * @param string $c ISO 4217 applicable currency number (3-characters-long numeric or string) or currency code (3-characters-long string).
     * @return void
     */
    private function assignSpecifics(string $c) : void {
        $this->picker = strtolower($c);

        $this->exponent = 
            isset(CurrencySpecifics[strtolower($c)]['minor']['d']) 
            ? CurrencySpecifics[strtolower($c)]['minor']['d'] 
            : 2;

        $this->exponentUse = 
            isset(CurrencySpecifics[strtolower($c)]['minor']['u']) 
            ? CurrencySpecifics[strtolower($c)]['minor']['u'] 
            : true;
        
        return;
    }

    /**
     * Public equivalent of self::checkCurrency. If parameter is proper, fills object's attributes: picker, decimal exponent and exponent's use.
     * @param string $c Currency numeric code or alpha code according to ISO 4217 standard.
     * @return boolean|Currency
     */
    public function set(?string $c = null) {
        if(!$this->checkCurrency($c)) {
            return false;
        }
        return $this;
    }

    /**
     * Resets object's attributes.
     * @return void
     */
    public function reset() : self {
        $this->picker      = null;
        $this->exponent    = null;
        $this->exponentUse = null;
        return $this;
    }

    /**
     * Forces overwrite of decimal exponent. In this case, must be used after set() method.
     *
     * @param integer $x Decimal point.
     * @return self
     */
    public function setExponent(int $x) : self {
        $this->exponent = $x;
        return $this;
    }

    /**
     * Forces overwrite of exponent's use. In this case, must be used after set() method.
     *
     * @param boolean $b Flag boolean.
     * @return self
     */
    public function setExponentUse(bool $b) : self {
        $this->exponentUse = $b;
        return $this;
    }

    /**
     * Retrieves attributes.
     * @return array
     */
    public function getParams() : array {
        return [
            'picker' =>      $this->picker,
            'exponent' =>    $this->exponent,
            'exponentUse' => $this->exponentUse
        ];
    }

    /** 
     * @param boolean $flag Default FALSE. Returns picker in lowercase on FALSE, uppercase on TRUE.
     * @return string Currently assigned picker. */
    public function getPicker(bool $flag = false) : ?string { if($flag) { return strtoupper($this->picker); } else { return strtolower($this->picker); } }
    /** @return integer Assigned currencies' exponent length. */
    public function getExponent()    : int    { return $this->exponent; }
    /** @return bool Assigned currencies' exponent use status. */
    public function getExponentUse() : bool   { return $this->exponentUse; }
}

# # # # # # # # # #
# language  packs #
# # # # # # # # # #

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
              'xref' => CurrencyNumberToCode,
            'suffix' => Resources\DE\LargeNumbers
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     *
     * @param integer $power N-th power of 10.
     * @param string|null $v Input value part.
     * @return string
     */
    protected function getLargeNumbers(int $power = 0, ?string $v = null) : string {
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
    protected function getHundreds(?string $v = null, bool $minor = false) : string {
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
        if($this->currency->getPicker() != null) {
            $imploded = intval(implode("", $this->amountFull));
            if($imploded == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['s'];
            } elseif ($imploded >= 2) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['p'];
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
    protected function getCurrencyMinor(?string $v = null) : string {
        if($this->currency->getPicker() != null) {
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['s'];
            } elseif ($v >= 2) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['p'];
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
                    if(@$this->dictionary['currencies'][$this->currency->getPicker()]['f']) {
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
                $rest[] = $this->getHundreds(str_pad($this->amountPart, $this->currency->getExponent(), 0, STR_PAD_RIGHT), true);
                $rest[] = $this->getCurrencyMinor(str_pad($this->amountPart, $this->currency->getExponent(), 0, STR_PAD_RIGHT), true);
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
              'xref' => CurrencyNumberToCode,
            'suffix' => Resources\EN\LargeNumbers
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     *
     * @param integer $power N-th power of 10.
     * @param string|null $v Input value part.
     * @return string
     */
    protected function getLargeNumbers(int $power = 0, ?string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][$power]['s'];
            } elseif ($v > 1) {
                if($this->currency == null) {
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
    protected function getHundreds(?string $v = null, bool $minor = false) : string {
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
        if($this->currency->getPicker() != null) {
            $imploded = intval(implode("", $this->amountFull));
            if($imploded == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['s'];
            } elseif ($imploded >= 2) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['p'];
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
    protected function getCurrencyMinor(?string $v = null) : string {
        if($this->currency->getPicker() != null) {
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['s'];
            } elseif ($v >= 2) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['p'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }
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
              'xref' => CurrencyNumberToCode,
            'suffix' => Resources\PL\LargeNumbers
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     *
     * @param integer $power N-th power of 10.
     * @param string|null $v Input value part.
     * @return string
     */
    protected function getLargeNumbers(int $power = 0, ?string $v = null) : string {
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
    protected function getHundreds(?string $v = null, bool $minor = false) : string {
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
                if($this->currency->getPicker() !== null) {
                    // check for 'gender'
                    if($minor) {
                        $switch = $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['f'];
                    } else {
                        $switch = $this->dictionary['currencies'][$this->currency->getPicker()]['f'];
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
    protected function getCurrencyFull(?string $v = null) : string {
        if($this->currency->getPicker() != null) {
            $vmod = $v % 10; // rename?
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['s3'];
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
    protected function getCurrencyMinor(?string $v = null) : string {
        if($this->currency->getPicker() != null) {
            $vmod = $v % 10;
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['s1'];
            } elseif (($vmod >= 2 AND $vmod <= 4) AND ($v < 5 OR $v > 21)) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['s2'];
            } elseif (($v >= 5 OR $v <= 22) OR ($v > 20 AND ($vmod >= 5 OR $vmod <= 1))) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['s3'];
            } elseif($v == 0) {
                return "";
            }
        }
        return "";
    }
}

?>