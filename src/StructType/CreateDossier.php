<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createDossier StructType
 * Meta informations extracted from the WSDL
 * - type: tns:createDossier
 * @subpackage Structs
 */
class CreateDossier extends AbstractStructBase
{
    /**
     * The rao
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Rao
     */
    public $rao;
    /**
     * The dossier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Dossier
     */
    public $dossier;
    /**
     * Constructor method for createDossier
     * @uses CreateDossier::setRao()
     * @uses CreateDossier::setDossier()
     * @param \InfoCert\Top\OnboardingService\StructType\Rao $rao
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier $dossier
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Rao $rao = null, \InfoCert\Top\OnboardingService\StructType\Dossier $dossier = null)
    {
        $this
            ->setRao($rao)
            ->setDossier($dossier);
    }
    /**
     * Get rao value
     * @return \InfoCert\Top\OnboardingService\StructType\Rao|null
     */
    public function getRao()
    {
        return $this->rao;
    }
    /**
     * Set rao value
     * @param \InfoCert\Top\OnboardingService\StructType\Rao $rao
     * @return \InfoCert\Top\OnboardingService\StructType\CreateDossier
     */
    public function setRao(\InfoCert\Top\OnboardingService\StructType\Rao $rao = null)
    {
        $this->rao = $rao;
        return $this;
    }
    /**
     * Get dossier value
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier|null
     */
    public function getDossier()
    {
        return $this->dossier;
    }
    /**
     * Set dossier value
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier $dossier
     * @return \InfoCert\Top\OnboardingService\StructType\CreateDossier
     */
    public function setDossier(\InfoCert\Top\OnboardingService\StructType\Dossier $dossier = null)
    {
        $this->dossier = $dossier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\CreateDossier
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
