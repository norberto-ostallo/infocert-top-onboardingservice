<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDossierResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getDossierResponse
 * @subpackage Structs
 */
class GetDossierResponse extends AbstractStructBase
{
    /**
     * The dossier_info
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Dossier_info
     */
    public $dossier_info;
    /**
     * Constructor method for getDossierResponse
     * @uses GetDossierResponse::setDossier_info()
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_info $dossier_info
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Dossier_info $dossier_info = null)
    {
        $this
            ->setDossier_info($dossier_info);
    }
    /**
     * Get dossier_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_info|null
     */
    public function getDossier_info()
    {
        return $this->{'dossier-info'};
    }
    /**
     * Set dossier_info value
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_info $dossier_info
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierResponse
     */
    public function setDossier_info(\InfoCert\Top\OnboardingService\StructType\Dossier_info $dossier_info = null)
    {
        $this->dossier_info = $this->{'dossier-info'} = $dossier_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierResponse
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
