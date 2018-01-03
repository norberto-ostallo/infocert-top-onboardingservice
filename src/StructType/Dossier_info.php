<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dossier-info StructType
 * @subpackage Structs
 */
class Dossier_info extends Dossier_status
{
    /**
     * The signers
     * @var \InfoCert\Top\OnboardingService\StructType\Signers
     */
    public $signers;
    /**
     * The documents
     * @var \InfoCert\Top\OnboardingService\StructType\Documents
     */
    public $documents;
    /**
     * The additional_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public $additional_data;
    /**
     * Constructor method for dossier-info
     * @uses Dossier_info::setSigners()
     * @uses Dossier_info::setDocuments()
     * @uses Dossier_info::setAdditional_data()
     * @param \InfoCert\Top\OnboardingService\StructType\Signers $signers
     * @param \InfoCert\Top\OnboardingService\StructType\Documents $documents
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Signers $signers = null, \InfoCert\Top\OnboardingService\StructType\Documents $documents = null, \InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this
            ->setSigners($signers)
            ->setDocuments($documents)
            ->setAdditional_data($additional_data);
    }
    /**
     * Get signers value
     * @return \InfoCert\Top\OnboardingService\StructType\Signers|null
     */
    public function getSigners()
    {
        return $this->signers;
    }
    /**
     * Set signers value
     * @param \InfoCert\Top\OnboardingService\StructType\Signers $signers
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_info
     */
    public function setSigners(\InfoCert\Top\OnboardingService\StructType\Signers $signers = null)
    {
        $this->signers = $signers;
        return $this;
    }
    /**
     * Get documents value
     * @return \InfoCert\Top\OnboardingService\StructType\Documents|null
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param \InfoCert\Top\OnboardingService\StructType\Documents $documents
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_info
     */
    public function setDocuments(\InfoCert\Top\OnboardingService\StructType\Documents $documents = null)
    {
        $this->documents = $documents;
        return $this;
    }
    /**
     * Get additional_data value
     * @return \InfoCert\Top\OnboardingService\StructType\Properties|null
     */
    public function getAdditional_data()
    {
        return $this->{'additional-data'};
    }
    /**
     * Set additional_data value
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_info
     */
    public function setAdditional_data(\InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this->additional_data = $this->{'additional-data'} = $additional_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier_info
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
