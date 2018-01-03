<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for number-property StructType
 * @subpackage Structs
 */
class Number_property extends Property
{
    /**
     * The integer
     * @var int
     */
    public $integer;
    /**
     * The long
     * @var int
     */
    public $long;
    /**
     * The float
     * @var float
     */
    public $float;
    /**
     * The double
     * @var float
     */
    public $double;
    /**
     * Constructor method for number-property
     * @uses Number_property::setInteger()
     * @uses Number_property::setLong()
     * @uses Number_property::setFloat()
     * @uses Number_property::setDouble()
     * @param int $integer
     * @param int $long
     * @param float $float
     * @param float $double
     */
    public function __construct($integer = null, $long = null, $float = null, $double = null)
    {
        $this
            ->setInteger($integer)
            ->setLong($long)
            ->setFloat($float)
            ->setDouble($double);
    }
    /**
     * Get integer value
     * @return int|null
     */
    public function getInteger()
    {
        return $this->integer;
    }
    /**
     * Set integer value
     * @param int $integer
     * @return \InfoCert\Top\OnboardingService\StructType\Number_property
     */
    public function setInteger($integer = null)
    {
        // validation for constraint: int
        if (!is_null($integer) && !is_numeric($integer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($integer)), __LINE__);
        }
        $this->integer = $integer;
        return $this;
    }
    /**
     * Get long value
     * @return int|null
     */
    public function getLong()
    {
        return $this->long;
    }
    /**
     * Set long value
     * @param int $long
     * @return \InfoCert\Top\OnboardingService\StructType\Number_property
     */
    public function setLong($long = null)
    {
        // validation for constraint: int
        if (!is_null($long) && !is_numeric($long)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($long)), __LINE__);
        }
        $this->long = $long;
        return $this;
    }
    /**
     * Get float value
     * @return float|null
     */
    public function getFloat()
    {
        return $this->float;
    }
    /**
     * Set float value
     * @param float $float
     * @return \InfoCert\Top\OnboardingService\StructType\Number_property
     */
    public function setFloat($float = null)
    {
        $this->float = $float;
        return $this;
    }
    /**
     * Get double value
     * @return float|null
     */
    public function getDouble()
    {
        return $this->double;
    }
    /**
     * Set double value
     * @param float $double
     * @return \InfoCert\Top\OnboardingService\StructType\Number_property
     */
    public function setDouble($double = null)
    {
        $this->double = $double;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Number_property
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
