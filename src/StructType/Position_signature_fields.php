<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for position-signature-fields StructType
 * @subpackage Structs
 */
class Position_signature_fields extends AbstractStructBase
{
    /**
     * The position_signature_field
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Position_signature_field[]
     */
    public $position_signature_field;
    /**
     * Constructor method for position-signature-fields
     * @uses Position_signature_fields::setPosition_signature_field()
     * @param \InfoCert\Top\OnboardingService\StructType\Position_signature_field[] $position_signature_field
     */
    public function __construct(array $position_signature_field = array())
    {
        $this
            ->setPosition_signature_field($position_signature_field);
    }
    /**
     * Get position_signature_field value
     * @return \InfoCert\Top\OnboardingService\StructType\Position_signature_field[]|null
     */
    public function getPosition_signature_field()
    {
        return $this->{'position-signature-field'};
    }
    /**
     * Set position_signature_field value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Position_signature_field[] $position_signature_field
     * @return \InfoCert\Top\OnboardingService\StructType\Position_signature_fields
     */
    public function setPosition_signature_field(array $position_signature_field = array())
    {
        foreach ($position_signature_field as $position_signature_fieldsPosition_signature_fieldItem) {
            // validation for constraint: itemType
            if (!$position_signature_fieldsPosition_signature_fieldItem instanceof \InfoCert\Top\OnboardingService\StructType\Position_signature_field) {
                throw new \InvalidArgumentException(sprintf('The position_signature_field property can only contain items of \InfoCert\Top\OnboardingService\StructType\Position_signature_field, "%s" given', is_object($position_signature_fieldsPosition_signature_fieldItem) ? get_class($position_signature_fieldsPosition_signature_fieldItem) : gettype($position_signature_fieldsPosition_signature_fieldItem)), __LINE__);
            }
        }
        $this->position_signature_field = $this->{'position-signature-field'} = $position_signature_field;
        return $this;
    }
    /**
     */
    public function addToPosition_signature_field(\InfoCert\Top\OnboardingService\StructType\Position_signature_field $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Position_signature_field) {
            throw new \InvalidArgumentException(sprintf('The position_signature_field property can only contain items of \InfoCert\Top\OnboardingService\StructType\Position_signature_field, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->position_signature_field[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Position_signature_fields
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
