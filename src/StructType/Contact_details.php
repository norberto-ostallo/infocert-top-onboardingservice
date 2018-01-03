<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contact-details StructType
 * @subpackage Structs
 */
class Contact_details extends AbstractStructBase
{
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The mobile_number
     * @var string
     */
    public $mobile_number;
    /**
     * Constructor method for contact-details
     * @uses Contact_details::setEmail()
     * @uses Contact_details::setMobile_number()
     * @param string $email
     * @param string $mobile_number
     */
    public function __construct($email = null, $mobile_number = null)
    {
        $this
            ->setEmail($email)
            ->setMobile_number($mobile_number);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \InfoCert\Top\OnboardingService\StructType\Contact_details
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get mobile_number value
     * @return string|null
     */
    public function getMobile_number()
    {
        return $this->{'mobile-number'};
    }
    /**
     * Set mobile_number value
     * @param string $mobile_number
     * @return \InfoCert\Top\OnboardingService\StructType\Contact_details
     */
    public function setMobile_number($mobile_number = null)
    {
        // validation for constraint: string
        if (!is_null($mobile_number) && !is_string($mobile_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile_number)), __LINE__);
        }
        $this->mobile_number = $this->{'mobile-number'} = $mobile_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Contact_details
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
