<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dossier-result-set StructType
 * @subpackage Structs
 */
class Dossier_result_set extends Dossier_status
{
    /**
     * The dossiers
     * @var \InfoCert\Top\OnboardingService\StructType\Dossiers
     */
    public $dossiers;
    /**
     * Constructor method for dossier-result-set
     * @uses Dossier_result_set::setDossiers()
     * @param \InfoCert\Top\OnboardingService\StructType\Dossiers $dossiers
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Dossiers $dossiers = null)
    {
        $this
            ->setDossiers($dossiers);
    }
    /**
     * Get dossiers value
     * @return \InfoCert\Top\OnboardingService\StructType\Dossiers|null
     */
    public function getDossiers()
    {
        return $this->dossiers;
    }
    /**
     * Set dossiers value
     * @param \InfoCert\Top\OnboardingService\StructType\Dossiers $dossiers
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_result_set
     */
    public function setDossiers(\InfoCert\Top\OnboardingService\StructType\Dossiers $dossiers = null)
    {
        $this->dossiers = $dossiers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_result_set
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
