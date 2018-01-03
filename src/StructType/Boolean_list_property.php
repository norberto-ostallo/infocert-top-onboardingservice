<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for boolean-list-property StructType
 * @subpackage Structs
 */
class Boolean_list_property extends Property
{
    /**
     * The boolean
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var bool[]
     */
    public $boolean;
    /**
     * Constructor method for boolean-list-property
     * @uses Boolean_list_property::setBoolean()
     * @param bool[] $boolean
     */
    public function __construct(array $boolean = array())
    {
        $this
            ->setBoolean($boolean);
    }
    /**
     * Get boolean value
     * @return bool[]|null
     */
    public function getBoolean()
    {
        return $this->boolean;
    }
    /**
     * Set boolean value
     * @throws \InvalidArgumentException
     * @param bool[] $boolean
     * @return \InfoCert\Top\OnboardingService\StructType\Boolean_list_property
     */
    public function setBoolean(array $boolean = array())
    {
        foreach ($boolean as $boolean_list_propertyBooleanItem) {
            // validation for constraint: itemType
            if (!is_bool($boolean_list_propertyBooleanItem)) {
                throw new \InvalidArgumentException(sprintf('The boolean property can only contain items of boolean, "%s" given', is_object($boolean_list_propertyBooleanItem) ? get_class($boolean_list_propertyBooleanItem) : gettype($boolean_list_propertyBooleanItem)), __LINE__);
            }
        }
        $this->boolean = $boolean;
        return $this;
    }
    /**
     * Add item to boolean value
     * @throws \InvalidArgumentException
     * @param bool $item
     * @return \InfoCert\Top\OnboardingService\StructType\Boolean_list_property
     */
    public function addToBoolean($item)
    {
        // validation for constraint: itemType
        if (!is_bool($item)) {
            throw new \InvalidArgumentException(sprintf('The boolean property can only contain items of boolean, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->boolean[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Boolean_list_property
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
