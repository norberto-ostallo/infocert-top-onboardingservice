<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for content StructType
 * @subpackage Structs
 */
class Content extends AbstractStructBase
{
    /**
     * The mime_type
     * @var string
     */
    public $mime_type;
    /**
     * The data
     * Meta informations extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * @var string
     */
    public $data;
    /**
     * Constructor method for content
     * @uses Content::setMime_type()
     * @uses Content::setData()
     * @param string $mime_type
     * @param string $data
     */
    public function __construct($mime_type = null, $data = null)
    {
        $this
            ->setMime_type($mime_type)
            ->setData($data);
    }
    /**
     * Get mime_type value
     * @return string|null
     */
    public function getMime_type()
    {
        return $this->{'mime-type'};
    }
    /**
     * Set mime_type value
     * @param string $mime_type
     * @return \InfoCert\Top\OnboardingService\StructType\Content
     */
    public function setMime_type($mime_type = null)
    {
        // validation for constraint: string
        if (!is_null($mime_type) && !is_string($mime_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mime_type)), __LINE__);
        }
        $this->mime_type = $this->{'mime-type'} = $mime_type;
        return $this;
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \InfoCert\Top\OnboardingService\StructType\Content
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($data)), __LINE__);
        }
        $this->data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Content
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
