<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for certificate-info StructType
 * @subpackage Structs
 */
class Certificate_info extends AbstractStructBase
{
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $domain;
    /**
     * The alias
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $alias;
    /**
     * The iut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $iut;
    /**
     * Constructor method for certificate-info
     * @uses Certificate_info::setDomain()
     * @uses Certificate_info::setAlias()
     * @uses Certificate_info::setIut()
     * @param string $domain
     * @param string $alias
     * @param string $iut
     */
    public function __construct($domain = null, $alias = null, $iut = null)
    {
        $this
            ->setDomain($domain)
            ->setAlias($alias)
            ->setIut($iut);
    }
    /**
     * Get domain value
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate_info
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get alias value
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }
    /**
     * Set alias value
     * @param string $alias
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate_info
     */
    public function setAlias($alias = null)
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alias)), __LINE__);
        }
        $this->alias = $alias;
        return $this;
    }
    /**
     * Get iut value
     * @return string|null
     */
    public function getIut()
    {
        return $this->iut;
    }
    /**
     * Set iut value
     * @param string $iut
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate_info
     */
    public function setIut($iut = null)
    {
        // validation for constraint: string
        if (!is_null($iut) && !is_string($iut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iut)), __LINE__);
        }
        $this->iut = $iut;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate_info
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
