<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cadesSignResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:cadesSignResponse
 * @subpackage Structs
 */
class CadesSignResponse extends AbstractStructBase
{
    /**
     * The signed_content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Content
     */
    public $signed_content;
    /**
     * Constructor method for cadesSignResponse
     * @uses CadesSignResponse::setSigned_content()
     * @param \InfoCert\Top\OnboardingService\StructType\Content $signed_content
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Content $signed_content = null)
    {
        $this
            ->setSigned_content($signed_content);
    }
    /**
     * Get signed_content value
     * @return \InfoCert\Top\OnboardingService\StructType\Content|null
     */
    public function getSigned_content()
    {
        return $this->{'signed-content'};
    }
    /**
     * Set signed_content value
     * @param \InfoCert\Top\OnboardingService\StructType\Content $signed_content
     * @return \InfoCert\Top\OnboardingService\StructType\CadesSignResponse
     */
    public function setSigned_content(\InfoCert\Top\OnboardingService\StructType\Content $signed_content = null)
    {
        $this->signed_content = $this->{'signed-content'} = $signed_content;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\CadesSignResponse
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
