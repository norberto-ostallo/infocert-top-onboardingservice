<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for properties-property StructType
 * @subpackage Structs
 */
class Properties_property extends Property
{
    /**
     * The properties
     * @var \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public $properties;
    /**
     * Constructor method for properties-property
     * @uses Properties_property::setProperties()
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $properties
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Properties $properties = null)
    {
        $this
            ->setProperties($properties);
    }
    /**
     * Get properties value
     * @return \InfoCert\Top\OnboardingService\StructType\Properties|null
     */
    public function getProperties()
    {
        return $this->properties;
    }
    /**
     * Set properties value
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $properties
     * @return \InfoCert\Top\OnboardingService\StructType\Properties_property
     */
    public function setProperties(\InfoCert\Top\OnboardingService\StructType\Properties $properties = null)
    {
        $this->properties = $properties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Properties_property
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
