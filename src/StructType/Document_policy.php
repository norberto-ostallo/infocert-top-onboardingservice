<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for document-policy StructType
 * @subpackage Structs
 */
class Document_policy extends AbstractStructBase
{
    /**
     * The compose
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $compose;
    /**
     * The sign
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $sign;
    /**
     * The archive
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $archive;
    /**
     * Constructor method for document-policy
     * @uses Document_policy::setCompose()
     * @uses Document_policy::setSign()
     * @uses Document_policy::setArchive()
     * @param bool $compose
     * @param bool $sign
     * @param bool $archive
     */
    public function __construct($compose = null, $sign = null, $archive = null)
    {
        $this
            ->setCompose($compose)
            ->setSign($sign)
            ->setArchive($archive);
    }
    /**
     * Get compose value
     * @return bool
     */
    public function getCompose()
    {
        return $this->compose;
    }
    /**
     * Set compose value
     * @param bool $compose
     * @return \InfoCert\Top\OnboardingService\StructType\Document_policy
     */
    public function setCompose($compose = null)
    {
        // validation for constraint: boolean
        if (!is_null($compose) && !is_bool($compose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($compose)), __LINE__);
        }
        $this->compose = $compose;
        return $this;
    }
    /**
     * Get sign value
     * @return bool
     */
    public function getSign()
    {
        return $this->sign;
    }
    /**
     * Set sign value
     * @param bool $sign
     * @return \InfoCert\Top\OnboardingService\StructType\Document_policy
     */
    public function setSign($sign = null)
    {
        // validation for constraint: boolean
        if (!is_null($sign) && !is_bool($sign)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sign)), __LINE__);
        }
        $this->sign = $sign;
        return $this;
    }
    /**
     * Get archive value
     * @return bool
     */
    public function getArchive()
    {
        return $this->archive;
    }
    /**
     * Set archive value
     * @param bool $archive
     * @return \InfoCert\Top\OnboardingService\StructType\Document_policy
     */
    public function setArchive($archive = null)
    {
        // validation for constraint: boolean
        if (!is_null($archive) && !is_bool($archive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($archive)), __LINE__);
        }
        $this->archive = $archive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Document_policy
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
