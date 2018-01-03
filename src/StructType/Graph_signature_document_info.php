<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for graph-signature-document-info StructType
 * @subpackage Structs
 */
class Graph_signature_document_info extends AbstractStructBase
{
    /**
     * The graph_signature_fields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Graph_signature_fields
     */
    public $graph_signature_fields;
    /**
     * The sign_document_id
     * @var string
     */
    public $sign_document_id;
    /**
     * The token
     * @var string
     */
    public $token;
    /**
     * The content
     * @var string
     */
    public $content;
    /**
     * The mime_type
     * @var string
     */
    public $mime_type;
    /**
     * The content_url
     * @var string
     */
    public $content_url;
    /**
     * The redirect_url
     * @var string
     */
    public $redirect_url;
    /**
     * The callback_url
     * @var string
     */
    public $callback_url;
    /**
     * The server_process
     * @var bool
     */
    public $server_process;
    /**
     * The ignore_build_signature_structure
     * @var bool
     */
    public $ignore_build_signature_structure;
    /**
     * The outcome
     * @var bool
     */
    public $outcome;
    /**
     * The enforce_closure
     * @var bool
     */
    public $enforce_closure;
    /**
     * Constructor method for graph-signature-document-info
     * @uses Graph_signature_document_info::setGraph_signature_fields()
     * @uses Graph_signature_document_info::setSign_document_id()
     * @uses Graph_signature_document_info::setToken()
     * @uses Graph_signature_document_info::setContent()
     * @uses Graph_signature_document_info::setMime_type()
     * @uses Graph_signature_document_info::setContent_url()
     * @uses Graph_signature_document_info::setRedirect_url()
     * @uses Graph_signature_document_info::setCallback_url()
     * @uses Graph_signature_document_info::setServer_process()
     * @uses Graph_signature_document_info::setIgnore_build_signature_structure()
     * @uses Graph_signature_document_info::setOutcome()
     * @uses Graph_signature_document_info::setEnforce_closure()
     * @param \InfoCert\Top\OnboardingService\StructType\Graph_signature_fields $graph_signature_fields
     * @param string $sign_document_id
     * @param string $token
     * @param string $content
     * @param string $mime_type
     * @param string $content_url
     * @param string $redirect_url
     * @param string $callback_url
     * @param bool $server_process
     * @param bool $ignore_build_signature_structure
     * @param bool $outcome
     * @param bool $enforce_closure
     */
    public function __construct(\InfoCert\Top\OnboardingService\StructType\Graph_signature_fields $graph_signature_fields = null, $sign_document_id = null, $token = null, $content = null, $mime_type = null, $content_url = null, $redirect_url = null, $callback_url = null, $server_process = null, $ignore_build_signature_structure = null, $outcome = null, $enforce_closure = null)
    {
        $this
            ->setGraph_signature_fields($graph_signature_fields)
            ->setSign_document_id($sign_document_id)
            ->setToken($token)
            ->setContent($content)
            ->setMime_type($mime_type)
            ->setContent_url($content_url)
            ->setRedirect_url($redirect_url)
            ->setCallback_url($callback_url)
            ->setServer_process($server_process)
            ->setIgnore_build_signature_structure($ignore_build_signature_structure)
            ->setOutcome($outcome)
            ->setEnforce_closure($enforce_closure);
    }
    /**
     * Get graph_signature_fields value
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_fields|null
     */
    public function getGraph_signature_fields()
    {
        return $this->{'graph-signature-fields'};
    }
    /**
     * Set graph_signature_fields value
     * @param \InfoCert\Top\OnboardingService\StructType\Graph_signature_fields $graph_signature_fields
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setGraph_signature_fields(\InfoCert\Top\OnboardingService\StructType\Graph_signature_fields $graph_signature_fields = null)
    {
        $this->graph_signature_fields = $this->{'graph-signature-fields'} = $graph_signature_fields;
        return $this;
    }
    /**
     * Get sign_document_id value
     * @return string|null
     */
    public function getSign_document_id()
    {
        return $this->{'sign-document-id'};
    }
    /**
     * Set sign_document_id value
     * @param string $sign_document_id
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setSign_document_id($sign_document_id = null)
    {
        // validation for constraint: string
        if (!is_null($sign_document_id) && !is_string($sign_document_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sign_document_id)), __LINE__);
        }
        $this->sign_document_id = $this->{'sign-document-id'} = $sign_document_id;
        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->token = $token;
        return $this;
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->content = $content;
        return $this;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
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
     * Get content_url value
     * @return string|null
     */
    public function getContent_url()
    {
        return $this->{'content-url'};
    }
    /**
     * Set content_url value
     * @param string $content_url
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setContent_url($content_url = null)
    {
        // validation for constraint: string
        if (!is_null($content_url) && !is_string($content_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content_url)), __LINE__);
        }
        $this->content_url = $this->{'content-url'} = $content_url;
        return $this;
    }
    /**
     * Get redirect_url value
     * @return string|null
     */
    public function getRedirect_url()
    {
        return $this->{'redirect-url'};
    }
    /**
     * Set redirect_url value
     * @param string $redirect_url
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setRedirect_url($redirect_url = null)
    {
        // validation for constraint: string
        if (!is_null($redirect_url) && !is_string($redirect_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirect_url)), __LINE__);
        }
        $this->redirect_url = $this->{'redirect-url'} = $redirect_url;
        return $this;
    }
    /**
     * Get callback_url value
     * @return string|null
     */
    public function getCallback_url()
    {
        return $this->{'callback-url'};
    }
    /**
     * Set callback_url value
     * @param string $callback_url
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setCallback_url($callback_url = null)
    {
        // validation for constraint: string
        if (!is_null($callback_url) && !is_string($callback_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callback_url)), __LINE__);
        }
        $this->callback_url = $this->{'callback-url'} = $callback_url;
        return $this;
    }
    /**
     * Get server_process value
     * @return bool|null
     */
    public function getServer_process()
    {
        return $this->{'server-process'};
    }
    /**
     * Set server_process value
     * @param bool $server_process
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setServer_process($server_process = null)
    {
        // validation for constraint: boolean
        if (!is_null($server_process) && !is_bool($server_process)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($server_process)), __LINE__);
        }
        $this->server_process = $this->{'server-process'} = $server_process;
        return $this;
    }
    /**
     * Get ignore_build_signature_structure value
     * @return bool|null
     */
    public function getIgnore_build_signature_structure()
    {
        return $this->{'ignore-build-signature-structure'};
    }
    /**
     * Set ignore_build_signature_structure value
     * @param bool $ignore_build_signature_structure
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setIgnore_build_signature_structure($ignore_build_signature_structure = null)
    {
        // validation for constraint: boolean
        if (!is_null($ignore_build_signature_structure) && !is_bool($ignore_build_signature_structure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ignore_build_signature_structure)), __LINE__);
        }
        $this->ignore_build_signature_structure = $this->{'ignore-build-signature-structure'} = $ignore_build_signature_structure;
        return $this;
    }
    /**
     * Get outcome value
     * @return bool|null
     */
    public function getOutcome()
    {
        return $this->outcome;
    }
    /**
     * Set outcome value
     * @param bool $outcome
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setOutcome($outcome = null)
    {
        // validation for constraint: boolean
        if (!is_null($outcome) && !is_bool($outcome)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($outcome)), __LINE__);
        }
        $this->outcome = $outcome;
        return $this;
    }
    /**
     * Get enforce_closure value
     * @return bool|null
     */
    public function getEnforce_closure()
    {
        return $this->{'enforce-closure'};
    }
    /**
     * Set enforce_closure value
     * @param bool $enforce_closure
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
     */
    public function setEnforce_closure($enforce_closure = null)
    {
        // validation for constraint: boolean
        if (!is_null($enforce_closure) && !is_bool($enforce_closure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enforce_closure)), __LINE__);
        }
        $this->enforce_closure = $this->{'enforce-closure'} = $enforce_closure;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Graph_signature_document_info
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
