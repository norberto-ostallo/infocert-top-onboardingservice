<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subject StructType
 * @subpackage Structs
 */
class Subject extends Legal_id
{
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $first_name;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $last_name;
    /**
     * Constructor method for subject
     * @uses Subject::setFirst_name()
     * @uses Subject::setLast_name()
     * @param string $first_name
     * @param string $last_name
     */
    public function __construct($first_name = null, $last_name = null)
    {
        $this
            ->setFirst_name($first_name)
            ->setLast_name($last_name);
    }
    /**
     * Get first_name value
     * @return string
     */
    public function getFirst_name()
    {
        return $this->{'first-name'};
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \InfoCert\Top\OnboardingService\StructType\Subject
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $this->{'first-name'} = $first_name;
        return $this;
    }
    /**
     * Get last_name value
     * @return string
     */
    public function getLast_name()
    {
        return $this->{'last-name'};
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \InfoCert\Top\OnboardingService\StructType\Subject
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $this->{'last-name'} = $last_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Subject
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
