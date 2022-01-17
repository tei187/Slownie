<?
namespace tei187\Slownie;

use tei187\Resources\ISO4217\Xref as Xref;

/**
 * Class designed to retrieve and handle basic currency-specific information, based on ISO4217-compliant data (code, exponent lenght, exponent use). Valid as of 12th Dec 2021.
 * 
 * @uses \tei187\Resources\ISO4217\Xref::NumberToCode
 * @uses \tei187\Resources\ISO4217\Xref::Specifics
 * 
 * @link https://en.wikipedia.org/wiki/ISO_4217 ISO 4217
 * 
 * @author Piotr Bonk <bonk.piotr@gmail.com>
 * @version 1.0.0
 */
class Currency {
    /** @var string|integer|null Assigned currency picker. */
    private ?string $picker = null;
    /** @var integer|null Length of assigned currency exponent. */
    private ?int $exponent = null;
    /** @var bool|null Flag wether exponent is used/valid/available as a coin of banknote. */
    private ?bool $exponentUse = null;

    /**
     * Class constructor.
     * @param string|integer|null $c ISO 4217 applicable currency number (3-characters-long numeric or string) or currency code (3-characters-long string).
     */
    function __construct($c = null) {
        $this->checkCurrency($c);
    }

    /**
     * Verifies input, including assigning attributes if verified.
     * 
     * @uses \tei187\Resources\ISO4217\Xref::NumberToCode
     * @uses \tei187\Resources\ISO4217\Xref::Specifics
     * 
     * @param string|integer|null $c ISO 4217 applicable currency number (3-characters-long numeric or string) or currency code (3-characters-long string).
     * @return boolean TRUE on success, FALSE on fail.
     */
    private function checkCurrency($c = null) : bool {
        $c = strval(preg_replace('/[^0-9A-Za-z]?/m', '', $c)); // normalize string
        
        if(!is_null(Xref::NumberToCode) AND !is_null($c) AND strlen($c) != 0) {
            if(is_numeric($c)) { 
                // numeric code
                $c = str_pad(strval($c), 3, "0", STR_PAD_LEFT); 
                if(key_exists($c, Xref::NumberToCode)) {
                    $this->assignSpecifics((string) Xref::NumberToCode[$c]);
                    return true;
                }
            } elseif(ctype_alpha($c) and strlen($c) == 3) { 
                // alphabetic code
                if(key_exists(strtolower($c), Xref::Specifics)) {
                    $this->assignSpecifics($c);
                    return true;
                }
            }
        }
        // reset object, because input currency is not correct
        $this->reset();
        return false;
    }

    /**
     * Assigns specific attributes per recognized currency.
     * 
     * @uses \tei187\Resources\ISO4217\Xref::Specifics
     * 
     * @param string $c ISO 4217 applicable currency number (3-characters-long numeric or string) or currency code (3-characters-long string).
     * @return void
     */
    private function assignSpecifics(string $c) : void {
        $this->picker = strtolower($c);

        $this->exponent = 
            isset(Xref::Specifics[strtolower($c)]['minor']['d']) 
                ? Xref::Specifics[strtolower($c)]['minor']['d'] 
                : 2;

        $this->exponentUse = 
            isset(Xref::Specifics[strtolower($c)]['minor']['u']) 
                ? Xref::Specifics[strtolower($c)]['minor']['u'] 
                : true;
        
        return;
    }

    /**
     * Public equivalent of checkCurrency method. If parameter is proper, fills object's attributes: picker, decimal exponent and exponent's use.
     * @uses \tei187\Slownie\Currency::checkCurrency()
     * @param string $c Currency numeric code or alpha code according to ISO 4217 standard.
     * @return boolean|self Returns FALSE if check fails, self otherwise.
     */
    public function set(?string $c = null) : mixed {
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
             $this->picker = null;
           $this->exponent = null;
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
     * @return array Array with keys corresponding to values: 'picker', 'exponent', 'exponentUse'.
     * @uses \tei187\Slownie\Currency::$picker
     * @uses \tei187\Slownie\Currency::$exponent
     * @uses \tei187\Slownie\Currency::$exponentUse
     */
    public function getParams() : array {
        return [
                 'picker' => $this->picker,
               'exponent' => $this->exponent,
            'exponentUse' => $this->exponentUse
        ];
    }

    /** 
     * @uses \tei187\Slownie\Currency::$picker
     * @param boolean $flag Returns picker in lowercase on FALSE, uppercase on TRUE. By default FALSE.
     * @return string Currently assigned picker. */
    public function getPicker(bool $flag = false) : ?string { if($flag) { return strtoupper($this->picker); } else { return strtolower($this->picker); } }
    /** 
     * @return integer Assigned currencies' exponent length. 
     * @uses \tei187\Slownie\Currency::$exponent
    */
    public function getExponent() : int { return $this->exponent; }
    /** 
     * @return bool Assigned currencies' exponent use status. 
     * @uses \tei187\Slownie\Currency::$exponentUse
    */
    public function getExponentUse() : bool { return $this->exponentUse; }
}
?>