<?php

namespace InfoCert\Top\OnboardingService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for identifications-status StructType
 * @subpackage Structs
 */
class Identifications_status extends AbstractStructBase
{
    /**
     * The identity_assertion_policy
     * @var string
     */
    public $identity_assertion_policy;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The identity_assertion_type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identity_assertion_type;
    /**
     * The reject_reason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reject_reason;
    /**
     * The branch_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $branch_id;
    /**
     * Constructor method for identifications-status
     * @uses Identifications_status::setIdentity_assertion_policy()
     * @uses Identifications_status::setStatus()
     * @uses Identifications_status::setIdentity_assertion_type()
     * @uses Identifications_status::setReject_reason()
     * @uses Identifications_status::setBranch_id()
     * @param string $identity_assertion_policy
     * @param string $status
     * @param string $identity_assertion_type
     * @param string $reject_reason
     * @param string $branch_id
     */
    public function __construct($identity_assertion_policy = null, $status = null, $identity_assertion_type = null, $reject_reason = null, $branch_id = null)
    {
        $this
            ->setIdentity_assertion_policy($identity_assertion_policy)
            ->setStatus($status)
            ->setIdentity_assertion_type($identity_assertion_type)
            ->setReject_reason($reject_reason)
            ->setBranch_id($branch_id);
    }
    /**
     * Get identity_assertion_policy value
     * @return string|null
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
     * @return \InfoCert\Top\OnboardingService\StructType\Identifications_status
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
     * @return \InfoCert\Top\OnboardingService\StructType\Identifications_status
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
     * Get identity_assertion_type value
     * @return string|null
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
     * @return \InfoCert\Top\OnboardingService\StructType\Identifications_status
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
     * Get reject_reason value
     * @return string|null
     */
    public function getReject_reason()
    {
        return $this->{'reject-reason'};
    }
    /**
     * Set reject_reason value
     * @param string $reject_reason
     * @return \InfoCert\Top\OnboardingService\StructType\Identifications_status
     */
    public function setReject_reason($reject_reason = null)
    {
        // validation for constraint: string
        if (!is_null($reject_reason) && !is_string($reject_reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reject_reason)), __LINE__);
        }
        $this->reject_reason = $this->{'reject-reason'} = $reject_reason;
        return $this;
    }
    /**
     * Get branch_id value
     * @return string|null
     */
    public function getBranch_id()
    {
        return $this->{'branch-id'};
    }
    /**
     * Set branch_id value
     * @param string $branch_id
     * @return \InfoCert\Top\OnboardingService\StructType\Identifications_status
     */
    public function setBranch_id($branch_id = null)
    {
        // validation for constraint: string
        if (!is_null($branch_id) && !is_string($branch_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($branch_id)), __LINE__);
        }
        $this->branch_id = $this->{'branch-id'} = $branch_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \InfoCert\Top\OnboardingService\StructType\Identifications_status
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
