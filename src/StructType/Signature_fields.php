<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signature-fields StructType
 * @subpackage Structs
 */
class Signature_fields extends AbstractStructBase
{
    /**
     * The signature_field
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Signature_field[]
     */
    public $signature_field;
    /**
     * Constructor method for signature-fields
     * @uses Signature_fields::setSignature_field()
     * @param \InfoCert\Top\OnboardingService\StructType\Signature_field[] $signature_field
     */
    public function __construct(array $signature_field = array())
    {
        $this
            ->setSignature_field($signature_field);
    }
    /**
     * Get signature_field value
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_field[]|null
     */
    public function getSignature_field()
    {
        return $this->{'signature-field'};
    }
    /**
     * Set signature_field value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Signature_field[] $signature_field
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_fields
     */
    public function setSignature_field(array $signature_field = array())
    {
        foreach ($signature_field as $signature_fieldsSignature_fieldItem) {
            // validation for constraint: itemType
            if (!$signature_fieldsSignature_fieldItem instanceof \InfoCert\Top\OnboardingService\StructType\Signature_field) {
                throw new \InvalidArgumentException(sprintf('The signature_field property can only contain items of \InfoCert\Top\OnboardingService\StructType\Signature_field, "%s" given', is_object($signature_fieldsSignature_fieldItem) ? get_class($signature_fieldsSignature_fieldItem) : gettype($signature_fieldsSignature_fieldItem)), __LINE__);
            }
        }
        $this->signature_field = $this->{'signature-field'} = $signature_field;
        return $this;
    }
    /**
     */
    public function addToSignature_field(\InfoCert\Top\OnboardingService\StructType\Signature_field $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Signature_field) {
            throw new \InvalidArgumentException(sprintf('The signature_field property can only contain items of \InfoCert\Top\OnboardingService\StructType\Signature_field, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->signature_field[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_fields
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
