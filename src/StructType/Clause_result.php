<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clause-result StructType
 * @subpackage Structs
 */
class Clause_result extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $id;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $value;
    /**
     * Constructor method for clause-result
     * @uses Clause_result::setId()
     * @uses Clause_result::setValue()
     * @param string $id
     * @param bool $value
     */
    public function __construct($id = null, $value = null)
    {
        $this
            ->setId($id)
            ->setValue($value);
    }
    /**
     * Get id value
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \InfoCert\Top\OnboardingService\StructType\Clause_result
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get value value
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param bool $value
     * @return \InfoCert\Top\OnboardingService\StructType\Clause_result
     */
    public function setValue($value = null)
    {
        // validation for constraint: boolean
        if (!is_null($value) && !is_bool($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Clause_result
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
