<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for error StructType
 * @subpackage Structs
 */
class Error extends AbstractStructBase
{
    /**
     * The cod
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $cod;
    /**
     * The msg
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $msg;
    /**
     * Constructor method for error
     * @uses Error::setCod()
     * @uses Error::setMsg()
     * @param string $cod
     * @param string $msg
     */
    public function __construct($cod = null, $msg = null)
    {
        $this
            ->setCod($cod)
            ->setMsg($msg);
    }
    /**
     * Get cod value
     * @return string
     */
    public function getCod()
    {
        return $this->cod;
    }
    /**
     * Set cod value
     * @param string $cod
     * @return \InfoCert\Top\OnboardingService\StructType\Error
     */
    public function setCod($cod = null)
    {
        // validation for constraint: string
        if (!is_null($cod) && !is_string($cod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cod)), __LINE__);
        }
        $this->cod = $cod;
        return $this;
    }
    /**
     * Get msg value
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }
    /**
     * Set msg value
     * @param string $msg
     * @return \InfoCert\Top\OnboardingService\StructType\Error
     */
    public function setMsg($msg = null)
    {
        // validation for constraint: string
        if (!is_null($msg) && !is_string($msg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msg)), __LINE__);
        }
        $this->msg = $msg;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Error
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
