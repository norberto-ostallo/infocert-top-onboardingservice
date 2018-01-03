<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for address StructType
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $details;
    /**
     * The street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $street;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $number;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zip;
    /**
     * The hamlet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hamlet;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The province
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $province;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * Constructor method for address
     * @uses Address::setDetails()
     * @uses Address::setStreet()
     * @uses Address::setNumber()
     * @uses Address::setZip()
     * @uses Address::setHamlet()
     * @uses Address::setCity()
     * @uses Address::setProvince()
     * @uses Address::setCountry()
     * @param string $details
     * @param string $street
     * @param string $number
     * @param string $zip
     * @param string $hamlet
     * @param string $city
     * @param string $province
     * @param string $country
     */
    public function __construct($details = null, $street = null, $number = null, $zip = null, $hamlet = null, $city = null, $province = null, $country = null)
    {
        $this
            ->setDetails($details)
            ->setStreet($street)
            ->setNumber($number)
            ->setZip($zip)
            ->setHamlet($hamlet)
            ->setCity($city)
            ->setProvince($province)
            ->setCountry($country);
    }
    /**
     * Get details value
     * @return string|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param string $details
     * @return \InfoCert\Top\OnboardingService\StructType\Address
     */
    public function setDetails($details = null)
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($details)), __LINE__);
        }
        $this->details = $details;
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \InfoCert\Top\OnboardingService\StructType\Address
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->street = $street;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \InfoCert\Top\OnboardingService\StructType\Address
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $zip
     * @return \InfoCert\Top\OnboardingService\StructType\Address
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->zip = $zip;
        return $this;
    }
    /**
     * Get hamlet value
     * @return string|null
     */
    public function getHamlet()
    {
        return $this->hamlet;
    }
    /**
     * Set hamlet value
     * @param string $hamlet
     * @return \InfoCert\Top\OnboardingService\StructType\Address
     */
    public function setHamlet($hamlet = null)
    {
        // validation for constraint: string
        if (!is_null($hamlet) && !is_string($hamlet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hamlet)), __LINE__);
        }
        $this->hamlet = $hamlet;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \InfoCert\Top\OnboardingService\StructType\Address
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \InfoCert\Top\OnboardingService\StructType\Address
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($province)), __LINE__);
        }
        $this->province = $province;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \InfoCert\Top\OnboardingService\StructType\Address
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Address
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
