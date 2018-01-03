<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWebidServiceInfo StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getWebidServiceInfo
 * @subpackage Structs
 */
class GetWebidServiceInfo extends AbstractStructBase
{
    /**
     * The company_group
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $company_group;
    /**
     * Constructor method for getWebidServiceInfo
     * @uses GetWebidServiceInfo::setCompany_group()
     * @param string $company_group
     */
    public function __construct($company_group = null)
    {
        $this
            ->setCompany_group($company_group);
    }
    /**
     * Get company_group value
     * @return string|null
     */
    public function getCompany_group()
    {
        return $this->{'company-group'};
    }
    /**
     * Set company_group value
     * @param string $company_group
     * @return \InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfo
     */
    public function setCompany_group($company_group = null)
    {
        // validation for constraint: string
        if (!is_null($company_group) && !is_string($company_group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company_group)), __LINE__);
        }
        $this->company_group = $this->{'company-group'} = $company_group;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\GetWebidServiceInfo
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
