<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for properties StructType
 * Meta informations extracted from the WSDL
 * - type: tns:properties
 * @subpackage Structs
 */
class Properties extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The property
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Property[]
     */
    public $property;
    /**
     * Constructor method for properties
     * @uses Properties::setType()
     * @uses Properties::setProperty()
     * @param string $type
     * @param \InfoCert\Top\OnboardingService\StructType\Property[] $property
     */
    public function __construct($type = null, array $property = array())
    {
        $this
            ->setType($type)
            ->setProperty($property);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get property value
     * @return \InfoCert\Top\OnboardingService\StructType\Property[]|null
     */
    public function getProperty()
    {
        return $this->property;
    }
    /**
     * Set property value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Property[] $property
     * @return \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public function setProperty(array $property = array())
    {
        foreach ($property as $propertiesPropertyItem) {
            // validation for constraint: itemType
            if (!$propertiesPropertyItem instanceof \InfoCert\Top\OnboardingService\StructType\Property) {
                throw new \InvalidArgumentException(sprintf('The property property can only contain items of \InfoCert\Top\OnboardingService\StructType\Property, "%s" given', is_object($propertiesPropertyItem) ? get_class($propertiesPropertyItem) : gettype($propertiesPropertyItem)), __LINE__);
            }
        }
        $this->property = $property;
        return $this;
    }
    /**
     * Add item to property value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Property $item
     * @return \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public function addToProperty(\InfoCert\Top\OnboardingService\StructType\Property $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Property) {
            throw new \InvalidArgumentException(sprintf('The property property can only contain items of \InfoCert\Top\OnboardingService\StructType\Property, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->property[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Properties
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
