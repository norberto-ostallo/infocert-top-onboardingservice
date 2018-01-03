<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dossier StructType
 * @subpackage Structs
 */
class Dossier extends AbstractStructBase
{
    /**
     * The company_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $company_id;
    /**
     * The dossier_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $dossier_id;
    /**
     * The dossier_type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $dossier_type;
    /**
     * The business_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_id;
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
     * Constructor method for dossier
     * @uses Dossier::setCompany_id()
     * @uses Dossier::setDossier_id()
     * @uses Dossier::setDossier_type()
     * @uses Dossier::setBusiness_id()
     * @uses Dossier::setSigners()
     * @uses Dossier::setDocuments()
     * @uses Dossier::setAdditional_data()
     * @param string $company_id
     * @param string $dossier_id
     * @param string $dossier_type
     * @param string $business_id
     * @param \InfoCert\Top\OnboardingService\StructType\Signers $signers
     * @param \InfoCert\Top\OnboardingService\StructType\Documents $documents
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     */
    public function __construct($company_id = null, $dossier_id = null, $dossier_type = null, $business_id = null, \InfoCert\Top\OnboardingService\StructType\Signers $signers = null, \InfoCert\Top\OnboardingService\StructType\Documents $documents = null, \InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setDossier_id($dossier_id)
            ->setDossier_type($dossier_type)
            ->setBusiness_id($business_id)
            ->setSigners($signers)
            ->setDocuments($documents)
            ->setAdditional_data($additional_data);
    }
    /**
     * Get company_id value
     * @return string
     */
    public function getCompany_id()
    {
        return $this->{'company-id'};
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier
     */
    public function setCompany_id($company_id = null)
    {
        // validation for constraint: string
        if (!is_null($company_id) && !is_string($company_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_id)), __LINE__);
        }
        $this->company_id = $this->{'company-id'} = $company_id;
        return $this;
    }
    /**
     * Get dossier_id value
     * @return string
     */
    public function getDossier_id()
    {
        return $this->{'dossier-id'};
    }
    /**
     * Set dossier_id value
     * @param string $dossier_id
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier
     */
    public function setDossier_id($dossier_id = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_id) && !is_string($dossier_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_id)), __LINE__);
        }
        $this->dossier_id = $this->{'dossier-id'} = $dossier_id;
        return $this;
    }
    /**
     * Get dossier_type value
     * @return string
     */
    public function getDossier_type()
    {
        return $this->{'dossier-type'};
    }
    /**
     * Set dossier_type value
     * @param string $dossier_type
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier
     */
    public function setDossier_type($dossier_type = null)
    {
        // validation for constraint: string
        if (!is_null($dossier_type) && !is_string($dossier_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dossier_type)), __LINE__);
        }
        $this->dossier_type = $this->{'dossier-type'} = $dossier_type;
        return $this;
    }
    /**
     * Get business_id value
     * @return string|null
     */
    public function getBusiness_id()
    {
        return $this->{'business-id'};
    }
    /**
     * Set business_id value
     * @param string $business_id
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier
     */
    public function setBusiness_id($business_id = null)
    {
        // validation for constraint: string
        if (!is_null($business_id) && !is_string($business_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business_id)), __LINE__);
        }
        $this->business_id = $this->{'business-id'} = $business_id;
        return $this;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier
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
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier
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
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier
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
     * @return \InfoCert\Top\OnboardingService\StructType\Dossier
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
