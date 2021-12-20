<?php
namespace tei187\Slownie;

use const tei187\Resources\ISO4217\NumberToCode as CurrencyNumberToCode;

/**
 * Abstract class used to transcribe float value into words. Base for PL, EN, DE class extensions.
 * @abstract
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 * @version 1.0.0
 */
abstract class Slownie {
// input-specific
    /** @var string[] $amountFull Hold parts of amount (without minor parts), divided by hundreds mark. */
    protected $amountFull = [];
    /** @var integer $amountPart Holds decimal parts of amount, only minors. */
    protected $amountPart = 0;
    /** @var float|string $input Whatever was passed as amount. */
    protected $input = 0;
// currency-based
    /** @var object $currency Chosen currency, null by default. */
    protected \tei187\Slownie\Currency $currency;
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
     * @uses \tei187\Slownie\Currency
     * @param string|null $amount Amount to process. Has to be well formed float or float-formed string.
     * @param string|\tei187\Slownie\Currency|null $currency A Currency class object or string ISO 4217 currency code or number (refer to tei187\Resources\ISO4217\{lang}\Currencies or tei187\Resources\ISO4217\NumberToCode). By default null.
     * @param boolean $fractionsUse If FALSE translates fully, if TRUE uses fractional notation for minor rest.
     * @param boolean $pickerUse Sets flag to use or not use picker rather than full translation of currency.
     * @return void
     */
    function __construct(?string $amount = null, ?mixed $currency = null, bool $fractionsUse = false, bool $pickerUse = false) {
        if(is_string($currency)) {
            $this->currency = new \tei187\Slownie\Currency($currency);
        } elseif(is_object($currency) AND get_class($currency) === new \tei187\Slownie\Currency) {
            $this->currency = $currency;
        }
        
        $this->setPickerUse($pickerUse);
        $this->input = $amount;
        $this->setFractions($fractionsUse);
        $this->parse($this->input);
    }

    /**
     * Returns string x/y, where X is the minor rest and Y is power of 10 to the exponent length.
     * @uses \tei187\Slownie\Slownie::$amountPart
     * @uses \tei187\Slownie\Slownie::$currency
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
     * @uses \tei187\Slownie\Slownie::$amountFull
     * @uses \tei187\Slownie\Slownie::$amountPart
     * @uses \tei187\Slownie\Slownie::$currency
     * @uses \tei187\Slownie\Slownie::$fractions
     * @uses \tei187\Slownie\Slownie::$pickerUse
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
     * @uses \tei187\Slownie\Slownie::$currency
     * @uses \tei187\Slownie\Slownie::$formatting
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
     * @uses \tei187\Slownie\Slownie::$input
     * @param string|null $v Input value. Has to be float formed string.
     * @param string $currency ISO 4217 currency code or number.
     * @param boolean|null $fractions If FALSE translates fully, if TRUE uses fractional notation for minor rest.
     * @param boolean|null $picker Sets flag to use or not use picker rather than full translation of currency.
     * @return string Output in words.
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
     * @uses \tei187\Resources\ISO4217\NumberToCode tei187\Resources\ISO4217\NumberToCode 
     * @uses $dictionary
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
     * @uses \tei187\Slownie\Slownie::$currency
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
     * @uses \tei187\Slownie\Slownie::$formatting
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
     * @uses \tei187\Slownie\Slownie::$fractions
     * @param boolean $v
     * @return self
     */
    public function setFractions(bool $v = true) : self {
        $this->fractions = $v;
        return $this;
    }

    /**
     * Sets flag to switch between translated currency name or currency picker use.
     * @uses \tei187\Slownie\Slownie::$pickerUse
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
     * @uses \tei187\Slownie\Slownie::$currency
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