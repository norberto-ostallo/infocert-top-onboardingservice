<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDossiersByBusinessId StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getDossiersByBusinessId
 * @subpackage Structs
 */
class GetDossiersByBusinessId extends AbstractStructBase
{
    /**
     * The company_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_id;
    /**
     * The business_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $business_id;
    /**
     * Constructor method for getDossiersByBusinessId
     * @uses GetDossiersByBusinessId::setCompany_id()
     * @uses GetDossiersByBusinessId::setBusiness_id()
     * @param string $company_id
     * @param string $business_id
     */
    public function __construct($company_id = null, $business_id = null)
    {
        $this
            ->setCompany_id($company_id)
            ->setBusiness_id($business_id);
    }
    /**
     * Get company_id value
     * @return string|null
     */
    public function getCompany_id()
    {
        return $this->{'company-id'};
    }
    /**
     * Set company_id value
     * @param string $company_id
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessId
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
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessId
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetDossiersByBusinessId
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
