<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for graph-signature-field-info StructType
 * @subpackage Structs
 */
class Graph_signature_field_info extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $name;
    /**
     * The mandatory
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $mandatory;
    /**
     * The signed
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $signed;
    /**
     * The present
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $present;
    /**
     * The page
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $page;
    /**
     * The width
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $width;
    /**
     * The height
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $height;
    /**
     * The bottom_left_x
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $bottom_left_x;
    /**
     * The bottom_left_y
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $bottom_left_y;
    /**
     * The field_offset_x
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $field_offset_x;
    /**
     * The field_offset_y
     * Meta informations extracted from the WSDL
     * - use: required
     * @var float
     */
    public $field_offset_y;
    /**
     * The location
     * @var string
     */
    public $location;
    /**
     * The reason
     * @var string
     */
    public $reason;
    /**
     * The signer_id
     * @var string
     */
    public $signer_id;
    /**
     * The sign_date
     * @var string
     */
    public $sign_date;
    /**
     * The sign_type
     * @var string
     */
    public $sign_type;
    /**
     * The field_keyword
     * @var string
     */
    public $field_keyword;
    /**
     * The image
     * @var string
     */
    public $image;
    /**
     * Constructor method for graph-signature-field-info
     * @uses Graph_signature_field_info::setName()
     * @uses Graph_signature_field_info::setMandatory()
     * @uses Graph_signature_field_info::setSigned()
     * @uses Graph_signature_field_info::setPresent()
     * @uses Graph_signature_field_info::setPage()
     * @uses Graph_signature_field_info::setWidth()
     * @uses Graph_signature_field_info::setHeight()
     * @uses Graph_signature_field_info::setBottom_left_x()
     * @uses Graph_signature_field_info::setBottom_left_y()
     * @uses Graph_signature_field_info::setField_offset_x()
     * @uses Graph_signature_field_info::setField_offset_y()
     * @uses Graph_signature_field_info::setLocation()
     * @uses Graph_signature_field_info::setReason()
     * @uses Graph_signature_field_info::setSigner_id()
     * @uses Graph_signature_field_info::setSign_date()
     * @uses Graph_signature_field_info::setSign_type()
     * @uses Graph_signature_field_info::setField_keyword()
     * @uses Graph_signature_field_info::setImage()
     * @param string $name
     * @param bool $mandatory
     * @param bool $signed
     * @param bool $present
     * @param int $page
     * @param float $width
     * @param float $height
     * @param float $bottom_left_x
     * @param float $bottom_left_y
     * @param float $field_offset_x
     * @param float $field_offset_y
     * @param string $location
     * @param string $reason
     * @param string $signer_id
     * @param string $sign_date
     * @param string $sign_type
     * @param string $field_keyword
     * @param string $image
     */
    public function __construct($name = null, $mandatory = null, $signed = null, $present = null, $page = null, $width = null, $height = null, $bottom_left_x = null, $bottom_left_y = null, $field_offset_x = null, $field_offset_y = null, $location = null, $reason = null, $signer_id = null, $sign_date = null, $sign_type = null, $field_keyword = null, $image = null)
    {
        $this
            ->setName($name)
            ->setMandatory($mandatory)
            ->setSigned($signed)
            ->setPresent($present)
            ->setPage($page)
            ->setWidth($width)
            ->setHeight($height)
            ->setBottom_left_x($bottom_left_x)
            ->setBottom_left_y($bottom_left_y)
            ->setField_offset_x($field_offset_x)
            ->setField_offset_y($field_offset_y)
            ->setLocation($location)
            ->setReason($reason)
            ->setSigner_id($signer_id)
            ->setSign_date($sign_date)
            ->setSign_type($sign_type)
            ->setField_keyword($field_keyword)
            ->setImage($image);
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
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
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
     * Get mandatory value
     * @return bool
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }
    /**
     * Set mandatory value
     * @param bool $mandatory
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setMandatory($mandatory = null)
    {
        // validation for constraint: boolean
        if (!is_null($mandatory) && !is_bool($mandatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mandatory)), __LINE__);
        }
        $this->mandatory = $mandatory;
        return $this;
    }
    /**
     * Get signed value
     * @return bool
     */
    public function getSigned()
    {
        return $this->signed;
    }
    /**
     * Set signed value
     * @param bool $signed
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setSigned($signed = null)
    {
        // validation for constraint: boolean
        if (!is_null($signed) && !is_bool($signed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($signed)), __LINE__);
        }
        $this->signed = $signed;
        return $this;
    }
    /**
     * Get present value
     * @return bool
     */
    public function getPresent()
    {
        return $this->present;
    }
    /**
     * Set present value
     * @param bool $present
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setPresent($present = null)
    {
        // validation for constraint: boolean
        if (!is_null($present) && !is_bool($present)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($present)), __LINE__);
        }
        $this->present = $present;
        return $this;
    }
    /**
     * Get page value
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Get width value
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param float $width
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setWidth($width = null)
    {
        $this->width = $width;
        return $this;
    }
    /**
     * Get height value
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param float $height
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setHeight($height = null)
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Get bottom_left_x value
     * @return float
     */
    public function getBottom_left_x()
    {
        return $this->{'bottom-left-x'};
    }
    /**
     * Set bottom_left_x value
     * @param float $bottom_left_x
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setBottom_left_x($bottom_left_x = null)
    {
        $this->bottom_left_x = $this->{'bottom-left-x'} = $bottom_left_x;
        return $this;
    }
    /**
     * Get bottom_left_y value
     * @return float
     */
    public function getBottom_left_y()
    {
        return $this->{'bottom-left-y'};
    }
    /**
     * Set bottom_left_y value
     * @param float $bottom_left_y
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setBottom_left_y($bottom_left_y = null)
    {
        $this->bottom_left_y = $this->{'bottom-left-y'} = $bottom_left_y;
        return $this;
    }
    /**
     * Get field_offset_x value
     * @return float
     */
    public function getField_offset_x()
    {
        return $this->{'field-offset-x'};
    }
    /**
     * Set field_offset_x value
     * @param float $field_offset_x
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setField_offset_x($field_offset_x = null)
    {
        $this->field_offset_x = $this->{'field-offset-x'} = $field_offset_x;
        return $this;
    }
    /**
     * Get field_offset_y value
     * @return float
     */
    public function getField_offset_y()
    {
        return $this->{'field-offset-y'};
    }
    /**
     * Set field_offset_y value
     * @param float $field_offset_y
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setField_offset_y($field_offset_y = null)
    {
        $this->field_offset_y = $this->{'field-offset-y'} = $field_offset_y;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
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
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
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
     * Get signer_id value
     * @return string|null
     */
    public function getSigner_id()
    {
        return $this->{'signer-id'};
    }
    /**
     * Set signer_id value
     * @param string $signer_id
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
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
     * Get sign_date value
     * @return string|null
     */
    public function getSign_date()
    {
        return $this->{'sign-date'};
    }
    /**
     * Set sign_date value
     * @param string $sign_date
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setSign_date($sign_date = null)
    {
        // validation for constraint: string
        if (!is_null($sign_date) && !is_string($sign_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sign_date)), __LINE__);
        }
        $this->sign_date = $this->{'sign-date'} = $sign_date;
        return $this;
    }
    /**
     * Get sign_type value
     * @return string|null
     */
    public function getSign_type()
    {
        return $this->{'sign-type'};
    }
    /**
     * Set sign_type value
     * @param string $sign_type
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setSign_type($sign_type = null)
    {
        // validation for constraint: string
        if (!is_null($sign_type) && !is_string($sign_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sign_type)), __LINE__);
        }
        $this->sign_type = $this->{'sign-type'} = $sign_type;
        return $this;
    }
    /**
     * Get field_keyword value
     * @return string|null
     */
    public function getField_keyword()
    {
        return $this->{'field-keyword'};
    }
    /**
     * Set field_keyword value
     * @param string $field_keyword
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setField_keyword($field_keyword = null)
    {
        // validation for constraint: string
        if (!is_null($field_keyword) && !is_string($field_keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($field_keyword)), __LINE__);
        }
        $this->field_keyword = $this->{'field-keyword'} = $field_keyword;
        return $this;
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        $this->image = $image;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_field_info
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
