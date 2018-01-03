<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for keyword-signature-field StructType
 * @subpackage Structs
 */
class Keyword_signature_field extends AbstractStructBase
{
    /**
     * The signer_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $signer_id;
    /**
     * The keyword
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $keyword;
    /**
     * The offset_x
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $offset_x;
    /**
     * The offset_y
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $offset_y;
    /**
     * The width
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $width;
    /**
     * The height
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $height;
    /**
     * The reason
     * @var string
     */
    public $reason;
    /**
     * The location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $location;
    /**
     * Constructor method for keyword-signature-field
     * @uses Keyword_signature_field::setSigner_id()
     * @uses Keyword_signature_field::setKeyword()
     * @uses Keyword_signature_field::setOffset_x()
     * @uses Keyword_signature_field::setOffset_y()
     * @uses Keyword_signature_field::setWidth()
     * @uses Keyword_signature_field::setHeight()
     * @uses Keyword_signature_field::setReason()
     * @uses Keyword_signature_field::setLocation()
     * @param string $signer_id
     * @param string $keyword
     * @param int $offset_x
     * @param int $offset_y
     * @param int $width
     * @param int $height
     * @param string $reason
     * @param string $location
     */
    public function __construct($signer_id = null, $keyword = null, $offset_x = null, $offset_y = null, $width = null, $height = null, $reason = null, $location = null)
    {
        $this
            ->setSigner_id($signer_id)
            ->setKeyword($keyword)
            ->setOffset_x($offset_x)
            ->setOffset_y($offset_y)
            ->setWidth($width)
            ->setHeight($height)
            ->setReason($reason)
            ->setLocation($location);
    }
    /**
     * Get signer_id value
     * @return string
     */
    public function getSigner_id()
    {
        return $this->{'signer-id'};
    }
    /**
     * Set signer_id value
     * @param string $signer_id
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
     */
    public function setSigner_id($signer_id = null)
    {
        // validation for constraint: string
        if (!is_null($signer_id) && !is_string($signer_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signer_id)), __LINE__);
        }
        $this->signer_id = $this->{'signer-id'} = $signer_id;
        return $this;
    }
    /**
     * Get keyword value
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
    /**
     * Set keyword value
     * @param string $keyword
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
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
     * Get offset_x value
     * @return int
     */
    public function getOffset_x()
    {
        return $this->{'offset-x'};
    }
    /**
     * Set offset_x value
     * @param int $offset_x
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
     */
    public function setOffset_x($offset_x = null)
    {
        // validation for constraint: int
        if (!is_null($offset_x) && !is_numeric($offset_x)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offset_x)), __LINE__);
        }
        $this->offset_x = $this->{'offset-x'} = $offset_x;
        return $this;
    }
    /**
     * Get offset_y value
     * @return int
     */
    public function getOffset_y()
    {
        return $this->{'offset-y'};
    }
    /**
     * Set offset_y value
     * @param int $offset_y
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
     */
    public function setOffset_y($offset_y = null)
    {
        // validation for constraint: int
        if (!is_null($offset_y) && !is_numeric($offset_y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offset_y)), __LINE__);
        }
        $this->offset_y = $this->{'offset-y'} = $offset_y;
        return $this;
    }
    /**
     * Get width value
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
    /**
     * Get height value
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->height = $height;
        return $this;
    }
    /**
     * Get reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->location = $location;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_field
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
