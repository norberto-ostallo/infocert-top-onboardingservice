<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addDocumentsExResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:addDocumentsExResponse
 * @subpackage Structs
 */
class AddDocumentsExResponse extends AbstractStructBase
{
    /**
     * The documents_info
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Documents_info
     */
    public $documents_info;
    /**
     * Constructor method for addDocumentsExResponse
     * @uses AddDocumentsExResponse::setDocuments_info()
     * @param \InfoCert\Top\OnboardingService\StructType\Documents_info $documents_info
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Documents_info $documents_info = null)
    {
        $this
            ->setDocuments_info($documents_info);
    }
    /**
     * Get documents_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Documents_info|null
     */
    public function getDocuments_info()
    {
        return $this->{'documents-info'};
    }
    /**
     * Set documents_info value
     * @param \InfoCert\Top\OnboardingService\StructType\Documents_info $documents_info
     * @return \InfoCert\Top\OnboardingService\StructType\AddDocumentsExResponse
     */
    public function setDocuments_info(\InfoCert\Top\OnboardingService\StructType\Documents_info $documents_info = null)
    {
        $this->documents_info = $this->{'documents-info'} = $documents_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\AddDocumentsExResponse
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
