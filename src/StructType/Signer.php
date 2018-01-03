<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signer StructType
 * @subpackage Structs
 */
class Signer extends AbstractStructBase
{
    /**
     * The signer_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $signer_id;
    /**
     * The identity_assertion_policy
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $identity_assertion_policy;
    /**
     * The role
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $role;
    /**
     * The person
     * @var \InfoCert\Top\OnboardingService\StructType\Person
     */
    public $person;
    /**
     * The certificate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Certificate
     */
    public $certificate;
    /**
     * The default_redirect_url
     * @var string
     */
    public $default_redirect_url;
    /**
     * The failure_redirect_url
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $failure_redirect_url;
    /**
     * The identity_assertion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Content
     */
    public $identity_assertion;
    /**
     * The authorization_assertion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Content
     */
    public $authorization_assertion;
    /**
     * The additional_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public $additional_data;
    /**
     * Constructor method for signer
     * @uses Signer::setSigner_id()
     * @uses Signer::setIdentity_assertion_policy()
     * @uses Signer::setRole()
     * @uses Signer::setPerson()
     * @uses Signer::setCertificate()
     * @uses Signer::setDefault_redirect_url()
     * @uses Signer::setFailure_redirect_url()
     * @uses Signer::setIdentity_assertion()
     * @uses Signer::setAuthorization_assertion()
     * @uses Signer::setAdditional_data()
     * @param string $signer_id
     * @param string $identity_assertion_policy
     * @param string $role
     * @param \InfoCert\Top\OnboardingService\StructType\Person $person
     * @param \InfoCert\Top\OnboardingService\StructType\Certificate $certificate
     * @param string $default_redirect_url
     * @param string $failure_redirect_url
     * @param \InfoCert\Top\OnboardingService\StructType\Content $identity_assertion
     * @param \InfoCert\Top\OnboardingService\StructType\Content $authorization_assertion
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     */
    public function __construct($signer_id = null, $identity_assertion_policy = null, $role = null, \InfoCert\Top\OnboardingService\StructType\Person $person = null, \InfoCert\Top\OnboardingService\StructType\Certificate $certificate = null, $default_redirect_url = null, $failure_redirect_url = null, \InfoCert\Top\OnboardingService\StructType\Content $identity_assertion = null, \InfoCert\Top\OnboardingService\StructType\Content $authorization_assertion = null, \InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this
            ->setSigner_id($signer_id)
            ->setIdentity_assertion_policy($identity_assertion_policy)
            ->setRole($role)
            ->setPerson($person)
            ->setCertificate($certificate)
            ->setDefault_redirect_url($default_redirect_url)
            ->setFailure_redirect_url($failure_redirect_url)
            ->setIdentity_assertion($identity_assertion)
            ->setAuthorization_assertion($authorization_assertion)
            ->setAdditional_data($additional_data);
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
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
     * Get identity_assertion_policy value
     * @return string
     */
    public function getIdentity_assertion_policy()
    {
        return $this->{'identity-assertion-policy'};
    }
    /**
     * Set identity_assertion_policy value
     * @uses \InfoCert\Top\OnboardingService\EnumType\Identity_assertion_policy::valueIsValid()
     * @uses \InfoCert\Top\OnboardingService\EnumType\Identity_assertion_policy::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $identity_assertion_policy
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public function setIdentity_assertion_policy($identity_assertion_policy = null)
    {
        // validation for constraint: enumeration
        if (!\InfoCert\Top\OnboardingService\EnumType\Identity_assertion_policy::valueIsValid($identity_assertion_policy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $identity_assertion_policy, implode(', ', \InfoCert\Top\OnboardingService\EnumType\Identity_assertion_policy::getValidValues())), __LINE__);
        }
        $this->identity_assertion_policy = $this->{'identity-assertion-policy'} = $identity_assertion_policy;
        return $this;
    }
    /**
     * Get role value
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public function setRole($role = null)
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($role)), __LINE__);
        }
        $this->role = $role;
        return $this;
    }
    /**
     * Get person value
     * @return \InfoCert\Top\OnboardingService\StructType\Person|null
     */
    public function getPerson()
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \InfoCert\Top\OnboardingService\StructType\Person $person
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public function setPerson(\InfoCert\Top\OnboardingService\StructType\Person $person = null)
    {
        $this->person = $person;
        return $this;
    }
    /**
     * Get certificate value
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate|null
     */
    public function getCertificate()
    {
        return $this->certificate;
    }
    /**
     * Set certificate value
     * @param \InfoCert\Top\OnboardingService\StructType\Certificate $certificate
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public function setCertificate(\InfoCert\Top\OnboardingService\StructType\Certificate $certificate = null)
    {
        $this->certificate = $certificate;
        return $this;
    }
    /**
     * Get default_redirect_url value
     * @return string|null
     */
    public function getDefault_redirect_url()
    {
        return $this->{'default-redirect-url'};
    }
    /**
     * Set default_redirect_url value
     * @param string $default_redirect_url
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public function setDefault_redirect_url($default_redirect_url = null)
    {
        // validation for constraint: string
        if (!is_null($default_redirect_url) && !is_string($default_redirect_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($default_redirect_url)), __LINE__);
        }
        $this->default_redirect_url = $this->{'default-redirect-url'} = $default_redirect_url;
        return $this;
    }
    /**
     * Get failure_redirect_url value
     * @return string|null
     */
    public function getFailure_redirect_url()
    {
        return $this->{'failure-redirect-url'};
    }
    /**
     * Set failure_redirect_url value
     * @param string $failure_redirect_url
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public function setFailure_redirect_url($failure_redirect_url = null)
    {
        // validation for constraint: string
        if (!is_null($failure_redirect_url) && !is_string($failure_redirect_url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($failure_redirect_url)), __LINE__);
        }
        $this->failure_redirect_url = $this->{'failure-redirect-url'} = $failure_redirect_url;
        return $this;
    }
    /**
     * Get identity_assertion value
     * @return \InfoCert\Top\OnboardingService\StructType\Content|null
     */
    public function getIdentity_assertion()
    {
        return $this->{'identity-assertion'};
    }
    /**
     * Set identity_assertion value
     * @param \InfoCert\Top\OnboardingService\StructType\Content $identity_assertion
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public function setIdentity_assertion(\InfoCert\Top\OnboardingService\StructType\Content $identity_assertion = null)
    {
        $this->identity_assertion = $this->{'identity-assertion'} = $identity_assertion;
        return $this;
    }
    /**
     * Get authorization_assertion value
     * @return \InfoCert\Top\OnboardingService\StructType\Content|null
     */
    public function getAuthorization_assertion()
    {
        return $this->{'authorization-assertion'};
    }
    /**
     * Set authorization_assertion value
     * @param \InfoCert\Top\OnboardingService\StructType\Content $authorization_assertion
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
     */
    public function setAuthorization_assertion(\InfoCert\Top\OnboardingService\StructType\Content $authorization_assertion = null)
    {
        $this->authorization_assertion = $this->{'authorization-assertion'} = $authorization_assertion;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer
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
