<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDossiersByBusinessIdResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getDossiersByBusinessIdResponse
 * @subpackage Structs
 */
class GetDossiersByBusinessIdResponse extends AbstractStructBase
{
    /**
     * The result_set
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Dossier_result_set
     */
    public $result_set;
    /**
     * Constructor method for getDossiersByBusinessIdResponse
     * @uses GetDossiersByBusinessIdResponse::setResult_set()
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_result_set $result_set
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Dossier_result_set $result_set = null)
    {
        $this
            ->setResult_set($result_set);
    }
    /**
     * Get result_set value
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_result_set|null
     */
    public function getResult_set()
    {
        return $this->{'result-set'};
    }
    /**
     * Set result_set value
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_result_set $result_set
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessIdResponse
     */
    public function setResult_set(\InfoCert\Top\OnboardingService\StructType\Dossier_result_set $result_set = null)
    {
        $this->result_set = $this->{'result-set'} = $result_set;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessIdResponse
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
