<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for identity-assertion StructType
 * Meta informations extracted from the WSDL
 * - type: tns:identity-assertion
 * @subpackage Structs
 */
class Identity_assertion extends Legal_id
{
    /**
     * The identity_assertion_type
     * Meta informations extracted from the WSDL
     * - ref: tns:identity-assertion-type
     * - use: required
     * @var string
     */
    public $identity_assertion_type;
    /**
     * The identified
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $identified;
    /**
     * The assertion_date
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $assertion_date;
    /**
     * The person_data_modified
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $person_data_modified;
    /**
     * The claimer
     * @var \InfoCert\Top\OnboardingService\StructType\Claimer
     */
    public $claimer;
    /**
     * The person
     * Meta informations extracted from the WSDL
     * - ref: ns1:person
     * @var \InfoCert\Top\OnboardingService\StructType\Person
     */
    public $person;
    /**
     * The external_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $external_id;
    /**
     * The statements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \InfoCert\Top\OnboardingService\StructType\Statements
     */
    public $statements;
    /**
     * Constructor method for identity-assertion
     * @uses Identity_assertion::setIdentity_assertion_type()
     * @uses Identity_assertion::setIdentified()
     * @uses Identity_assertion::setAssertion_date()
     * @uses Identity_assertion::setPerson_data_modified()
     * @uses Identity_assertion::setClaimer()
     * @uses Identity_assertion::setPerson()
     * @uses Identity_assertion::setExternal_id()
     * @uses Identity_assertion::setStatements()
     * @param string $identity_assertion_type
     * @param bool $identified
     * @param string $assertion_date
     * @param bool $person_data_modified
     * @param \InfoCert\Top\OnboardingService\StructType\Claimer $claimer
     * @param \InfoCert\Top\OnboardingService\StructType\Person $person
     * @param string $external_id
     * @param \InfoCert\Top\OnboardingService\StructType\Statements $statements
     */
    public function __construct($identity_assertion_type = null, $identified = null, $assertion_date = null, $person_data_modified = null, \InfoCert\Top\OnboardingService\StructType\Claimer $claimer = null, \InfoCert\Top\OnboardingService\StructType\Person $person = null, $external_id = null, \InfoCert\Top\OnboardingService\StructType\Statements $statements = null)
    {
        $this
            ->setIdentity_assertion_type($identity_assertion_type)
            ->setIdentified($identified)
            ->setAssertion_date($assertion_date)
            ->setPerson_data_modified($person_data_modified)
            ->setClaimer($claimer)
            ->setPerson($person)
            ->setExternal_id($external_id)
            ->setStatements($statements);
    }
    /**
     * Get identity_assertion_type value
     * @return string
     */
    public function getIdentity_assertion_type()
    {
        return $this->{'identity-assertion-type'};
    }
    /**
     * Set identity_assertion_type value
     * @uses \InfoCert\Top\OnboardingService\EnumType\Modalita_riconoscimento::valueIsValid()
     * @uses \InfoCert\Top\OnboardingService\EnumType\Modalita_riconoscimento::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $identity_assertion_type
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
     */
    public function setIdentity_assertion_type($identity_assertion_type = null)
    {
        // validation for constraint: enumeration
        if (!\InfoCert\Top\OnboardingService\EnumType\Modalita_riconoscimento::valueIsValid($identity_assertion_type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $identity_assertion_type, implode(', ', \InfoCert\Top\OnboardingService\EnumType\Modalita_riconoscimento::getValidValues())), __LINE__);
        }
        $this->identity_assertion_type = $this->{'identity-assertion-type'} = $identity_assertion_type;
        return $this;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
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
     * Get assertion_date value
     * @return string
     */
    public function getAssertion_date()
    {
        return $this->{'assertion-date'};
    }
    /**
     * Set assertion_date value
     * @param string $assertion_date
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
     */
    public function setAssertion_date($assertion_date = null)
    {
        // validation for constraint: string
        if (!is_null($assertion_date) && !is_string($assertion_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($assertion_date)), __LINE__);
        }
        $this->assertion_date = $this->{'assertion-date'} = $assertion_date;
        return $this;
    }
    /**
     * Get person_data_modified value
     * @return bool
     */
    public function getPerson_data_modified()
    {
        return $this->{'person-data-modified'};
    }
    /**
     * Set person_data_modified value
     * @param bool $person_data_modified
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
     */
    public function setPerson_data_modified($person_data_modified = null)
    {
        // validation for constraint: boolean
        if (!is_null($person_data_modified) && !is_bool($person_data_modified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($person_data_modified)), __LINE__);
        }
        $this->person_data_modified = $this->{'person-data-modified'} = $person_data_modified;
        return $this;
    }
    /**
     * Get claimer value
     * @return \InfoCert\Top\OnboardingService\StructType\Claimer|null
     */
    public function getClaimer()
    {
        return $this->claimer;
    }
    /**
     * Set claimer value
     * @param \InfoCert\Top\OnboardingService\StructType\Claimer $claimer
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
     */
    public function setClaimer(\InfoCert\Top\OnboardingService\StructType\Claimer $claimer = null)
    {
        $this->claimer = $claimer;
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
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
     */
    public function setPerson(\InfoCert\Top\OnboardingService\StructType\Person $person = null)
    {
        $this->person = $person;
        return $this;
    }
    /**
     * Get external_id value
     * @return string|null
     */
    public function getExternal_id()
    {
        return $this->{'external-id'};
    }
    /**
     * Set external_id value
     * @param string $external_id
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
     */
    public function setExternal_id($external_id = null)
    {
        // validation for constraint: string
        if (!is_null($external_id) && !is_string($external_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($external_id)), __LINE__);
        }
        $this->external_id = $this->{'external-id'} = $external_id;
        return $this;
    }
    /**
     * Get statements value
     * @return \InfoCert\Top\OnboardingService\StructType\Statements|null
     */
    public function getStatements()
    {
        return $this->statements;
    }
    /**
     * Set statements value
     * @param \InfoCert\Top\OnboardingService\StructType\Statements $statements
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
     */
    public function setStatements(\InfoCert\Top\OnboardingService\StructType\Statements $statements = null)
    {
        $this->statements = $statements;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Identity_assertion
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
