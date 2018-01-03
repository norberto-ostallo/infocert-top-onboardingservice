<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for properties-list-property StructType
 * @subpackage Structs
 */
class Properties_list_property extends Property
{
    /**
     * The properties
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Properties[]
     */
    public $properties;
    /**
     * Constructor method for properties-list-property
     * @uses Properties_list_property::setProperties()
     * @param \InfoCert\Top\OnboardingService\StructType\Properties[] $properties
     */
    public function __construct(array $properties = array())
    {
        $this
            ->setProperties($properties);
    }
    /**
     * Get properties value
     * @return \InfoCert\Top\OnboardingService\StructType\Properties[]|null
     */
    public function getProperties()
    {
        return $this->properties;
    }
    /**
     * Set properties value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Properties[] $properties
     * @return \InfoCert\Top\OnboardingService\StructType\Properties_list_property
     */
    public function setProperties(array $properties = array())
    {
        foreach ($properties as $properties_list_propertyPropertiesItem) {
            // validation for constraint: itemType
            if (!$properties_list_propertyPropertiesItem instanceof \InfoCert\Top\OnboardingService\StructType\Properties) {
                throw new \InvalidArgumentException(sprintf('The properties property can only contain items of \InfoCert\Top\OnboardingService\StructType\Properties, "%s" given', is_object($properties_list_propertyPropertiesItem) ? get_class($properties_list_propertyPropertiesItem) : gettype($properties_list_propertyPropertiesItem)), __LINE__);
            }
        }
        $this->properties = $properties;
        return $this;
    }
    /**
     * Add item to properties value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $item
     * @return \InfoCert\Top\OnboardingService\StructType\Properties_list_property
     */
    public function addToProperties(\InfoCert\Top\OnboardingService\StructType\Properties $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Properties) {
            throw new \InvalidArgumentException(sprintf('The properties property can only contain items of \InfoCert\Top\OnboardingService\StructType\Properties, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->properties[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Properties_list_property
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
