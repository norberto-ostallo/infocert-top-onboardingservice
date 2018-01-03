<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSignerStatusResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getSignerStatusResponse
 * @subpackage Structs
 */
class GetSignerStatusResponse extends AbstractStructBase
{
    /**
     * The signer_status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Signer_status
     */
    public $signer_status;
    /**
     * Constructor method for getSignerStatusResponse
     * @uses GetSignerStatusResponse::setSigner_status()
     * @param \InfoCert\Top\OnboardingService\StructType\Signer_status $signer_status
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Signer_status $signer_status = null)
    {
        $this
            ->setSigner_status($signer_status);
    }
    /**
     * Get signer_status value
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_status|null
     */
    public function getSigner_status()
    {
        return $this->{'signer-status'};
    }
    /**
     * Set signer_status value
     * @param \InfoCert\Top\OnboardingService\StructType\Signer_status $signer_status
     * @return \InfoCert\Top\OnboardingService\StructType\GetSignerStatusResponse
     */
    public function setSigner_status(\InfoCert\Top\OnboardingService\StructType\Signer_status $signer_status = null)
    {
        $this->signer_status = $this->{'signer-status'} = $signer_status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetSignerStatusResponse
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
