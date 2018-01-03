<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createDossierResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:createDossierResponse
 * @subpackage Structs
 */
class CreateDossierResponse extends AbstractStructBase
{
    /**
     * The dossier_creation_info
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Dossier_creation_info
     */
    public $dossier_creation_info;
    /**
     * Constructor method for createDossierResponse
     * @uses CreateDossierResponse::setDossier_creation_info()
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_creation_info $dossier_creation_info
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Dossier_creation_info $dossier_creation_info = null)
    {
        $this
            ->setDossier_creation_info($dossier_creation_info);
    }
    /**
     * Get dossier_creation_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_creation_info|null
     */
    public function getDossier_creation_info()
    {
        return $this->{'dossier-creation-info'};
    }
    /**
     * Set dossier_creation_info value
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_creation_info $dossier_creation_info
     * @return \InfoCert\Top\OnboardingService\StructType\CreateDossierResponse
     */
    public function setDossier_creation_info(\InfoCert\Top\OnboardingService\StructType\Dossier_creation_info $dossier_creation_info = null)
    {
        $this->dossier_creation_info = $this->{'dossier-creation-info'} = $dossier_creation_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\CreateDossierResponse
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
