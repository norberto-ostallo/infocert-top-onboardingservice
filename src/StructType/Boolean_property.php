<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for boolean-property StructType
 * @subpackage Structs
 */
class Boolean_property extends Property
{
    /**
     * The boolean
     * @var bool
     */
    public $boolean;
    /**
     * Constructor method for boolean-property
     * @uses Boolean_property::setBoolean()
     * @param bool $boolean
     */
    public function __construct($boolean = null)
    {
        $this
            ->setBoolean($boolean);
    }
    /**
     * Get boolean value
     * @return bool|null
     */
    public function getBoolean()
    {
        return $this->boolean;
    }
    /**
     * Set boolean value
     * @param bool $boolean
     * @return \InfoCert\Top\OnboardingService\StructType\Boolean_property
     */
    public function setBoolean($boolean = null)
    {
        // validation for constraint: boolean
        if (!is_null($boolean) && !is_bool($boolean)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($boolean)), __LINE__);
        }
        $this->boolean = $boolean;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Boolean_property
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
