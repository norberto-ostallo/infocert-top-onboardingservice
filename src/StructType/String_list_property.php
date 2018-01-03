<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for string-list-property StructType
 * @subpackage Structs
 */
class String_list_property extends Property
{
    /**
     * The string
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $string;
    /**
     * Constructor method for string-list-property
     * @uses String_list_property::setString()
     * @param string[] $string
     */
    public function __construct(array $string = array())
    {
        $this
            ->setString($string);
    }
    /**
     * Get string value
     * @return string[]|null
     */
    public function getString()
    {
        return $this->string;
    }
    /**
     * Set string value
     * @throws \InvalidArgumentException
     * @param string[] $string
     * @return \InfoCert\Top\OnboardingService\StructType\String_list_property
     */
    public function setString(array $string = array())
    {
        foreach ($string as $string_list_propertyStringItem) {
            // validation for constraint: itemType
            if (!is_string($string_list_propertyStringItem)) {
                throw new \InvalidArgumentException(sprintf('The string property can only contain items of string, "%s" given', is_object($string_list_propertyStringItem) ? get_class($string_list_propertyStringItem) : gettype($string_list_propertyStringItem)), __LINE__);
            }
        }
        $this->string = $string;
        return $this;
    }
    /**
     * Add item to string value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \InfoCert\Top\OnboardingService\StructType\String_list_property
     */
    public function addToString($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The string property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->string[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\String_list_property
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
