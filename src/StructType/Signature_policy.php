<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signature-policy StructType
 * @subpackage Structs
 */
class Signature_policy extends AbstractStructBase
{
    /**
     * The signature_fields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Signature_fields
     */
    public $signature_fields;
    /**
     * The keyword_signature_fields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields
     */
    public $keyword_signature_fields;
    /**
     * The position_signature_fields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Position_signature_fields
     */
    public $position_signature_fields;
    /**
     * Constructor method for signature-policy
     * @uses Signature_policy::setSignature_fields()
     * @uses Signature_policy::setKeyword_signature_fields()
     * @uses Signature_policy::setPosition_signature_fields()
     * @param \InfoCert\Top\OnboardingService\StructType\Signature_fields $signature_fields
     * @param \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields $keyword_signature_fields
     * @param \InfoCert\Top\OnboardingService\StructType\Position_signature_fields $position_signature_fields
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Signature_fields $signature_fields = null, \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields $keyword_signature_fields = null, \InfoCert\Top\OnboardingService\StructType\Position_signature_fields $position_signature_fields = null)
    {
        $this
            ->setSignature_fields($signature_fields)
            ->setKeyword_signature_fields($keyword_signature_fields)
            ->setPosition_signature_fields($position_signature_fields);
    }
    /**
     * Get signature_fields value
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_fields|null
     */
    public function getSignature_fields()
    {
        return $this->{'signature-fields'};
    }
    /**
     * Set signature_fields value
     * @param \InfoCert\Top\OnboardingService\StructType\Signature_fields $signature_fields
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_policy
     */
    public function setSignature_fields(\InfoCert\Top\OnboardingService\StructType\Signature_fields $signature_fields = null)
    {
        $this->signature_fields = $this->{'signature-fields'} = $signature_fields;
        return $this;
    }
    /**
     * Get keyword_signature_fields value
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields|null
     */
    public function getKeyword_signature_fields()
    {
        return $this->{'keyword-signature-fields'};
    }
    /**
     * Set keyword_signature_fields value
     * @param \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields $keyword_signature_fields
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_policy
     */
    public function setKeyword_signature_fields(\InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields $keyword_signature_fields = null)
    {
        $this->keyword_signature_fields = $this->{'keyword-signature-fields'} = $keyword_signature_fields;
        return $this;
    }
    /**
     * Get position_signature_fields value
     * @return \InfoCert\Top\OnboardingService\StructType\Position_signature_fields|null
     */
    public function getPosition_signature_fields()
    {
        return $this->{'position-signature-fields'};
    }
    /**
     * Set position_signature_fields value
     * @param \InfoCert\Top\OnboardingService\StructType\Position_signature_fields $position_signature_fields
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_policy
     */
    public function setPosition_signature_fields(\InfoCert\Top\OnboardingService\StructType\Position_signature_fields $position_signature_fields = null)
    {
        $this->position_signature_fields = $this->{'position-signature-fields'} = $position_signature_fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_policy
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
