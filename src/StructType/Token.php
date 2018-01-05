<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for token StructType
 * @subpackage Structs
 */
class Token extends AbstractStructBase
{
    /**
     * The signer_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $signer_id;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for token
     * @uses Token::setSigner_id()
     * @uses Token::set_()
     * @param string $signer_id
     * @param string $_
     */
    public function __construct($signer_id = null, $_ = null)
    {
        $this
            ->setSigner_id($signer_id)
            ->set_($_);
    }
    /**
     * Get signer_id value
     * @return string
     */
    public function getSigner_id()
    {
        return $this->{'signer-id'};
    }
    /**
     * Set signer_id value
     * @param string $signer_id
     * @return \InfoCert\Top\OnboardingService\StructType\Token
     */
    public function setSigner_id($signer_id = null)
    {
        // validation for constraint: string
        if (!is_null($signer_id) && !is_string($signer_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signer_id)), __LINE__);
        }
        $this->signer_id = $this->{'signer-id'} = $signer_id;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \InfoCert\Top\OnboardingService\StructType\Token
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Token
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
