<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDossierStatusResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getDossierStatusResponse
 * @subpackage Structs
 */
class GetDossierStatusResponse extends AbstractStructBase
{
    /**
     * The dossier_status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Dossier_status
     */
    public $dossier_status;
    /**
     * Constructor method for getDossierStatusResponse
     * @uses GetDossierStatusResponse::setDossier_status()
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_status $dossier_status
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Dossier_status $dossier_status = null)
    {
        $this
            ->setDossier_status($dossier_status);
    }
    /**
     * Get dossier_status value
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_status|null
     */
    public function getDossier_status()
    {
        return $this->{'dossier-status'};
    }
    /**
     * Set dossier_status value
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_status $dossier_status
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierStatusResponse
     */
    public function setDossier_status(\InfoCert\Top\OnboardingService\StructType\Dossier_status $dossier_status = null)
    {
        $this->dossier_status = $this->{'dossier-status'} = $dossier_status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierStatusResponse
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
