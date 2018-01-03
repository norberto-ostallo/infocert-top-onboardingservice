<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for documents-info StructType
 * @subpackage Structs
 */
class Documents_info extends AbstractStructBase
{
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Document_info[]
     */
    public $document;
    /**
     * Constructor method for documents-info
     * @uses Documents_info::setDocument()
     * @param \InfoCert\Top\OnboardingService\StructType\Document_info[] $document
     */
    public function __construct(array $document = array())
    {
        $this
            ->setDocument($document);
    }
    /**
     * Get document value
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info[]|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Document_info[] $document
     * @return \InfoCert\Top\OnboardingService\StructType\Documents_info
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $documents_infoDocumentItem) {
            // validation for constraint: itemType
            if (!$documents_infoDocumentItem instanceof \InfoCert\Top\OnboardingService\StructType\Document_info) {
                throw new \InvalidArgumentException(sprintf('The document property can only contain items of \InfoCert\Top\OnboardingService\StructType\Document_info, "%s" given', is_object($documents_infoDocumentItem) ? get_class($documents_infoDocumentItem) : gettype($documents_infoDocumentItem)), __LINE__);
            }
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Add item to document value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Document_info $item
     * @return \InfoCert\Top\OnboardingService\StructType\Documents_info
     */
    public function addToDocument(\InfoCert\Top\OnboardingService\StructType\Document_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Document_info) {
            throw new \InvalidArgumentException(sprintf('The document property can only contain items of \InfoCert\Top\OnboardingService\StructType\Document_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->document[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Documents_info
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
