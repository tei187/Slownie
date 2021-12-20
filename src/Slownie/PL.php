<?php
use       tei187\Resources                      as Resources;
use const tei187\Resources\ISO4217\NumberToCode as CurrencyNumberToCode;
/**
 * Class used to transcribe float value into words in Polish language.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 * @version 1.0.0
 */
class PL extends \tei187\Slownie\Slownie {
    /** 
     * @var array $dictionary Dictionary for translation purposes and cross-reference tables. 
     * @uses \tei187\Resources\ISO4217\PL\Currencies
     * @uses \tei187\Resources\ISO4217\NumberToCode
     * @uses \tei187\Resources\PL\Numbers
     * @uses \tei187\Resources\PL\LargeNumbers
     * */
    protected $dictionary = [
        'currencies' => Resources\ISO4217\PL\Currencies, 
           'numbers' => Resources\PL\Numbers,
              'xref' => CurrencyNumberToCode,
            'suffix' => Resources\PL\LargeNumbers
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     * @uses PL::$dictionary
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
     * @uses PL::$dictionary
     * @param string|null $v Input hundreds part.
     * @param boolean $minor Switch if minor.
     * @return string Hundreds as string or empty.
     */
    protected function getHundreds(?string $v = null, bool $minor = false) : string {
        if(intval($v) > 0) {
            $teens = false;
            $break = [
                'hundreds' => floor($v / 100),
                'tens'     => floor(($v % 100) / 10),
                'single'   => $v % 10,
            ];
                
            $parts = [];
            if($break['hundreds'] > 0) {
                // hundreds
                $parts[] = $this->dictionary['numbers']['xoo'][$break['hundreds'] * 100];
            }
            if($break['tens'] > 0) {
                // tens
                if($break['tens'] == 1) {
                    if($break['single'] > 0) {
                        // teens
                        $teens = true;
                        $key = $break['tens'].$break['single'];
                        $parts[] = $this->dictionary['numbers']['oxo'][$key];
                    } else {
                        $parts[] = $this->dictionary['numbers']['oxo'][$break['tens'] * 10];
                    }
                } elseif($break['tens'] >= 2) {
                    $parts[] = $this->dictionary['numbers']['oxo'][$break['tens'] * 10];
                }
            }

            if($teens === false AND $break['single'] > 0) {
                if($this->currency->getPicker() !== null) {
                    // check for 'gender'
                    if($minor) {
                        $switch = $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['f'];
                    } else {
                        $switch = $this->dictionary['currencies'][$this->currency->getPicker()]['f'];
                    }
    
                    if($switch) {
                        if($break['single'] == intval(implode("", $this->amountFull))) {
                            $parts[] = $this->dictionary['numbers']['f-oox'][$break['single']];
                        } elseif($break['single'] > 1) {
                            $parts[] = $this->dictionary['numbers']['f-oox'][$break['single']];
                        } else {
                            $parts[] = $this->dictionary['numbers']['oox'][$break['single']];
                        }
                    } else {
                        $parts[] = $this->dictionary['numbers']['oox'][$break['single']];
                    }
                } else {
                    $parts[] = $this->dictionary['numbers']['oox'][$break['single']];
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
     * @uses PL::$dictionary
     * @param string|null $v Input last part of amount.
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
     * @uses PL::$dictionary
     * @param string|null $v Input rest.
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