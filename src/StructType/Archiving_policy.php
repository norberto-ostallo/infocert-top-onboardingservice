<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for archiving-policy StructType
 * @subpackage Structs
 */
class Archiving_policy extends AbstractStructBase
{
    /**
     * The document_class
     * @var string
     */
    public $document_class;
    /**
     * The attributes
     * @var \InfoCert\Top\OnboardingService\StructType\Attributes
     */
    public $attributes;
    /**
     * Constructor method for archiving-policy
     * @uses Archiving_policy::setDocument_class()
     * @uses Archiving_policy::setAttributes()
     * @param string $document_class
     * @param \InfoCert\Top\OnboardingService\StructType\Attributes $attributes
     */
    public function __construct($document_class = null, \InfoCert\Top\OnboardingService\StructType\Attributes $attributes = null)
    {
        $this
            ->setDocument_class($document_class)
            ->setAttributes($attributes);
    }
    /**
     * Get document_class value
     * @return string|null
     */
    public function getDocument_class()
    {
        return $this->{'document-class'};
    }
    /**
     * Set document_class value
     * @param string $document_class
     * @return \InfoCert\Top\OnboardingService\StructType\Archiving_policy
     */
    public function setDocument_class($document_class = null)
    {
        // validation for constraint: string
        if (!is_null($document_class) && !is_string($document_class)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_class)), __LINE__);
        }
        $this->document_class = $this->{'document-class'} = $document_class;
        return $this;
    }
    /**
     * Get attributes value
     * @return \InfoCert\Top\OnboardingService\StructType\Attributes|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    /**
     * Set attributes value
     * @param \InfoCert\Top\OnboardingService\StructType\Attributes $attributes
     * @return \InfoCert\Top\OnboardingService\StructType\Archiving_policy
     */
    public function setAttributes(\InfoCert\Top\OnboardingService\StructType\Attributes $attributes = null)
    {
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Archiving_policy
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
