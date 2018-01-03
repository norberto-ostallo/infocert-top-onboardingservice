<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for document-info StructType
 * @subpackage Structs
 */
class Document_info extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The keyword_signature_fields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields
     */
    public $keyword_signature_fields;
    /**
     * The content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Content
     */
    public $content;
    /**
     * The additional_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public $additional_data;
    /**
     * Constructor method for document-info
     * @uses Document_info::setId()
     * @uses Document_info::setType()
     * @uses Document_info::setStatus()
     * @uses Document_info::setKeyword_signature_fields()
     * @uses Document_info::setContent()
     * @uses Document_info::setAdditional_data()
     * @param string $id
     * @param string $type
     * @param string $status
     * @param \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields $keyword_signature_fields
     * @param \InfoCert\Top\OnboardingService\StructType\Content $content
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     */
    public function __construct($id = null, $type = null, $status = null, \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields $keyword_signature_fields = null, \InfoCert\Top\OnboardingService\StructType\Content $content = null, \InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setStatus($status)
            ->setKeyword_signature_fields($keyword_signature_fields)
            ->setContent($content)
            ->setAdditional_data($additional_data);
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
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info
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
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get keyword_signature_fields value
     * @return \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields|null
     */
    public function getKeyword_signature_fields()
    {
        return $this->{'keyword-signature-fields'};
    }
    /**
     * Set keyword_signature_fields value
     * @param \InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields $keyword_signature_fields
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info
     */
    public function setKeyword_signature_fields(\InfoCert\Top\OnboardingService\StructType\Keyword_signature_fields $keyword_signature_fields = null)
    {
        $this->keyword_signature_fields = $this->{'keyword-signature-fields'} = $keyword_signature_fields;
        return $this;
    }
    /**
     * Get content value
     * @return \InfoCert\Top\OnboardingService\StructType\Content|null
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param \InfoCert\Top\OnboardingService\StructType\Content $content
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info
     */
    public function setContent(\InfoCert\Top\OnboardingService\StructType\Content $content = null)
    {
        $this->content = $content;
        return $this;
    }
    /**
     * Get additional_data value
     * @return \InfoCert\Top\OnboardingService\StructType\Properties|null
     */
    public function getAdditional_data()
    {
        return $this->{'additional-data'};
    }
    /**
     * Set additional_data value
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info
     */
    public function setAdditional_data(\InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this->additional_data = $this->{'additional-data'} = $additional_data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info
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
