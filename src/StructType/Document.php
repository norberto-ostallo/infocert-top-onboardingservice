<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for document StructType
 * @subpackage Structs
 */
class Document extends AbstractStructBase
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
     * The policy
     * @var \InfoCert\Top\OnboardingService\StructType\Document_policy
     */
    public $policy;
    /**
     * The signer_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $signer_id;
    /**
     * The content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Content
     */
    public $content;
    /**
     * The composition_policy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Composition_policy
     */
    public $composition_policy;
    /**
     * The signature_policy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Signature_policy
     */
    public $signature_policy;
    /**
     * The archiving_policy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Archiving_policy
     */
    public $archiving_policy;
    /**
     * The additional_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public $additional_data;
    /**
     * The graph_signature_document_info
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public $graph_signature_document_info;
    /**
     * Constructor method for document
     * @uses Document::setId()
     * @uses Document::setType()
     * @uses Document::setPolicy()
     * @uses Document::setSigner_id()
     * @uses Document::setContent()
     * @uses Document::setComposition_policy()
     * @uses Document::setSignature_policy()
     * @uses Document::setArchiving_policy()
     * @uses Document::setAdditional_data()
     * @uses Document::setGraph_signature_document_info()
     * @param string $id
     * @param string $type
     * @param \InfoCert\Top\OnboardingService\StructType\Document_policy $policy
     * @param string $signer_id
     * @param \InfoCert\Top\OnboardingService\StructType\Content $content
     * @param \InfoCert\Top\OnboardingService\StructType\Composition_policy $composition_policy
     * @param \InfoCert\Top\OnboardingService\StructType\Signature_policy $signature_policy
     * @param \InfoCert\Top\OnboardingService\StructType\Archiving_policy $archiving_policy
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     * @param \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info $graph_signature_document_info
     */
    public function __construct($id = null, $type = null, \InfoCert\Top\OnboardingService\StructType\Document_policy $policy = null, $signer_id = null, \InfoCert\Top\OnboardingService\StructType\Content $content = null, \InfoCert\Top\OnboardingService\StructType\Composition_policy $composition_policy = null, \InfoCert\Top\OnboardingService\StructType\Signature_policy $signature_policy = null, \InfoCert\Top\OnboardingService\StructType\Archiving_policy $archiving_policy = null, \InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null, \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info $graph_signature_document_info = null)
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setPolicy($policy)
            ->setSigner_id($signer_id)
            ->setContent($content)
            ->setComposition_policy($composition_policy)
            ->setSignature_policy($signature_policy)
            ->setArchiving_policy($archiving_policy)
            ->setAdditional_data($additional_data)
            ->setGraph_signature_document_info($graph_signature_document_info);
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
     * @return \InfoCert\Top\OnboardingService\StructType\Document
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
     * @return \InfoCert\Top\OnboardingService\StructType\Document
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
     * Get policy value
     * @return \InfoCert\Top\OnboardingService\StructType\Document_policy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }
    /**
     * Set policy value
     * @param \InfoCert\Top\OnboardingService\StructType\Document_policy $policy
     * @return \InfoCert\Top\OnboardingService\StructType\Document
     */
    public function setPolicy(\InfoCert\Top\OnboardingService\StructType\Document_policy $policy = null)
    {
        $this->policy = $policy;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Document
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
     * @return \InfoCert\Top\OnboardingService\StructType\Document
     */
    public function setContent(\InfoCert\Top\OnboardingService\StructType\Content $content = null)
    {
        $this->content = $content;
        return $this;
    }
    /**
     * Get composition_policy value
     * @return \InfoCert\Top\OnboardingService\StructType\Composition_policy|null
     */
    public function getComposition_policy()
    {
        return $this->{'composition-policy'};
    }
    /**
     * Set composition_policy value
     * @param \InfoCert\Top\OnboardingService\StructType\Composition_policy $composition_policy
     * @return \InfoCert\Top\OnboardingService\StructType\Document
     */
    public function setComposition_policy(\InfoCert\Top\OnboardingService\StructType\Composition_policy $composition_policy = null)
    {
        $this->composition_policy = $this->{'composition-policy'} = $composition_policy;
        return $this;
    }
    /**
     * Get signature_policy value
     * @return \InfoCert\Top\OnboardingService\StructType\Signature_policy|null
     */
    public function getSignature_policy()
    {
        return $this->{'signature-policy'};
    }
    /**
     * Set signature_policy value
     * @param \InfoCert\Top\OnboardingService\StructType\Signature_policy $signature_policy
     * @return \InfoCert\Top\OnboardingService\StructType\Document
     */
    public function setSignature_policy(\InfoCert\Top\OnboardingService\StructType\Signature_policy $signature_policy = null)
    {
        $this->signature_policy = $this->{'signature-policy'} = $signature_policy;
        return $this;
    }
    /**
     * Get archiving_policy value
     * @return \InfoCert\Top\OnboardingService\StructType\Archiving_policy|null
     */
    public function getArchiving_policy()
    {
        return $this->{'archiving-policy'};
    }
    /**
     * Set archiving_policy value
     * @param \InfoCert\Top\OnboardingService\StructType\Archiving_policy $archiving_policy
     * @return \InfoCert\Top\OnboardingService\StructType\Document
     */
    public function setArchiving_policy(\InfoCert\Top\OnboardingService\StructType\Archiving_policy $archiving_policy = null)
    {
        $this->archiving_policy = $this->{'archiving-policy'} = $archiving_policy;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Document
     */
    public function setAdditional_data(\InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this->additional_data = $this->{'additional-data'} = $additional_data;
        return $this;
    }
    /**
     * Get graph_signature_document_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info|null
     */
    public function getGraph_signature_document_info()
    {
        return $this->{'graph-signature-document-info'};
    }
    /**
     * Set graph_signature_document_info value
     * @param \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info $graph_signature_document_info
     * @return \InfoCert\Top\OnboardingService\StructType\Document
     */
    public function setGraph_signature_document_info(\InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info $graph_signature_document_info = null)
    {
        $this->graph_signature_document_info = $this->{'graph-signature-document-info'} = $graph_signature_document_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Document
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
