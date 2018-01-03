<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for documents StructType
 * @subpackage Structs
 */
class Documents extends AbstractStructBase
{
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Document[]
     */
    public $document;
    /**
     * The documents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \InfoCert\Top\OnboardingService\StructType\Document_info[]
     */
    public $documents;
    /**
     * Constructor method for documents
     * @uses Documents::setDocument()
     * @uses Documents::setDocuments()
     * @param \InfoCert\Top\OnboardingService\StructType\Document[] $document
     * @param \InfoCert\Top\OnboardingService\StructType\Document_info[] $documents
     */
    public function __construct(array $document = array(), array $documents = array())
    {
        $this
            ->setDocument($document)
            ->setDocuments($documents);
    }
    /**
     * Get document value
     * @return \InfoCert\Top\OnboardingService\StructType\Document[]|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Document[] $document
     * @return \InfoCert\Top\OnboardingService\StructType\Documents
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $documentsDocumentItem) {
            // validation for constraint: itemType
            if (!$documentsDocumentItem instanceof \InfoCert\Top\OnboardingService\StructType\Document) {
                throw new \InvalidArgumentException(sprintf('The document property can only contain items of \InfoCert\Top\OnboardingService\StructType\Document, "%s" given', is_object($documentsDocumentItem) ? get_class($documentsDocumentItem) : gettype($documentsDocumentItem)), __LINE__);
            }
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Add item to document value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Document $item
     * @return \InfoCert\Top\OnboardingService\StructType\Documents
     */
    public function addToDocument(\InfoCert\Top\OnboardingService\StructType\Document $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Document) {
            throw new \InvalidArgumentException(sprintf('The document property can only contain items of \InfoCert\Top\OnboardingService\StructType\Document, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->document[] = $item;
        return $this;
    }
    /**
     * Get documents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \InfoCert\Top\OnboardingService\StructType\Document_info[]|null
     */
    public function getDocuments()
    {
        return isset($this->documents) ? $this->documents : null;
    }
    /**
     * Set documents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Document_info[] $documents
     * @return \InfoCert\Top\OnboardingService\StructType\Documents
     */
    public function setDocuments(array $documents = array())
    {
        foreach ($documents as $documentsDocumentsItem) {
            // validation for constraint: itemType
            if (!$documentsDocumentsItem instanceof \InfoCert\Top\OnboardingService\StructType\Document_info) {
                throw new \InvalidArgumentException(sprintf('The documents property can only contain items of \InfoCert\Top\OnboardingService\StructType\Document_info, "%s" given', is_object($documentsDocumentsItem) ? get_class($documentsDocumentsItem) : gettype($documentsDocumentsItem)), __LINE__);
            }
        }
        if (is_null($documents) || (is_array($documents) && empty($documents))) {
            unset($this->documents);
        } else {
            $this->documents = $documents;
        }
        return $this;
    }
    /**
     * Add item to documents value
     * @throws \InvalidArgumentException
     * @param \InfoCert\Top\OnboardingService\StructType\Document_info $item
     * @return \InfoCert\Top\OnboardingService\StructType\Documents
     */
    public function addToDocuments(\InfoCert\Top\OnboardingService\StructType\Document_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \InfoCert\Top\OnboardingService\StructType\Document_info) {
            throw new \InvalidArgumentException(sprintf('The documents property can only contain items of \InfoCert\Top\OnboardingService\StructType\Document_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->documents[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Documents
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
