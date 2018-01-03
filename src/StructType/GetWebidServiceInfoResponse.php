<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWebidServiceInfoResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getWebidServiceInfoResponse
 * @subpackage Structs
 */
class GetWebidServiceInfoResponse extends AbstractStructBase
{
    /**
     * The webid_service_info
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Webid_service_info
     */
    public $webid_service_info;
    /**
     * Constructor method for getWebidServiceInfoResponse
     * @uses GetWebidServiceInfoResponse::setWebid_service_info()
     * @param \InfoCert\Top\OnboardingService\StructType\Webid_service_info $webid_service_info
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Webid_service_info $webid_service_info = null)
    {
        $this
            ->setWebid_service_info($webid_service_info);
    }
    /**
     * Get webid_service_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Webid_service_info|null
     */
    public function getWebid_service_info()
    {
        return $this->{'webid-service-info'};
    }
    /**
     * Set webid_service_info value
     * @param \InfoCert\Top\OnboardingService\StructType\Webid_service_info $webid_service_info
     * @return \InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfoResponse
     */
    public function setWebid_service_info(\InfoCert\Top\OnboardingService\StructType\Webid_service_info $webid_service_info = null)
    {
        $this->webid_service_info = $this->{'webid-service-info'} = $webid_service_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfoResponse
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
