<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signer-info StructType
 * @subpackage Structs
 */
class Signer_info extends AbstractStructBase
{
    /**
     * The signer_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $signer_id;
    /**
     * The identified
     * @var bool
     */
    public $identified;
    /**
     * The personal_data_updated
     * @var bool
     */
    public $personal_data_updated;
    /**
     * The address_updated
     * @var bool
     */
    public $address_updated;
    /**
     * The identity_document_info_updated
     * @var bool
     */
    public $identity_document_info_updated;
    /**
     * The contact_info_updated
     * @var bool
     */
    public $contact_info_updated;
    /**
     * The person
     * @var \InfoCert\Top\OnboardingService\StructType\Person
     */
    public $person;
    /**
     * The clauses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Clauses
     */
    public $clauses;
    /**
     * The certificate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Certificate_info
     */
    public $certificate;
    /**
     * The additional_data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Properties
     */
    public $additional_data;
    /**
     * Constructor method for signer-info
     * @uses Signer_info::setSigner_id()
     * @uses Signer_info::setIdentified()
     * @uses Signer_info::setPersonal_data_updated()
     * @uses Signer_info::setAddress_updated()
     * @uses Signer_info::setIdentity_document_info_updated()
     * @uses Signer_info::setContact_info_updated()
     * @uses Signer_info::setPerson()
     * @uses Signer_info::setClauses()
     * @uses Signer_info::setCertificate()
     * @uses Signer_info::setAdditional_data()
     * @param string $signer_id
     * @param bool $identified
     * @param bool $personal_data_updated
     * @param bool $address_updated
     * @param bool $identity_document_info_updated
     * @param bool $contact_info_updated
     * @param \InfoCert\Top\OnboardingService\StructType\Person $person
     * @param \InfoCert\Top\OnboardingService\StructType\Clauses $clauses
     * @param \InfoCert\Top\OnboardingService\StructType\Certificate_info $certificate
     * @param \InfoCert\Top\OnboardingService\StructType\Properties $additional_data
     */
    public function __construct($signer_id = null, $identified = null, $personal_data_updated = null, $address_updated = null, $identity_document_info_updated = null, $contact_info_updated = null, \InfoCert\Top\OnboardingService\StructType\Person $person = null, \InfoCert\Top\OnboardingService\StructType\Clauses $clauses = null, \InfoCert\Top\OnboardingService\StructType\Certificate_info $certificate = null, \InfoCert\Top\OnboardingService\StructType\Properties $additional_data = null)
    {
        $this
            ->setSigner_id($signer_id)
            ->setIdentified($identified)
            ->setPersonal_data_updated($personal_data_updated)
            ->setAddress_updated($address_updated)
            ->setIdentity_document_info_updated($identity_document_info_updated)
            ->setContact_info_updated($contact_info_updated)
            ->setPerson($person)
            ->setClauses($clauses)
            ->setCertificate($certificate)
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
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
     * Get identified value
     * @return bool|null
     */
    public function getIdentified()
    {
        return $this->identified;
    }
    /**
     * Set identified value
     * @param bool $identified
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
     */
    public function setIdentified($identified = null)
    {
        // validation for constraint: boolean
        if (!is_null($identified) && !is_bool($identified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($identified)), __LINE__);
        }
        $this->identified = $identified;
        return $this;
    }
    /**
     * Get personal_data_updated value
     * @return bool|null
     */
    public function getPersonal_data_updated()
    {
        return $this->{'personal-data-updated'};
    }
    /**
     * Set personal_data_updated value
     * @param bool $personal_data_updated
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
     */
    public function setPersonal_data_updated($personal_data_updated = null)
    {
        // validation for constraint: boolean
        if (!is_null($personal_data_updated) && !is_bool($personal_data_updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($personal_data_updated)), __LINE__);
        }
        $this->personal_data_updated = $this->{'personal-data-updated'} = $personal_data_updated;
        return $this;
    }
    /**
     * Get address_updated value
     * @return bool|null
     */
    public function getAddress_updated()
    {
        return $this->{'address-updated'};
    }
    /**
     * Set address_updated value
     * @param bool $address_updated
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
     */
    public function setAddress_updated($address_updated = null)
    {
        // validation for constraint: boolean
        if (!is_null($address_updated) && !is_bool($address_updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($address_updated)), __LINE__);
        }
        $this->address_updated = $this->{'address-updated'} = $address_updated;
        return $this;
    }
    /**
     * Get identity_document_info_updated value
     * @return bool|null
     */
    public function getIdentity_document_info_updated()
    {
        return $this->{'identity-document-info-updated'};
    }
    /**
     * Set identity_document_info_updated value
     * @param bool $identity_document_info_updated
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
     */
    public function setIdentity_document_info_updated($identity_document_info_updated = null)
    {
        // validation for constraint: boolean
        if (!is_null($identity_document_info_updated) && !is_bool($identity_document_info_updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($identity_document_info_updated)), __LINE__);
        }
        $this->identity_document_info_updated = $this->{'identity-document-info-updated'} = $identity_document_info_updated;
        return $this;
    }
    /**
     * Get contact_info_updated value
     * @return bool|null
     */
    public function getContact_info_updated()
    {
        return $this->{'contact-info-updated'};
    }
    /**
     * Set contact_info_updated value
     * @param bool $contact_info_updated
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
     */
    public function setContact_info_updated($contact_info_updated = null)
    {
        // validation for constraint: boolean
        if (!is_null($contact_info_updated) && !is_bool($contact_info_updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($contact_info_updated)), __LINE__);
        }
        $this->contact_info_updated = $this->{'contact-info-updated'} = $contact_info_updated;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
     */
    public function setPerson(\InfoCert\Top\OnboardingService\StructType\Person $person = null)
    {
        $this->person = $person;
        return $this;
    }
    /**
     * Get clauses value
     * @return \InfoCert\Top\OnboardingService\StructType\Clauses|null
     */
    public function getClauses()
    {
        return $this->clauses;
    }
    /**
     * Set clauses value
     * @param \InfoCert\Top\OnboardingService\StructType\Clauses $clauses
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
     */
    public function setClauses(\InfoCert\Top\OnboardingService\StructType\Clauses $clauses = null)
    {
        $this->clauses = $clauses;
        return $this;
    }
    /**
     * Get certificate value
     * @return \InfoCert\Top\OnboardingService\StructType\Certificate_info|null
     */
    public function getCertificate()
    {
        return $this->certificate;
    }
    /**
     * Set certificate value
     * @param \InfoCert\Top\OnboardingService\StructType\Certificate_info $certificate
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
     */
    public function setCertificate(\InfoCert\Top\OnboardingService\StructType\Certificate_info $certificate = null)
    {
        $this->certificate = $certificate;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
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
     * @return \InfoCert\Top\OnboardingService\StructType\Signer_info
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
