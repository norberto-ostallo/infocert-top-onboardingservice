<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for date-list-property StructType
 * @subpackage Structs
 */
class Date_list_property extends Property
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $date;
    /**
     * Constructor method for date-list-property
     * @uses Date_list_property::setDate()
     * @param string[] $date
     */
    public function __construct(array $date = array())
    {
        $this
            ->setDate($date);
    }
    /**
     * Get date value
     * @return string[]|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @throws \InvalidArgumentException
     * @param string[] $date
     * @return \InfoCert\Top\OnboardingService\StructType\Date_list_property
     */
    public function setDate(array $date = array())
    {
        foreach ($date as $date_list_propertyDateItem) {
            // validation for constraint: itemType
            if (!is_string($date_list_propertyDateItem)) {
                throw new \InvalidArgumentException(sprintf('The date property can only contain items of dateTime, "%s" given', is_object($date_list_propertyDateItem) ? get_class($date_list_propertyDateItem) : gettype($date_list_propertyDateItem)), __LINE__);
            }
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Add item to date value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \InfoCert\Top\OnboardingService\StructType\Date_list_property
     */
    public function addToDate($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The date property can only contain items of dateTime, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->date[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Date_list_property
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
