<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for property StructType
 * @subpackage Structs
 */
abstract class Property extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $name;
    /**
     * Constructor method for property
     * @uses Property::setName()
     * @param string $name
     */
    public function __construct($name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get name value
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \InfoCert\Top\OnboardingService\StructType\Property
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Property
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
