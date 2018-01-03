<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for certificate StructType
 * @subpackage Structs
 */
class Certificate extends AbstractStructBase
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
     * Constructor method for certificate
     * @uses Certificate::setDomain()
     * @uses Certificate::setAlias()
     * @param string $domain
     * @param string $alias
     */
    public function __construct($domain = null, $alias = null)
    {
        $this
            ->setDomain($domain)
            ->setAlias($alias);
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
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate
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
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate
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
