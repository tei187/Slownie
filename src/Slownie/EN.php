<?php
namespace tei187\Slownie;

use tei187\Resources               as Resources;
use tei187\Resources\ISO4217\Xref  as Xref;
/**
 * Class used to transcribe float value into words in English language.
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 * @version 1.0.0
 */
class EN extends \tei187\Slownie\Slownie {
    /** 
     * @var array[] $dictionary Dictionary for translation purposes and cross-reference tables. 
     * @uses \tei187\Resources\ISO4217\EN::Currencies
     * @uses \tei187\Resources\ISO4217::NumberToCode
     * @uses \tei187\Resources\EN::Numbers
     * @uses \tei187\Resources\EN::LargeNumbers
     * */
    protected $dictionary = [
        'currencies' => Resources\ISO4217\EN::Currencies, 
           'numbers' => Resources\EN::Numbers,
              'xref' => Xref::NumberToCode,
            'suffix' => Resources\EN::LargeNumbers
    ];

    /**
     * Template method to get correct suffix per nth power of 10 and given value part.
     * @uses EN::$dictionary
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
     * @uses EN::$dictionary
     * @param string|null $v Input hundreds part.
     * @param boolean $minor Switch if minor.
     * @return string Hundreds as string or empty.
     */
    protected function getHundreds(?string $v = null, bool $minor = false) : string {
        if(intval($v) > 0) {
            $teens = false;
            $break = [
                'hundreds' => floor($v / 100),
                    'tens' => floor(($v % 100) / 10),
                  'single' => $v % 10,
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
                $parts[] = $this->dictionary['numbers']['oox'][$break['single']];
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
     * @uses EN::$dictionary
     * @return string Currency suffix or empty string if not found.
     */
    protected function getCurrencyFull() : string {
        if($this->currency->getPicker() != null) {
            $imploded = intval(implode("", $this->amountFull));
            if($imploded == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['s']; // single
            } elseif ($imploded >= 2) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['p']; // plural
            }
        }
        return "";
    }

    /**
     * Returns currency minors' suffix.
     * @uses EN::$dictionary
     * @param string|null $v Input rest.
     * @return string Currency minor suffix or empty string if not found.
     */
    protected function getCurrencyMinor(?string $v = null) : string {
        if($this->currency->getPicker() != null) {
            if($v == 1) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['s']; // single
            } elseif ($v >= 2) {
                return $this->dictionary['currencies'][$this->currency->getPicker()]['minor']['p']; // plural
            }
        }
        return "";
    }
}