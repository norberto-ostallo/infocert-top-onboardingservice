<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for attributes StructType
 * @subpackage Structs
 */
class Attributes extends AbstractStructBase
{
    /**
     * The attribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Attribute[]
     */
    public $attribute;
    /**
     * Constructor method for attributes
     * @uses Attributes::setAttribute()
     * @param \InfoCert\Top\OnboardingService\StructType\Attribute[] $attribute
     */
    public function __construct(array $attribute = array())
    {
        $this
            ->setAttribute($attribute);
    }
    /**
     * Get attribute value
     * @return \InfoCert\Top\OnboardingService\StructType\Attribute[]|null
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
    /**
     * Set attribute value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Attribute[] $attribute
     * @return \InfoCert\Top\OnboardingService\StructType\Attributes
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $attributesAttributeItem) {
            // validation for constraint: itemType
            if (!$attributesAttributeItem instanceof \InfoCert\Top\OnboardingService\StructType\Attribute) {
                throw new \InvalidArgumentException(sprintf('The attribute property can only contain items of \InfoCert\Top\OnboardingService\StructType\Attribute, "%s" given', is_object($attributesAttributeItem) ? get_class($attributesAttributeItem) : gettype($attributesAttributeItem)), __LINE__);
            }
        }
        $this->attribute = $attribute;
        return $this;
    }
    /**
     * Add item to attribute value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Attribute $item
     * @return \InfoCert\Top\OnboardingService\StructType\Attributes
     */
    public function addToAttribute(\InfoCert\Top\OnboardingService\StructType\Attribute $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Attribute) {
            throw new \InvalidArgumentException(sprintf('The attribute property can only contain items of \InfoCert\Top\OnboardingService\StructType\Attribute, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->attribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Attributes
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
