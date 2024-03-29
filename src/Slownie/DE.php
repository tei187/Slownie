<?php
namespace tei187\Slownie;

use tei187\Resources               as Resources;
use tei187\Resources\ISO4217\Xref  as Xref;
/**
 * Class used to transcribe float value into words in German language.
 *
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 * @version 1.0.0
 */
class DE extends \tei187\Slownie\Slownie {
    /**
     * @var array[] $dictionary Dictionary for translation purposes and cross-reference tables.
     * @uses \tei187\Resources\ISO4217\DE::CURRENCIES
     * @uses \tei187\Resources\ISO4217::NUMBER_TO_CODE
     * @uses \tei187\Resources\DE::NUMBERS
     * @uses \tei187\Resources\DE::LARGE_NUMBERS
     */
    protected $dictionary = [
        'currencies' => Resources\ISO4217\DE::CURRENCIES,
           'numbers' => Resources\DE::NUMBERS,
              'xref' => Xref::NUMBER_TO_CODE,
            'suffix' => Resources\DE::LARGE_NUMBERS
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     *
     * @uses DE::$dictionary
     *
     * @param integer $power N-th power of 10.
     * @param string|null $v Input value part.
     * @return string
     */
    protected function getLargeNumbers(int $power = 0, ?string $v = null) : string {
        if(intval($v) > 0) {
            $w = $this->getHundreds($v);
            $w = ((trim($w) == "eins" || trim($w) == "ein") && $power >= 6) ? "eine" : $w;

            if($v == 1) {
                return $w . " " . $this->dictionary['suffix'][$power]['s'];
            } elseif($v > 1) {
                return $w . " " . $this->dictionary['suffix'][$power]['p'];
            }
        }
        return "";
    }

    /**
     * Returns hundreds part in words.
     * @uses DE::$dictionary
     * @param string|null $v Input hundreds part.
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
            if($vInt >= 100) { $parts[] = $this->dictionary['numbers']['xoo'][$hundreds]; }

            if($mod3 >= 10 && $mod3 <= 20) {
                // ranging 10...20
                $parts[] = $this->dictionary['numbers']['oxo'][$mod3];
            } elseif($mod3 > 0 && $mod3 < 10) {
                // ranging 01...09
                $parts[] = $this->dictionary['numbers']['oox'][$mod3];
            } elseif($mod3 > 20) {
                // ranging 21...n
                if($mod2 == 0) {
                    // if single equals 0
                    $parts[] = $this->dictionary['numbers']['oxo'][$mod3];
                } elseif($mod2 == 1) {
                    // if single equals 1
                    $parts[] =
                        $this->dictionary['numbers']['ooy'][1]['m'] .
                        "und" .
                        $this->dictionary['numbers']['oxo'][$tens];
                } else {
                    // if single other than 0 or 1, so x2...x9
                    $parts[] =
                        $this->dictionary['numbers']['oox'][$mod2] .
                        "und" .
                        $this->dictionary['numbers']['oxo'][$tens];
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
     * @uses DE::$dictionary
     * @uses \tei187\Slownie\Slownie::$currency
     * @return string Currency suffix or empty string if not found.
     */
    protected function getCurrencyFull() : string {
        if($this->currency->getPicker() != null) {
            $imploded = intval(implode("", $this->amountFull));
            if($imploded == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['s'];
            } elseif ($imploded >= 2) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['p'];
            }
        }
        return "";
    }

    /**
     * Returns currency minors' suffix.
     * @uses DE::$dictionary
     * @uses \tei187\Slownie\Slownie::$currency
     * @param string|null $v Input rest.
     * @return string Currency minor suffix or empty string if not found.
     */
    protected function getCurrencyMinor(?string $v = null) : string {
        if($this->currency->getPicker() != null) {
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['s'];
            } elseif ($v >= 2) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['p'];
            }
        }
        return "";
    }

    /**
     * Sets full in-words transcription of the amount. Handles $this->amountFull;
     * @uses DE::$dictionary
     * @uses \tei187\Slownie\Slownie::$amountFull
     * @uses \tei187\Slownie\Slownie::$currency
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
                if($w == "eins" || $w == "ein") {
                    $w = @$this->dictionary['currencies'][$this->currency->getPicker()]['f'] ? "eine" : "ein";
                }
                $full[$k] = $w;
            } else {
                $full[$k] = $this->translateNumber($k, $v);
            }
        }
        if($c > 0 && intval(implode("", $this->amountFull)) > 0) {
            $this->pickerUse
                ? $full['currency'] = $this->getCurrency()
                : $full['currency'] = $this->getCurrencyFull($this->amountFull[$c-1]);
        } else {
            $full = [];
        }

        // deal with translation of rest
        $rest = [];
        if($this->amountPart > 0) {
            if($this->fractions) {
                $rest[] = $this->relayFractionMinors();
            } else {
                $rest[] = $this->getHundreds(
                    str_pad($this->amountPart, $this->currency->getExponent(), 0, STR_PAD_RIGHT),
                    true
                );
                $rest[] = $this->getCurrencyMinor(
                    str_pad($this->amountPart, $this->currency->getExponent(), 0, STR_PAD_RIGHT),
                    true
                );
            }
        }
 
        // parse pow0 pow3
        // not sure if this is correct - merging words
        if(isset($full[0])) { $full[0] = str_replace(" ", "", $full[0]); }
        if(isset($full[3])) { $full[3] = str_replace(" ", "", $full[3]); }
        if(isset($full[0]) && isset($full[3])) {
            $full[3] = $full[3].$full[0];
            unset($full[0]);
        }

        $whole = [ implode(" ", $full), implode(" ", $rest) ];
 
        return
            $this->fractions
                ? implode(" ", array_filter($whole))
                : implode(", ", array_filter($whole));
    }
}
