<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signature-field-info StructType
 * @subpackage Structs
 */
class Signature_field_info extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $name;
    /**
     * The keyword
     * @var string
     */
    public $keyword;
    /**
     * The page
     * @var string
     */
    public $page;
    /**
     * The x
     * @var string
     */
    public $x;
    /**
     * The y
     * @var string
     */
    public $y;
    /**
     * Constructor method for signature-field-info
     * @uses Signature_field_info::setName()
     * @uses Signature_field_info::setKeyword()
     * @uses Signature_field_info::setPage()
     * @uses Signature_field_info::setX()
     * @uses Signature_field_info::setY()
     * @param string $name
     * @param string $keyword
     * @param string $page
     * @param string $x
     * @param string $y
     */
    public function __construct($name = null, $keyword = null, $page = null, $x = null, $y = null)
    {
        $this
            ->setName($name)
            ->setKeyword($keyword)
            ->setPage($page)
            ->setX($x)
            ->setY($y);
    }
    /**
     * Get name value
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_field_info
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get keyword value
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
    /**
     * Set keyword value
     * @param string $keyword
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_field_info
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyword)), __LINE__);
        }
        $this->keyword = $keyword;
        return $this;
    }
    /**
     * Get page value
     * @return string|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param string $page
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_field_info
     */
    public function setPage($page = null)
    {
        // validation for constraint: string
        if (!is_null($page) && !is_string($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Get x value
     * @return string|null
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set x value
     * @param string $x
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_field_info
     */
    public function setX($x = null)
    {
        // validation for constraint: string
        if (!is_null($x) && !is_string($x)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($x)), __LINE__);
        }
        $this->x = $x;
        return $this;
    }
    /**
     * Get y value
     * @return string|null
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set y value
     * @param string $y
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_field_info
     */
    public function setY($y = null)
    {
        // validation for constraint: string
        if (!is_null($y) && !is_string($y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($y)), __LINE__);
        }
        $this->y = $y;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_field_info
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
