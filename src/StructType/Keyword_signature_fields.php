<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for keyword-signature-fields StructType
 * @subpackage Structs
 */
class Keyword_signature_fields extends AbstractStructBase
{
    /**
     * The keyword_signature_field
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field[]
     */
    public $keyword_signature_field;
    /**
     * Constructor method for keyword-signature-fields
     * @uses Keyword_signature_fields::setKeyword_signature_field()
     * @param \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field[] $keyword_signature_field
     */
    public function __construct(array $keyword_signature_field = array())
    {
        $this
            ->setKeyword_signature_field($keyword_signature_field);
    }
    /**
     * Get keyword_signature_field value
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field[]|null
     */
    public function getKeyword_signature_field()
    {
        return $this->{'keyword-signature-field'};
    }
    /**
     * Set keyword_signature_field value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field[] $keyword_signature_field
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields
     */
    public function setKeyword_signature_field(array $keyword_signature_field = array())
    {
        foreach ($keyword_signature_field as $keyword_signature_fieldsKeyword_signature_fieldItem) {
            // validation for constraint: itemType
            if (!$keyword_signature_fieldsKeyword_signature_fieldItem instanceof \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field) {
                throw new \InvalidArgumentException(sprintf('The keyword_signature_field property can only contain items of \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field, "%s" given', is_object($keyword_signature_fieldsKeyword_signature_fieldItem) ? get_class($keyword_signature_fieldsKeyword_signature_fieldItem) : gettype($keyword_signature_fieldsKeyword_signature_fieldItem)), __LINE__);
            }
        }
        $this->keyword_signature_field = $this->{'keyword-signature-field'} = $keyword_signature_field;
        return $this;
    }
    /**
     */
    public function addToKeyword_signature_field(\InfoCert\Top\OnboardingService\StructType\Keyword_signature_field $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field) {
            throw new \InvalidArgumentException(sprintf('The keyword_signature_field property can only contain items of \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->keyword_signature_field[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields
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
