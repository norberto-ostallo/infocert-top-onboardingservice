<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for legal-id StructType
 * @subpackage Structs
 */
class Legal_id extends AbstractStructBase
{
    /**
     * The country_code
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $country_code;
    /**
     * The serial_number
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $serial_number;
    /**
     * The serial_type
     * @var string
     */
    public $serial_type;
    /**
     * Constructor method for legal-id
     * @uses Legal_id::setCountry_code()
     * @uses Legal_id::setSerial_number()
     * @uses Legal_id::setSerial_type()
     * @param string $country_code
     * @param string $serial_number
     * @param string $serial_type
     */
    public function __construct($country_code = null, $serial_number = null, $serial_type = null)
    {
        $this
            ->setCountry_code($country_code)
            ->setSerial_number($serial_number)
            ->setSerial_type($serial_type);
    }
    /**
     * Get country_code value
     * @return string
     */
    public function getCountry_code()
    {
        return $this->{'country-code'};
    }
    /**
     * Set country_code value
     * @param string $country_code
     * @return \InfoCert\Top\OnboardingService\StructType\Legal_id
     */
    public function setCountry_code($country_code = null)
    {
        // validation for constraint: string
        if (!is_null($country_code) && !is_string($country_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country_code)), __LINE__);
        }
        $this->country_code = $this->{'country-code'} = $country_code;
        return $this;
    }
    /**
     * Get serial_number value
     * @return string
     */
    public function getSerial_number()
    {
        return $this->{'serial-number'};
    }
    /**
     * Set serial_number value
     * @param string $serial_number
     * @return \InfoCert\Top\OnboardingService\StructType\Legal_id
     */
    public function setSerial_number($serial_number = null)
    {
        // validation for constraint: string
        if (!is_null($serial_number) && !is_string($serial_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serial_number)), __LINE__);
        }
        $this->serial_number = $this->{'serial-number'} = $serial_number;
        return $this;
    }
    /**
     * Get serial_type value
     * @return string|null
     */
    public function getSerial_type()
    {
        return $this->{'serial-type'};
    }
    /**
     * Set serial_type value
     * @param string $serial_type
     * @return \InfoCert\Top\OnboardingService\StructType\Legal_id
     */
    public function setSerial_type($serial_type = null)
    {
        // validation for constraint: string
        if (!is_null($serial_type) && !is_string($serial_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serial_type)), __LINE__);
        }
        $this->serial_type = $this->{'serial-type'} = $serial_type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Legal_id
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
