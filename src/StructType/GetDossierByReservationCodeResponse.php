<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDossierByReservationCodeResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getDossierByReservationCodeResponse
 * @subpackage Structs
 */
class GetDossierByReservationCodeResponse extends AbstractStructBase
{
    /**
     * The dossier_process_info
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Dossier_process_info
     */
    public $dossier_process_info;
    /**
     * Constructor method for getDossierByReservationCodeResponse
     * @uses GetDossierByReservationCodeResponse::setDossier_process_info()
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_process_info $dossier_process_info
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Dossier_process_info $dossier_process_info = null)
    {
        $this
            ->setDossier_process_info($dossier_process_info);
    }
    /**
     * Get dossier_process_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_process_info|null
     */
    public function getDossier_process_info()
    {
        return $this->{'dossier-process-info'};
    }
    /**
     * Set dossier_process_info value
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_process_info $dossier_process_info
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCodeResponse
     */
    public function setDossier_process_info(\InfoCert\Top\OnboardingService\StructType\Dossier_process_info $dossier_process_info = null)
    {
        $this->dossier_process_info = $this->{'dossier-process-info'} = $dossier_process_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossierByReservationCodeResponse
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
