<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dossiers StructType
 * @subpackage Structs
 */
class Dossiers extends AbstractStructBase
{
    /**
     * The dossiers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \InfoCert\Top\OnboardingService\StructType\Dossier_record[]
     */
    public $dossiers;
    /**
     * Constructor method for dossiers
     * @uses Dossiers::setDossiers()
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_record[] $dossiers
     */
    public function __construct(array $dossiers = array())
    {
        $this
            ->setDossiers($dossiers);
    }
    /**
     * Get dossiers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_record[]|null
     */
    public function getDossiers()
    {
        return isset($this->dossiers) ? $this->dossiers : null;
    }
    /**
     * Set dossiers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_record[] $dossiers
     * @return \InfoCert\Top\OnboardingService\StructType\Dossiers
     */
    public function setDossiers(array $dossiers = array())
    {
        foreach ($dossiers as $dossiersDossiersItem) {
            // validation for constraint: itemType
            if (!$dossiersDossiersItem instanceof \InfoCert\Top\OnboardingService\StructType\Dossier_record) {
                throw new \InvalidArgumentException(sprintf('The dossiers property can only contain items of \InfoCert\Top\OnboardingService\StructType\Dossier_record, "%s" given', is_object($dossiersDossiersItem) ? get_class($dossiersDossiersItem) : gettype($dossiersDossiersItem)), __LINE__);
            }
        }
        if (is_null($dossiers) || (is_array($dossiers) && empty($dossiers))) {
            unset($this->dossiers);
        } else {
            $this->dossiers = $dossiers;
        }
        return $this;
    }
    /**
     * Add item to dossiers value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Dossier_record $item
     * @return \InfoCert\Top\OnboardingService\StructType\Dossiers
     */
    public function addToDossiers(\InfoCert\Top\OnboardingService\StructType\Dossier_record $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Dossier_record) {
            throw new \InvalidArgumentException(sprintf('The dossiers property can only contain items of \InfoCert\Top\OnboardingService\StructType\Dossier_record, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->dossiers[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Dossiers
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
