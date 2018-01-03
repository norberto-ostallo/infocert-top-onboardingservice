<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for person StructType
 * Meta informations extracted from the WSDL
 * - type: tns:person
 * @subpackage Structs
 */
class Person extends AbstractStructBase
{
    /**
     * The identified
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $identified;
    /**
     * The legal_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Legal_id
     */
    public $legal_id;
    /**
     * The personal_data
     * @var \InfoCert\Top\OnboardingService\StructType\Personal_data
     */
    public $personal_data;
    /**
     * The contact_details
     * @var \InfoCert\Top\OnboardingService\StructType\Contact_details
     */
    public $contact_details;
    /**
     * The address
     * @var \InfoCert\Top\OnboardingService\StructType\Address
     */
    public $address;
    /**
     * The identity_document_info
     * @var \InfoCert\Top\OnboardingService\StructType\Identity_document_data
     */
    public $identity_document_info;
    /**
     * Constructor method for person
     * @uses Person::setIdentified()
     * @uses Person::setLegal_id()
     * @uses Person::setPersonal_data()
     * @uses Person::setContact_details()
     * @uses Person::setAddress()
     * @uses Person::setIdentity_document_info()
     * @param bool $identified
     * @param \InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id
     * @param \InfoCert\Top\OnboardingService\StructType\Personal_data $personal_data
     * @param \InfoCert\Top\OnboardingService\StructType\Contact_details $contact_details
     * @param \InfoCert\Top\OnboardingService\StructType\Address $address
     * @param \InfoCert\Top\OnboardingService\StructType\Identity_document_data $identity_document_info
     */
    public function __construct($identified = null, \InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id = null, \InfoCert\Top\OnboardingService\StructType\Personal_data $personal_data = null, \InfoCert\Top\OnboardingService\StructType\Contact_details $contact_details = null, \InfoCert\Top\OnboardingService\StructType\Address $address = null, \InfoCert\Top\OnboardingService\StructType\Identity_document_data $identity_document_info = null)
    {
        $this
            ->setIdentified($identified)
            ->setLegal_id($legal_id)
            ->setPersonal_data($personal_data)
            ->setContact_details($contact_details)
            ->setAddress($address)
            ->setIdentity_document_info($identity_document_info);
    }
    /**
     * Get identified value
     * @return bool
     */
    public function getIdentified()
    {
        return $this->identified;
    }
    /**
     * Set identified value
     * @param bool $identified
     * @return \InfoCert\Top\OnboardingService\StructType\Person
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
     * Get legal_id value
     * @return \InfoCert\Top\OnboardingService\StructType\Legal_id|null
     */
    public function getLegal_id()
    {
        return $this->{'legal-id'};
    }
    /**
     * Set legal_id value
     * @param \InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id
     * @return \InfoCert\Top\OnboardingService\StructType\Person
     */
    public function setLegal_id(\InfoCert\Top\OnboardingService\StructType\Legal_id $legal_id = null)
    {
        $this->legal_id = $this->{'legal-id'} = $legal_id;
        return $this;
    }
    /**
     * Get personal_data value
     * @return \InfoCert\Top\OnboardingService\StructType\Personal_data|null
     */
    public function getPersonal_data()
    {
        return $this->{'personal-data'};
    }
    /**
     * Set personal_data value
     * @param \InfoCert\Top\OnboardingService\StructType\Personal_data $personal_data
     * @return \InfoCert\Top\OnboardingService\StructType\Person
     */
    public function setPersonal_data(\InfoCert\Top\OnboardingService\StructType\Personal_data $personal_data = null)
    {
        $this->personal_data = $this->{'personal-data'} = $personal_data;
        return $this;
    }
    /**
     * Get contact_details value
     * @return \InfoCert\Top\OnboardingService\StructType\Contact_details|null
     */
    public function getContact_details()
    {
        return $this->{'contact-details'};
    }
    /**
     * Set contact_details value
     * @param \InfoCert\Top\OnboardingService\StructType\Contact_details $contact_details
     * @return \InfoCert\Top\OnboardingService\StructType\Person
     */
    public function setContact_details(\InfoCert\Top\OnboardingService\StructType\Contact_details $contact_details = null)
    {
        $this->contact_details = $this->{'contact-details'} = $contact_details;
        return $this;
    }
    /**
     * Get address value
     * @return \InfoCert\Top\OnboardingService\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \InfoCert\Top\OnboardingService\StructType\Address $address
     * @return \InfoCert\Top\OnboardingService\StructType\Person
     */
    public function setAddress(\InfoCert\Top\OnboardingService\StructType\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get identity_document_info value
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_document_data|null
     */
    public function getIdentity_document_info()
    {
        return $this->{'identity-document-info'};
    }
    /**
     * Set identity_document_info value
     * @param \InfoCert\Top\OnboardingService\StructType\Identity_document_data $identity_document_info
     * @return \InfoCert\Top\OnboardingService\StructType\Person
     */
    public function setIdentity_document_info(\InfoCert\Top\OnboardingService\StructType\Identity_document_data $identity_document_info = null)
    {
        $this->identity_document_info = $this->{'identity-document-info'} = $identity_document_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Person
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
